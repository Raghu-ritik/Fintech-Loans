 # using flask_restful
from flask import Flask, jsonify, request, render_template

import mysql.connector
from sklearn.preprocessing import LabelEncoder
import pandas as pd  # Importing the pandas library for data manipulation and analysis
import numpy as np  # Importing the numpy library for numerical operations
import pickle  # Importing the pickle module for object serialization
import json
import random




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


@app.route('/n_months_predictions/', methods=['GET'])
def get_n_months_predictions():
    n_months_param = request.args.get('months')
    df_raw = Connect_with_db_get_df()
    raw_unique_all_Tire_ids = df_raw['Vehicle_Asset_Number'].unique()
    ThresholdTread = 1.6
    result_prediction = []
    for val in raw_unique_all_Tire_ids:
        # Extract the number of months from the payload 
        # Filter the 'df_raw' DataFrame for the current Tire ID
        # Calculate the average kilometers driven per month for the current Tire ID
        # Estimate the kilometers to be driven in the next 'N_months' based on the average
        # Predict the total kilometers driven after 'N_months'
        
        N_months = int(n_months_param)
        df = df_raw.loc[df_raw['Vehicle_Asset_Number'] == val].copy()
        avg_km_driven_p_month = (max(df['Km_driven'])+min(df['Km_driven']))/df.shape[0]
        km_for_next_n_month = N_months*avg_km_driven_p_month
        Predict_kms = max(df['Km_driven'])+km_for_next_n_month
        # Initialize a LabelEncoder instance
        # Apply label encoding to columns in the DataFrame
        le = LabelEncoder()
        df[['Country']] = df[['Country']].apply(lambda col1: le.fit_transform(col1))
        df[['Tire_Company']] = df[['Tire_Company']].apply(lambda col2: le.fit_transform(col2))
        df[['Site_Name']] = df[['Site_Name']].apply(lambda col2: le.fit_transform(col2))
        df[['Vehicle_Asset_Number']] = df[['Vehicle_Asset_Number']].apply(lambda col4: le.fit_transform(col4))
        df[['Tire Model']] = df[['Tire Model']].apply(lambda col5: le.fit_transform(col5))
        df[['Tire_Asset_Number']] = df[['Tire_Asset_Number']].apply(lambda col6: le.fit_transform(col6))
        df[['Road_Condition']] = df[['Road_Condition']].apply(lambda col9: le.fit_transform(col9))   
        
        df['Km_driven'] = pd.to_numeric(df['Km_driven'], errors='coerce')
        df['Tire_Tread'] = pd.to_numeric(df['Tire_Tread'], errors='coerce')
        df['Tire Model'] = pd.to_numeric(df['Tire Model'], errors='coerce')
        # Prepare the features (X) and target (y) for regression prediction
        X=df.drop(['Tire_Tread'],axis=1)
        y=df['Tire_Tread']
        # Take the first row of features and update the 'Km_driven' value with the predicted kilometers
        X = X.iloc[:1,:].copy()
        X = X.reset_index()
        X = X.drop("index",axis=1)
        X.at[0,'Km_driven']= float("% .2f"% Predict_kms)
        # Load the saved regression model
        with open('model_multi_linear.pkl', 'rb') as model:
            model = pickle.load(model)
            predicted_Tread = model.predict(X)
            need_to_replace = True if predicted_Tread < ThresholdTread else False
            json_dump = json.dumps({'Predicted_tread':predicted_Tread ,'N_months':N_months,'Predict_kms':float("% .2f"% Predict_kms),'Need_to_replace':need_to_replace}, cls=NumpyEncoder)  
        result_prediction.append({str(val):json_dump})   
    return {
        'statusCode': 200,
        'body': result_prediction,
        'data': "Results"
    }



 




@app.route('/')
def main_methods():
    return render_template('index.html')

@app.route('/applyLoan')
def applyloans_methods():
    return render_template('applyLoan_view.html')

