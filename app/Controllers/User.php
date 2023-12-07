<?php

namespace App\Controllers;
use App\Models\Auth_model;
use App\Models\User_model;

class User extends BaseController
{

    public function __construct() {
        // parent::__construct();
        $this->session = \Config\Services::session();
        $this->auth = new Auth_model();
        $this->user = new User_model();
        // $this->session = session();
      
        /** add error delimiters * */
        // $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
	}



    public function login(): string
    {
       
        return view('login',['title' => 'Login - Fintech Loans']);
    }
    
    public function make_login()
    {

        $validationRules = [
            'email' => 'required',
            'password' => 'required'
        ];
        if ($_POST) {
            if (!$this->validate($validationRules)) {
                // Validation failed
                $data['validation'] = $this->validator;
                return view('login', $data);
            }
            $result = $this->auth->login($_POST['email'],$_POST['password'],99);
            // $this->session->setFlashData($result['status'], $result['msg']);
            if (!empty($result) && $result['status'] == 'success') {
                log_message("info", "User Id[".$result['userDetail']->userID."] login successfully");
                $this->session->set('isLoggedIn', $result['userDetail']);                
                return $this->response->redirect(site_url('/dashboard'));                
            }
            // echo view('login', $result);
            return $this->response->redirect(site_url('/login'));                
        }
    }

    public function logout(){
        $this->session->set('isLoggedIn', "");   
        return $this->response->redirect(site_url());                
        return array('status' => 'success', 'msg' => 'Logout successfully');
    }

    public function addAdminAccount(){
        $data = array();
        $data['Title'] = "1";
        $data['First_name'] = "admin";
        $data['Middle_name'] = "MM";
        $data['Last_name'] = "Gmail";
        $data['Date_of_birth'] = "01/01/2001";
        $data['Email'] = "admin@gmail.com";
        $data['Mobile_no'] = "9900887766";
        $data['Password'] = "admin#1234";
        $data['Employment_status'] = 1;
        $data['Annual_Income'] = "9999999";
        $data['Total_expenses'] = "9999999";
        $data['Employer_name'] = "self";
        $data['Confirm_terms_and_conditions'] = 1;
        $data['User_type'] = "99";
        
        $data['Is_active'] = 1;
        $data['Is_authorized'] = 1;
        $data['Login_attempts'] = 15;

        $data["Street_name"] = "Dummy" ;
        $data["Suburb"] =  "Kammi";
        $data["Pin_code"] =  "99118";
        $data["city"] =     "1"  ;
        $data["country"] = "1" ;
        // print_r($data);
        $result = $this->user->add_user($data);
        if($result && isset($result['inserted_user'])){
            $data['user_id'] = $result['inserted_user'];
            $update_result = $this->user->update_authorizarion_detail($data);
            print_r($result);
            print_r($update_result);
        }
        

    }
    public function profile(): string
    {
        $data = array();
        $user_detail = array();
        $IsLoggedIn =session()->get('isLoggedIn'); 
        if (isset($IsLoggedIn)){
            $data['login_user_detail'] = session()->get('isLoggedIn');
            $user_detail = $this->user->get_user_detail_by_id($data['login_user_detail']->userID,['userID']);
            return view('admin/profile',['title' => 'Profile - Fintech Loans','user_detail'=> $user_detail,'data'=>$data]);
        }
        else{
            return view('not_loggedin',['title' => 'Fintech Loans']);

        }
    }

    public function AddUser($user): string
    {

        if ($user)
        {
            // Set validation rule
            $isValid = True;

            if (!$isValid)
            {
                $data['validation'] = $this->validator;
                echo view('addUser', $data);
                return "";
            }
            // $_POST['userType'] = $this->authModel->professionalUserType($_POST['type']);
            $result = $this->user->add_user($user);

            die;
            $this
                ->session
                ->setFlashData($result['status'], $result['msg']);
            if (!empty($result) && $result['status'] == 'success')
            {
                return redirect()->to(base_url('user'));
            }
        }
        // echo view('addUser', $data);














        return view('admin/profile',['title' => 'Profile - Fintech Loans']);
    }
  
    



}
