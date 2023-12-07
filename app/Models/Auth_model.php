<?php

namespace App\Models;

use CodeIgniter\Model;
 
use App\Models\User_model;
use Config\Auth as ConfigAuth;



class Auth_model extends Model{

    var $expire_time;
    protected $table = 'users';
    public function __construct() {
        parent::__construct();
        $this->tables = array('users' => 'users');
        $this->user = new User_model();
        $this->authConfigData = new ConfigAuth();
        $this->expire_time =  $this->authConfigData->lockout_time;
        // $this->load->helper('date');
        // // initialize db tables data
        // //initialize data
        // $this->store_salt = $this->config->item('store_salt', 'auth');
        // $this->salt_length = $this->config->item('salt_length', 'auth');
        // // initialize hash method options (Bcrypt)
        // $this->hash_method = $this->config->item('hash_method', 'auth');
        // $this->default_rounds = $this->config->item('default_rounds', 'auth');
        // $this->random_rounds = $this->config->item('random_rounds', 'auth');
        // $this->min_rounds = $this->config->item('min_rounds', 'auth');
        // $this->max_rounds = $this->config->item('max_rounds', 'auth');
        // // load the bcrypt class if needed
        // if ($this->hash_method == 'bcrypt') {
        //     if ($this->random_rounds) {
        //         $rand = rand($this->min_rounds, $this->max_rounds);
        //         $params = array('rounds' => $rand);
        //     } else {
        //         $params = array('rounds' => $this->default_rounds);
        //     }

        //     $params['salt_prefix'] = $this->config->item('salt_prefix', 'auth');
        //     $this->load->library('bcrypt', $params);
        // }
    }

    /**
     * @desc Login to the Web Application
     * @param type $username
     * @param type $password
     * @param type $usertype
     * @return type
     */
    public function login($username, $password, $type, $site ='') {
        $status = 'error';
        $msg = 'Username or password is not valid.';
        $user = $this->user->get_encrypted_user_detail(array('email'), $username);
        if($type != 99){    
            if(isset($user->user_type) && $user->user_type != 99){  
                $status = 'error';
                $msg = 'You are not authorized to login this site';
                return array('status' => $status, 'msg' => $msg);
            } else {
                return array('status' => $status, 'msg' => $msg);
            }       
        }
        if (!empty($user)) {
            $user = (object)$user;
            $password = $this->hashPasswordDb($user->userID, $password);
            if ($password === TRUE) {
                if (!$user->is_authorized) {
                    log_message("info", "User [$user->userID] account is not verified yet. Please check your Inbox to verify your account.");
                    return array('status' => 'error', 'msg' => 'Your account is not verified yet. Please check your Inbox to verify your account.');
                }

                if (!$user->is_active) {
                    log_message("info", "User [$user->userID] account account is not active.");
                    return array('status' => 'error', 'msg' => 'Your account is not active.');
                }
                // $this->update_login($user->id);
                $status = 'success';
                $msg = 'Logged in successfully.';
                if ($user->user_type > 1) {
                    log_message("info", "User [$user->userID] logged in successfully");                    
                    $response = array('status' => $status, 'msg' => $msg , 'role' => $user->user_type, 'user_id' => $user->userID,  'username' => ucwords(implode(' ', array($user->first_name, $user->last_name))));
                    $response['userDetail'] = $user;
                    if(isset($user->profile_picture) && $user->profile_picture){
                        $response['profile_picture']=base_url($this->config->item('assets_images')['path'].'/'.$user->profile_picture);
                    }

                    return $response;

                } else {
                    if ($type == 1) {
                        return array('status' => $status, 'msg' => $msg, 'userDetail' => $user);
                    }
                }
            } else {
                $status = 'error';
                $msg = 'Incorrect password';
                if ($user->user_type > 1) {
                    $max_attempts = $this->authConfigData->maximum_login_attempts;
                    $remaining_attemps = ($max_attempts - (int) ($user->login_attempts + 1));
                    if ($remaining_attemps < 1) {
                        $msg = 'This account is inactive due to many failed login attempts. Please try again after '.$this->expire_time.' minute(s).';
                    } else {
                        $msg .= '. ' . $remaining_attemps . ' attempts remaining';
                    }
                }
                $this->increase_login_attempts($user->userID);
                log_message("info", "User [$user->userID] $msg");
                return array('status' => $status, 'msg' => $msg);
            }
        }
        
        return array('status' => $status, 'msg' => $msg);
    }


    /**
     * @desc Function to authGuards
     * @param string $uri
     * @return string
    */
    public function isAdminLoggedin()
    {
        if (!(session()->get('isLoggedIn'))) {
            return true;
        }
        return true;
    }


