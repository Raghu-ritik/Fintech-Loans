<?php $this->extend('admin/admintemplate') ?>
<?php $this->section('content') ?>


  <nav class="navbar navbar-default navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header d-flex justify-content-between">
       <div class="d-flex">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="images/menu-left.png" alt="">
        </button>
  
        <a class="navbar-brand  text-uppercase text-dark-primary" href="<?=base_url("dashboard") ?>"><img src="images/money-bag.png" class="img-fluid" alt=""> <b>Fintech</b> Loans</a>

       </div>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse lateral-left" id="bs-example-navbar-collapse-1">
  
   
     
        <div class="navbar-nav ms-auto">
        <div class="d-flex align-items-center">
              <a href="<?= base_url("profile") ?>" ><img src="images/user.svg" class="pe-2" alt=""></a>
              <span class="d-flex flex-column pl-2 phone-none">
                  <p class="mb-0 text-white fs-16 fw-bolder"><?= $data['login_user_detail']->username ?></p>
                  <p class="mb-0 text-white fs-14 text-light"><?php if($data['login_user_detail']->user_type==99){echo "System Admin";}else{echo "Loan user";} ?></p>
              </span>
              <a href="<?= base_url("logout") ?>" ><span><img src="images/sign-out.png" class="img-fluid sign-out" alt=""></span></a>
    
          </div>
      </div>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



