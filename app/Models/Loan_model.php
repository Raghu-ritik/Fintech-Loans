<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\Db_model;
use App\Models\User_model;

class Loan_model extends Model
{
    public $table = array('users' => 'users');

    public function __construct()
    {
        parent::__construct();
        $this->tables = array('users' => 'users','Loans_info'=>'loans_info');
        $this->db_model = new Db_model();
        $this->user = new User_model();
    }


    /**
     * @desc Get all loan detail by.
     * @param field_name encrypt field name array
     * @param $str value
     */
    public function get_all_loan_detail(
        $field_name="",
        $str="",
        $is_case_insensitive = false
    ) {
        $LoanDetails = $this->db
            ->table("loans_info")
            ->select('Loan_Id as Id, Loan_amount as Amount, Opportunity_id, UserID, Created_on')
            ->get()
            ->getResult();
        

        $LoanDetail = [];
        if (!empty($LoanDetails)) {
            foreach ($LoanDetails as $val) {
                // foreach ($field_name as $field) {
                    // if ( isset($val->$field) ) {
                        $val->opportunity = isset($val->opportunity)    ? $val->opportunity    : ($this->get_opportunity_by_id($val->Opportunity_id,array("Opportunity_id","DP_Primary_income_last_pay_date_c",)))->Opportunity_Origin__c;
                        $val->owner_alias = isset($val->owner_alias)    ? $val->owner_alias    : "Mindruby";
                        $val->user_detail = isset($val->user_detail)    ? ($val->user_detail)  : "<a href='opportunity?LoanId=".$val->Id."'>".($this->user->get_user_detail_by_id($val->UserID,array("first_name","last_name")))->username."</a>";
                        $val->close_date =  isset($val->close_date)     ? ($val->close_date)   : "";
                        $val->action     =  isset($val->action)         ? ($val->close_date)   : "<a href='editopportunity?LoanId=".$val->Id."' ><button class='btn'> Edit </button></a>";
                        unset($val->UserID);
                        unset($val->Opportunity_id);
                        array_push($LoanDetail,$val);
                    // }
                // }
            }
        }

        return $LoanDetail;
    }
	
	

    /**
     * @desc Get user detail by encrypted field.
     * @param field_name encrypt field name array
     * @param $str value
     */
    public function get_loan_detail_by_id(
        $field_name="",
        $loan_id="",
        $is_case_insensitive = false
    ) {
        $LoanDetails = $this->db
            ->table("loans_info")
            ->select('*')
            ->where('Loan_Id',$loan_id)
            ->get()
            ->getResult();
            $LoanDetail = [];
            if (!empty($LoanDetails)) {
                $flagFound = false;
                foreach ($LoanDetails as $val) {
                    if ($flagFound) {
                        break;
                    }
                    foreach ($field_name as $field) {
                        if ( isset($val->$field) ) {
                            $val->opportunity = isset($val->opportunity)         ? $val->opportunity           : ($this->get_opportunity_by_id($val->Opportunity_id,array("Opportunity_id","DP_Primary_income_last_pay_date_c",)));
                            $val->owner_alias = isset($val->owner_alias)         ? $val->owner_alias           : "";
                            $val->user_detail = isset($val->user_detail)         ? ($val->user_detail)         : ($this->user->get_user_detail_by_id($val->UserID,array("first_name","last_name")));
                            $val->close_date = isset($val->close_date)         ? ($val->close_date)         : "";
                            unset($val->UserID);
                            unset($val->Opportunity_id);
                            $flagFound = true;
                            $LoanDetail = $val;
                            break;
                        }
                    }
                }
            }
        return $LoanDetail;
    }