    /**
     * @param string $identity: user's identity
    * */
    public function increase_login_attempts($userID) {
        if ($this->authConfigData->track_login_attempts) {

            $userDetails = $this->db
            ->table("users")
            ->select('login_attempts,userID')
            ->where('userID', $userID)
            ->get()
            ->getRow();
            if ($userDetails) {
                $user = $userDetails;
                if ($user->login_attempts ==  $this->authConfigData->maximum_login_attempts) {
                    $data = array('login_attempts' => $user->login_attempts + 1, 'is_active' => 0);
                } else {
                    $data = array('login_attempts' => $user->login_attempts + 1);
                }
                $data['Updated_on'] = date('Y-m-d H:i:s');
                return $this->db
                    ->table("users")
                    ->where('userID', $userID)
                    ->update($data);
            }
        }
        return FALSE;
    }

    /**
     * @desc Registration for users
     * @param type $data
     * @return type
     */
    public function signup($params = array()) {
        $status = 'error';
        $msg = 'Error while register user';
        $log = 'Error while register user';
        extract($params);
		$code = isset($code) ? trim($code) : NULL;
        $first_name = isset($first_name) ? trim($first_name) : NULL;
        $last_name = isset($last_name) ? trim($last_name) : NULL;
        $dob = isset($dob) ? $dob : NULL;
        $gender = isset($gender) ? $gender : NULL;
        $disorder_id = isset($disorder_id) ? $disorder_id : 1;
        $email = isset($email) ? $email : NULL;
        $phone_number = isset($phone_number) ? $phone_number : NULL;
        $street_address = isset($street_address) ? trim($street_address) : NULL;
        $city = isset($city) ? trim($city) : NULL;
        $state = isset($state) ? trim($state) : NULL;
        $country = isset($country) ? trim($country) : NULL;
        $zip = isset($zip) ? trim($zip) : NULL;
        $password = isset($password) ? $password : "";
        $is_research_participant = isset($is_research_participant) ? $is_research_participant : 0;
        $timezone_id = isset($timezone_id)?$timezone_id : NULL;
        $subject_id = isset($subject_id)?$subject_id : NULL;
        $is_regular_participant = isset($participant_type) ? $participant_type : '1';
        //HHU 07082019 not used removed
        //HHU 07182019 We don't need height and weight at sign up
        //We don't need dietitian info at sign up
       
        $calories = (isset($calories) && ($calories != "") && ($calories != "0")) ? $calories : 2500;
        $protein = (isset($protein) && ($protein != "") && ($protein != "0")) ? $protein : 30;
        $carbohydrate = (isset($carbohydrate) && ($carbohydrate != "") && ($carbohydrate != "0")) ? $carbohydrate : 369;
        $fat = (isset($fat) && ($fat != "") && ($fat != "0")) ? $fat : 100;
        $formula = (isset($formula) && ($formula != "") && ($formula != "0")) ? $formula : 30;
        $formula_unit = isset($formula_unit) ? $formula_unit : '';

        $user_type = isset($user_type) ? $user_type : 2; // default participants
        $gender = isset($gender) ? $gender : 'other';
        $profile_picture = isset($profile_picture) ? $profile_picture : '';

        $users_id = (isset($users_id)) ? $users_id : NULL;
        $username = $email;
        $userarr = [2 => 'Participants',3 => 'Admin Dietitians',4=> 'Member Dietitians',5 => 'Account Admin', 6 => 'Researcher', 7 => 'Biostats', 8 => 'Trial Manager', 9 => 'study Dietitian'];

        $salt = '';
        $customer_id = isset($customer) ? $customer : '';

        if(($user_type == 2 || $user_type == 1 )&& ($is_research_participant != 1) && ($is_regular_participant != 0)){
        	$salt = $this->store_salt ? $this->salt() : FALSE;
        	$new_password = $this->hash_password($password, $salt);	
        }
        

        // Users table.
        $user_data = array(
            'username' => aes_256_encrypt(strtolower($username)),
            'password' => (($user_type == 2 || $user_type == 1 ) && ($is_research_participant != 1)) ? $new_password : '',
            'salt' => $salt,
            'email' => aes_256_encrypt($email),
            'first_name' => aes_256_encrypt($first_name),
            'last_name' => aes_256_encrypt($last_name),
            'profile_picture' => aes_256_encrypt($profile_picture),
            'dob' => aes_256_encrypt(date("Y-m-d", strtotime($dob))),
            'gender' => $gender,
            'disorder_id' => $disorder_id,
            'phone_number' => aes_256_encrypt($phone_number),
            'street_address' => aes_256_encrypt($street_address),
            'city' => aes_256_encrypt($city),
            'state' => aes_256_encrypt($state),
            'country' => aes_256_encrypt($country),
            'zip' => aes_256_encrypt($zip),
            'timezone_id' => $timezone_id,
            'subject_id' => $subject_id,
            'calories' => $calories,
            'protein' => $protein,
            'carbohydrate' => $carbohydrate,
            'fat' => $fat,
            'formula' => $formula,
            'formula_unit' => $formula_unit,
            'user_type' => $user_type,
            'gender' => $gender,
            'created_at' => date('Y-m-d H:i:s'),
            'is_active' => 1,
            'is_authorized' => 0,
            'is_research_participant' => $is_research_participant,
            'is_regular_participant' => $is_regular_participant,
            'customer_id' => $customer_id
        );
        // filter out any data passed that doesn't have a matching column in the users table
        // and merge the set user data and the additional data
        $this->db->trans_start();
            $this->db->insert('users', $user_data);
    		$insert_id = $this->db->insert_id('users');
            if(($user_type == 2 || $user_type == 1 )&& ($is_research_participant != 1)){
            	$this->add_previous_password_detail($insert_id);
            }
        $this->db->trans_complete();
        if ($this->db->trans_status() !== FALSE) {
        	if(($user_type == 2 || $user_type == 1 )&& ($is_research_participant != 1)){
				if($code){
					$this->db->update('invited_users', array('users_id' => $insert_id), array('code' => $code));
				}
                if($is_regular_participant != 0){
        		    $res = $this->send_authorization_code($email, $insert_id, $first_name, $last_name);
                }
        	} else{
                if($is_regular_participant != 0){
                    $res = $this->forgotten_password($email, False, True);
                }
        	}
            
            if (isset($res) && $res) {
                $status = 'success';
                $msg = $userarr[$user_type] . ' account added successfully. Please check your email account inbox.';
                $log = "User[$users_id] created $userarr[$user_type] [$insert_id] account.";
            } else if($is_regular_participant == 0){
                $status = 'success';
                $msg = 'Non user participant account added successfully.';
                $log = "User[$users_id] for non-user created $userarr[$user_type] [$insert_id] account.";
            }
        }
        log_message("info", $log);
        return array('status' => $status, 'msg' => $msg, 'id' => $insert_id);
    }

