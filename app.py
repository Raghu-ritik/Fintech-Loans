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
    else:
        multiplication_ratio = 15

    if LoanAmout == 500:
        return LoanAmout + (14*multiplication_ratio)  
    elif LoanAmout == 1000:
        return LoanAmout + (20 * multiplication_ratio)     
    elif LoanAmout == 1500:
        return LoanAmout + (35 * multiplication_ratio)     
    elif LoanAmout == 2000:
        return LoanAmout + (55 * multiplication_ratio)
    elif LoanAmout == 2500:
        return LoanAmout + (60 * multiplication_ratio)
    elif LoanAmout == 3000:
        return LoanAmout + (66 * multiplication_ratio)
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
    response = requests.request(method, url, headers=headers, json=payload)
    try:
        return response.json()
    except :
        return {
            "ErrorCode" : "500",
            "Error Message":"could not able to convert response into json" 
        }


@app.route('/analyzeLoan', methods=['POST'])
# @app.route('/post-using-form', methods=['GET', 'POST'])
def analyze_loan(): 
    print(request.method)
    if request.method == 'POST':
        print("This is an POST request!")
        # Your Loan
        ReasonforLoan = request.form.get('ReasonforLoan')
        more_information = request.form.get('more_information')
        Loan_Amount = request.form.get('Loan_Amount')
        pay_frequency = request.form.get('pay_frequency')
        # About You
        user_name_initials = request.form.get('user_name_initials')
        FirstName = request.form.get('FirstName')
        MiddleName = request.form.get('MiddleName')
        LastName = request.form.get('LastName')

        DateOfBirth = request.form.get('DateOfBirth')
        MobileNumber = request.form.get('MobileNumber')
        workEmail = request.form.get('workEmail')
        
        ReEnterWorkEmail = request.form.get('ReEnterWorkEmail')
        Password = request.form.get('Password')
        confPassword = request.form.get('confPassword')
        # Employment Details
        Employment_Status = request.form.get('Employment_Status')
        Annual_Gross_Income = request.form.get('Annual_Gross_Income')
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

        print(FirstName,MiddleName,LastName)
        print(request.form)

   

    an_id = f'{random.randrange(16**18):018x}'
    Loan_Amount = int(Loan_Amount)
    total_repayment_amount__c = calculateRepayentAmout(Loan_Amount,pay_frequency)

    JSONString = {"body":{
      'id': str(an_id),
      'Opportunity_Origin__c': 'MoneySpot',
      'DNB_Scoring_Rate__c': '',
      'Current_Balance__c': '',
      'Applicant_Type__c': 'Existing Client-Granted Loan Before',
      'Opp_number__C': '6316542',
      'Multiple_Lenders_Hardship__c': '10.96',
      'income_as_a_of_DP200_income__c': '86.0',
      'Deposit_spent_on_DOD__c': '24.9',
      'DP_Monthly_avg_of_SACC_repayments__c': '586',
      'Monthly_ongoing_financial_commitments__c': '88.39',
      'DP_Primary_income_frequency__c': pay_frequency,
      'DP_Primary_income_last_pay_date__c': '09/08/2023',
      'DP_enders_with_uncleared_dishonours_233__c': '0',
      'Primary_regular_benefit_frequency__c': '4',
      'Last_pay_date_for_largest_inc_src_302__c': '17/08/2023',
      'Largest_income_source_day_of_week__c': '4',
      'Next_pay_date_for_largest_income_source__c': '',
      'Frequency_for_largest_income_source__c': '4',
      'Primary_regular_benefit_last_pay_date__c': '17/08/2023',
      'loan_dishonours__c': '0',
      'Primary_regular_benefit_monthly_amount__c': '1094.9366',
      'Courts_and_Fines_transactions__c': '0',
      'Total_monthly_income_ongoin_Reg_231__c': '1311.6032',
      'DP_Total_Monthly_Benefit_Income__c': '2071',
      'DP_Dishonours_Across_Primary_Acct_244__c': '0',
      'DP_No_Direct_Debits_On_Primary_Acct_355__c': '3',
      'DP_Budget_Management_Services__c': '0',
      'Hardship_Indicator_Gambling__c': '27.12',
      'DP_Monthly_rent_amount_236__c': '0',
      'Amount_of_SACC_commitments_due__c': '0',
      'Largest_income_Src_Avg_freq__c': '1094.9366',
      'Largest_income_Src_last_payment_amt__c': '967.9',
      'Deposits_since_last_SACC_dishonour__c': '9',
      'SACC_commitments_due_next_month__c': '0',
      'Total_monthly_credits__c': '2408',
      'agency_collection_providers__c': '0',
      'Collection_agency_transactions__c': '0',
      'Average_monthly_amount_of_Courts_and_Fin__c': '0',
      'Courts_and_Fines_providers__c': '0',
      'income_DP200_spend_on_high_risk_merch__c': '12.33',
      'most_recent_loan_has_no_repayments__c': '0',
      'Deposits_since_last_dishonour__c': '9',
      'Income_source_is_other_income_549__c': '0',
      'Bank_Report_Gov_Benefit__c': '1',
      'Income_source_is_a_government_benefit__c': '1',
      'Summary_Income__c': '0',
      'Summary_Expenses__c': Total_expenses,
      'Rent_Mortgage__c': '150',
      'Summary_Total__c': '1049.64',
      'Loan_Amount__c': f"${Loan_Amount}",
      'Total_Repayment_Amount__c': total_repayment_amount__c
    }}

    json_object = json.dumps(JSONString)  
    # Requesting the server for the Data
    headers = {}
    method = "POST"
    url = 'https://bd8gizd4mg.execute-api.us-east-1.amazonaws.com/prod'
    headers['x-api-key'] = config.SERVER_API_KEY
    response_from_server = make_request(method,url,headers,payload=json_object)

    return {"FormData":request.form,"QueryString":json_object,"response":response_from_server}

@app.route('/creditsense')
def creditsense_info():
    return render_template('credit_sense_1.html')


if __name__ == '__main__':
    app.run(debug=True)


 