    public function add_loans($params=[],$users=[],$opportunitySense = []){
        
        // INSERT INTO `loans_info`(`Loan_Id`, `Loan_amount`, `Reason_for_loan`, `More_info`, `Pay_frequency`, `Total_expenses`, `Employer_name`, `Confirm_t_and_c`, `Opportunity_id`, `UserID`, `Created_on`, `Updated_on`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')

        extract($params);
        $response = [
            "status" => "error",
            "msg" => "Loan not added successfully",
        ];
        $data = [];
        if (isset($Loan_amount)) {
            isset($Loan_amount)                 ? ($data["Loan_amount"] = $Loan_amount)           : "";
            isset($Reason_for_loan)             ? ($data["Reason_for_loan"] =  $Reason_for_loan)  : "";
            isset($More_info)                   ? ($data["More_info"] =  $More_info)              : "";
            isset($Pay_frequency)               ? ($data["Pay_frequency"] =  $Pay_frequency)      : "";
            isset($Total_expenses)              ? ($data["Total_expenses"] =  $Total_expenses)    : "";
            isset($Employer_name)               ? ($data["Employer_name"] =  $Employer_name)      : "";
            isset($Confirm_t_and_c)             ? ($data["Confirm_t_and_c"] =  $Confirm_t_and_c)  : "";
            
            $added_users = $this->user->add_user($users);
            $added_opportunity = $this->add_opportunity($opportunitySense);
            if($added_opportunity['status']=='success'){
                $data["Opportunity_id"] =  $added_opportunity['opp_id'];
            }
            if($added_users['status']=='success'){
                $data["UserID"] =  $added_users['added_user'];
            }
            $data["Updated_on"] = date("Y-m-d H:i:s");            
            if (isset($id) && $id != "") {
                $this->db
                ->table("users")
                ->where("id", $id)
                ->update($data);
                log_message(
                    "info",
                    "User Id[" . $id . "] account updated successfully"
                );
                $response = [
                    "status" => "success",
                    "msg" => "User Updated successfully",
                ];
            } else {
                $data["Created_on"] = date("Y-m-d H:i:s");
                $this->db->table("loans_info")->insert($data);
                $insertId = $this->db->insertID();
                log_message(
                    "info",
                    "Loan Id[" . $insertId . "] created successfully"
                );
            }
            if (isset($insertId) && $insertId) {
                return [
                    "status" => "success",
                    "msg"    => "Loan added successfully",
                ];
            }
            }
    }

    public function get_more_info_for_loan_reason($loan_reason=1){
        $moreInfoLoanDetails = $this->db
                                    ->table("reason_more_info_for_loan rmi")
                                    ->select("more_info_id,more_info_subject")
                                    ->where("reason_for_loan_rel",$loan_reason)
                                    ->get()
                                    ->getResult();
        return $moreInfoLoanDetails;

    }

    public function get_all_states_info($states_id=1){
        $statesDetails = $this->db
                                    ->table("state_country sc")
                                    ->select("state_id,state_name")
                                    ->where("country_rel",$states_id)
                                    ->get()
                                    ->getResult();
        return $statesDetails;

    }
    
    public function get_all_countries(){
        $ResonLoanDetails = $this->db
                                    ->table("country o")
                                    ->select("country_id,country_name")
                                    ->get()
                                    ->getResult();
        return $ResonLoanDetails;

    }
    
    public function get_all_loan_reason(){
        $ResonLoanDetails = $this->db
                                    ->table("reasons_for_loan o")
                                    ->select("Loan_reason_id,Loan_reason_subject")
                                    ->get()
                                    ->getResult();
        return $ResonLoanDetails;

    }
    public function get_opportunity_by_id($opp_id="",$field_name=array()) {

        //   DNB_scoring_rate_company,Opportunity_origin_company ,  DNB_scoring_rate_company ,  Current_Balance_c ,  Applicant_Type_c ,  Opp_number_c ,  Multiple_Lenders_Hardship_c ,  income_as_a_of_DP200_income_c ,  Deposit_spent_on_DOD_c ,  DP_Monthly_avg_of_SACC_repayments_c ,  Monthly_ongoing_financial_commitments_c ,  DP_Primary_income_frequency_c ,  DP_Primary_income_last_pay_date_c ,  DP_enders_with_uncleared_dishonours_233_c ,  Primary_regular_benefit_frequency_c ,  Last_pay_date_for_largest_inc_src_302_c ,  Largest_income_source_day_of_week_c ,  Next_pay_date_for_largest_income_source_c ,  Frequency_for_largest_income_source_c ,  Primary_regular_benefit_last_pay_date_c ,  loan_dishonours_c ,  Primary_regular_benefit_monthly_amount_c ,  Courts_and_Fines_transactions_c ,  Total_monthly_income_ongoin_Reg_231_c ,  DP_Total_Monthly_Benefit_Income_c ,  DP_Dishonours_Across_Primary_Acct_244_c ,  DP_No_Direct_Debits_On_Primary_Acct_355_c ,  DP_Budget_Management_Services_c ,  Hardship_Indicator_Gambling_c ,  DP_Monthly_rent_amount_236_c ,  Amount_of_SACC_commitments_due_c ,  Largest_income_Src_Avg_freq_c ,  Largest_income_Src_last_payment_amt_c ,  Deposits_since_last_SACC_dishonour_c ,  SACC_commitments_due_next_month_c ,  Total_monthly_credits_c ,  agency_collection_providers_c ,  Collection_agency_transactions_c ,  Average_monthly_amount_of_Courts_and_Fin_c ,  Courts_and_Fines_providers_c ,  income_DP200_spend_on_high_risk_merch_c ,  most_recent_loan_has_no_repayments_c ,  Deposits_since_last_dishonour_c ,  Income_source_is_other_income_549_c ,  Bank_Report_Gov_Benefit_c ,  Income_source_is_a_government_benefit_c ,  Summary_Income_c ,  Summary_Expenses_c ,  Rent_Mortgage_c , 
        $OpportunityDetails = $this->db
                                    ->table("opportunity o")
                                    ->select("*")
                                    ->where('opp_id',$opp_id)
                                    ->get()
                                    ->getResult();

        $opportunityDetail = [];
        if (!empty($OpportunityDetails)) {
            $flagFound = false;
            foreach ($OpportunityDetails as $val) {
                if ($flagFound) {
                    break;
                }
                foreach ($field_name as $field) {
                    if ( isset($val->$field) ) {
                        $flagFound = true;
                        $opportunityDetail = $val;
                        break;
                    }
                    // return array();
                }
            }
        }
        return $opportunityDetail;
    
    }