    /**
     * @desc Registration for users via facebbok and google
     * @param type $data
     * @return type
     */
    public function social_login($params = array()) {
        $status = 'error';
        $msg = 'Error while connecting social networking site';
        extract($params);
        $id = isset($id) ? $id : NULL;
        $first_name = isset($first_name) ? $first_name : '';
        $last_name = isset($last_name) ? $last_name : '';
        $email = isset($email) ? $email : '';
        $name = isset($name) ? $name : '';
        $profile_image = '';
        if (isset($image)) {
            $content = file_get_contents($image);
            $config = $this->config->item('assets_images');
            $upload_path = check_directory_exists($config['path']);
            $profile_image = 'profile_image' . uniqid() . '.png';
            copy($image, $upload_path . '/' . $profile_image);
        }

        if ($name != '') {
            $fullname = explode(' ', $name);
            $first_name = ($first_name == '') ? $fullname[0] : '';
            $last_name = ($last_name == '') ? $fullname[1] : '';
        }

        // Users table.
        $user_data = array(
            'first_name' => aes_256_encrypt($first_name),
            'last_name' => aes_256_encrypt($last_name),
            'profile_picture' => aes_256_encrypt($profile_image),
            'last_login' => date('Y-m-d H:i:s')
        );
        // filter out any data passed that doesnt have a matching column in the users table
        // and merge the set user data and the additional data
        $this->db->trans_start();
        // Check User exist or not 
        $user = $this->user->get_encrypted_user_detail(array('email'), $email);

        if (!empty($user)) {
            $user_id = $user['id'];
        } else {
            $user_data['email'] = aes_256_encrypt($email);
            $user_data['username'] = $user_data['email'];
            $user_data['user_type'] = 2; // default participants
            $user_data['is_active'] = 1;
            $user_data['is_authorized'] = 1;
            $user_data['created_at'] = date('Y-m-d H:i:s');
            $this->db->insert('users', $user_data);
            $user_id = $this->db->insert_id('users');
            // if sign up then get user details
            $user = $this->user->get_encrypted_user_detail(array('email'), $email);
            
        }


        $this->db->trans_complete();
        if ($this->db->trans_status() !== FALSE) {
            $status = 'success';
            $msg = 'Logged In Successfully.';
            $response = array('status' => $status, 'msg' => $msg, 'token' => $this->create_token($user_id), 'role' => $user['user_type'], 'username' => ucwords(implode(' ', array($user['first_name'], $user['last_name']))));
            if(isset($user['profile_picture']) && $user['profile_picture']){
                $response['profile_picture']=base_url($this->config->item('assets_images')['path'].'/'.$user['profile_picture']);
            }
            return $response;
        }
        return array('status' => $status, 'msg' => $msg);
    }