<section class="pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        Opportunity<br>
        <?php echo $opportunity->user_detail->first_name ?> <?php echo $opportunity->user_detail->last_name ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-3">
            Account Name<br>
            <?php echo $opportunity->user_detail->first_name ?> <?php echo $opportunity->user_detail->last_name ?> 
          </div>
          <div class="col-md-3">
            Close Date<br>
            ??/??/????
          </div>
          <div class="col-md-3">
            Amount<br>
            $<?php echo $opportunity->Loan_amount ?>
          </div>
          <div class="col-md-3">
            Opportunity Owner<br>
            Admin admin
          </div>

        </div>
      </div>
    </div>
  
  </div>



  <div class="container-fluid">
    <div class="row g-6">

        <div class="col-md-8   col-12">

            <div class="accordion" id="accordionExample">
                <div >
                    <div class="accordion-body">
                        <div class="row p-2">
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Contact</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly"  placeholder="<?php echo $opportunity->user_detail->first_name ?> <?php echo $opportunity->user_detail->last_name ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Amount</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="$<?php echo $opportunity->Loan_amount ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Opportunity Owner</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="Admin">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Expected Revenue</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->user_detail->first_name ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Opportunity Name </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->user_detail->first_name ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Close Date </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->close_date ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Account Name </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->user_detail->first_name ?> <?php echo $opportunity->user_detail->last_name ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Next Step </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Type </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Applicant_Type__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">stage </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->user_detail->userID ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Reason for Loan </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->Reason_for_loan ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-12">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">LoanId </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->user_detail->first_name ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-12">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Opportunity Origin </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Opportunity_Origin__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-12">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DNB Scoring Rate </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DNB_Scoring_Rate__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-12">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Current Balance </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Current_Balance__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-12">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Applicant type </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Applicant_Type__c ?>">
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       Loan Details <span><img src="images/edit.png" class="img-fluid edit-img" alt=""></span>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row p-2">
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Pay Frequency</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->Pay_frequency ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Summary Total</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Summary_Total__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Total Repayment Amount</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Total_Repayment_Amount__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Rent Mortage</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Rent_Mortgage__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Loan Amount</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Loan_Amount__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Summary Expenses</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Summary_Expenses__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Income Source is government benefit</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Income_source_is_a_government_benefit__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Summary Income</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Summary_Income__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Income Source is other income</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Income_source_is_other_income_549__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Bank Report Gov Benefit</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Bank_Report_Gov_Benefit__c ?>">
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       Other Details <span><img src="images/edit.png" class="img-fluid edit-img" alt=""></span>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row p-2">
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Deposits since last dishonour</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Deposits_since_last_dishonour__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">most recent loan has no repayment</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->most_recent_loan_has_no_repayments__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Largest income Src Avg freq</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Largest_income_Src_Avg_freq__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">income Dp200 spend on high risk merch</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->income_DP200_spend_on_high_risk_merch__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Largest income Src last payment amt</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Largest_income_Src_last_payment_amt__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Courts and fines providers</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Courts_and_Fines_providers__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Deposits since last SACC dishonour</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Deposits_since_last_SACC_dishonour__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Average monthly amounts of courts and fin</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Average_monthly_amount_of_Courts_and_Fin__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Deposits since last SACC dishonour</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Deposits_since_last_dishonour__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput"> since last dishonour</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Deposits_since_last_dishonour__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">SACC commitments due next month</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->SACC_commitments_due_next_month__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DP Total Monthly Benefit income </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DP_Total_Monthly_Benefit_Income__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Total monthly credits</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Total_monthly_credits__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DP Dishonours Across Primary Acct 244</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DP_Dishonours_Across_Primary_Acct_244__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Aggency Collection providers</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->agency_collection_providers__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DP No Direct Debits On Primary Acct 355 </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DP_No_Direct_Debits_On_Primary_Acct_355__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Collection agency transactions</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Collection_agency_transactions__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">HArdship Indicator Gambling</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Hardship_Indicator_Gambling__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DP Budget Management Services </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DP_Budget_Management_Services__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DP Monthly rent Amount 236</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DP_Monthly_rent_amount_236__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Amount of SACC commitments due</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Amount_of_SACC_commitments_due__c ?>">
                                </div>
                              </form>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Details <span><img src="images/edit.png" class="img-fluid edit-img" alt=""></span>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row p-2">
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DP enders with uncleared dishonours 233</label> DP_enders_with_uncleared_dishonours_233_c
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DP_enders_with_uncleared_dishonours_233__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Opp number</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Opp_number__C ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Primary regular benfit frequnecy</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Primary_regular_benefit_frequency__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Multiple Lenders Hardship</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Multiple_Lenders_Hardship__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Last pay date for Largest inc Src 302</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" 
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Last_pay_date_for_largest_inc_src_302__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Deposits spent of DOD</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Deposit_spent_on_DOD__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Next pay date for largest income source</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" 
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Next_pay_date_for_largest_income_source__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DP Monthly avg of SAAC repayments</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DP_Monthly_avg_of_SACC_repayments__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Frequency of the largest income source </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" 
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Frequency_for_largest_income_source__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput"> Monthly ongoing financial commitments</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Monthly_ongoing_financial_commitments__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Primary regular benefits last pay date </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" 
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Primary_regular_benefit_last_pay_date__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DP primary income frequnecy </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DP_Primary_income_frequency__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Primary regular benfit monthly amount</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" 
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Primary_regular_benefit_monthly_amount__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">DP Primary Income last pay date </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->DP_Primary_income_last_pay_date__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">loan dishonours</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" 
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->loan_dishonours__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Total monthly income ongoin Reg 231</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Total_monthly_income_ongoin_Reg_231__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Courts and fines transactions</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->opportunity->Courts_and_Fines_transactions__c ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Order number </label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" 
                                    readonly="readonly" placeholder="">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Delivery/Installment status</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" 
                                    readonly="readonly" placeholder="">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Tracking number</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput" 
                                    readonly="readonly" placeholder="">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Main Competitor(s)</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Created By</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->Created_on ?>">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Last Modified By</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="<?php echo $opportunity->Updated_on ?>">
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Description</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="">
                                </div>
                              </form>
                            </div>
                            <div class="col-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="formGroupExampleInput">Approval Record</label>
                                  <input type="text" class="form-control opportunity-field" id="formGroupExampleInput"
                                    readonly="readonly" placeholder="">
                                </div>
                              </form>
                            </div>
                    </div>
                  </div>
                </div>
              </div>
     </div>

     <div class="col-md-4 col-12">
       <div class="card p-4">
        <h3> Loan analysis by Flynx      
  
        
        <button  id="refresh_loan_analyze" class="refresh-btn" value="<?php echo $opportunity->opportunity->opp_id ?>"><img class="icon-refresh" src="<?=base_url('images/icon/refresh.png');?>" alt="Checkmark Icon"></button>
      </h3> 
        
        
        <div class="flynx-flex">
            <!-- <p class="muted">readonly="readonly" Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how <a href="#" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.</p> -->
            <div class="circle active circle-Red">
                <button aria-label="Tooltip Right" tooltip-position="right">
                    <span class="text-transparent">Tool </span>
                    <span> <img src="images/circle-i.png" class="img-fluid i-icon" alt=""></span>
                </button>
            </div>

                
              <div class="circle circle-Green">
                <button aria-label="Tooltip Right" tooltip-position="right">
                    <span class="text-transparent">Tool </span>
                    <span> <img src="images/circle-i.png" class="img-fluid i-icon" alt=""></span>
                </button>
              </div>

              <div class="circle circle-Orange">
                <button aria-label="Tooltip Right" tooltip-position="right">
                    <span class="text-transparent">Tool </span>
                    <span> <img src="images/circle-i.png" class="img-fluid i-icon" alt=""></span>
                </button>
              </div>
        </div>

        <p class="bottom-flynx">
            AI powered by Flynx
        </p>
       </div>
     </div>


  </div>

  </div>
</section>


<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

 



<?php $this->endSection() ?>