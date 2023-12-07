<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\Db_model;

class User_model extends Model
{
    public $table = array('users' => 'users');

    public function __construct()
    {
        parent::__construct();
        $this->tables = array('users' => 'users','address'=>'address','customers'=>'customers');
        $this->db_model = new Db_model();
    }


    /**
     * @desc Get user detail by encrypted field.
     * @param field_name encrypt field name array
     * @param $str value
     */
    public function get_encrypted_user_detail(
        $field_name,
        $str,
        $is_case_insensitive = false
    ) {
        $userDetails = $this->db
            ->table("users u")
            ->select('userID, username as username, first_name, last_name, 
                        email as email, is_active as is_active, is_authorized,user_type,
                        profile_picture as 	profile_picture, login_attempts, updated_on as Updated_on')
            ->get()
            ->getResult();
        $userDetail = [];
        if (!empty($userDetails)) {
            $flagFound = false;
            foreach ($userDetails as $val) {
                if ($flagFound) {
                    break;
                }

                foreach ($field_name as $field) {
                    if (
                        isset($val->$field) && (($val->$field) == $str || ($is_case_insensitive == true && strtolower(($val->$field)) == strtolower($str)))
                    ) {
                        $val->first_name = $val->first_name ? ($val->first_name) : "";
                        $val->last_name = $val->last_name   ? ($val->last_name)  : "";
                        $val->email = $val->email           ? ($val->email)      : "";
                        // $val->phone_number = $val->phone_number ? convert_phone_number_formate( ($val->phone_number) ): "";
                        $val->username = $val->username     ? ($val->username)   : "";
                        $val->profile_picture = $val->profile_picture  ? $val->profile_picture : "";
                        $flagFound = true;
                        $userDetail = $val;
                        break;
                    }
                    // return array();
                }
            }
        }
        return $userDetail;
    }
	
	public function get_user_detail_by_id($user_id,$field_name=array()){
        $userDetails = $this->db
            ->table("users u")
            ->select('userID, username as username, first_name, last_name, 
                        email as email, is_active as is_active, is_authorized,user_type,Date_of_birth as Date_of_birth,Mobile_no as phone_number, 
                        Employer_name, profile_picture as 	profile_picture, login_attempts, updated_on as Updated_on')
            ->where("userID",$user_id)
            ->get()
            ->getResult();

            $userDetail = [];
            if (!empty($userDetails)) {
                $flagFound = false;
                foreach ($userDetails as $val) {
                    if ($flagFound) {
                        break;
                    }
                    foreach ($field_name as $field) {
                        if (
                            isset($val->$field) //&& (($val->$field) == $str || ($is_case_insensitive == true && strtolower(($val->$field)) == strtolower($str)))
                        ) {
                            $val->first_name = $val->first_name ? ($val->first_name) : "";
                            $val->last_name = $val->last_name   ? ($val->last_name)  : "";
                            $val->email = $val->email           ? ($val->email)      : "";
                            $val->phone_number = isset($val->phone_number) ? ( ($val->phone_number) ): "";
                            $val->username = $val->username     ? ($val->username)   : "";
                            $val->profile_picture = $val->profile_picture  ? $val->profile_picture : "";
                            $flagFound = true;
                            $userDetail = $val;
                            break;
                        }
                        // return array();
                    }
                }
            }
            return $userDetail;
        
    }

    public function get_all_titles(){
        $titleDetails = $this->db
            ->table("user_title ut")
            ->select('Title_id, Title_name')
            ->get()
            ->getResult();
        $titleDetail = [];
        if (!empty($userDetails)) {
            $titleDetail = $titleDetails;
        }
        return $titleDetail; 
    }


    public function add_user_address($params=[]){
        extract($params);
        $address = [];
        if (isset($Pin_code)){
            isset($Street_name)   ? ($address["Street_name"] = $Street_name)   : "";
            isset($Suburb)        ? ($address["Suburb"] = $Suburb)             : "";
            isset($Pin_code)      ? ($address["Pin_code"] = $Pin_code)         : "";
            isset($city)          ? ($address["city"] = $city)                 : "";
            isset($country)       ? ($address["County"] = $country)           : "";
            
            $this->db->table("address")->insert($address);
        
            return $this->db->insertID();
        }
        // INSERT INTO `address`(`Address_id`, `Street_name`, `Suburb`, `City`, `County`, `State`, `Pin_code`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')
    }

    public function add_user($params=[]){
        extract($params);
        $response = [
            "status" => "error",
            "msg" => "User not added successfully",
        ];
        $data = [];
        $address = [];
        // return [
        //     "status"     => "success",
        //     "added_user" => 3,
        //     "msg"        => "User added successfully",
        // ];
        if (isset($User_type)) {
            isset($User_type)                   ? ($data["User_type"] = $User_type)                   : "";
            isset($First_name)                  ? ($data["First_name"] =  $First_name)                : "";
            isset($Middle_name)                 ? ($data["Middle_name"] =  $Middle_name)              : "";
            isset($Last_name)                   ? ($data["Last_name"] =  $Last_name)                  : "";
            isset($Date_of_birth)               ? ($data["Date_of_birth"] =  $Date_of_birth)          : "";
            isset($Mobile_no)                   ? ($data["Mobile_no"] =  $Mobile_no)                  : "";
            isset($Email)                       ? ($data["Email"] =  $Email)                          : "";
            isset($Password)                    ? ($data["Password"] =  $Password)                    : "";
            isset($Employment_status)           ? ($data["Employment_status"] =  $Employment_status)  : "";
            isset($Annual_Income)               ? ($data["Annual_Income"] =  $Annual_Income)                    : "";
            isset($Total_expenses)              ? ($data["Total_expenses"] =  $Total_expenses)                  : "";
            isset($Employer_name)               ? ($data["Employer_name"] =  $Employer_name)                    : "";
            isset($Confirm_terms_and_conditions)? ($data["Confirm_terms_and_conditions"] =  $Confirm_terms_and_conditions)    : "";
            
            isset($Street_name)                 ? ($address["Street_name"] = $Street_name)          : "";
            isset($Suburb)                      ? ($address["Suburb"] = $Suburb)                    : "";
            isset($Pin_code)                    ? ($address["Pin_code"] = $Pin_code)                : "";
            isset($city)                        ? ($address["city"] = $city)                        : "";
            isset($country)                     ? ($address["country"] = $country)                  : "";
            
            $data["Updated_on"] = date("Y-m-d H:i:s");

            
            if (isset($user_id) && $user_id != "") {
                $this->db
                ->table("users")
                ->where("id", $user_id)
                ->update($data);
                log_message(
                    "info",
                    "User Id[" . $user_id . "] account updated successfully"
                );
                $response = [
                    "status" => "success",
                    "msg" => "User Updated successfully",
                ];
            } else {
                
                $data["Created_on"] = date("Y-m-d H:i:s");
                $addressId  = $this->add_user_address($address);
                $data["Address"] = $addressId;
                $data["Username"]= $First_name ." ".$Last_name;
                $data["Full_name"] = $First_name . " ". $Middle_name." ".$Last_name;
                $this->db->table("users")->insert($data);
                $insertId = $this->db->insertID();
                log_message(
                    "info",
                    "User Id[" . $insertId . "] account created successfully"
                );
            }
            if (isset($insertId) && $insertId) {
                return [
                    "status" => "success",
                    "inserted_user" => $insertId,
                    "msg"    => "User added successfully",
                ];
            }
        }
    }


    /**
     * @desc get single user detail
     * @param type $params
     * @return array
     */
    public function update_authorizarion_detail($params=[]) {
        extract($params);
        $response = [
            "status" => "error",
            "msg" => "User not updated successfully",
        ];
        $data = [];
        $address = [];
        if (isset($user_id)) {
            // isset($user_id)                     ? ($data["userID"] = $user_id)                             : "";
            isset($Is_authorized)               ? ($data["Is_authorized"] =  $Is_authorized)                : "";
            isset($Login_attempts)              ? ($data["Login_attempts"] =  $Login_attempts)              : "";
            isset($Is_active)                   ? ($data["Is_active"] =  $Is_active)                        : "";  
            
            $data["Updated_on"] = date("Y-m-d H:i:s");

            if (isset($user_id) && $user_id != "") {
                $this->db
                ->table("users")
                ->where("userId", $user_id)
                ->update($data);
                log_message(
                    "info",
                    "User Id[" . $user_id . "] account updated successfully"
                );
                $response = [
                    "status" => "success",
                    "msg" => "User Updated successfully",
                ];
            }
        }
        return $response;
    }
    
    /**
     * @desc get family head account details
     * @param type $params
     * @return array
     * HHU 07172019
     */
    public function get_family_head_detail($user_id) {
		$info_array = array('where' => array('id' => $user_id), 'table' => $this->tables['users']);
		$info_array['fields'] = 'id,username,email,first_name,last_name,calories,protein,carbohydrate,fat,formula,formula_unit,disorder_id,gender,profile_picture,dob,is_active,is_authorized,user_type,phone_number,street_address,city,state,country,zip,dietitian_id,patient_id,subject_id,timezone_id';
		
        // getting user account details
        $result = $this->db_model->get_data($info_array);
        if ($result['result']) {
			$userdetails = $result['result'][0];			
            $userdetails['username'] = aes_256_decrypt($userdetails['username']);
            $userdetails['first_name'] = aes_256_decrypt($userdetails['first_name']);
            $userdetails['last_name'] = aes_256_decrypt($userdetails['last_name']);
            $userdetails['fullname'] = ucwords($userdetails['first_name'] . ' ' . $userdetails['last_name']);
            $userdetails['email'] = aes_256_decrypt($userdetails['email']);
            $userdetails['phone_number'] = aes_256_decrypt($userdetails['phone_number']);
            $userdetails['street_address'] = aes_256_decrypt($userdetails['street_address']);
            $userdetails['city'] = aes_256_decrypt($userdetails['city']);
            $userdetails['zip'] = aes_256_decrypt($userdetails['zip']);
            $userdetails['state'] = aes_256_decrypt($userdetails['state']);
            $userdetails['country'] = aes_256_decrypt($userdetails['country']);

            $userdetails['dietitian_first_name'] = '';
            $userdetails['dietitian_last_name'] = '';
            $userdetails['dietitian_email'] = '';
            $userdetails['dietitian_phone_number'] = '';
            
            if($userdetails['profile_picture']){
                $userdetails['profile_picture'] = base_url($this->config->item('assets_images')['path'].'/'.aes_256_decrypt($userdetails['profile_picture']));
            }

            $userdetails['dob'] =  date("m/d/Y", strtotime(aes_256_decrypt($userdetails['dob'])));
            $userarr = [2 => 'Participants', 3 => 'Admin-Dietitian', 4 => 'Member-Dietitian',5 => 'Account Admin', 6 => 'Researcher', 7 => 'Biostats', 8 => 'Trial Manager', 9 => 'Dietitian'];
            $userdetails['role'] = $userarr[$userdetails['user_type']];
            
            //Try to get dietitian info
            //HHU 07162019 for july release, we just need to keep the dietitian info from participant if any. So get it from here first
            $d_array = array('where' => array('p_user_id' => $user_id), 'table' => $this->tables['dietitians']);
            $d_result = $this->db_model->get_data($d_array);
            $found = false;
            if ( $d_result['result'] ) {
                $d_details = $d_result['result'][0];
                !empty($d_details['first_name']) && $userdetails['dietitian_first_name'] = aes_256_decrypt($d_details['first_name']);
                !empty($d_details['last_name']) && $userdetails['dietitian_last_name'] = aes_256_decrypt($d_details['last_name']);
                !empty($d_details['email']) && $userdetails['dietitian_email'] = aes_256_decrypt($d_details['email']);
                !empty($d_details['phone_number']) && $userdetails['dietitian_phone_number'] = aes_256_decrypt($d_details['phone_number']);
                $found = true;
            }
            
            //HHU 07162019 get dietitian info using dietitian id if not null since some of them already links to dietitian id
            if ( !$found && isset($userdetails['dietitian_id']) && !empty($userdetails['dietitian_id']) ) {
                $d_array = array('where' => array('id' => $userdetails['dietitian_id']), 'table' => $this->tables['users']);
                $d_result = $this->db_model->get_data($d_array);
                if ( $d_result['result'] ) {
                    $d_details = $d_result['result'][0];
                    !empty($d_details['first_name']) && $userdetails['dietitian_first_name'] = aes_256_decrypt($d_details['first_name']);
                    !empty($d_details['last_name']) && $userdetails['dietitian_last_name'] = aes_256_decrypt($d_details['last_name']);
                    !empty($d_details['email']) && $userdetails['dietitian_email'] = aes_256_decrypt($d_details['email']);
                    !empty($d_details['phone_number']) && $userdetails['dietitian_phone_number'] = aes_256_decrypt($d_details['phone_number']);
                }
            }

            return $userdetails;
		}		
		return false;
    }
    
    /**
     * @desc get family health profile requiring diet management
     * @param type $params
     * @return array
     * HHU 07172019
     */
    public function get_family_profile($user_id) {
		$this->db->select('f.head_user_id, f.member_user_id, f.member_order as member_order, u.first_name as first_name, u.last_name as last_name, u.calories, u.protein, u.carbohydrate, u.fat, u.formula, u.formula_unit, u.disorder_id, u.height_feet, u.height_inch, u.height_cm, u.weight_lbs, u.weight_oz, u.weight_kg, u.dob, u.gender,u.lactating_status,u.pregnant_status');        
        $this->db->from('family_profiles f');
        $this->db->join('users u', 'f.member_user_id = u.id');
        $this->db->where('f.head_user_id', $user_id);
        $this->db->order_by('f.member_order');
        $results = $this->db->get()->result_array();
        
        $members = array();
        if ( count($results) == 0 ) {
            return $members;
        }
        foreach( $results as $key=>$member ){
            $finalFirst = aes_256_decrypt($member['first_name']);
            $finalLast = aes_256_decrypt($member['last_name']);
            $member['first_name'] = aes_256_decrypt($member['first_name']);
            $member['last_name'] = aes_256_decrypt($member['last_name']);
            //$member['email'] = aes_256_decrypt($member['email']);
            //$member['phone_number'] = aes_256_decrypt($member['phone_number']);
            $member['dob'] =  date("m/d/Y", strtotime(aes_256_decrypt($member['dob'])));
            
            $members[$member['member_order']-1]=$member;
        }
        
		return $members;
    }
    
    /**
     * @desc get family members names and ids requiring diet management
     * @param type $params
     * @return array
     * HHU 07172019
     */
    public function get_family_members($user_id) {
		$this->db->select('f.head_user_id, f.member_user_id, f.member_order, u.first_name as first_name, u.last_name as last_name, u.dob, u.gender');        
        $this->db->from('family_profiles f');
        $this->db->join('users u', 'f.member_user_id = u.id');
        $this->db->where('f.head_user_id', $user_id);
        $this->db->order_by('f.member_order');
        $results = $this->db->get()->result_array();
        
        $members = array();
        if ( count($results) == 0 ) {
            return $members;
        }
        foreach( $results as $key=>$member ){
            $finalFirst = aes_256_decrypt($member['first_name']);
            $finalLast = aes_256_decrypt($member['last_name']);
            $member['first_name'] = $finalFirst;
            $member['last_name'] = $finalLast;
            //$member['email'] = aes_256_decrypt($member['email']);
            //$member['phone_number'] = aes_256_decrypt($member['phone_number']);           
            $member['dob'] =  date("m/d/Y", strtotime(aes_256_decrypt($member['dob'])));
            
            $members[]=$member;
        }
        
		return $members;
    }
    
    
    /**
     * @desc get each member health profile
     * @param type $params
     * @return array
     * HHU 07172019
     */
    public function get_member_health_profile($user_id) {
		$info_array = array('where' => array('id' => $user_id), 'table' => $this->tables['users']);
		$info_array['fields'] = 'id,first_name,last_name,calories,protein,carbohydrate,fat,formula,formula_unit,disorder_id,height_feet,height_inch,height_cm,weight_lbs,weight_oz,weight_kg';
		
        // getting user account details
        $result = $this->db_model->get_data($info_array);
        if ($result['result']) {
			$userdetails = $result['result'][0];			
            $userdetails['first_name'] = aes_256_decrypt($userdetails['first_name']);
            $userdetails['last_name'] = aes_256_decrypt($userdetails['last_name']);
            $userdetails['fullname'] = ucwords($userdetails['first_name'] . ' ' . $userdetails['last_name']);
            //$userdetails['email'] = aes_256_decrypt($userdetails['email']);
            $userdetails['phone_number'] = aes_256_decrypt($userdetails['phone_number']);
            
            //$userdetails['dob'] =  date("m/d/Y", strtotime(aes_256_decrypt($userdetails['dob'])));
            return $userdetails;
		}		
		return false;
    }

    /**
     * Get User Detail
     * @param  user_id
     * @return Array
     * */
    public function get_users_list($params = array())
    {
		extract($params);
        $user_type = (isset($user_type) ? $user_type : false);
        $created_by = (isset($created_by) ? $created_by : false);
        $user_id = (isset($user_id) ? $user_id : false);
        $data = array('result' => []);

        $col_sort = array("id", "fullname", "email");
        $info_array['fields'] = 'users.id as user_id,users.email,users.first_name,users.last_name,users.user_type,users.username as user_name,is_active,is_authorized,authorization_time,forgotten_password_time,user_type,dob, patient_id,subject_id,dietitian_id,is_research_participant';
        $where = array('users.is_active' => 1, 'users.user_type !=' => 1);
        $where_in= array();
        if (is_array($user_type)) {
            $where_in['users.user_type'] = $user_type;
        } else {
            $where['users.user_type'] = $user_type;
        }
        if ($created_by) {
            $where['users.created_by'] = $created_by;
        }
        if ($user_id) {
            $where['users.id'] = $user_id;
        }
        $join = false;
        
        if (isset($where)) {
            $info_array['where'] = $where;
        }
        if (isset($where_in)) {
            $info_array['where_in'] = $where_in;
        }
        if (isset($params['iDisplayStart']) && $params['iDisplayLength'] != '-1') {
            $start = intval($params['iDisplayStart']);
            $limit = intval($params['iDisplayLength']);
		}
        $info_array['count'] = true;
        $info_array['join'] = $join;

        $info_array['table'] = $this->tables['users'];

        $result = $this->db_model->get_data($info_array);
 		$newArray=array('result'=>array());
		$searchParams = isset($searchParams) ? $searchParams : false;
        if (!empty($result['result'])) {

            foreach ($result['result'] as $key => $val) {
				
                $result['result'][$key]['email'] = aes_256_decrypt($val['email']);
                $result['result'][$key]['type'] = $result['result'][$key]['user_type']; 
                $result['result'][$key]['user_type'] = (($val['user_type'] == '3') ? 'Admin Dietitian' : (($val['user_type'] == '4') ? 'Member Dietitian' : 'Participant'));
                $result['result'][$key]['username'] = aes_256_decrypt($val['user_name']);
                $result['result'][$key]['first_name'] = ucwords(aes_256_decrypt($val['first_name']));
                $result['result'][$key]['last_name'] = ucwords(aes_256_decrypt($val['last_name']));
				$result['result'][$key]['fullname'] = ucwords($result['result'][$key]['last_name'] . ' ' . $result['result'][$key]['first_name']);
				$result['result'][$key]['forgotten_password_time'] = $val['forgotten_password_time'];
				$result['result'][$key]['patient_id'] = $val['patient_id'];
				$result['result'][$key]['subject_id'] = $val['subject_id'];
				$result['result'][$key]['dob'] = aes_256_decrypt($val['dob']);
				$result['result'][$key]['authorization_time'] = $val['authorization_time'];

				if($searchParams && is_array($searchParams)){
					$totalSearchParams = 0;
					$totalSearchFoundParams = 0;
					foreach($searchParams as $field=>$param){
						if($param){
							$totalSearchParams++;
						}
						if($param && ((mb_strtolower($result['result'][$key][$field]) == mb_strtolower($param)) || ($field == 'dob' && $result['result'][$key][$field]==date('Y-m-d',strtotime($param))))){
							$totalSearchFoundParams++;
						}
					}
					$totalSearchParams && $totalSearchParams == $totalSearchFoundParams && ($newArray['result'][]=$result['result'][$key]);
				}
            }
			//$data = $result;
			$data['result'] = $searchParams!=false ? $newArray['result'] : $result['result'];
			if (isset($start) && isset($limit)) {
				$data['result'] = array_slice($data['result'],$start,$limit);
				// $info_array['start'] = $start;
				// $info_array['limit'] = $limit;
			}
			
            if (isset($params['iSortCol_0'])) {
                $index = $params['iSortCol_0'];
                $order = $params['sSortDir_0'] === 'asc' ? 'asc' : 'desc';
                $order_by = $col_sort[$index] == 'id' ? 'user_id' : $col_sort[$index];
				//$data['result'] = $this->array_orderby($data['result'], $order_by, );
				array_multisort(array_column($data['result'], $order_by), $order == 'asc' ? SORT_ASC : SORT_DESC, $data['result']);


            } else {
				$data['result'] = $this->array_orderby($data['result'], 'last_name', SORT_ASC, 'first_name', SORT_ASC);
			}

            
        }
        $data['total'] = $searchParams!=false ? count($newArray['result']) : $result['total'];

        return $data;
    }

    public function array_orderby() {
        $args = func_get_args();
        $data = array_shift($args);
        foreach ($args as $n => $field) {
            if (is_string($field)) {
                $tmp = array();
                foreach ($data as $key => $row) {
                    $tmp[$key] = $row[$field];
                }
                $args[$n] = $tmp;
            }
        }
        $args[] = &$data;
        call_user_func_array('array_multisort', $args);
        return array_pop($args);
    }

    /**
     * @desc Update users
     * @param type $data
     * @return type
     */
    public function update_user($params = array()) {
        $status = 'error';
        $msg = 'Error while updating user';
        extract($params);
        $user_id = (isset($user_id)) ? $user_id : $user_id;
        $log = "User [$user_id] error while updating user.";
        $first_name = (isset($first_name)) ? $first_name : null;
        $last_name = (isset($last_name)) ? $last_name : null;
        $email = (isset($email)) ? $email : null;
        $gender = (isset($gender)) ? $gender : null;
        $is_research_participant = isset($is_research_participant)? $is_research_participant : '0';


        // Users table.
        $user_data = array(
            'first_name' => aes_256_encrypt($first_name),
            'last_name' => aes_256_encrypt($last_name),
            'email' => aes_256_encrypt($email),
            'username' => aes_256_encrypt($email),
            'gender' => $gender,
            'updated_at' => date('Y-m-d H:i:s'),
            'is_research_participant' => $is_research_participant,
        );

        $this->db->trans_start();
        $this->db->update($this->tables['users'], $user_data, array('id' => $user_id));
        $return = $this->db->affected_rows() == 1;
        $this->db->trans_complete();
        if ($this->db->trans_status() !== false) {
            if ($return) {
                $status = 'success';
                $msg = 'User information updated successfully.';
                $log = "User [$user_id] profile information updated successfully.";
            }
        }
        generate_log($log);
        return array('status' => $status, 'msg' => $msg);
    }


    /**
     * @desc Add User Activity
     * @param type $data
     * @return type
     */
    public function add_activity($params = array())
    {
        $status = 'error';
        extract($params);
        $type = (isset($type)) ? $type : null;
        $action = (isset($eventAction)) ? $eventAction : null;
        $title = (isset($eventLabel)) ? $eventLabel : null;
        $page_name = isset($eventCategory) ? $eventCategory : null;
        $users_id = isset($users_id) ? $users_id : null;
        $device_info = isset($device_info) ? $device_info : null;
        $user_data = array(
            'type' => $type,
            'action' => $action,
            'page_name' => $page_name,
            'users_id' => $users_id,
            'title' => $title,
            'device_info' => $device_info
        );
        $this->db->trans_start();
        $this->db->insert('user_activity', $user_data);
        $id = $this->db->insert_id('users');
        $this->db->trans_complete();
        if ($this->db->trans_status() !== false) {
            $status = 'success';
        }
        return array('status' => $status);
    }

    public function add_researcher($params = array()){
        $status = 'error';
        extract($params);
        return array('status' => $status);
    }

    public function getStatus()
    {
        return $this->db->order_by('id', 'desc')->get('check')->row_array();
    }   

    public function updateStatus($id)
    {
        $data = array('status' => 0);
        $this->db->where('id', $id);
        return $this->db->update('check', $data);
    }

    public function getLastCheckRecord() {
        return $this->db->order_by('id', 'desc')->limit(1)->get('check')->row_array();
    }
    
    public function updateStatusToggle($id, $status) {
        $this->db->where('id', $id)->update('check', array('status' => $status));
    }


    /**
     * Get Customer Detail
     * @param  user_id
     * @return Array
     * */
    public function get_customers_list($params = array())
    {
		extract($params);
        
        $col_sort = array("id", "org_name");
        $info_array['fields'] = 'id , org_name';
        $info_array['count'] = true;
        $info_array['table'] = $this->tables['customers'];

        $result = $this->db_model->get_data($info_array);
 		$newArray=array('result'=>array());
		$searchParams = isset($searchParams) ? $searchParams : false;
        if (!empty($result['result'])) {
            foreach ($result['result'] as $key => $val) {
                $result['result'][$key]['org_name'] = $result['result'][$key]['org_name']; 
            }          
        }
        return $result;
    }

    // Add Customer
    public function addCustomer($params = array())
    {
        if (!empty($params)) {
    
            $insert_data = array(
                'org_name' => $params['org_name']
            );
            if (isset($params['id']) && $params['id'] != '') {
                
                $result = $this->db->update('customers', $insert_data, array('id' => $params['id']));
                if ($result) {
                    $response = array(
                        'status' => 'success',
                        'msg' => 'Customer Added successfully.'
                    );
                } else {
                    $response = array(
                        'status' => 'error',
                        'msg' => 'Failed to add customer.'
                    );
                }
            } else {
                $result = $this->db->insert('customers', $insert_data);
                if ($result) {
                    $response = array(
                        'status' => 'success',
                        'msg' => 'Customer updated successfully.'
                    );
                } else {
                    $response = array(
                        'status' => 'error',
                        'msg' => 'Failed to update customer.'
                    );
                }
            }
    
            
        } else {
            $response = array(
                'status' => 'error',
                'msg' => 'No customer data provided.'
            );
        }
    
        return $response;
    }

    // Add Setting
    public function addSetting($params = array())
    {
        if (!empty($params)) {

            $insert_data = array(
                'name' => $params['name'],
                'value' => $params['value']
            );
            $result = $this->db->insert('configs', $insert_data);

            if ($result) {
                $response = array(
                    'status' => 'success',
                    'msg' => 'Setting added successfully.'
                );
            } else {
                $response = array(
                    'status' => 'error',
                    'msg' => 'Failed to add setting.'
                );
            }
        } else {
            $response = array(
                'status' => 'error',
                'msg' => 'No setting data provided.'
            );
        }

        return $response;
    }
       
    // Update Setting
    public function updateSetting($setting_id, $value) {
        $this->db->where('id', $setting_id);
        $this->db->update('configs', array('value' => $value));
    }

}