    /**
     * @desc Insert a forgotten password key.
     * @param type $email
     * @return type
     */
    public function send_authorization_code($email, $user_id = 0, $first_name = '', $last_name = '') {

        // All some more randomness
        $activation_code_part = "";
        if (function_exists("openssl_random_pseudo_bytes")) {
            $activation_code_part = openssl_random_pseudo_bytes(128);
        }

        for ($i = 0; $i < 1024; $i++) {
            $activation_code_part = sha1($activation_code_part . mt_rand() . microtime());
        }

        $key = $this->hash_code($activation_code_part . $email);

        // If enable query strings is set, then we need to replace any unsafe characters so that the code can still work
        if ($key != '' && $this->config->item('permitted_uri_chars') != '' && $this->config->item('enable_query_strings') == FALSE) {
            // preg_quote() in PHP 5.3 escapes -, so the str_replace() and addition of - to preg_quote() is to maintain backwards
            // compatibility as many are unaware of how characters in the permitted_uri_chars will be parsed as a regex pattern
            if (!preg_match("|^[" . str_replace(array('\\-', '\-'), '-', preg_quote($this->config->item('permitted_uri_chars'), '-')) . "]+$|i", $key)) {
                $key = preg_replace("/[^" . $this->config->item('permitted_uri_chars') . "]+/i", "-", $key);
            }
        }

        // Limit to 40 characters since that's how our DB field is setup
        $expire_time = $this->config->item('authorization_code_expiration', 'auth');
        $link_expires_at = time()+$expire_time*60*60;
        $update = array(
            'authorization_code' => $key,
            'authorization_time' => $link_expires_at
        );
        $this->db->update('users', $update, array('id' => $user_id));
        $return = $this->db->affected_rows() == 1;

        if ($return) {
            // $userdata = $this->auth->user_detail($email);
            $appUrl = $this->config->item('app_url');
            if($user_id){
               $userRow = $this->db->select('is_research_participant')->where('id',$user_id)->get('users')->row();
               if(isset($userRow->is_research_participant) && $userRow->is_research_participant==1){
                    $appUrl = $this->config->item('research_app_url');
               }
            }
            $content['link'] =  $appUrl. '#/verify-email/' . $key;
            $content['btntitle'] = $this->config->item('verify_email_btn_titte');
            $content['message'] = sprintf($this->config->item('verify_email_message'), ucfirst($first_name . ' ' . $last_name));
            //$content['link_expires_at'] = date('d M, Y H:i A',$link_expires_at);
            $content['note'] = sprintf($this->config->item('verify_email_note'), $expire_time);
            $message = $this->load->view('email_template', $content, TRUE);
            $subject = $this->config->item('verify_email_subject');

            if (send_email($subject, $email, $message)) {
                return TRUE;
            }
        }
        return FALSE;
    }

