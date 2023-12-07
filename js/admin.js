


function refreshLoanAnalyze(opportunityId) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
            let decoded_data =JSON.parse(this.responseText);
            $('.circle').removeClass("active");

            document.querySelector(`.circle-${decoded_data.data}`).classList.add("active");
      }
    };
    xhttp.open("GET", `getLoanAnalysis?opportunity_id=${opportunityId}`, true);
    xhttp.send();

}

$('#refresh_loan_analyze').click(function () {
    $(this).css()
    var opportunityId = $(this).val();
    refreshLoanAnalyze(opportunityId);
});
