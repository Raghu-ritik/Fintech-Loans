<?php

namespace App\Models;

use CodeIgniter\Model;
 
use App\Models\Loan_model;
use App\Models\Auth_model;
use Config\Auth as ConfigAuth;



class Dashboard_model extends Model{

    var $expire_time;
    protected $table = 'loans_info';
    public function __construct() {
        parent::__construct();
        $this->tables = array('loans_info' => 'loans_info');
        $this->loan = new Loan_model();
        $this->authConfigData = new ConfigAuth();
        $this->expire_time =  $this->authConfigData->lockout_time;
        $this->auth = new Auth_model();
         
    }

    /**
     * @desc show_dashboard_opportunity to the view all opportunity
     */
    public function show_dashboard_opportunity() {
        $status = 'error';
        $msg = 'No Loans info found!';
        $loan = $this->loan->get_all_loan_detail(array(
            "Loan_Id", "Loan_amount", "Opportunity_id", "UserID","Created_on")
        );
        
        if($this->auth->isAdminLoggedin()){
            $status = 'success';
            $msg = $loan;
            return array('status' => $status, 'msg' => $msg);
        }
        else{ 
            $status = 'error';
            $msg = 'You are not authorized to view this site';
            return array('status' => $status, 'msg' => $msg);
            
        }
        
        
    }


 
	
 
 
   
    
     

 
}