    /**
     * @desc Insert a forgotten password key.
     * @param type $email
     * @return type
     */
    public function forgotten_password($email, $is_app = FALSE, $is_signup = FALSE, $site ='') {
        // $decrypt_email = $email;
        // All some more randomness
        $user = $this->user->get_encrypted_user_detail(array('username'), $email);        
        if(isset($user['user_type']) && $user['user_type'] >= 2){
            $status = 'error';
            $msg = 'You are not authorised to login this site';
            if(($site == 'false' && $user['is_research_participant'] != 0) || 
            ($site == 'true' && $user['is_research_participant'] != 1)){
                return array('status' => $status, 'msg' => $msg);
            }
        }

        $log = '';
        $activation_code_part = "";
        if (function_exists("openssl_random_pseudo_bytes")) {
            $activation_code_part = openssl_random_pseudo_bytes(128);
        }

        for ($i = 0; $i < 1024; $i++) {
            $activation_code_part = sha1($activation_code_part . mt_rand() . microtime());
        }

        $key = $this->hash_code($activation_code_part . $email);

        // If enable query strings is set, then we need to replace any unsafe characters so that the code can still work
        if ($key != '' && $this->config->item('permitted_uri_chars') != '' && $this->config->item('enable_query_strings') == FALSE) {
            // preg_quote() in PHP 5.3 escapes -, so the str_replace() and addition of - to preg_quote() is to maintain backwards
            // compatibility as many are unaware of how characters in the permitted_uri_chars will be parsed as a regex pattern
            if (!preg_match("|^[" . str_replace(array('\\-', '\-'), '-', preg_quote($this->config->item('permitted_uri_chars'), '-')) . "]+$|i", $key)) {
                $key = preg_replace("/[^" . $this->config->item('permitted_uri_chars') . "]+/i", "-", $key);
            }
        }

        // Limit to 40 characters since that's how our DB field is setup
        $expire_time = $this->config->item('forgot_password_expiration', 'auth');
        $link_expires_at = time()+$expire_time*60*60;
        $update = array(
            'forgotten_password_code' => $key,
            'forgotten_password_time' => $link_expires_at
        );
        $user_detail = $this->user->get_encrypted_user_detail(array('email'), $email);
        $status = 'error';
        $msg = 'Unable to make a request please try again later';
        if (!empty($user_detail)) {
            $this->db->update('users', $update, array('id' => $user_detail['id']));
            if ($this->db->affected_rows() == 1) {
                $content['note'] = sprintf($this->config->item('expiration_note'), $expire_time);
                $appUrl = $this->config->item('app_url');
                if(isset($user_detail['is_research_participant']) && $user_detail['is_research_participant']==1){
                    $appUrl = $this->config->item('research_app_url');
                }
                if ($is_signup) {
                    $content['link'] = $appUrl . '#/create-password/' . $key;
                    $content['btntitle'] = $this->config->item('create_password_btn_titte');
                    $content['heading'] = $this->config->item('create_password_heading');
                    $content['message'] = sprintf($this->config->item('welcome_message'), ucfirst($user_detail['first_name'].' '.$user_detail['last_name']));
                    
                    $subject = $this->config->item('welcome_subject');
                } else {
                    $content['link'] = base_url() . 'auth/reset-password/' . $key;
                    if ($is_app) {
                        $content['link'] = $appUrl . '#/reset-password/' . $key;
                    }
                    $content['btntitle'] = $this->config->item('reset_password_btn_titte');
                    $content['message'] = sprintf($this->config->item('reset_password_message'), ucfirst($user_detail['first_name'].' '.$user_detail['last_name']));
                    $content['heading'] = $this->config->item('reset_password_heading');
                    $subject = $this->config->item('reset_password_subject');
                    $log = "User [$user_detail[id]] request for forgot password";
                }
                $message = $this->load->view('email_template', $content, True);
               
                if (send_email($subject, $email, $message)) {
                    $status = "success";
                    $msg = 'A link to reset your password has been sent. Please check your email.';
                } else {
                    $status = 'error';
                    $msg = 'Unable to make a request please try again later';
                }
            }
        }
        log_message("info", $log);
        return array('status' => $status, 'msg' => $msg);
    }

    /**
     * Misc functions
     *
     * Hash password : Hashes the password to be stored in the database.
     * Hash password db : This function takes a password and validates it
     * against an entry in the users table.
     * Salt : Generates a random salt value.
     *
     */

    /**
     * @desc Hashes the password to be stored in the database. 
     * @param type $password
     * @param type $salt
     * @param type $use_sha1_override
     * @return boolean
     */
    public function hash_password($password, $salt = false, $use_sha1_override = FALSE) {
        if (empty($password)) {
            return FALSE;
        }
        // bcrypt
        if ($use_sha1_override === FALSE && $this->hash_method == 'bcrypt') {
            return $this->bcrypt->hash($password);
        }

        if ($this->store_salt && $salt) {
            return sha1($password . $salt);
        } else {
            $salt = $this->salt();
            return $salt . substr(sha1($salt . $password), 0, -$this->salt_length);
        }
    }

    /**
     * This function takes a password and validates it
     * against an entry in the users table.
     *
     * @return void
     * ''
     * */
    public function hashPasswordDb($id, $password, $use_sha1_override = false)
    {
        if (!$id || !$password) {
            return false;
        }   

        $hashPasswordDb = $this->db->table('users')
            ->select('password')
            ->where('userID', $id)
            ->get()
            ->getRow();
        // bcrypt
        if(strcmp($hashPasswordDb->password, $password)==0){
            return true;
        }
        return false;
    }

    /**
     * Generates a random salt value for forgotten passwords or any other keys. Uses SHA1.
     *
     * @return void
     * ''
     * */
    public function hash_code($password) {
        return $this->hash_password($password, FALSE, TRUE);
    }

