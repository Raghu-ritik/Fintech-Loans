<?php

namespace App\Controllers;
use App\Models\Dashboard_model;
use App\Models\Loan_model;


class AdminDashboard extends BaseController
{
    public function __construct() {
        // parent::__construct();
        $this->dashboard = new Dashboard_model();
        $this->loan = new Loan_model();
        $this->session = session();
      
        /** add error delimiters * */
        // $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
	}

    public function index(): string
    {
        $data = array();
        $IsLoggedIn =session()->get('isLoggedIn'); 
        if (isset($IsLoggedIn)){
            $data['login_user_detail'] = session()->get('isLoggedIn');
            return view('admin/dashboard',['title' => 'Fintech Loans','data'=>$data]);
        }
        else{
            return view('not_loggedin',['title' => 'Fintech Loans']);

        }
    }

    public function get_all_loans_opportunity(){
        $result = $this->dashboard->show_dashboard_opportunity();
        $totalRecords = 99;
        $data = $result['msg'];
        return json_encode([
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecords,
            'data' => $data,
        ]);
    }

    public function opportunityDetail(): string
    {

        $data = array();
        $LoanId = $_GET['LoanId'];
        $opportunity = $this->loan->get_loan_detail_by_id(array("Loan_Id", "Loan_amount", "Opportunity_id", "UserID", "Created_on"),$LoanId);
        $IsLoggedIn =session()->get('isLoggedIn'); 
        if (isset($IsLoggedIn)){
            $data['login_user_detail'] = session()->get('isLoggedIn');
            return view('admin/opportunityDetail',['title' => 'Fintech Loans','opportunity'=>$opportunity,'data'=>$data]);
        }
        else{
            return view('not_loggedin',['title' => 'Fintech Loans']);

        }
    }


    public function editopportunity()
    {
        $data = array();
        $LoanId = $_GET['LoanId'];
        $opportunity = $this->loan->get_loan_detail_by_id(array("Loan_Id", "Loan_amount", "Opportunity_id", "UserID", "Created_on"),$LoanId);
        $IsLoggedIn =session()->get('isLoggedIn'); 
        if (isset($IsLoggedIn) and $IsLoggedIn->user_type == 99){
            $data['login_user_detail'] = session()->get('isLoggedIn');
            return view('admin/editOpportunityDetail',['title' => 'Fintech Loans','opportunity'=>$opportunity,'data'=>$data]);
        }
        else{
            return view('not_loggedin',['title' => 'Fintech Loans']);

        }
    }


    public function getLoanAnalysis():string
    {
        $opportunity_id = $_GET['opportunity_id'];
        
        $opportunity =  $this->loan->get_opportunity_by_id($opportunity_id,array("Opportunity_Origin__c"));
        $opportunity->Opportunity_id = "ritik";
        foreach($opportunity as $key => &$val){
            if ($key == "Opportunity_id"){
                $opportunity->id = $val;
                unset($opportunity->$key);
            }
            if($key == "opp_id" || $key == "StageName"){
                unset($opportunity->$key);
            }
        }
        
        // $convertedObject = convertObjectToStrings($opportunity);

        $url = "https://bd8gizd4mg.execute-api.us-east-1.amazonaws.com/prod";
        $payload = [
            "body" => $opportunity
        ];
        $jsonPayload = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_BIGINT_AS_STRING);

        // Initialize cURL session
        $ch = curl_init($url);

        // Set cURL options
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'x-api-key : Dw22gXnwgq3mAg8z5bqA02jJ2fuD9E0r6ulP2iGA'
        ]);

        // Execute cURL session and get the response
        $response_from_aws_prod_server = json_decode(curl_exec($ch));
        
        $vaop = "0062x00000EbrOLAAZ";
        $response_result = "Red";
        foreach ($response_from_aws_prod_server as $key => $val) {
            if(isset($val->ritik)){
                $response_result =  $val->ritik;
            }
        }
        return json_encode([
            'status'=>200,
            'data'=>$response_result,
            'msg'=>'Successfully fetched the Loan analysis status'
        ]);

    }
}
