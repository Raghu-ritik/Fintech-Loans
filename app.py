 # using flask_restful
from flask import Flask, jsonify, request, render_template

import mysql.connector
from sklearn.preprocessing import LabelEncoder
import pandas as pd  # Importing the pandas library for data manipulation and analysis
import numpy as np  # Importing the numpy library for numerical operations
import pickle  # Importing the pickle module for object serialization
import json
import random
import requests
import config

# creating the flask app
app = Flask(__name__)
app.static_folder = 'static'

def Connect_with_db_get_df():
    connection = mysql.connector.connect(
        host='localhost',
        user='ritik',
        password='MRpark@1234',
        database='MR_MT_DB'
    )

    # Create a cursor
    cursor = connection.cursor()

    # Execute a query
    query = "SELECT * FROM TireData"
    cursor.execute(query)

    # Fetch all rows
    rows = cursor.fetchall()

    # Get column names
    column_names = [i[0] for i in cursor.description]

    # Create a DataFrame
    df_raw = pd.DataFrame(rows, columns=column_names)

    # Close the cursor and connection
    cursor.close()
    connection.close()

    # Display the DataFrame
    return df_raw
 

 




@app.route('/')
def main_methods():
    return render_template('index.html')

@app.route('/applyLoan')
def applyloans_methods():
    return render_template('applyLoan_view.html')

def calculateRepayentAmout(LoanAmout,pay_frequency):
    # I have assumed an average interest rate of 20%
    multiplication_ratio = 10
    
    if pay_frequency == 3:
        multiplication_ratio = 10
    elif pay_frequency == 2: 
        multiplication_ratio = 11
    elif pay_frequency == 1:
        multiplication_ratio = 12
    elif pay_frequency == 4:
        multiplication_ratio = 15
    else:
        multiplication_ratio = 20

    if LoanAmout == 500:
        return LoanAmout + (14*multiplication_ratio)  
    elif LoanAmout == 1000:
        return LoanAmout + (22 * multiplication_ratio)     
    elif LoanAmout == 1500:
        return LoanAmout + (36 * multiplication_ratio)     
    elif LoanAmout == 2000:
        return LoanAmout + (55 * multiplication_ratio)
    elif LoanAmout == 2500:
        return LoanAmout + (60 * multiplication_ratio)
    elif LoanAmout == 3000:
        return LoanAmout + (64 * multiplication_ratio)
    elif LoanAmout == 3500:
        return LoanAmout + (75 * multiplication_ratio)
    elif LoanAmout == 4000:
        return LoanAmout + (80 * multiplication_ratio)
    elif LoanAmout == 4500:
        return LoanAmout + (85 * multiplication_ratio)
    elif LoanAmout == 5000:
        return LoanAmout + (90 * multiplication_ratio)
    
def make_request(method, url, headers=None, payload=None):
    if headers is None:
        headers = {}
    payload = json.loads(payload)
    print("This is Inside Fucntion payload ",payload)
    response = requests.request(method, url, headers=headers, json=payload)
    try:
        return response.json()
    except :
        return {
            "ErrorCode" : "500",
            "Error Message":"could not able to convert response into json" 
        }

def pay_frequency_convert(pay_frequency):
    if pay_frequency==1:
        return "Weekly".upper()
    elif pay_frequency == 2:
        return "Fortnightly".upper()
    elif pay_frequency == 3:
        return "Monthly".upper()
    elif pay_frequency == 4:
        return "Other".upper()

def Loan_reason_convert(Loan_reason):
    if Loan_reason==0:
        return "Car Expenses"
    elif Loan_reason == 1:
        return "Insurance"
    elif Loan_reason == 2:
        return "Medical"
    elif Loan_reason == 3:
        return "Product Purchase"


