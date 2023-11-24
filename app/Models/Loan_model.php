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
     * @desc Get user detail by encrypted field.
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
            ->select('Loan_Id, Loan_amount, Reason_for_loan, More_info, Pay_frequency, Total_expenses, Employer_name, Opportunity_id, UserID, Created_on')
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
                        $val->opportunity = $val->opportunity         ?$val->opportunity        : ($this->get_opportunity_by_id($val->Opportunity_id,array("Opportunity_id","DP_Primary_income_last_pay_date_c",)));
                        $val->user_detail = $val->user_detail         ? ($val->user_detail)     : ($this->user->get_user_detail_by_id($val->UserID,array("first_name","last_name")));
                        $val->Reason_for_loan = $val->Reason_for_loan ? ($val->Reason_for_loan)      : "";
                        $flagFound = true;
                        $LoanDetail = $val;
                        break;
                    }
                    // return array();
                }
            }
        }
        return $LoanDetail;
    }
	
	
    public function get_opportunity_by_id($opp_id="",$field_name=array()) {

        //   DNB_scoring_rate_company,Opportunity_origin_company ,  DNB_scoring_rate_company ,  Current_Balance_c ,  Applicant_Type_c ,  Opp_number_c ,  Multiple_Lenders_Hardship_c ,  income_as_a_of_DP200_income_c ,  Deposit_spent_on_DOD_c ,  DP_Monthly_avg_of_SACC_repayments_c ,  Monthly_ongoing_financial_commitments_c ,  DP_Primary_income_frequency_c ,  DP_Primary_income_last_pay_date_c ,  DP_enders_with_uncleared_dishonours_233_c ,  Primary_regular_benefit_frequency_c ,  Last_pay_date_for_largest_inc_src_302_c ,  Largest_income_source_day_of_week_c ,  Next_pay_date_for_largest_income_source_c ,  Frequency_for_largest_income_source_c ,  Primary_regular_benefit_last_pay_date_c ,  loan_dishonours_c ,  Primary_regular_benefit_monthly_amount_c ,  Courts_and_Fines_transactions_c ,  Total_monthly_income_ongoin_Reg_231_c ,  DP_Total_Monthly_Benefit_Income_c ,  DP_Dishonours_Across_Primary_Acct_244_c ,  DP_No_Direct_Debits_On_Primary_Acct_355_c ,  DP_Budget_Management_Services_c ,  Hardship_Indicator_Gambling_c ,  DP_Monthly_rent_amount_236_c ,  Amount_of_SACC_commitments_due_c ,  Largest_income_Src_Avg_freq_c ,  Largest_income_Src_last_payment_amt_c ,  Deposits_since_last_SACC_dishonour_c ,  SACC_commitments_due_next_month_c ,  Total_monthly_credits_c ,  agency_collection_providers_c ,  Collection_agency_transactions_c ,  Average_monthly_amount_of_Courts_and_Fin_c ,  Courts_and_Fines_providers_c ,  income_DP200_spend_on_high_risk_merch_c ,  most_recent_loan_has_no_repayments_c ,  Deposits_since_last_dishonour_c ,  Income_source_is_other_income_549_c ,  Bank_Report_Gov_Benefit_c ,  Income_source_is_a_government_benefit_c ,  Summary_Income_c ,  Summary_Expenses_c ,  Rent_Mortgage_c , 
        $OpportunityDetails = $this->db
                                    ->table("opportunity o")
                                    ->select("o.opp_id,Opportunity_id,Opportunity_origin_company,  Summary_Total_c ,  Loan_Amount_c ,  Total_Repayment_Amount_c")
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





        // if (!empty($OpportunityDetails)) {
        //     return $OpportunityDetails;
        // }
    
        // return $OpportunityDetails;
    
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