def calculateRepayentAmout(LoanAmout):
    # I have assumed an average interest rate of 20%
    return ((int(LoanAmout)/10)*2)

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
        User_Address = request.form.get('User_Address')
        
        user_unit = request.form.get('user_unit')
        user_street = request.form.get('user_street')
        user_street_name = request.form.get('user_street_name')
        
        user_street_type = request.form.get('user_street_type')
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

    if pay_frequency == "payFrequency_Weekly":
        Frequency_for_largest_income_source__c = 7
    elif pay_frequency == "payFrequency_fornightly":
        Frequency_for_largest_income_source__c = 1
    elif pay_frequency == "payFrequency_monthly":
        Frequency_for_largest_income_source__c = 30
    else:
        Frequency_for_largest_income_source__c = 4

    an_id = f'{random.randrange(16**18):018x}'
    print(an_id)
    total_repayment_amount__c = calculateRepayentAmout(Loan_Amount)

    JSONString = f'
    {
      "id": "{an_id}",
      "Opportunity_Origin__c": "MoneySpot",
      "DNB_Scoring_Rate__c": "",
      "Current_Balance__c": "",
      "Applicant_Type__c": "Existing Client-Granted Loan Before",
      "Opp_number__C": "6316542",
      "Multiple_Lenders_Hardship__c": "10.96",
      "income_as_a_of_DP200_income__c": "86.0",
      "Deposit_spent_on_DOD__c": "24.9",
      "DP_Monthly_avg_of_SACC_repayments__c": "586",
      "Monthly_ongoing_financial_commitments__c": "88.39",
      "DP_Primary_income_frequency__c": "4",
      "DP_Primary_income_last_pay_date__c": "09/08/2023",
      "DP_enders_with_uncleared_dishonours_233__c": "0",
      "Primary_regular_benefit_frequency__c": "4",
      "Last_pay_date_for_largest_inc_src_302__c": "17/08/2023",
      "Largest_income_source_day_of_week__c": "4",
      "Next_pay_date_for_largest_income_source__c": "",
      "Frequency_for_largest_income_source__c": "4",
      "Primary_regular_benefit_last_pay_date__c": "17/08/2023",
      "loan_dishonours__c": "0",
      "Primary_regular_benefit_monthly_amount__c": "1094.9366",
      "Courts_and_Fines_transactions__c": "0",
      "Total_monthly_income_ongoin_Reg_231__c": "1311.6032",
      "DP_Total_Monthly_Benefit_Income__c": "2071",
      "DP_Dishonours_Across_Primary_Acct_244__c": "0",
      "DP_No_Direct_Debits_On_Primary_Acct_355__c": "3",
      "DP_Budget_Management_Services__c": "0",
      "Hardship_Indicator_Gambling__c": "27.12",
      "DP_Monthly_rent_amount_236__c": "0",
      "Amount_of_SACC_commitments_due__c": "0",
      "Largest_income_Src_Avg_freq__c": "1094.9366",
      "Largest_income_Src_last_payment_amt__c": "967.9",
      "Deposits_since_last_SACC_dishonour__c": "9",
      "SACC_commitments_due_next_month__c": "0",
      "Total_monthly_credits__c": "2408",
      "agency_collection_providers__c": "0",
      "Collection_agency_transactions__c": "0",
      "Average_monthly_amount_of_Courts_and_Fin__c": "0",
      "Courts_and_Fines_providers__c": "0",
      "income_DP200_spend_on_high_risk_merch__c": "12.33",
      "most_recent_loan_has_no_repayments__c": "0",
      "Deposits_since_last_dishonour__c": "9",
      "Income_source_is_other_income_549__c": "0",
      "Bank_Report_Gov_Benefit__c": "1",
      "Income_source_is_a_government_benefit__c": "1",
      "Summary_Income__c": "0",
      "Summary_Expenses__c": "{Total_expenses}",
      "Rent_Mortgage__c": "150",
      "Summary_Total__c": "1049.64",
      "Loan_Amount__c": "${Loan_Amount}",
      "Total_Repayment_Amount__c": "{total_repayment_amount__c}"
    }'








    return {"FormData":request.form,"QueryString":JSONString}


if __name__ == '__main__':
    app.run(debug=True)


 