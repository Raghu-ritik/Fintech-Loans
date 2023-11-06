<?php $this->extend('template') ?>
<?php $this->section('content') ?>
<div class="section mb-4">
  <div class="banner">
    <h1 class="banner-heading">
      Loan Application Form
    </h1>
  </div>
</div>

<section class="p-3 pt-0">
  <form id="applicationForm" name="LoanForm" class="cmxform" onsubmit= "return validateSubmit();" method="POST" action="analyzeLoan">
    <div class="container">
      <!-- <h3 class="text-center text-dark mb-3 text-uppercase">
          Loan Application Form
        </h3> -->
      <div class="row input-row">
        <div class="col-12 p-0">
          <p class="input-heading mb-0 border-bottom">
            Your Loan
          </p>

          <div class="row p-3 pt-0">
            <div class="col-md-4 col-12">
              <div class="form-group mt-3">
                <label for="ReasonForLoan">Reason for your loan 
                  <span class="required">*</span>
                </label>
                <select class="form-select" aria-label="Default select example" id="ReasonForLoan" name="ReasonforLoan">
                  <option value="Car Expenses" selected>Car Expenses</option>
                  <option value="Insurance">Insurance</option>
                  <option value="Medical Expenses">Medical Expenses</option>
                  <option value="Product Purchases">Product Purchases</option>
                </select>
              </div>

            </div>
            <div class="col-md-4 col-12">

              <div class="form-group mt-3">
                <label for="more_information">More Information</label>
                <select class="form-select" aria-label="Default select example" id="more_information"
                  name="more_information">
                  <option selected>Open this select menu</option>
                  <option value="Vehicle Registration">Vehicle Registration</option>
                  <option value="Vehicle Insurance">Vehicle Insurance</option>
                  <option value="Vehicle Repairs">Vehicle Repairs</option>
                  <option value="Vehicle Maintenance (eg Service)">Vehicle Maintenance (eg Service)</option>
                </select>
              </div>

            </div>
            <div class="col-md-4 col-12">
              <div class="form-group mt-3">
                <label for="Loan_Amount">Loan Amount Request</label>
                <select class="form-select" aria-label="Default select example" id="Loan_Amount"
                  name="Loan_Amount">
                  <option >Open this select menu</option>
                  <option value="500">500</option>
                  <option value="1000">1000</option>
                  <option value="1500">1500</option>
                  <option value="2000" selected>2000</option>
                  <option value="2500">2500</option>
                  <option value="3000">3000</option>
                  <option value="3500">3500</option>
                  <option value="4000">4000</option>
                  <option value="4500">4500</option>
                  <option value="5000">5000</option>
                </select>
              </div>
            </div>
           
          </div>
          <div class="row p-3 pt-0">
            <div class="col-md-12 col-12">
              <div class="form-group mt-0">
                <div class="cash-flex">
                <label for="payFrequency_Weekly" class="me-4 mb-1">Pay frequency: </label>
                <ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
                  <li class="mw-410">
                    <input type="radio" name="pay_frequency" class="btn btn-outline-primary" value="1"
                      id="payFrequency_Weekly">
                    <label for="payFrequency_Weekly"> Weekly </label>
                  </li>
                  <li class="mw-410">
                    <input type="radio" name="pay_frequency" class="btn btn-outline-primary"
                      value="2" id="payFrequency_fornightly">
                    <label for="payFrequency_fornightly"> Fortnightly </label>
                  </li>
                  <li class="mw-410">
                    <input type="radio" name="pay_frequency" class="btn btn-outline-primary"
                      value="3" id="payFrequency_monthly">
                    <label for="payFrequency_monthly"> Monthly </label>
                  </li>
                  <li class="mw-410">
                    <input type="radio" name="pay_frequency" class="btn btn-outline-primary"
                      value="4" id="payFrequency_other">
                    <label for="payFrequency_other"> Other </label>
                  </li>
                </ul>
                </div>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in" id="weekly">Weekly Loan Payment Button active.</div>
                  <div role="tabpanel" class="tab-pane fade" id="fortnightly">Fortnightly Loan Payment Button active.</div>
                  <div role="tabpanel" class="tab-pane fade" id="monthly">Monthly Loan Payment Button active.</div>
                </div>
              </div>
              <span class="error" id="payFrequencyError">Please select any one payfrequency</span>
            </div>


            <!-- <div class="col-md-4 col-12">

                  <div class="form-group mt-3">
                  <label for="formGroupExampleInput">Pay frequency</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Weekly</option>
                    <option value="1">Fortnightly</option>
                    <option value="2">Monthly</option>
                  </select>
                  </div>
    
                  </div>
                  <div class="col-md-8 col-12">

                <div class="form-group mt-3">
                <label for="formGroupExampleInput">Loan Length</label>

                <div class="d-flex">
                  <input type="range" min="1" max="100" value="50" class="form-range range-slider" id="myRange"> <span id="demo">0</span>
                </div>
                </div>

            </div> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row input-row">
        <div class="col-12 p-0">
          <p class="input-heading mb-0 border-bottom">
            About You
          </p>


          <div class="row p-3 pt-0">
            <!-- <div class="col-md-4 col-12">

              <div class="mt-3"><label for="FirstName">First Name</label></div>
              <div class="input-group">
                <div class="input-group-prepend">
                  <select name="" id="" name="user_name_initials"
                    class="btn name-title btn-outline-primary dropdown-toggle fs-14" type="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs.</option>
                    <option value="Miss">Miss</option>
                    <option value="Dr">Dr</option>
                    <option value="Mx">Mx</option>
                  </select>
                </div>
                <input type="text" class="form-control name-control " id="FirstName" placeholder="Enter First Name"
                  aria-label="Text input with dropdown button" name="FirstName">
              </div>
            </div> -->
            <div class="col-md-1  col-3">
              <div class="form-group mt-3">
                <label for=" courtesy title "> Title </label>
                   <div class="input-group-prepend">
                  <select name="" id="" name="user_name_initials"
                    class="btn name-title btn-outline-primary dropdown-toggle fs-14" type="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs.</option>
                    <option value="Miss">Miss</option>
                    <option value="Dr">Dr</option>
                    <option value="Mx">Mx</option>
                  </select>
                </div>
                </div>
            </div>
            <div class="col-md-3 col-9">
              <div class="form-group mt-3">
                <label for="MiddleName">First Name</label>
                <div class="input-group-prepend">
                  <input type="text" class="form-control " id="FirstName" placeholder="Enter First Name" name="FirstName">
                </div>
              </div>
              <span class ="error" id ="firstNameError">Please enter First Name</span>
            </div>

            <div class="col-md-4 col-12">
              <div class="form-group mt-3">
                <label for="MiddleName">Middle Name</label>
                <input type="text" class="form-control" id="MiddleName" placeholder="Enter Middle Name"
                  name="MiddleName">
              </div>
              <span class="error"  id="middleNameError">Please enter Middle Name</span>
            </div>

            <div class="col-md-4 col-12">
              <div class="form-group mt-3">
                <label for="LastName">Last Name</label>
                <input type="text" class="form-control" id="LastName" placeholder="Enter Last Name" name="LastName">
              </div>
              <span class="error"  id="lastNameError">Please Enter Last Name </span>
            </div>
          </div>

          <div class="row p-3 pt-0">
            <div class="col-md-4 col-12">
              <div class="form-group mt-3">
                <label for="DateOfBirth">Date of Birth</label>
                <input type="date" class="form-control" id="DateOfBirth" placeholder="Enter Date of Birth"
                  name="DateOfBirth">
              </div>
              <span class="error"  id="DateOfBirthError">
                minimum required age is 18 years 
              </span>
            </div>


            <div class="col-md-4 col-12">
              <div class="form-group mt-3">
                <label for="MobileNumber">Mobile Number</label>
                <input type="text" class="form-control" id="MobileNumber" placeholder="Enter Mobile Number"
                  name="MobileNumber">
              </div>
              <span class="error"  id="mobileNumberError">Pleasee enter 10 digits valid Mobile Number</span>
            </div>

            <div class="col-md-4 col-12">
              <div class="form-group mt-3">
                <label for="workEmail">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="Email">

              </div>
              <span class="error"  id="emailError">Please enter Valid Email</span>
            </div>
          </div>

          <div class="row p-3 pt-0">
 
            <div class="col-md-4 col-12">
              <div class="form-group mt-3">
                <label for="Password">Enter Password</label>
                <input type="text" class="form-control" id="Password" placeholder="Choose Your Password"
                  name="Password">
              </div>
              <span id="passwordError" class="error" >Use a combination of uppercase & lowercase with special symbols</span>
            </div>

            <div class="col-md-4 col-12">
              <div class="form-group mt-3">
                <label for="confPassword">Confirm Password</label>
                <input type="text" class="form-control" id="confPassword" placeholder="Renter Your Password"
                  name="confPassword">
              </div>
              <span id="confPasswordError" class="error" >Password should be similar</span>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container">
      <div class="row input-row">
        <div class="col-12 p-0">
          <p class="input-heading mb-0 border-bottom">
            Employment Details
          </p>
          <div class="row p-3 pt-0">
            <div class="col-md-6 col-12">
              <div class="form-group mt-3">
                <label for="Employment_Status">Employment Status</label>
                <select class="form-select" aria-label="Default select example" id="Employment_Status"
                  name="Employment_Status">
                  <option value="0">Full-Time Employment</option>
                  <option value="1">Part-Time Employment</option>
                  <option value="2">Casual Employment</option>
                  <option value="3">Self Employed</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-12">

              <div class="form-group mt-3">
                <label for="Annual_Gross_Income">Annual gross income (before tax) from all sources</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text amount-text">$</span>
                  </div>
                  <input type="number" class="form-control" id="Annual_Gross_Income"
                    placeholder="Annual gross income (before tax) from all sources"
                    aria-label="Amount (to the nearest dollar)" name="Annual_Gross_Income">
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row input-row">
        <div class="col-12 p-0">
          <p class="input-heading mb-0 border-bottom">
            Expenses Details
          </p>
          <div class="row p-3 pt-0">

            <div class="col-md-6 col-12">

              <div class="form-group mt-3">
                <label for="Total_expenses">Total Expenses for all sources</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text amount-text">$</span>
                  </div>
                  <input type="number" class="form-control" id="Total_expenses"
                    placeholder="Total Expenses (before tax) for all sources"
                    aria-label="Amount (to the nearest dollar)" name="Total_expenses">
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row input-row">
        <div class="col-12 p-0">
            <p class="input-heading mb-0 border-bottom">
              Confirm Your Contact Details
            </p>


            <div class="row p-3 pt-0">
              <div class="col-md-4 col-12">
                <div class="form-group mt-3">
                  <label for="Enter_Street_Name">Street Name</label>
                  <input type="text" class="form-control" id="Enter_Street_Name" placeholder="Enter_Street_Name"
                    name="user_street_name">
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="form-group mt-3">
                  <label for="Address_Suburb">Address Suburb</label>
                  <input type="text" class="form-control" id="Address_Suburb" placeholder="Address Suburb"
                    name="user_address_suburb">
                </div>
              </div>
              
              <div class="col-md-4 col-12">
                <div class="form-group mt-3">
                  <label for="formGroupExampleInput">City</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="City" name="user_city">
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="form-group mt-3">
                  <label for="form_country">Country</label>
                  <select class="form-select" aria-label="Default select example" id="form_country" name="user_state">
                    <option value="">Select Country</option>
                    <option value="USA">USA</option>
                    <option value="Australia">Australia</option>

                  </select>
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="form-group mt-3">
                  <label for="formGroupExampleInput">State</label>
                  <select class="form-select" aria-label="Default select example" id = "state" name="user_state">
                    <option value ="">Select </option>
                   </select>
                </div>
              </div>
              <div class="col-md-4 col-12">

                <div class="form-group mt-3">
                  <label for="formGroupExampleInput">Address Postcode</label>
                  <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Address Postcode"
                    name="user_address_postcode">
                </div>

              </div>
            </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row input-row">
        <div class="col-12 p-0">
          <p class="input-heading mb-0 border-bottom">
            Your Employer Information
          </p>
          <div class="row p-3 pt-0">
            <div class="col-md-6 col-12">
              <div class="form-group mt-3">
                <label for="Employer_name">Employer Name (if benefits type Centrelink)</label>
                <input type="text" class="form-control" id="Employer_name" placeholder="Employer Name"
                  name="Employer_name">
              </div>
              <span class="error"  id="Employment_StatusError">Please Enter Your Employer Name (You had chosen full-time employment) </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row input-row">
        <div class="col-12 p-0">
          <p class="input-heading mb-0 border-bottom">
            I Confirm
          </p>
          <div class="row p-3 pt-0">
            <div class="col-12">
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked
                  name="IcanConfirm">
                <label class="form-check-label mb-0" for="flexCheckChecked">
                  I confirm that the information provided is accurate and I agree to the terms and conditions.
                </label>
              </div> 
              <span class="error"  id="IcanConfirmError">Please Accept before next</span>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container pt-3">
      <div class="row mb-3">
        <div class="col-12 p-0">
          <div class="d-flex justify-content-end">
            <div> <button type="submit" class="btn btn-primary text-white d-inline br-4 bg-green m-0"> Next </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
     $(document).ready(function () {

$('input[name="pay_frequency"]').change(function() {
  if (this.value === "1") { // Check if "Weekly" option is selected
    // Remove all classes from the div with id "Commentary"
    $('#weekly').removeClass();
    $('#monthly').removeClass();

    $('#fortnightly').removeClass();
    $('#monthly').addClass('tab-pane fade');
    $('#fortnightly').addClass('tab-pane fade');

  }
else  if (this.value === "2") { // Check if "Weekly" option is selected
    // Remove all classes from the div with id "Commentary"
    $('#weekly').removeClass();
    $('#monthly').removeClass();
    $('#fortnightly').removeClass();
    $('#weekly').addClass('tab-pane fade in');
    $('#monthly').addClass('tab-pane fade ');
  }
  else if (this.value === "3") { // Check if "Weekly" option is selected
    // Remove all classes from the div with id "Commentary"
    $('#weekly').removeClass();
    $('#monthly').removeClass();
    $('#fortnightly').removeClass();
    $('#weekly').addClass('tab-pane fade in');
    $('#fortnightly').addClass('tab-pane fade ');
  }else{
    $('#weekly').addClass('tab-pane fade in');
    $('#fortnightly').addClass('tab-pane fade ');
    $('#monthly').addClass('tab-pane fade ');
  }
});
});
function populateStates(country) {
  $.getJSON("<?=base_url('JSON/country-state.json')?>", function(data) {
    var states = data[country];
    var selectState = $('#state');
    selectState.empty();

    for (var i = 0; i < states.length; i++) {
      selectState.append($('<option>', {
        value: states[i],
        text: states[i]
      }));
    }
  });
}
   