def make_Random_payload(Loan_Amount,pay_frequency,Annual_Gross_Income,Total_expenses,total_repayment_amount__c):
    filename = f"static/Credit_sense_data/Loan_{Loan_Amount}.csv"
    df = pd.read_csv(filename)
    if pay_frequency == 3:
        max_repayment_amount = calculateRepayentAmout(Loan_Amount,2)
    elif pay_frequency == 2:
        max_repayment_amount = calculateRepayentAmout(Loan_Amount,1)
    elif pay_frequency == 1:
        max_repayment_amount = calculateRepayentAmout(Loan_Amount,4)
    elif pay_frequency == 4:
        max_repayment_amount = calculateRepayentAmout(Loan_Amount,-1)
    
    df.fillna(0,inplace=True)
    df = df[(df["Loan_Amount__c"]==Loan_Amount) & (df["DP_Primary_income_frequency__c"]==pay_frequency) & ((df["Total_Repayment_Amount__c"] >= total_repayment_amount__c) & (df["Total_Repayment_Amount__c"] <= max_repayment_amount) ) ]
    df = df.sample()
    return df.to_dict('records')[0]  




@app.route('/analyzeLoan', methods=['POST'])
def analyze_loan(): 
    if request.method == 'POST':
        # Your Loan
        ReasonforLoan = int(request.form.get('ReasonforLoan'))
        more_information = request.form.get('more_information')
        Loan_Amount = request.form.get('Loan_Amount')
        pay_frequency = int(request.form.get('pay_frequency'))
        # About You
        user_name_initials = request.form.get('user_name_initials')
        FirstName = request.form.get('FirstName')
        MiddleName = request.form.get('MiddleName')
        LastName = request.form.get('LastName')

        DateOfBirth = request.form.get('DateOfBirth')
        MobileNumber = request.form.get('MobileNumber')
        userEmail = request.form.get('workEmail')
        
        Password = request.form.get('Password')
        confPassword = request.form.get('confPassword')
        # Employment Details
        Employment_Status = request.form.get('Employment_Status')
        Annual_Gross_Income = int(request.form.get('Annual_Gross_Income'))
        # Expenses Details
        Total_expenses = request.form.get('Total_expenses')
        # Confirm Your Contact Details
        user_street_name = request.form.get('user_street_name')
        user_address_suburb = request.form.get('user_address_suburb')
        user_address_postcode = request.form.get('user_address_postcode')
        
        user_city = request.form.get('user_city')
        user_state = request.form.get('user_state')
        # Your Employer Information
        Employer_name = request.form.get('Employer_name')
        # I Confirm
        IcanConfirm = request.form.get('IcanConfirm')
        IhaveReviewed = request.form.get('IhaveReviewed')
        IhaveRead = request.form.get('IhaveRead')
        print("This is rrequest.form",request.form)

   

    an_id = f'{random.randrange(16**18):018x}'
    Loan_Amount = int(Loan_Amount)
    total_repayment_amount__c = calculateRepayentAmout(Loan_Amount,pay_frequency)


    extract_Random_record = make_Random_payload(Loan_Amount,pay_frequency,Annual_Gross_Income,Total_expenses,total_repayment_amount__c)
    del extract_Random_record['id']
    extract_Random_record["Summary_Income__c"]         = Annual_Gross_Income
    extract_Random_record["Summary_Expenses__c"]       = int(Total_expenses)
    extract_Random_record["Loan_Amount__c"]            = int(Loan_Amount)
    extract_Random_record["Total_Repayment_Amount__c"] = total_repayment_amount__c
    for key,val in extract_Random_record.items():
        if ("date" in  key) and extract_Random_record[key] == 0:
            extract_Random_record[key] = ""
        elif type(val) == type(3.4):
            extract_Random_record[key] = int(val)
    


    JSONString = {"body":{
    #   'id': str(an_id),
    #   'Opportunity_Origin__c': 'Mindruby',
    #   'DNB_Scoring_Rate__c': '',
    #   'Current_Balance__c': '',
    #   'Applicant_Type__c': 'Existing Client-Granted Loan Before',
    #   'Opp_number__C': '6316542',
    #   'Multiple_Lenders_Hardship__c': '10.96',
    #   'income_as_a_of_DP200_income__c': '86.0',
    #   'Deposit_spent_on_DOD__c': '24.9',
    #   'DP_Monthly_avg_of_SACC_repayments__c': '586',
    #   'Monthly_ongoing_financial_commitments__c': '88.39',
    #   'DP_Primary_income_frequency__c': pay_frequency,
    #   'DP_Primary_income_last_pay_date__c': '09/08/2023',
    #   'DP_enders_with_uncleared_dishonours_233__c': '0',
    #   'Primary_regular_benefit_frequency__c': '4',
    #   'Last_pay_date_for_largest_inc_src_302__c': '17/08/2023',
    #   'Largest_income_source_day_of_week__c': '4',
    #   'Next_pay_date_for_largest_income_source__c': '',
    #   'Frequency_for_largest_income_source__c': '4',
    #   'Primary_regular_benefit_last_pay_date__c': '17/08/2023',
    #   'loan_dishonours__c': '0',
    #   'Primary_regular_benefit_monthly_amount__c': '1094.9366',
    #   'Courts_and_Fines_transactions__c': '0',
    #   'Total_monthly_income_ongoin_Reg_231__c': '1311.6032',
    #   'DP_Total_Monthly_Benefit_Income__c': '2071',
    #   'DP_Dishonours_Across_Primary_Acct_244__c': '0',
    #   'DP_No_Direct_Debits_On_Primary_Acct_355__c': '3',
    #   'DP_Budget_Management_Services__c': '0',
    #   'Hardship_Indicator_Gambling__c': '27.12',
    #   'DP_Monthly_rent_amount_236__c': '0',
    #   'Amount_of_SACC_commitments_due__c': '0',
    #   'Largest_income_Src_Avg_freq__c': '1094.9366',
    #   'Largest_income_Src_last_payment_amt__c': '967.9',
    #   'Deposits_since_last_SACC_dishonour__c': '9',
    #   'SACC_commitments_due_next_month__c': '0',
    #   'Total_monthly_credits__c': '2408',
    #   'agency_collection_providers__c': '0',
    #   'Collection_agency_transactions__c': '0',
    #   'Average_monthly_amount_of_Courts_and_Fin__c': '0',
    #   'Courts_and_Fines_providers__c': '0',
    #   'income_DP200_spend_on_high_risk_merch__c': '12.33',
    #   'most_recent_loan_has_no_repayments__c': '0',
    #   'Deposits_since_last_dishonour__c': '9',
    #   'Income_source_is_other_income_549__c': '0',
    #   'Bank_Report_Gov_Benefit__c': '1',
    #   'Income_source_is_a_government_benefit__c': '1',
    #   'Summary_Income__c': Annual_Gross_Income,
    #   'Summary_Expenses__c': Total_expenses,
    #   'Rent_Mortgage__c': '150',
    #   'Summary_Total__c': '1049.64',
    #   'Loan_Amount__c': f"${Loan_Amount}",
    #   'Total_Repayment_Amount__c': total_repayment_amount__c
    }}
    {
        # json_object = json.dumps(JSONString)
        # Requesting the server for the Data
        # headers = {}
        # method = "POST"
        # url = 'https://bd8gizd4mg.execute-api.us-east-1.amazonaws.com/prod'
        # headers['x-api-key'] = config.SERVER_API_KEY
        # response_from_server = {}
        # response_from_server = make_request(method,url,headers,payload=json_object)
    }


    #requsting the Salesforce server for Oppportunity generation
    URL = "https://brave-hawk-6yrll5-dev-ed.trailblaze.my.salesforce-sites.com/services/apexrest/Form/Data/"
    print("This is user email",userEmail)
    payload = {
        "first_name":f"{FirstName}",
        "last_name":f"{LastName}",
        "email":f"{userEmail}",
        "mobile":f"{MobileNumber}",
        "pay_frequency":f"{pay_frequency_convert(pay_frequency)}",
        "loan_reason":f"{Loan_reason_convert(ReasonforLoan)}",
        "amount":Loan_Amount,
        "opp_fields" :  extract_Random_record
    }
    method = "POST"
    payload = json.dumps(payload)  
    response_from_salesforce_server = {}
    response_from_salesforce_server = make_request(method=method,url= URL,payload=payload)

    return {"FormData":request.form,"payload_QueryString":payload,"response_from_salesforce_server":response_from_salesforce_server}

@app.route('/creditsense')
def creditsense_info():
    return render_template('credit_sense_1.html')


if __name__ == '__main__':
    app.run(debug=True)


 