    /**
     * Generates a random salt value.
     *
     * Salt generation code taken from https://github.com/ircmaxell/password_compat/blob/master/lib/password.php
     *
     * @return void

     * */
    public function salt() {

        $raw_salt_len = 16;

        $buffer = '';
        $buffer_valid = false;

        if (function_exists('random_bytes')) {
            $buffer = random_bytes($raw_salt_len);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
            $buffer = mcrypt_create_iv($raw_salt_len, MCRYPT_DEV_URANDOM);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
            $buffer = openssl_random_pseudo_bytes($raw_salt_len);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && @is_readable('/dev/urandom')) {
            $f = fopen('/dev/urandom', 'r');
            $read = strlen($buffer);
            while ($read < $raw_salt_len) {
                $buffer .= fread($f, $raw_salt_len - $read);
                $read = strlen($buffer);
            }
            fclose($f);
            if ($read >= $raw_salt_len) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid || strlen($buffer) < $raw_salt_len) {
            $bl = strlen($buffer);
            for ($i = 0; $i < $raw_salt_len; $i++) {
                if ($i < $bl) {
                    $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                } else {
                    $buffer .= chr(mt_rand(0, 255));
                }
            }
        }

        $salt = $buffer;

        // encode string with the Base64 variant used by crypt
        $base64_digits = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $bcrypt64_digits = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $base64_string = base64_encode($salt);
        $salt = strtr(rtrim($base64_string, '='), $base64_digits, $bcrypt64_digits);

        $salt = substr($salt, 0, $this->salt_length);


        return $salt;
    }

    /**
     * Checks username
     *
     * @return bool
     * ''
     * */
    public function username_check($username = '') {
        if ($username != '') {
            $user_detail = $this->user->get_encrypted_user_detail(array('username'), $username);
            return count($user_detail)  > 0;
        }
        return FALSE;
    }

 

    /**
     * Get User Detail Using Email
     *
     * @return Array
     * */
    public function user_detail($email = '') {
        if (empty($email)) {
            return FALSE;
        }

        $query = $this->db->select('*')
                ->where('email', $email)
                ->limit(1)
                ->order_by('id', 'desc')
                ->get('users');

        $user_detail = $query->row();

        if ($query->num_rows() > 0) {
            return $user_detail;
        } else {
            return false;
        }
    }
 

 
 
    
   
  

    /**
     * reset password
     *
     * @return bool
     * 
     * */
    public function reset_password($id, $password) {
        $is_exist = $this->db->where('id', $id)->limit(1)->count_all_results('users') > 0;
        $status = 'error';
        $msg = 'Password link is invalid';
        $log = "User [$id] password link is invalid.";
        if ($is_exist) {
            $query = $this->db->select('id, password, salt')
                    ->where('id', $id)
                    ->limit(1)
                    ->order_by('id', 'desc')
                    ->get('users');

            if ($query->num_rows() == 1) {
                $is_password_exist = $this->check_password_history($id, $password);
                if (!$is_password_exist) {
                    $result = $query->row();
                    $salt = $this->store_salt ? $this->salt() : FALSE;
                    $new = $this->hash_password($password, $salt);

                    $data = array(
                        'password' => $new,
                        'forgotten_password_code' => NULL,
                        'forgotten_password_time' => NULL,
                        'is_authorized' => 1,
                        'is_active' => 1,
                        'login_attempts' => 0,
                        'salt' => $salt
                    );

                    $this->db->update('users', $data, array('id' => $id));
                    $this->add_previous_password_detail($id);
                    $return = $this->db->affected_rows() == 1;
                    if ($return) {
                        $status = 'success';
                        $msg = 'Password reset successfully.';
                        $log = "User [$id ] password reset successfully.";
                    }
                } else {
                    $status = 'error';
                    $msg = 'Your password must be different from the previous 6 passwords.';
                    $log = "User [$id ] your password must be different from the previous 6 passwords.";
                }
            }
        }
        log_message("info", $log);
        return array('status' => $status, 'msg' => $msg);
    }

    /**
     * Update Profile
     *
     * @return array
     * 
     * */
    public function update_profile($params = array()) {
        extract($params);
        $status = 'error';
        $msg = 'User not found.';
        $log ='';
        $user = array();
        $first_name = isset($first_name) ? aes_256_encrypt($first_name) : FALSE;
        $last_name = isset($last_name) ? aes_256_encrypt($last_name) : FALSE;
        $gender = isset($gender) ? $gender : FALSE;
        $id = isset($id) ? $id : FALSE;
        if ($id) {
            $data = array("first_name" => $first_name, 'last_name' => $last_name, 'gender' => $gender);
            $is_exist = $this->db->where('id', $id)->limit(1)->count_all_results('users') > 0;
            if ($is_exist) {
                $this->db->update($this->tables['users'], $data, array('id' => $id));
                $query = $this->db->select('*')
                                ->where(array('id' => $id))
                                ->limit(1)->get('users');
                if ($query->num_rows() > 0) {
                    $user = $query->row();
                    $user->username = aes_256_decrypt($user->username);
                    $user->first_name = aes_256_decrypt($user->first_name);
                    $user->last_name = aes_256_decrypt($user->last_name);
                    $user->email = aes_256_decrypt($user->email);
                }
                $log = "User [$id] profile detail updated successfully";
                $status = 'success';
                $msg = 'Profile updated successfully.';
            }
        }
        log_message("info", $log);
        return array('status' => $status, 'msg' => $msg, 'userdetail' => $user);
    }