    public function add_opportunity($opportunitySense=[]){

        extract($opportunitySense);
        $response = [
            "status" => "error",
            "msg" => "opportunity not added successfully",
        ];
        $data = [];
        if (isset($Opportunity_Origin__c)) {
            isset($StageName)                                         ?     ($data["StageName"] = $StageName)   : "";        
            isset($Opportunity_Origin__c)                             ?     ($data["Opportunity_Origin__c"] = $Opportunity_Origin__c)   : "";        
            isset($DNB_Scoring_Rate__c)                               ?     ($data["DNB_Scoring_Rate__c"] = $DNB_Scoring_Rate__c)   : "";             
            isset($Current_Balance__c)                                ?     ($data["Current_Balance__c"] = $Current_Balance__c)   : "";        
            isset($Applicant_Type__c)                                 ?     ($data["Applicant_Type__c"] = $Applicant_Type__c)   : "";         
            isset($Opp_number__C)                                     ?     ($data["Opp_number__C"] = $Opp_number__C)   : "";             
            isset($Multiple_Lenders_Hardship__c)                      ?     ($data["Multiple_Lenders_Hardship__c"] = $Multiple_Lenders_Hardship__c)   : "";    
            isset($income_as_a_of_DP200_income__c)                    ?     ($data["income_as_a_of_DP200_income__c"] = $income_as_a_of_DP200_income__c)   : "";         
            isset($Deposit_spent_on_DOD__c)                          ?      ($data["Deposit_spent_on_DOD__c"] = $Deposit_spent_on_DOD__c)  : "";
            isset($DP_Monthly_avg_of_SACC_repayments__c)              ?     ($data["DP_Monthly_avg_of_SACC_repayments__c"] = $DP_Monthly_avg_of_SACC_repayments__c)   : "";            
            isset($Monthly_ongoing_financial_commitments__c)          ?     ($data["Monthly_ongoing_financial_commitments__c"] = $Monthly_ongoing_financial_commitments__c)   : "";                  
            isset($DP_Primary_income_frequency__c)                    ?     ($data["DP_Primary_income_frequency__c"] = $DP_Primary_income_frequency__c)   : "";               
            isset($DP_Primary_income_last_pay_date__c)                ?     ($data["DP_Primary_income_last_pay_date__c"] = $DP_Primary_income_last_pay_date__c)   : "";              
            isset($DP_enders_with_uncleared_dishonours_233__c)        ?     ($data["DP_enders_with_uncleared_dishonours_233__c"] = $DP_enders_with_uncleared_dishonours_233__c)   : "";            
            isset($Primary_regular_benefit_frequency__c)              ?     ($data["Primary_regular_benefit_frequency__c"] = $Primary_regular_benefit_frequency__c)   : "";         
            isset($Last_pay_date_for_largest_inc_src_302__c)          ?     ($data["Last_pay_date_for_largest_inc_src_302__c"] = $Last_pay_date_for_largest_inc_src_302__c)   : "";          
            isset($Largest_income_source_day_of_week__c)              ?     ($data["Largest_income_source_day_of_week__c"] = $Largest_income_source_day_of_week__c)   : "";    
            isset($Next_pay_date_for_largest_income_source__c)        ?     ($data["Next_pay_date_for_largest_income_source__c"] = $Next_pay_date_for_largest_income_source__c)   : "";            
            isset($Frequency_for_largest_income_source__c)            ?     ($data["Frequency_for_largest_income_source__c"] = $Frequency_for_largest_income_source__c)   : "";         
            isset($Primary_regular_benefit_last_pay_date__c)          ?     ($data["Primary_regular_benefit_last_pay_date__c"] = $Primary_regular_benefit_last_pay_date__c)   : "";                 
            isset($loan_dishonours__c)                                ?     ($data["loan_dishonours__c"] = $loan_dishonours__c)   : "";   
            isset($Primary_regular_benefit_monthly_amount__c)         ?     ($data["Primary_regular_benefit_monthly_amount__c"] = $Primary_regular_benefit_monthly_amount__c)   : ""; 
            isset($Courts_and_Fines_transactions__c)                  ?     ($data["Courts_and_Fines_transactions__c"] = $Courts_and_Fines_transactions__c)   : "";     
            isset($Total_monthly_income_ongoin_Reg_231__c)            ?     ($data["Total_monthly_income_ongoin_Reg_231__c"] = $Total_monthly_income_ongoin_Reg_231__c)   : "";     
            isset($DP_Total_Monthly_Benefit_Income__c)                ?     ($data["DP_Total_Monthly_Benefit_Income__c"] = $DP_Total_Monthly_Benefit_Income__c)   : "";        
            isset($DP_Dishonours_Across_Primary_Acct_244__c)          ?     ($data["DP_Dishonours_Across_Primary_Acct_244__c"] = $DP_Dishonours_Across_Primary_Acct_244__c)   : "";    
            isset($DP_No_Direct_Debits_On_Primary_Acct_355__c)        ?     ($data["DP_No_Direct_Debits_On_Primary_Acct_355__c"] = $DP_No_Direct_Debits_On_Primary_Acct_355__c)   : "";            
            isset($DP_Budget_Management_Services__c)                  ?     ($data["DP_Budget_Management_Services__c"] = $DP_Budget_Management_Services__c)   : "";                    
            isset($Hardship_Indicator_Gambling__c)                    ?     ($data["Hardship_Indicator_Gambling__c"] = $Hardship_Indicator_Gambling__c)   : "";           
            isset($DP_Monthly_rent_amount_236__c)                     ?     ($data["DP_Monthly_rent_amount_236__c"] = $DP_Monthly_rent_amount_236__c)   : "";  
            isset($Amount_of_SACC_commitments_due__c)                 ?     ($data["Amount_of_SACC_commitments_due__c"] = $Amount_of_SACC_commitments_due__c)   : "";  
            isset($Largest_income_Src_Avg_freq__c)                    ?     ($data["Largest_income_Src_Avg_freq__c"] = $Largest_income_Src_Avg_freq__c)   : "";   
            isset($Largest_income_Src_last_payment_amt__c)            ?     ($data["Largest_income_Src_last_payment_amt__c"] = $Largest_income_Src_last_payment_amt__c)   : "";                     
            isset($Deposits_since_last_SACC_dishonour__c)             ?     ($data["Deposits_since_last_SACC_dishonour__c"] = $Deposits_since_last_SACC_dishonour__c)   : "";                 
            isset($SACC_commitments_due_next_month__c)                ?     ($data["SACC_commitments_due_next_month__c"] = $SACC_commitments_due_next_month__c)   : "";                    
            isset($Total_monthly_credits__c)                          ?     ($data["Total_monthly_credits__c"] = $Total_monthly_credits__c)   : "";            
            isset($agency_collection_providers__c)                    ?     ($data["agency_collection_providers__c"] = $agency_collection_providers__c)   : "";              
            isset($Collection_agency_transactions__c)                 ?     ($data["Collection_agency_transactions__c"] = $Collection_agency_transactions__c)   : "";                     
            isset($Average_monthly_amount_of_Courts_and_Fin__c)       ?     ($data["Average_monthly_amount_of_Courts_and_Fin__c"] = $Average_monthly_amount_of_Courts_and_Fin__c)   : "";                  
            isset($Courts_and_Fines_providers__c)                     ?     ($data["Courts_and_Fines_providers__c"] = $Courts_and_Fines_providers__c)   : "";           
            isset($income_DP200_spend_on_high_risk_merch__c)          ?     ($data["income_DP200_spend_on_high_risk_merch__c"] = $income_DP200_spend_on_high_risk_merch__c)   : "";                 
            isset($most_recent_loan_has_no_repayments__c)             ?     ($data["most_recent_loan_has_no_repayments__c"] = $most_recent_loan_has_no_repayments__c)   : "";                  
            isset($Deposits_since_last_dishonour__c)                  ?     ($data["Deposits_since_last_dishonour__c"] = $Deposits_since_last_dishonour__c)   : "";                
            isset($Income_source_is_other_income_549__c)              ?     ($data["Income_source_is_other_income_549__c"] = $Income_source_is_other_income_549__c)   : "";               
            isset($Bank_Report_Gov_Benefit__c)                        ?     ($data["Bank_Report_Gov_Benefit__c"] = $Bank_Report_Gov_Benefit__c)   : ""; 
            isset($Income_source_is_a_government_benefit__c)          ?     ($data["Income_source_is_a_government_benefit__c"] = $Income_source_is_a_government_benefit__c)   : "";            
            isset($Summary_Income__c)                                 ?     ($data["Summary_Income__c"] = $Summary_Income__c)   : "";            
            isset($Summary_Expenses__c)                               ?     ($data["Summary_Expenses__c"] = $Summary_Expenses__c)   : "";            
            isset($Rent_Mortgage__c)                                  ?     ($data["Rent_Mortgage__c"] = $Rent_Mortgage__c)   : "";       
            isset($Summary_Total__c)                                  ?     ($data["Summary_Total__c"] = $Summary_Total__c)   : "";            
            isset($Loan_Amount__c)                                    ?     ($data["Loan_Amount__c"] = $Loan_Amount__c)   : "";            
            isset($Total_Repayment_Amount__c)                         ?     ($data["Total_Repayment_Amount__c"] = $Total_Repayment_Amount__c)   : "";       
            
            if (isset($id) && $id != "") {
                $this->db
                ->table("users")
                ->where("id", $id)
                ->update($data);
                log_message(
                    "info",
                    "opportunity Id[" . $id . "] updated successfully"
                );
                $response = [
                    "status" => "success",
                    "msg" => "Opportunity Updated successfully",
                ];
            } else {
                $this->db->table("opportunity")->insert($data);
                $insertId = $this->db->insertID();
                log_message(
                    "info",
                    "opportunity Id[" . $insertId . "] created successfully"
                );
            }
            if (isset($insertId) && $insertId) {
                return [
                    "status" => "success",
                    "opp_id" => $insertId,
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
    public function get_detail($user_id,$is_only_diet_details=false) {
        // $info_array = array('where' => array('id' => $user_id), 'table' => $this->tables
        // ['users']);
        $info_array['where'] = array('id' => $user_id);
        $info_array['table'] = $this->tables['users'];
		$info_array['fields'] = 'calories,protein,carbohydrate,fat,formula,formula_unit,disorder_id,glutamic,glycine,alanine,arginine,lysine,proline,is_mute';
		if(!$is_only_diet_details){
            $info_array['fields'] .= ',id,username,email,first_name,last_name,gender,profile_picture,dob,is_active,is_authorized,user_type,phone_number,street_address,city,state,country,zip,height_feet,height_inch,height_cm,weight_lbs,weight_oz,weight_kg,login_attempts,updated_at,patient_id,subject_id,dietitian_id,timezone_id,is_research_participant,is_mute';
		} 

        // getting user account details
        $result = $this->db_model->get_data($info_array);
        if ($result['result']) {
			$Loandetails = $result['result'][0];
			if($is_only_diet_details){
				!$Loandetails['calories'] && ($Loandetails['calories']=2500);
				!$Loandetails['protein'] && ($Loandetails['protein']=30);
				!$Loandetails['carbohydrate'] && ($Loandetails['carbohydrate']=369);
				!$Loandetails['fat'] && ($Loandetails['fat']=100);
				!$Loandetails['formula'] && ($Loandetails['formula']=30);
				$Loandetails['disorder']=$this->db->select('name')->where('id',$Loandetails['disorder_id'])->get($this->tables['disorder'])->row()->name;
				$Loandetails['is_citrin_deficiency']=stripos($Loandetails['disorder'],'citrin')!==FALSE; // check if the participant has citrin deficiency
			} else {
				$Loandetails['username'] = aes_256_decrypt($Loandetails['username']);
				$Loandetails['first_name'] = aes_256_decrypt($Loandetails['first_name']);
				$Loandetails['last_name'] = aes_256_decrypt($Loandetails['last_name']);
				$Loandetails['fullname'] = ucwords($Loandetails['first_name'] . ' ' . $Loandetails['last_name']);
				$Loandetails['email'] = aes_256_decrypt($Loandetails['email']);
				$Loandetails['phone_number'] = aes_256_decrypt($Loandetails['phone_number']);
				$Loandetails['street_address'] = aes_256_decrypt($Loandetails['street_address']);
				$Loandetails['city'] = aes_256_decrypt($Loandetails['city']);
				$Loandetails['zip'] = aes_256_decrypt($Loandetails['zip']);
				$Loandetails['state'] = aes_256_decrypt($Loandetails['state']);
				$Loandetails['country'] = aes_256_decrypt($Loandetails['country']);

				$Loandetails['dietitian_first_name'] = '';
				$Loandetails['dietitian_last_name'] = '';
				$Loandetails['dietitian_email'] = '';
                $Loandetails['dietitian_phone_number'] = '';
                
				if($Loandetails['profile_picture']){
					$Loandetails['profile_picture'] = base_url($this->config->item('assets_images')['path'].'/'.aes_256_decrypt($Loandetails['profile_picture']));
				}

				$Loandetails['dob'] =  date("m/d/Y", strtotime(aes_256_decrypt($Loandetails['dob'])));
				$userarr = [2 => 'Participants', 3 => 'Admin-Dietitian', 4 => 'Member-Dietitian',5 => 'Account Admin', 6 => 'Researcher', 7 => 'Biostats', 8 => 'Trial Manager', 9 => 'Dietitian'];
				$Loandetails['role'] = $userarr[$Loandetails['user_type']];
                
                //Try to get dietitian info
                //HHU 07162019 for july release, we just need to keep the dietitian info from participant if any. So get it from here first
                $d_array = array('where' => array('p_user_id' => $user_id), 'table' => $this->tables['dietitians']);
                $d_result = $this->db_model->get_data($d_array);
                $found = false;
                if ( $d_result['result'] ) {
                    $d_details = $d_result['result'][0];
                    !empty($d_details['first_name']) && $Loandetails['dietitian_first_name'] = aes_256_decrypt($d_details['first_name']);
                    !empty($d_details['last_name']) && $Loandetails['dietitian_last_name'] = aes_256_decrypt($d_details['last_name']);
                    !empty($d_details['email']) && $Loandetails['dietitian_email'] = aes_256_decrypt($d_details['email']);
                    !empty($d_details['phone_number']) && $Loandetails['dietitian_phone_number'] = aes_256_decrypt($d_details['phone_number']);
                    $found = true;
                }
                
                //HHU 07162019 get dietitian info using dietitian id if not null since some of them already links to dietitian id
                if ( !$found && isset($Loandetails['dietitian_id']) && !empty($Loandetails['dietitian_id']) ) {
                    $d_array = array('where' => array('id' => $Loandetails['dietitian_id']), 'table' => $this->tables['users']);
                    $d_result = $this->db_model->get_data($d_array);
                    if ( $d_result['result'] ) {
                        $d_details = $d_result['result'][0];
                        !empty($d_details['first_name']) && $Loandetails['dietitian_first_name'] = aes_256_decrypt($d_details['first_name']);
                        !empty($d_details['last_name']) && $Loandetails['dietitian_last_name'] = aes_256_decrypt($d_details['last_name']);
                        !empty($d_details['email']) && $Loandetails['dietitian_email'] = aes_256_decrypt($d_details['email']);
                        !empty($d_details['phone_number']) && $Loandetails['dietitian_phone_number'] = aes_256_decrypt($d_details['phone_number']);
                    }
                }
			}
            return $Loandetails;
		}
		
		return false;
    }

}