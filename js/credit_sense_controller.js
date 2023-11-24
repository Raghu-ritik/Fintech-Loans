 
    // ----------------------------------------------------------------------------------------------------------------------------------------
    let AnBankName = "";
    let userSelectedBank = "";
    const BankSelect = $("#BankSelect");
    const BankCredentials = $("#BankCredentials");
    const Terms_conditions_section = $("#Terms-and-conditions-section");

    function generate_random_(maxnum){
        return Math.floor(Math.random() * (maxnum - 1000 + 1)) + 1000
    }


    function ShowBankNames() {
        let ui_id_1 = document.getElementById("ui-id-1")
        if (ui_id_1.style.display == "none") {
            ui_id_1.style.display = "block"
        } else {
            ui_id_1.style.display = "none"
        };

    }
    let allSearchedBanks = []
    document.getElementById("AllbankNames").addEventListener("click", ShowBankNames)
    document.getElementById("bankNamesSearch").addEventListener("keyup", function (event) {
        $.ajax({
            url: "allbanks", success: function (result) {
                console.log(result);
                var allBanks = result["bank"];
                const SearchBank = allBanks.filter(str => str.includes(event.target.value));
                var ui_id_1 = $('#ui-id-1');
                ui_id_1.empty();
                allSearchedBanks = SearchBank;
                for (var i = 0; i < SearchBank.length; i++) {
                    ui_id_1.append($('<li>', {
                        class: "ui-menu-item-wrapper-ritik",
                        value: SearchBank[i],
                        text: SearchBank[i]
                    }));
                }
                if (ui_id_1.css("display") == "none") {
                    ShowBankNames();
                }
            }
        });
    });


    function filterStringsBySubstring(stringsArray, substring) {
        // Create a regular expression to match strings starting with the specified substring
        var regex = new RegExp("^" + substring, "i"); // "i" flag for case-insensitive matching

        // Use Array.prototype.filter to return strings that match the regular expression
        var filteredStrings = stringsArray.filter(function (string) {
            return regex.test(string);
        });

        return filteredStrings;
    }


    function SubBanksFilled(BankElement) {
        let substring = BankElement.split("-")[0]
        const startsWithSubstrings = filterStringsBySubstring(allSearchedBanks, substring);
        document.getElementById("associated-bank-select-span").innerText = BankElement;
        userSelectedBank = BankElement
        var associated_banks = $('#associated-banks');
        associated_banks.empty();
        for (var i = 0; i < startsWithSubstrings.length; i++) {
            associated_banks.append($('<li>', {
                class: "associated-banks-options",
                value: startsWithSubstrings[i],
                text: startsWithSubstrings[i]
            }));
        }
        $("#associated-bank-select").click(() => {
            if (associated_banks.css("display") == "none") {
                associated_banks.css("display", "block")
            }
            else {
                associated_banks.css("display", "none");
            }
        })
        associated_banks.click((event) => {
            if (event.target.className === "associated-banks-options") {
                $("#bankdetails").css("display", "none");
                $("#loading").css("display", "block");
                setTimeout(() => {
                    userSelectedBank = event.target.innerHTML;
                    if (allSearchedBanks.includes(userSelectedBank)) {
                        userSelectedBank = event.target.innerHTML;
                    }
                    else {
                        userSelectedBank = BankElement;
                    }
                    $("#loading").css("display", "none");
                    $("#bankdetails").css("display", "block");

                    document.getElementById("associated-bank-select-span").innerText = userSelectedBank;
                }, generate_random_(3000))

            }
        })
        return startsWithSubstrings.length < 2;
    }

    function selectBankforNextPage(Element) {
        if (AnBankName == "") {
            $("#BankSelect").css("display", "none");
            $("#BankCredentials").css("display", "flex");
            $("#loading").css("display", "block");
            setTimeout(() => {
                $("#loading").css("display", "none");
                $("#bankdetails").css("display", "block");
                if (SubBanksFilled(Element.innerHTML)) {
                    $("#bankname").html(Element.innerHTML);
                    $("#bankname").css("display", "flex");
                    $("#associated-bank-select").css("display","none");
                    userSelectedBank = Element.innerHTML;
                }
            },generate_random_(6000) );

        }
    }


    // Add event listener to the parent element
    document.getElementById("ui-id-1").addEventListener("click", function (event) {
        // Check if the clicked element is the one you're interested in
        if (event.target.className === "ui-menu-item-wrapper-ritik") {
            // Do something when a dynamically created element with class "dynamicElement" is clicked
            selectBankforNextPage(event.target);
        }
        else if (event.target.className === "ui-menu-item-wrapper") {
            selectBankforNextPage(event.target)
        }
    });
    // ----------------------------------------------------------------------------------------------------------------------------------------
    // Change Bank Name 
    $("#ChangeBankName").click(() => {
        console.log("KEch legi pran!");

        BankSelect.css("display", "flex");
        $("#BankCredentials").css("display", "none");
        $("#loading").css("display", "none");
        $("#bankdetails").css("display", "none");
        $("#bankname").css("display", "none");
    })
    cs_bank_LOGIN_validation = false;
    cs_bank_PASSWORD_validation = false;
    cs_bank_LOGIN = $("#cs-bank-LOGIN");
    cs_bank_LOGIN.blur((event) => {
        if (event.target.value.length > 8) {
            cs_bank_LOGIN_validation = true
        }
        console.log("cs_bank_LOGIN", event.target.value)
    });
    cs_bank_PASSWORD = $("#cs-bank-PASSWORD");
    cs_bank_PASSWORD.on("keydown", (event) => {

        if (event.target.value.length > 8) {
            cs_bank_PASSWORD_validation = true
        }
        else {
            cs_bank_PASSWORD_validation = false
        }
        console.log("Here", cs_bank_LOGIN_validation, cs_bank_PASSWORD_validation, userSelectedBank)
        if (cs_bank_LOGIN_validation && cs_bank_PASSWORD_validation && userSelectedBank) {
            $("#submitdetails").attr("disabled", false)
        }
    })
    $("#submitdetails").click(function () {
        BankCredentials.css("display", "none");
        Terms_conditions_section.css("display", "flex");
    })
    // ---------------------------------------------------------------------------------------------------------------------------------------
    const acceptlicence = $("#acceptlicence");
    $("#Decline-and-logout").click(() => {
        $("#loading-terms-and-condition").css("display", "block");
        console.log("This is Logout btn!");
        acceptlicence.css("display", "none");
        setInterval(() => {
            Terms_conditions_section.css("display", "none");
            BankSelect.css("display", "flex");
        }, generate_random_(3000))
    })
    // -----------------------------------------------------------------------------------------------------------------------------------------
    const Q_Benefits_Gov = $("#Q-Benefits-Gov");
    const receive_gov_benfit  =  $("#receive-gov-benfit");
    const have_mygov_account  =  $("#have-mygov-account");
    const receive_gov_benefit  =  $("#receive-gov-benefit");

    $("#IAgree-All-Terms").click(() => {
        $("#accept-terms").css("display","none");
        $("#loading-terms-and-condition").css("display", "block");
        setTimeout(() => {
            $("#loading-terms-and-condition").css("display", "none");
            Q_Benefits_Gov.css("display", "flex");
            receive_gov_benfit.css("display","block");
            Terms_conditions_section.css("display","none");
        }, generate_random_(5000));
    })

    let LoginStatus = $("#LoginStatus");
    $("#receive-gov-benfit-no-btn").click(()=>{
        console.log("This is no button ")
        Q_Benefits_Gov.css("display","none");
        $("#LoginPending-Status").css("display","flex");
        setTimeout(()=>{
            $("#LoginPending-Status").css("display","none");
            LoginStatus.css("display","flex");
            setTimeout(()=>{
                window.location.href = "/loanprocessholding";
            },generate_random_(10000))
        },generate_random_(12000)); 
    });
