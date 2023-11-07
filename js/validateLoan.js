

function set_max_date(){
        // Get today's date
        var today = new Date();
        // Calculate the date 18 years ago from today
        var maxDate = new Date();
        maxDate.setFullYear(today.getFullYear() - 18);
        // Format the date as yyyy-mm-dd for the input field
        var year = maxDate.getFullYear();
        var month = (maxDate.getMonth() + 1).toString().padStart(2, '0');
        var day = maxDate.getDate().toString().padStart(2, '0');
        var formattedMaxDate = year + '-' + month + '-' + day;
        // Set the max attribute of the date input field
        document.getElementById("DateOfBirth").setAttribute("max", formattedMaxDate);
}
set_max_date()


function populateStates(country) {
    $.getJSON("<?=base_url('JSON/country-state.json')?>", function (data) {
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
    $.getJSON("<?=base_url('JSON/Loan_more_info.json')?>", function (data) {
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
$('#form_country').change(function () {
    var selectedCountry = $(this).val();
    populateStates(selectedCountry);
});

// Listen for changes in the ReasonForLoan
$('#ReasonForLoan').change(function () {
    var SelectedReson = $(this).val();
    populateResonForLoan(SelectedReson);
});
// A $( document ).ready() block.
$(document).ready(function () {
    $("#nextbutton").prop("disabled", true);
    validateBeforeProceed("FirstName", "firstNameError", NamePattern);
    validateBeforeProceed("LastName", "lastNameError", NamePattern);
    validateBeforeProceed("Email", "emailError", emailPattern);
    validateBeforeProceed("MobileNumber", "mobileNumberError", mobilePattern);
    validateBeforeProceed("Password", "passwordError", passwordPattern);
    $(`#IcanConfirm`).blur(function () {
        checkbox("IcanConfirm", "IcanConfirmError");
    });
    $(`#ConfPassword`).blur(function () {
        confpassword();
    });
    $(`#DateOfBirth`).blur(function () {
        checkDateOfBirth();
    });
    $(`#Loan_Amount`).blur(function () {
        checkLoanAmount();
    });
    $(`#Employer_name`).blur(function () {
        checkemployeename();
    });


});
function validateBeforeProceed(id, errId, pattern) {
    $(`#${id}`).blur(function () {
        checkElement(`${id}`, `${errId}`, pattern);
    });
}

function buttonDisable() {
    let element = $("#IcanConfirm");
    if (!element.is(':checked')) {
        $("#nextbutton").prop("disabled", true);
    } else {
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
    let weeklyElement = $("#payFrequency_Weekly");
    let fortnightly = $("#payFrequency_fornightly");
    let monthly = $("#payFrequency_monthly");
    let others = $("#payFrequency_other");

    // let monthlyElement = $("#")
    if (weeklyElement.is(":checked") || fortnightly.is(":checked") || monthly.is(":checked") || others.is(":checked")) {
        $("#payFrequencyError").hide();
        return true;
    }
    $("#payFrequencyError").show();
    return false;
}
function checkbox(id, errid) {
    let element = $(`#${id}`);
    if (element.is(':checked')) {
        $(`#${errid}`).hide();
        $("#nextbutton").prop("disabled", false);

        return true;
    } else {
        $(`#${errid}`).show();
        return false;
    }
    $(`#${errid}`).show();
    return false;
}
function checkemployeename() {
    // console.log("here ==========>");
    let Employment_Status = $("#Employment_Status").val();
    let Employer_name = $("#Employer_name").val();
    if (Employment_Status == 0 && Employer_name && Employer_name.length > 3) {
        $("#Employment_StatusError").hide();
        return true;
    } else if (Employment_Status != 0) {
        $("#Employment_StatusError").hide();
        return true;
    }
    $("#Employment_StatusError").show();
    return false;
}
function checkDateOfBirth() {
    let DateOfBirth = $("#DateOfBirth").val();
    console.log(DateOfBirth, "kkkkkk");
    DateOfBirth = new Date(DateOfBirth);
    let today = new Date();

    // Calculate age in years
    let ageInYears = today.getFullYear() - DateOfBirth.getFullYear();

    // Check if the age is greater than or equal to 18
    if (ageInYears >= 18) {
        $("#DateOfBirthError").hide();
        return true;
    }

    $("#DateOfBirthError").show();
    return false;
}
function checkLoanAmount() {
    let loanAmount = $("#Loan_Amount").val();
    if (loanAmount) {
        $("#Loan_AmountError").hide();
        return true;
    }

    $("#Loan_AmountError").show();
    return false;
}

function validateSubmit(e) {

    let la = checkLoanAmount();
    let pf = checkRadio("payFrequency", "payFrequencyError");
    let fn = checkElement("FirstName", "firstNameError", NamePattern);
    let ln = checkElement("LastName", "lastNameError", NamePattern);
    let dob = checkDateOfBirth();
    let email = checkElement("Email", "emailError", emailPattern);
    let mn = checkElement("MobileNumber", "mobileNumberError", mobilePattern);
    let pass = checkElement("Password", "passwordError", passwordPattern);
    let cpass = confpassword(); let empname = checkemployeename();
    let icnfrm = checkbox("IcanConfirm", "IcanConfirmError");
    if (!la) {
        scrollToError("Loan_Amount");
    } else if (!pf) {
        scrollToError("payFrequency");
    } else if (!fn) {
        scrollToError("FirstName");
    } else if (!ln) {
        scrollToError("LastName");
    } else if (!dob) {
        scrollToError("DateOfBirth");
    } else if (!email) {
        scrollToError("emailError");
    } else if (!mn) {
        scrollToError("mobileNumberError");
    } else if (!pass) {
        scrollToError("Password");
    } else if (!cpass) {
        scrollToError("ConfPassword");
    } else if (!empname) {
        scrollToError("Employer_name");
    } else if (!icnfrm) {
        scrollToError("IcanConfirm");
    }
    return (la && pf && fn && ln && dob && email && mn && pass && cpass && empname && icnfrm);
}
function scrollToError(errorElementId) {
    const errorElement = document.getElementById(errorElementId);

    if (errorElement) {
        errorElement.scrollIntoView({ behavior: "smooth" }); // You can adjust scrolling behavior as needed
    }
}