function populateResonForLoan(ResonForLoan) {
  $.getJSON("<?=base_url('JSON/Loan_more_info.json')?>", function(data) {
    var Reason = data[ResonForLoan];
    var selectMoreInfo = $('#more_information');
    selectMoreInfo.empty();

    for (var i = 0; i < Reason.length; i++) {
      selectMoreInfo.append($('<option>', {
        value: Reason[i],
        text: Reason[i]
      }));
    }
  });
}

// Listen for changes in the selected country
$('#form_country').change(function() {
  var selectedCountry = $(this).val();
  populateStates(selectedCountry);
});

// Listen for changes in the ReasonForLoan
$('#ReasonForLoan').change(function() {
  var SelectedReson = $(this).val();
  populateResonForLoan(SelectedReson);
});

  $("#firstNameError").hide();
  $("#middleNameError").hide();
  $("#lastNameError").hide();
  $("#emailError").hide();
  $("#mobileNumberError").hide();
  $("#passwordError").hide();
  $("#confPasswordError").hide();
  $("#Employment_StatusError").hide();
  $("#payFrequencyError").hide();
  $("#IcanConfirmError").hide();
  $("#DateOfBirthError").hide();
  $("#nextbutton").prop("disabled", true);
  
  function buttonDisable (){
    let element= $("#IcanConfirm");
    if(!element.is(':checked')){
      $("#nextbutton").prop("disabled", true);
    }else{
      $("#nextbutton").prop("disabled", false);
    }
  }

  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const NamePattern = /^[A-Za-z- ]+$/;
  const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
  const mobilePattern = /^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;

  function checkElement(id, errId, condition) {
    let element = $(`#${id}`).val();

    if (element && condition.test(element)) {
      console.log("here hiding")
      $(`#${errId}`).hide();
      return true;
    }
    $(`#${errId}`).show();
    return false;
  }
  function confpassword() {
    let password = $("#Password").val();
    let confPassword = $("#ConfPassword").val();
    console.log(password, confPassword, "check==============>");
    if (confPassword && password && confPassword === password) {
      $("#confPasswordError").hide();
      return true;
    }
    $("#confPasswordError").show();
    return false;
  }
  function checkRadio(id, errid) {
    let element = $(`#${id}`);
  if (element && element.is(':checked')) {
  $(`#${errid}`).hide();
  return true;
  }
$ (`#${errid}`).show();
return false;
  }
  function checkbox(id, errid) {
  let element = $(`#${id}`);
  if (element.is(':checked')) {
    $(`#${errid}`).hide();
    return true;
  } else {
    $(`#${errid}`).show();
    return false;
  }
$(`#${errid}`).show();
return false;
  }
  function checkemployeename() {
    let Employment_Status = $("#Employment_Status").val();
    let Employer_name = $("#Employer_name").val();
    console.log(Employment_Status, Employer_name);
    if (Employment_Status === 0 && Employer_name && Employer_name.length > 3) {
      $("#Employment_StatusError").hide();
      return true;
    } else if (Employment_Status !== "Full-Time Employment") {
      $("#Employment_StatusError").hide();
      return true;
    }
    $("#Employment_StatusError").show();
    return false;
  }
  function checkDateOfBirth(){
    let DateOfBirth = $("#DateOfBirth").val();
    console.log(DateOfBirth,"kkkkkk");
   DateOfBirth= new Date(DateOfBirth);
   let today =new Date();
   if (DateOfBirth < today) {
    $("#DateOfBirthError").hide();
    return true;
   }
   $("#DateOfBirthError").show();

    return false;
  }

  function validateSubmit() {
    checkRadio("payFrequency","payFrequencyError") || 
      checkElement("FirstName", "firstNameError", NamePattern) ||
      checkElement("LastName", "lastNameError", NamePattern) ||
      checkDateOfBirth()||
      checkElement("Email", "emailError", emailPattern) ||
      checkElement("MobileNumber", "mobileNumberError", mobilePattern) ||
      checkElement("Password", "passwordError", passwordPattern) ||
      confpassword() || checkemployeename() ||
      checkbox("IcanConfirm","IcanConfirmError") ;
      return   checkRadio("payFrequency","payFrequencyError") && 
      checkElement("FirstName", "firstNameError", NamePattern) &&
      checkElement("LastName", "lastNameError", NamePattern) &&
      checkDateOfBirth()&&
      checkElement("Email", "emailError", emailPattern) &&
      checkElement("MobileNumber", "mobileNumberError", mobilePattern) &&
      checkElement("Password", "passwordError", passwordPattern) &&
      confpassword() && checkemployeename() &&
      checkbox("IcanConfirm","IcanConfirmError") ;



  }




</script>
<?php $this->endSection() ?>