    /**
     * Update login detail
     *
     * @return array
     * 
     * */
    public function update_login_detail($params = array()) {
        extract($params);
        $is_password = FALSE;
        if ($password != '') {
            $is_password = TRUE;
        }
        $log = '';
        $user = array();
        $data = array("username" => aes_256_encrypt($username), 'email' => aes_256_encrypt($email));
        $query = $this->db->where('id', $id)->limit(1)->get('users');
        if ($query->num_rows() > 0) {
            $user_data = $query->row();
            if ($is_password) {
                $salt = $this->store_salt ? $this->salt() : FALSE;
                $data['password'] = $this->hash_password($password, $salt);
                $data['salt'] = $salt;
            }
            $this->db->update($this->tables['users'], $data, array('id' => $id));
            ($is_password) ? $this->add_previous_password_detail($id) : FALSE;
            $query = $this->db->select('*')
                            ->where(array('id' => $id))
                            ->limit(1)->get('users');
            if ($query->num_rows() > 0) {
                $user = $query->row();
                $user->username = aes_256_decrypt($user->username);
                $user->first_name = aes_256_decrypt($user->first_name);
                $user->last_name = aes_256_decrypt($user->last_name);
                $user->email = aes_256_decrypt($user->email);
            }
            $status = 'success';
            $log = "User [$id] login detail updated successfully";
            $msg = 'User detail updated successfully.';
        } else {
            $status = 'error';
            $msg = 'User not found.';
        }
        log_message("info", $log);
        return array('status' => $status, 'msg' => $msg, 'userdetail' => $user);
    }

    
    /**
     * Get forgotten code detail
     *
     * @return array
     * ''
     * */
    public function authorization_code_detail($code = '') {
        if (empty($code)) {
            return FALSE;
        }

        $query = $this->db->select('id,authorization_code,authorization_time')
                ->where('authorization_code', $code)
                ->limit(1)
                ->order_by('id', 'desc')
                ->get('users');
        $user_detail = $query->row();
        if ($query->num_rows() > 0) {
            return $user_detail;
        } else {
            return false;
        }
    }

    

    
    
    /**
     * Check Token and get the selected member user id
     * It is a callback function take user token to check if token exist in system or not
     * @return Bool false or member user id
     * */
    function get_user_selected($token = FALSE) {
        if ($token) {
            $query = $this->db->where('token', $token)->limit(1)->get('user_tokens');
            if ($query->num_rows() > 0) {
				$userdata = $query->row();
				if($userdata->logout_time){
					return FALSE;
				}else{
					return empty($userdata->selected_member_user_id) ? $userdata->users_id : $userdata->selected_member_user_id;
				}               
            } else {
                return FALSE;
            }
        }
        return FALSE;
	}

	
	/**
     * @desc Insert a forgotten password key.
     * @param type $email
     * @return type
     */
    public function send_contact_us_email($params) {
        $status = 'error';
        $msg = 'Unable to send a request please try again later';
        extract($params);
        $content['message_content'] = sprintf($this->config->item('contact_us_message'), ucfirst($name), $email, $message);
        $content['is_admin'] = TRUE;
        $email_content = $this->load->view('email_template', $content, true);
        $subject = $this->config->item('contact_us_subject');
        $to = $this->config->item('contact_us_email');
        if (send_email($subject, $to, $email_content)) {
            $status = "success";
            $msg = "Thanks for your message! We will get back to you ASAP!";
        }

        return array('status' => $status, 'msg' => $msg);
    }

 
    

    public function activate_account($user) {
        if (!empty($user)) {
            $last_update_time = $user['updated_at'];
            $current_time = date('Y-m-d H:i:s');
            $datetime1 = date_create($current_time);
            $datetime2 = date_create($last_update_time);
            $interval = date_diff($datetime1, $datetime2);
            $is_update = FALSE;
            $data = array(
                'is_active' => 1,
                'login_attempts' => 0,
                'updated_at' => $current_time
            );

            $is_update = ($interval->i >= $this->config->item('lockout_time') || $interval->h);
            if(!$interval->h && $interval->i < $this->config->item('lockout_time')){
                $this->expire_time = $this->config->item('lockout_time') - $interval->i;
            }


            if ($is_update) {
                $this->db->update($this->tables['users'], $data, array('id' => $user['id']));
                $user['is_active'] = 1;
                $user['login_attempts'] = 0;
            }

            return $user;
        }
    }

 

