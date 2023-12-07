<?php

namespace App\Controllers;

use App\Controllers\User;
use App\Models\Loan_model;


class Home extends BaseController
{

    
    public function __construct() {
        // parent::__construct();
        $this->user_conroller = new User();
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
        }
        return view('home',['title' => 'Fintech Loans','data'=>$data]);
    }

    public function make_Random_payload($Loan_Amount,$pay_frequency,$Annual_Gross_Income,$Total_expenses,$total_repayment_amount__c): array
    {
        $csvFilePath = WRITEPATH . "../csv/Loan_".$Loan_Amount.".csv";
       
    
        if ($pay_frequency == 3) {
            $max_repayment_amount = $this -> calculateRepayentAmout($Loan_Amount, 2);
        } elseif ($pay_frequency == 2) {
            $max_repayment_amount = $this -> calculateRepayentAmout($Loan_Amount, 1);
        } elseif ($pay_frequency == 1) {
            $max_repayment_amount = $this -> calculateRepayentAmout($Loan_Amount, 4);
        } elseif ($pay_frequency == 4) {
            $max_repayment_amount = $this -> calculateRepayentAmout($Loan_Amount, -1);
        }
        if (file_exists($csvFilePath)) {
            // Load the File helper
            $csvContent = file_get_contents($csvFilePath);

            $csvData = str_getcsv($csvContent, "\n"); // Split into lines

            $csvArray = [];
            $data = array(); 
            $isFirstRow = true;
            foreach ($csvData as $csvRow) {
                $rowData = str_getcsv($csvRow, ","); // Split each line into an array

                if ($isFirstRow) {
                    $headers = $rowData;
                    $isFirstRow = false;
                    
                }  else {
                    $row = array_combine($headers, $rowData);
                    foreach ($row as $key => &$value) {
                        if ($value === "") {
                            $value = 0;
                        }
                        $row[$key] = str_replace(',','',$row[$key]);
                    }
                    $csvArray[] = $row;
                }
            }
            foreach($csvArray as $row){
                $floanAmount =$row['Loan_Amount__c'];
                $fpayFrequency =$row['DP_Primary_income_frequency__c'];
                $ftotalRepayment =$row['Total_Repayment_Amount__c'];
                
                if($floanAmount == $Loan_Amount && $fpayFrequency == $pay_frequency && $ftotalRepayment >= $total_repayment_amount__c && $ftotalRepayment <=  $max_repayment_amount){
                  
                    // the filtered data will push inside $data
                    $data[] = $row;
                }
            }
         
            if (!empty($data)) {
                // Randomly select an index from the $data array
                $randomIndex = array_rand($data);
            
                // Get the random array
                $randomArray = $data[$randomIndex];
            
                // Return the random array
                return $randomArray;
            } else {
                
                // Handle the case when no matching rows were found
                return []; // Or any other appropriate value
            }
            
           
           
        } else {
            return print( 'The CSV file does not exist.');
        }
    }

    public function getStatesInfo()
    {
        $country_id = $_GET['country_id'];
        $states_infos = $this->loan->get_all_states_info($country_id);
        return json_encode([
            'status' => 200,
            'msg' => "states list is fetched successfully.",
            'data' => $states_infos, 
        ]);
    }

    public function getMoreInfoLoan()
    {
        $reason_for_loan = $_GET['reason_for_loan'];
        $more_infos = $this->loan->get_more_info_for_loan_reason($reason_for_loan);
        return json_encode([
            'status' => 200,
            'msg' => "more info for Loan Reson is fetched successfully.",
            'data' => $more_infos, 
        ]);
    }

    public function applyLoan(): string{
        $countries = $this->loan->get_all_countries();
        $loan_reason = $this->loan->get_all_loan_reason();
        return view('applyLoan',['title' =>'Apply Loan','loan_reason'=>$loan_reason,'countries'=>$countries]);
    }
    public function calculateRepayentAmout($LoanAmount, $payFrequency): string {
        // I have assumed an average interest rate of 20%
        $multiplicationRatio = 20;
    
        if ($payFrequency == 3) {
            $multiplicationRatio = 10;
        } elseif ($payFrequency == 2) {
            $multiplicationRatio = 11;
        } elseif ($payFrequency == 1) {
            $multiplicationRatio = 12;
        } elseif ($payFrequency == 4) {
            $multiplicationRatio = 15;
        }
    
        switch ($LoanAmount) {
            case 500:
                return $LoanAmount + (14 * $multiplicationRatio);
            case 1000:
                return $LoanAmount + (22 * $multiplicationRatio);
            case 1500:
                return $LoanAmount + (36 * $multiplicationRatio);
            case 2000:
                return $LoanAmount + (55 * $multiplicationRatio);
            case 2500:
                return $LoanAmount + (60 * $multiplicationRatio);
            case 3000:
                return $LoanAmount + (64 * $multiplicationRatio);
            case 3500:
                return $LoanAmount + (75 * $multiplicationRatio);
            case 4000:
                return $LoanAmount + (80 * $multiplicationRatio);
            case 4500:
                return $LoanAmount + (85 * $multiplicationRatio);
            case 5000:
                return $LoanAmount + (90 * $multiplicationRatio);
            default:
                return $LoanAmount + (20 * $multiplicationRatio); // Default value
        }
    }
    public function pay_frequency_convert($pay_frequency):string {
        if ($pay_frequency == 1) {
            return strtoupper("Weekly");
        } elseif ($pay_frequency == 2) {
            return strtoupper("Fortnightly");
        } elseif ($pay_frequency == 3) {
            return strtoupper("Monthly");
        } elseif ($pay_frequency == 4) {
            return strtoupper("Other");
        }
    }
    public function analyzeLoan(): string{
        try{
            $user = array();
            $loans = array();
            echo "<pre>";

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $ReasonforLoan = $_POST['ReasonforLoan'];
                $loans['Reason_for_loan'] = $ReasonforLoan; 
                $more_information =$_POST['more_information'];
                $loans['More_info'] = $more_information; 
                $Loan_Amount = $_POST['Loan_Amount'];
                $loans['Loan_amount'] = $more_information; 
                $pay_frequency = (int)$_POST['pay_frequency'];
                $loans['Pay_frequency'] = $pay_frequency;

                // $user_name_initials = $_POST['user_name_initials'];
                $FirstName = $_POST['FirstName'];
                $user['First_name']= $FirstName;
                $MiddleName = $_POST['MiddleName'];
                $user['Middle_name']= $FirstName;
                $LastName = $_POST['LastName'];
                $user['Last_name']= $FirstName;


                $DateOfBirth = $_POST['DateOfBirth'];
                $user['Date_of_birth'] = $DateOfBirth;
                $MobileNumber = (string)$_POST['MobileNumber'];
                $user['Mobile_no'] = $MobileNumber;
                $userEmail = $_POST['Email'];
                $user['Email'] = $userEmail;
                
                $Password = $_POST['Password'];
                $user['Password'] = $Password;
                $confPassword = $_POST['confPassword'];
                # Employment Details
                $Employment_Status = $_POST['Employment_Status'];
                $user['Employment_status'] = $Employment_Status;
                $Annual_Gross_Income = (int)$_POST['Annual_Gross_Income'];
                $user['Annual_Income'] = $Annual_Gross_Income;
                # Expenses Details
                $Total_expenses = $_POST['Total_expenses'];
                $user['Total_expenses'] = $Total_expenses;
                $loans['Total_expenses'] = $Total_expenses;
                # Confirm Your Contact Details
                $user_street_name = $_POST['user_street_name'];
                $user['Street_name'] = $user_street_name;
                $user_address_suburb = $_POST['user_address_suburb'];
                $user['Suburb'] = $user_address_suburb;
                $user_address_postcode = $_POST['user_address_postcode'];
                $user['Pin_code'] = $user_address_postcode;
                
                $user_city = $_POST['user_city'];
                $user['city'] = $user_city;
                $user_country = $_POST['user_country'];
                $user['country'] = $user_country;
                $user_state = $_POST['user_state'];
                $user['State'] = $user_state;
                # Your Employer Information
                $Employer_name = $_POST['Employer_name'];
                $user['Employer_name'] = $Employer_name;
                $loans['Employer_name'] = $Employer_name;
                # I Confirm
                $IcanConfirm = $_POST['IcanConfirm'];
                $user['Confirm_terms_and_conditions'] = $IcanConfirm;
                $loans['Confirm_t_and_c'] = $IcanConfirm;

                
                $user['User_type'] = 1;
                $an_id = sprintf('%018x', random_int(0, (int)(pow(16, 18) - 1)));
                $Loan_Amount = (int)$Loan_Amount;
                $total_repayment_amount__c = $this -> calculateRepayentAmout($Loan_Amount,$pay_frequency); 
                // print("This is request.form",request.form)
                $extract_Random_record = $this -> make_Random_payload($Loan_Amount,$pay_frequency,$Annual_Gross_Income,$Total_expenses,$total_repayment_amount__c);
                unset($extract_Random_record['id']);
                // print_r($extract_Random_record);
                // print_r($extract_Random_record);
                $extract_Random_record["Summary_Income__c"]         = $Annual_Gross_Income;
                $extract_Random_record["Summary_Expenses__c"]       = (int)$Total_expenses;
                $extract_Random_record["Loan_Amount__c"]            = (int)$Loan_Amount;
                $extract_Random_record["Total_Repayment_Amount__c"] = $total_repayment_amount__c;
                // echo "<pre>";
                // echo strpos('this_date', 'date');
                foreach ($extract_Random_record as $key => $val) {
                    
                    if (strpos($key, 'date') && $val ==0) {
                        
                        $extract_Random_record[$key] = '';
                        
                    } elseif (is_float($val) ) {
                        $extract_Random_record[$key] = (int)$val;
                    }
                }
                $opportunitySense = $extract_Random_record; //If Needed we can shift this line before the loop to prevent the faulty dates addition.
                $url = "https://brave-hawk-6yrll5-dev-ed.trailblaze.my.salesforce-sites.com/services/apexrest/Form/Data/";
                $payload = [
                    "first_name" => $FirstName,
                    "last_name" => $LastName,
                    "email" => $userEmail,
                    "mobile"=> $MobileNumber,
                    "pay_frequency" => $this -> pay_frequency_convert($pay_frequency),
                    "loan_reason" => $ReasonforLoan,
                    "amount" => $Loan_Amount,
                    "opp_fields" => $extract_Random_record
                ];
                $jsonPayload = json_encode($payload,JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
                $this->loan->add_loans($loans,$user,$opportunitySense);
                

                // Initialize cURL session
                $ch = curl_init($url);

                // Set cURL options
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                ]);

                // Execute cURL session and get the response
                $response_from_salesforce_server = json_decode( curl_exec($ch));
                print_r($response_from_salesforce_server);
                die;
                if ($response_from_salesforce_server->success) {
                    header("Location: /creditsense", true, 302);
                    exit; 
                }
            }
            return view("someissues");
        }
        catch(Exception $e) {
            return view("someissues");
        }
    }

    // function custom_json_encode($data) {
    //     return json_encode($data, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
    // }
    public function creditSense(): string{
        
        return view('creditSense1',['title' => "creditSense"]);
    }
    public function allbanks(){
        $db = \Config\Database::connect(); // This is optional, but you can use it to get a database instance directly
        $query = $db->query('SELECT bankname FROM Banks');
        $result = $query->getResultArray();
        // echo "<pre>";
      
        $outputArray = array();

        foreach ($result as $item) {
            if (isset($item['bankname'])) {
                $outputArray[] = $item['bankname'];
            }
        }
        // print_r($outputArray);
        $this->response->setContentType('application/json');

        // Send the JSON response
        return $this->response->setJSON(['bank'=>$outputArray]);
        // return $outputArray;
        

    }

    public function loanProcessHolding():string{
        return view("thanks");
    }
    
}