    /**
     * Update Profile my account details 
     *
     * @return array
     * 
     * */
    public function update_my_account_profile($params = array()) {
        extract($params);
        $status = 'error';
        $msg = 'The Account is not updated. Please try again or contact to admin';
        $log ='';
        $id = isset($id) ? $id : FALSE;
        if ($id) {
            $emailField = isset($email) ? aes_256_encrypt($email) : FALSE;
            $data = array(
                'first_name' => isset($first_name) ? aes_256_encrypt($first_name) : FALSE, 
                'last_name' => isset($last_name) ? aes_256_encrypt($last_name) : FALSE, 
                'dob' => aes_256_encrypt(date("Y-m-d", strtotime($dob))),
                'disorder_id' => $disorder_id,
                'email' => $emailField, 
                'username' => $emailField, 
                'phone_number' => aes_256_encrypt($phone_number),
                'street_address' => aes_256_encrypt($street_address),
                'city' => aes_256_encrypt($city),
                'state' => aes_256_encrypt($state),
                'country' => aes_256_encrypt($country),
                'zip' => aes_256_encrypt($zip),
                'timezone_id' => $timezone_id,
                'dietitian_id' => isset($dietitian_id) ? $dietitian_id : null
			);
            if(isset($gender) && $gender){
                $data['gender'] = $gender;
            }
			if(isset($patient_id) && ($patient_id != "")) {
                $data['patient_id'] = $patient_id;
			}
			if(isset($subject_id) && ($subject_id != "")) {
                $data['subject_id'] = $subject_id;
            }
            if(isset($is_research_participant) && ($is_research_participant != "")) {
                $data['is_research_participant'] = $is_research_participant;
            }
            if(isset($user_type) && ($user_type != "")) {
                $data['user_type'] = $user_type;
            }
            // if(isset($profile_picture) && ($profile_picture != "")) {
            //     $data['profile_picture'] = $profile_picture;
			// }
			if(isset($profile_picture) && ($profile_picture != "")) {
                $data['profile_picture'] = aes_256_encrypt($profile_picture);
            }
            
            $this->db->trans_start();            
                $this->db->update($this->tables['users'], $data, array('id' => $id));                
                //Disorder Id should cascade to member profiles
                $this->db->select('head_user_id, member_user_id, member_order');        
                $this->db->from('family_profiles');
                $this->db->where('head_user_id', $id);
                $this->db->order_by('member_order');
                $results = $this->db->get()->result_array();
                if ( count($results) > 0 ) {
                    $ids = array();
                    foreach( $results as $member ){
                        $ids[] = $member['member_user_id'];
                    }
                    $data = array(
                        'disorder_id' => $disorder_id,
                    );
                    $this->db->where_in('id', $ids);
                    $this->db->update($this->tables['users'], $data);
                }            
            $this->db->trans_complete();
            if ($this->db->trans_status() !== FALSE) {
                $log = "User [$id] account profile detail updated.";
                $status = 'success';
                $msg = 'My Account profile detail updated successfully.';
                log_message("info", $log);
                return array('status' => $status, 'msg' => $msg);
            }
            else {
                $log = "User [$id] account profile detail updated FAILed";
            }
        }
        log_message("info", $log);
        return array('status' => $status, 'msg' => $msg);
    }

    /**
     * Update profile password 
     *
     * @return array
     * 
     * */
    public function update_profile_password($params = array()) {
        extract($params);
        $log = '';
        $data = array();

        $salt = $this->store_salt ? $this->salt() : FALSE;
        $data['password'] = $this->hash_password($password, $salt);
        $data['salt'] = $salt;
        $this->db->trans_start();
            $this->db->update($this->tables['users'], $data, array('id' => $id));
            $this->add_previous_password_detail($id);
        $this->db->trans_complete();
        if ($this->db->trans_status() !== FALSE) {
            $status = 'success';
            $log = "User [$id] password is updated.";
            $msg = 'Password is updated successfully.';
            log_message($log);
            return array('status' => $status, 'msg' => $msg);
        } else {
            return array('status' => "error", 'msg' => "Password could not be updated. Something is wrong, please try latter.");
        }
	}
	
	/**
     * match old password with new password 
     *
     * @return array
     * 
     * */
    public function match_password($params = array()) {
        extract($params);
        $log = '';
		$is_password_exist = $this->check_password_history($id, $password);
		if (!$is_password_exist) {
			return FALSE;
		} else {
			return TRUE;
		}
		
	}
	
 
 
   
    
     

 
}