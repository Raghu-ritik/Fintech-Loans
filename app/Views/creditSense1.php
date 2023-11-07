<?php $this->extend('creditsensetemplate') ?>
<?php $this->section('content') ?>


<div class="alignMiddle" id="BankSelect">
<div  class="container creditsense-container" >
    <div class="page-header">
        <h2>Select  bank</h2>
    </div>


    <div class="hidden-phone">
    
        <div class="row">
            <div class="col-12 d-flex">
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="9" ng-click="chooseBank(9)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/9.png"
                                alt="CBA - NetBank">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="19" ng-click="chooseBank(19)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/NAB.png"
                                alt="NAB">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="28" ng-click="chooseBank(28)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/28.png"
                                alt="Westpac Personal">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="3" ng-click="chooseBank(3)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/svg/anz-au.svg"
                                alt="ANZ - Internet Banking">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="31" ng-click="chooseBank(31)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/31.png"
                                alt="Bendigo Bank - Personal">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="25" ng-click="chooseBank(25)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/25.png"
                                alt="St.George Bank Personal">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div style="margin-top: 10px"></div>
        <div class="row">
            <div class="col-12 d-flex">
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="30" ng-click="chooseBank(30)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/suncorp-bank.png"
                                alt="Suncorp">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="15" ng-click="chooseBank(15)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/15.png"
                                alt="ING">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="7" ng-click="chooseBank(7)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/7.svg"
                                alt="Bankwest - Personal">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="66" ng-click="chooseBank(66)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/greaterbank.png"
                                alt="Greater Bank ">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="12" ng-click="chooseBank(12)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/greatsouthernbank.png"
                                alt="Great Southern Bank ">
                        </div>
                    </a>
                </div>
                <div class="span2">
                    <a class="logo-outside " href="#" serviceid="5" ng-click="chooseBank(5)">
                        <div class="logoBox">
                            <img class="logo-inside"
                                src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/banks/medium/5.png"
                                alt="BOQ - Personal">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>



    <div class="row">
        <div class="span12 bankAcSearch">
            <div id="bankaccount-div" class="input-prepend input-block-level cs-hidden-phone">
                <div class="input-append">
                    <span class="add-on bank-select-label"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M21 21L16.65 16.65" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg></span>
                    <input type="text" id="bankNamesSearch"
                        class="input-xxlarge bank-select inpt-block-level ui-autocomplete-input" placeholder="Bank name"
                        autocomplete="off">
                    <button class="btn bank-select-label" tabindex="-1" id="AllbankNames">
                        <span class="caret"></span>
                    </button>
                </div>
            </div>



            <select id="bankaccountmob" class="input-large bank-input cs-visible-phone" style="display:none">
                <option value="" id="bankaccountmob-default" selected="selected">List of all banks</option>
                <option value="1">Adelaide Bank </option>
            </select>

            <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front"
                style="display: none; width: 1144.6px; top: 45.8px; left: 348px;" unselectable="on">
                <li class="ui-menu-item">
                    <div id="ui-id-2" tabindex="-1" class="ui-menu-item-wrapper">Adelaide Bank </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-3" tabindex="-1" class="ui-menu-item-wrapper">AFG Home Loans - Edge </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-4" tabindex="-1" class="ui-menu-item-wrapper ui-state-active">AFG Home Loans - Icon
                    </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-5" tabindex="-1" class="ui-menu-item-wrapper">AFG Home Loans - Retro</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-6" tabindex="-1" class="ui-menu-item-wrapper">American Express</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-7" tabindex="-1" class="ui-menu-item-wrapper">American Express - David Jones</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-8" tabindex="-1" class="ui-menu-item-wrapper">American Express - Mobile</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-9" tabindex="-1" class="ui-menu-item-wrapper">AMP </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-10" tabindex="-1" class="ui-menu-item-wrapper">ANZ - Internet Banking</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-11" tabindex="-1" class="ui-menu-item-wrapper">Aussie - Select</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-12" tabindex="-1" class="ui-menu-item-wrapper">Australian Military Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-13" tabindex="-1" class="ui-menu-item-wrapper">Australian Mutual Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-14" tabindex="-1" class="ui-menu-item-wrapper">Auswide Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-15" tabindex="-1" class="ui-menu-item-wrapper">Bank Australia</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-16" tabindex="-1" class="ui-menu-item-wrapper">Bank First (Victoria Teachers Mutual
                        Bank)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-17" tabindex="-1" class="ui-menu-item-wrapper">Bank of China</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-18" tabindex="-1" class="ui-menu-item-wrapper">Bank of Heritage Isle - Internet
                        Banking</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-19" tabindex="-1" class="ui-menu-item-wrapper">Bank of Melbourne - Internet Banking
                    </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-20" tabindex="-1" class="ui-menu-item-wrapper">BOQ - Personal</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-21" tabindex="-1" class="ui-menu-item-wrapper">BOQ Specialist</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-22" tabindex="-1" class="ui-menu-item-wrapper">Bank of Sydney</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-23" tabindex="-1" class="ui-menu-item-wrapper">BankSA - Internet Banking (Bank of
                        South Australia)
                    </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-24" tabindex="-1" class="ui-menu-item-wrapper">BankVic</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-25" tabindex="-1" class="ui-menu-item-wrapper">Bankwest - Personal</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-26" tabindex="-1" class="ui-menu-item-wrapper">Bankwest - Business</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-27" tabindex="-1" class="ui-menu-item-wrapper">bcu iBank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-28" tabindex="-1" class="ui-menu-item-wrapper">Bendigo Bank - Personal</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-29" tabindex="-1" class="ui-menu-item-wrapper">Beyond Bank - Personal (CPS Credit
                        Union)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-30" tabindex="-1" class="ui-menu-item-wrapper">Bluestone</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-31" tabindex="-1" class="ui-menu-item-wrapper">Broken Hill Community Credit Union
                    </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-32" tabindex="-1" class="ui-menu-item-wrapper">Central West Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-33" tabindex="-1" class="ui-menu-item-wrapper">Advantedge - Choicelend</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-34" tabindex="-1" class="ui-menu-item-wrapper">Citibank - Online (Citibank)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-35" tabindex="-1" class="ui-menu-item-wrapper">Coles Financial Services</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-36" tabindex="-1" class="ui-menu-item-wrapper">CBA - NetBank (Commonwealth)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-37" tabindex="-1" class="ui-menu-item-wrapper">CBA - CommBiz (Commonwealth)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-38" tabindex="-1" class="ui-menu-item-wrapper">CBA - CommSec (Commonwealth)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-39" tabindex="-1" class="ui-menu-item-wrapper">Community First Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-40" tabindex="-1" class="ui-menu-item-wrapper">Connective Home Loans</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-41" tabindex="-1" class="ui-menu-item-wrapper">Defence Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-42" tabindex="-1" class="ui-menu-item-wrapper">Diners Club</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-43" tabindex="-1" class="ui-menu-item-wrapper">eWay Australia</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-44" tabindex="-1" class="ui-menu-item-wrapper">FIIG Securities</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-45" tabindex="-1" class="ui-menu-item-wrapper">Firefighters Mutual Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-46" tabindex="-1" class="ui-menu-item-wrapper">First Choice Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-47" tabindex="-1" class="ui-menu-item-wrapper">First Option Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-48" tabindex="-1" class="ui-menu-item-wrapper">Firstmac</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-49" tabindex="-1" class="ui-menu-item-wrapper">G&amp;C Mutual Bank (SGE Credit Union)
                    </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-50" tabindex="-1" class="ui-menu-item-wrapper">Latitude - Gem Visa</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-51" tabindex="-1" class="ui-menu-item-wrapper">Goldfields Money</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-52" tabindex="-1" class="ui-menu-item-wrapper">Great Southern Bank </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-53" tabindex="-1" class="ui-menu-item-wrapper">Greater Bank </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-54" tabindex="-1" class="ui-menu-item-wrapper">Harmoney</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-55" tabindex="-1" class="ui-menu-item-wrapper">Heritage Bank </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-56" tabindex="-1" class="ui-menu-item-wrapper">Homestar - Online Access</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-57" tabindex="-1" class="ui-menu-item-wrapper">HomeStart Finance</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-58" tabindex="-1" class="ui-menu-item-wrapper">Horizon Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-59" tabindex="-1" class="ui-menu-item-wrapper">Hume Bank - iBank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-60" tabindex="-1" class="ui-menu-item-wrapper">Illawarra Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-61" tabindex="-1" class="ui-menu-item-wrapper">IMB Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-62" tabindex="-1" class="ui-menu-item-wrapper">ING</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-63" tabindex="-1" class="ui-menu-item-wrapper">Keystart Home Loans</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-64" tabindex="-1" class="ui-menu-item-wrapper">Laboratories Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-65" tabindex="-1" class="ui-menu-item-wrapper">Latitude - CreditLine Card</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-66" tabindex="-1" class="ui-menu-item-wrapper">Latitude - GO Mastercard</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-67" tabindex="-1" class="ui-menu-item-wrapper">Liberty Finance Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-68" tabindex="-1" class="ui-menu-item-wrapper">Smart Money (loans.com.au)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-69" tabindex="-1" class="ui-menu-item-wrapper">Lutheran Laypeoples League</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-70" tabindex="-1" class="ui-menu-item-wrapper">Macarthur CU</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-71" tabindex="-1" class="ui-menu-item-wrapper">Macquarie Bank - Online</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-72" tabindex="-1" class="ui-menu-item-wrapper">Macquarie Bank - Business</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-73" tabindex="-1" class="ui-menu-item-wrapper">The Mutual Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-74" tabindex="-1" class="ui-menu-item-wrapper">Medfin Finance</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-75" tabindex="-1" class="ui-menu-item-wrapper">ME Bank (ME)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-76" tabindex="-1" class="ui-menu-item-wrapper">Mortgage Choice</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-77" tabindex="-1" class="ui-menu-item-wrapper">Mortgage Ezy</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-78" tabindex="-1" class="ui-menu-item-wrapper">Mortgage House - Advantage</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-79" tabindex="-1" class="ui-menu-item-wrapper">Move Bank </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-80" tabindex="-1" class="ui-menu-item-wrapper">MyState Bank - Internet Banking</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-81" tabindex="-1" class="ui-menu-item-wrapper">NAB (National Australia Bank)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-82" tabindex="-1" class="ui-menu-item-wrapper">NAB Connect (National Australia Bank)
                    </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-83" tabindex="-1" class="ui-menu-item-wrapper">Newcastle Permanent - Personal</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-84" tabindex="-1" class="ui-menu-item-wrapper">Northern Inland Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-85" tabindex="-1" class="ui-menu-item-wrapper">Once</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-86" tabindex="-1" class="ui-menu-item-wrapper">Orange Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-87" tabindex="-1" class="ui-menu-item-wrapper">Origin Mortgage Management Services
                    </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-88" tabindex="-1" class="ui-menu-item-wrapper">Peoples Choice Credit Union (Savings
                        &amp; Loans)
                    </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-89" tabindex="-1" class="ui-menu-item-wrapper">Pepper Money Home Loans</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-90" tabindex="-1" class="ui-menu-item-wrapper">Pepper Money Personal Loans</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-91" tabindex="-1" class="ui-menu-item-wrapper">PLAN Lending (Advantedge)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-92" tabindex="-1" class="ui-menu-item-wrapper">Plenti (Plenti)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-93" tabindex="-1" class="ui-menu-item-wrapper">Qantas Money</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-94" tabindex="-1" class="ui-menu-item-wrapper">QBank (QPCU)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-95" tabindex="-1" class="ui-menu-item-wrapper">Queensland Country Bank (QCCU)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-96" tabindex="-1" class="ui-menu-item-wrapper">Rabobank RaboDirect</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-97" tabindex="-1" class="ui-menu-item-wrapper">RACQ</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-98" tabindex="-1" class="ui-menu-item-wrapper">RAMS Banking</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-99" tabindex="-1" class="ui-menu-item-wrapper">Regional Australia Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-100" tabindex="-1" class="ui-menu-item-wrapper">Reliance Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-101" tabindex="-1" class="ui-menu-item-wrapper">Resimac (Homeloans.com.au)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-102" tabindex="-1" class="ui-menu-item-wrapper">Revolut</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-103" tabindex="-1" class="ui-menu-item-wrapper">Rural Bank (RRL)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-104" tabindex="-1" class="ui-menu-item-wrapper">Salary Packaging Australia</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-105" tabindex="-1" class="ui-menu-item-wrapper">humm90 (SKYE) Mastercard</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-106" tabindex="-1" class="ui-menu-item-wrapper">SocietyOne</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-107" tabindex="-1" class="ui-menu-item-wrapper">SWS CU</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-108" tabindex="-1" class="ui-menu-item-wrapper">Southern Cross Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-109" tabindex="-1" class="ui-menu-item-wrapper">St.George Bank Personal</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-110" tabindex="-1" class="ui-menu-item-wrapper">St.George (Auto &amp; Equipment
                        Finance)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-111" tabindex="-1" class="ui-menu-item-wrapper">St.George Bank Business</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-112" tabindex="-1" class="ui-menu-item-wrapper">StarNet (Advantedge)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-113" tabindex="-1" class="ui-menu-item-wrapper">State Custodians</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-114" tabindex="-1" class="ui-menu-item-wrapper">Summerland Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-115" tabindex="-1" class="ui-menu-item-wrapper">Suncorp</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-116" tabindex="-1" class="ui-menu-item-wrapper">Teachers Mutual Bank</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-117" tabindex="-1" class="ui-menu-item-wrapper">Debug Bank AU (Debug Bank AU)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-118" tabindex="-1" class="ui-menu-item-wrapper">Dummy - Standard</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-119" tabindex="-1" class="ui-menu-item-wrapper">The Capricornian</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-120" tabindex="-1" class="ui-menu-item-wrapper">Toyota Finance Online</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-121" tabindex="-1" class="ui-menu-item-wrapper">Traditional Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-122" tabindex="-1" class="ui-menu-item-wrapper">UBank Current</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-123" tabindex="-1" class="ui-menu-item-wrapper">UBank Original</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-124" tabindex="-1" class="ui-menu-item-wrapper">Unibank (Pulse CU)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-125" tabindex="-1" class="ui-menu-item-wrapper">Velocity Global Wallet</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-126" tabindex="-1" class="ui-menu-item-wrapper">Virgin Money Home Loans (Managed by
                        Macquarie Bank)
                    </div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-127" tabindex="-1" class="ui-menu-item-wrapper">Virgin Money Loan (Reward me Home
                        loans)</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-128" tabindex="-1" class="ui-menu-item-wrapper">Volkswagen Financial Services</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-129" tabindex="-1" class="ui-menu-item-wrapper">Warwick Credit Union</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-130" tabindex="-1" class="ui-menu-item-wrapper">BankWAW</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-131" tabindex="-1" class="ui-menu-item-wrapper">Westpac Personal</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-132" tabindex="-1" class="ui-menu-item-wrapper">Westpac Business</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-133" tabindex="-1" class="ui-menu-item-wrapper">Westpac Corporate Online</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-134" tabindex="-1" class="ui-menu-item-wrapper">Woolworths Credit Card</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-135" tabindex="-1" class="ui-menu-item-wrapper">Woolworths Employees CU</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-136" tabindex="-1" class="ui-menu-item-wrapper">Yellow Brick Road</div>
                </li>
                <li class="ui-menu-item">
                    <div id="ui-id-137" tabindex="-1" class="ui-menu-item-wrapper">YourLease</div>
                </li>
            </ul>




        </div>
    </div>
</div>
</div>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="alignMiddle" id="BankCredentials" style="display: none;">
<div  class="container creditsense-container" >
    <div class="page-header col-12">
        <h2>Enter online banking details</h2>
    </div>

    <div id="loading" style="display: none">
        <div class="lead text-center">
            <h3>
                <img src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/loading.gif"
                    alt="Loading" />
                Loading, please wait
            </h3>
        </div>
    </div>

    <div class="row" id="no-asb-message" style="display: none">
        <div class="well span12">
            <div class="logo-container">
                <!-- <img src="/img/banks/asb.png?v=81b9a1" alt="ASB" /> -->
            </div>
            <h4>
                Sorry, but we are currently experiencing some problems with ASB Fastnet
            </h4>
            <p>
                ASB has added a new Captcha feature for customers logging into their
                online bank account. Unfortunately, this prevents online bank statement
                services, like ours, from working.
            </p>
            <p>
                As an ASB customer who wants to use an online bank statement service you
                should contact ASB Fastnet on 0800 327 863 (NZ) or +64 9 306 3185 if
                calling overseas, and ask them to remove this feature.
            </p>
            <p>
                Or you can
                <a href="https://www.asb.co.nz/GeneralEnquiry/?email=customerService" target="_blank">send ASB an
                    email</a>
                from their website.
            </p>
        </div>
    </div>

    <div id="bankdetails" style="display: none;max-width: 100%; margin-left: auto; margin-right: auto; width: 278px">
        <p id="bankLoginError" class="alert alert-error" style="display: none"></p>
        <div class="logo-container"></div>
        <div id="bankname" class="lead" style="display: none">NAB</div>
        <div id="associated-bank-select" class="selectable" style="white-space: normal">
            <span id="associated-bank-select-span">NAB</span>
            <ul id="associated-banks" style="display: none">
                <li>NAB</li>
                <li>NAB Connect</li>
            </ul>
        </div>
        <form id="bankform" autocomplete="off">
            <label for="cs-bank-LOGIN">NAB ID</label>
            <input data-pattern="^([0-9]){8,10}$" data-hint="Number printed on the back of your NAB Card."
                data-bitcheck="1" class="cs-bank-input" type="text" id="cs-bank-LOGIN" name="LOGIN" maxlength="10"
                required="required" autocorrect="off" autocapitalize="off" data-valfailed="true" /><span
                class="LOGIN-validation">
                <div class="alert help-warning" style="margin-bottom: -10px; padding: 2px 8px 2px 5px">
                    Number printed on the back of your NAB Card.
                </div>
            </span><br /><label for="cs-bank-PASSWORD">Password</label>
            <input data-pattern="^.{6,}$" data-hint="Passwords are usually above 6 characters." data-bitcheck="4"
                class="cs-bank-input" type="password" id="cs-bank-PASSWORD" name="PASSWORD" required="required"
                autocorrect="off" autocapitalize="off" /><span class="PASSWORD-validation"></span><br />
        </form>
    </div>

    <div class="btnGroup">
        <button class="btn pull-left btn-large btn-inverse big-button ng-scope" type="button" id="ChangeBankName">
            Change<br />Bank</button>
        <button class="btn pull-right btn-large btn-success big-button ng-scope" id="submitdetails" disabled="disabled"
            type="button">
            Submit<br />Details
        </button>
    </div>

    <div class="clearfix"></div>
</div>
</div>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


<!-- ------------------ Terms and condition -------------------- -->
<div class="alignMiddle" id="Terms-and-conditions-section" style="display: none;">
<div class="container creditsense-container" >
    <div id="Terms">
        <div class="page-header col-12">
            <h2>Terms &amp; Conditions</h2>
        </div>
        <div id="acceptlicence" style="margin-left: auto; margin-right: auto">
            <p>
                Acceptance of these Terms and Conditions and establishment of the
                Agreement is required for you to access and make use of the Services. To
                accept these
                <span id="termsAndConditionsToggle">Terms and Conditions</span> click "I
                Agree" below.
            </p>
            <form id="terms">
                <p>
                    I agree to be bound by these Terms and Conditions and that I have read
                    and agree to the terms of the Privacy Policy of Credit Sense Australia
                    Pty Ltd ACN 163 577 768 ("Company").
                </p>

                <div id="iframeAnimationWrapper">
                    <div id="hiddenterms" style="display: none">
                        <div class="WordSection1">
                            <p class="MsoNormal" style="
                      margin-top: 7.5pt;
                      margin-right: 0cm;
                      margin-bottom: 7.5pt;
                      margin-left: 0cm;
                      line-height: 30pt;
                      background: white;
                    ">
                                <b><span style="
                          font-size: 12pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">End User Terms and Conditions of Use</span></b>
                            </p>

                            <p class="MsoNormal" style="
                      margin-bottom: 7.5pt;
                      line-height: 16.5pt;
                      background: white;
                    ">
                                <b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Important - Read Carefully Before Accepting These Terms and
                                        Conditions</span></b>
                            </p>

                            <p class="MsoNormal" style="
                      margin-bottom: 7.5pt;
                      line-height: 16.5pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">If You do&nbsp;<u>not</u>&nbsp;accept these Terms and Conditions You must not click "I Agree"
                                    stating You agree to be bound by these
                                    Terms and Conditions nor should You click "I Agree" stating that You have read and
                                    agree to the terms
                                    of the Privacy Policy of the Company
                                    (which is available on the Company's website).</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-bottom: 7.5pt;
                      line-height: 16.5pt;
                      background: white;
                    ">
                                <span style="font-size: 10pt; font-family: 'Arial', sans-serif; color: #333333;
                      ">On acceptance of these Terms and Conditions the Agreement will be finalised and the following
                                    provisions shall apply to the relationship
                                    between You and the Company.</span>
                            </p>

                            <p class="MsoNormal"
                                style=" margin-bottom: 7.5pt; line-height: 16.5pt; background: white; ">
                                <span style="
                        font-size: 10pt; font-family: 'Arial', sans-serif;
                        color: #333333;">These Terms and Conditions ("Agreement") constitute a legally binding
                                    agreement
                                    between the End User (an individual consumer, small business,
                                    corporation or other entity that registers for the Service by submitting credentials
                                    and accepting
                                    this Agreement, "You", "End User", "Customer"
                                    ) and Credit Sense Australia Pty Ltd ACN 163 577 768 ("Company").</span>
                            </p>

                            <p class="MsoNormal" style=" margin-bottom: 7.5pt; line-height: 16.5pt; background: white;">
                                <span
                                    style="font-size: 10pt;   font-family: 'Arial', sans-serif;   color: #333333; ">The
                                    purpose of
                                    this Agreement is to regulate the legal
                                    relationship between You and the Company in relation to Your
                                    use of the Service (defined below).</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-bottom: 7.5pt;
                      line-height: 16.5pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">The parties hereby agree as follows:</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-top: 0cm;
                      margin-right: 0cm;
                      margin-bottom: 0cm;
                      margin-left: 18.75pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -18pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">1.<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">DEFINITIONS.</span></b>
                            </p>

                            <p class="MsoListParagraphCxSpFirst" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">1.1<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">"Aggregated Data" means Customer Data and usage information
                                    that has been stripped of all personally identifiable
                                    information.</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">1.2<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">"Authorised Recipient" means a Primary Service Provider or a
                                    Secondary Service Provider.</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">1.3<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">"Customer Data" means a Customer's account information,
                                    account access information, registration information and
                                    Content, as provided by You or as You have consented to the
                                    Company obtaining or accessing under this Agreement.</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">1.4<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">"Notified" and "Notification" means You have notified the
                                    Company:</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 42.55pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(a)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">of the identity of an Authorised Recipient for Your Customer
                                    Data directly by using the Companies Service(s) as part of
                                    Your application with an Authorised Recipient; and/or</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 42.55pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(b)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">via an Authorised Recipient of your Customer Data by
                                    instructing an Authorised Recipient to provide Your Customer
                                    Data to another Authorised Recipient or instructing an
                                    Authorised Recipient to notify the Company on Your
                                    behalf.</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: black;
                      ">1.5<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">"Primary Service Provider" means a business You have
                                    authorised the Company to provide Your Customer Data to
                                    (however the Company was Notified).
                                </span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: black;
                      ">1.6<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">"Secondary Service Provider" means a business You have
                                    authorised the Company to provide Your Customer Data to
                                    (however the Company was Notified), that provides major or
                                    ancillary services to You in connection with a Primary
                                    Services Provider.
                                </span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: black;
                      ">1.7<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">"Service(s)" means the provision of Your Customer Data by the
                                    Company to an Authorised Recipient, on demand of the
                                    Authorised Recipient to enable assessment by the Authorised
                                    Recipient of Your Customer Data.</span>
                            </p>

                            <p class="MsoListParagraphCxSpLast" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: black;
                      ">1.8<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">"Working Day" means a day (other than a Saturday, Sunday or
                                    public holiday) on which registered banks are open for
                                    business in Brisbane.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-bottom: 0cm;
                      margin-left: 18.75pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -18pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">2.<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">SERVICES.</span></b>
                            </p>

                            <p class="MsoListParagraphCxSpFirst" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">2.2<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">The Company will provide the Services.</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">2.3<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">To enable the Company to provide the Services:</span>
                            </p>

                            <p class="MsoListParagraphCxSpLast" style="
                      margin-left: 35.45pt;
                      text-indent: -14.15pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(a)<span style="font: 7pt 'Times New Roman'"> </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Provide Accurate Information.</span></b><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">&nbsp;You, the End User, agree to provide true, accurate,
                                    current and complete information about Yourself and Your
                                    accounts maintained at other web sites and You agree to not
                                    misrepresent Your identity or Your account information. You
                                    agree to keep Your account information up to date and
                                    accurate.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 37.5pt;
                      text-indent: -16.2pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(b)<span style="font: 7pt 'Times New Roman'">&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Proprietary Rights.</span></b><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">&nbsp;You may not copy, reproduce, distribute, or create
                                    derivative works from the Service however those may be
                                    obtained. Further, You agree not to reverse engineer or
                                    reverse compile any of the Service technology, including but
                                    not limited to, any Java applets associated with the
                                    Service.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 37.5pt;
                      text-indent: -16.2pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(c)<span style="font: 7pt 'Times New Roman'">&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Content You Provide.</span></b><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">&nbsp;By entering into this Agreement You are licensing to
                                    the Company and its service providers ("Service Provider"),
                                    any information, data, passwords, materials or other content
                                    (collectively, "Content") You provide through or to the
                                    Service. The Company and the Service Provider may use, modify,
                                    display, distribute and create new material using such Content
                                    to provide the Service to You. By submitting Content, You
                                    automatically agree, or promise that the owner of such Content
                                    has expressly agreed that, without any particular time limit,
                                    and without the payment of any fees, the Company and the
                                    Service Provider may use the Content for the purposes set out
                                    above. As between the Company and any Service Provider, the
                                    Company owns Your confidential account information.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 37.5pt;
                      text-indent: -16.2pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(d)<span style="font: 7pt 'Times New Roman'">&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Third Party Accounts.</span></b><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">&nbsp;By using the Service, You authorise the Company and any
                                    Service Provider to access third party sites designated by
                                    You, on Your behalf, to retrieve information requested by You,
                                    and to register for accounts requested by You. For all
                                    purposes hereof, You hereby grant the Company and any Service
                                    Provider a limited power of attorney, and You hereby appoint
                                    the Company and any Service Provider as Your true and lawful
                                    attorney-in-fact and agent, with full power of substitution
                                    and resubstitution, for You and in Your name, place and stead,
                                    in any and all capacities, to access third party internet
                                    sites, servers or documents, retrieve information, and use
                                    Your information, all as described above, with the full power
                                    and authority to do and perform each and every act and thing
                                    requisite and necessary to be done in connection with such
                                    activities, as fully to all intents and purposes as You might
                                    or could do in person. YOU ACKNOWLEDGE AND AGREE THAT WHEN THE
                                    COMPANY OR ANY SERVICE PROVIDER ACCESSES AND RETRIEVES
                                    INFORMATION FROM THIRD PARTY SITES, THE COMPANY AND ANY
                                    SERVICE PROVIDER ARE ACTING AS YOUR AGENT, AND NOT THE AGENT
                                    OR ON BEHALF OF THE THIRD PARTY. You agree that third party
                                    account providers shall be entitled to rely on the foregoing
                                    authorisation, agency and power of attorney granted by You.
                                    You understand and agree that the Service is not endorsed or
                                    sponsored by any third party account providers accessible
                                    through the Service.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 37.5pt;
                      text-indent: -16.2pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(e)<span style="font: 7pt 'Times New Roman'">&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">You may withdraw authority.</span></b><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">
                                    You are at liberty to withdraw the authority for the Company
                                    to provide the Services at any time, by notifying the Company
                                    in writing of that withdrawal. You acknowledge that the
                                    Company is not liable for any loss suffered by You as a result
                                    of Your withdrawal of authority.<br>
                                    <br>
                                </span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 18.75pt;
                      text-indent: -18pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">3<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">DISCLAIMER OF WARRANTIES.</span></b>
                            </p>

                            <p class="MsoNormal" style="
                      margin-top: 0cm;
                      margin-right: 0cm;
                      margin-bottom: 7.5pt;
                      margin-left: 18.75pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">YOU EXPRESSLY UNDERSTAND AND AGREE THAT:</span></b>
                            </p>

                            <p class="MsoListParagraphCxSpFirst" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">3.1<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">To the maximum extent permissible under law, and in
                                    particular without prejudice to Your rights pursuant to the
                                    Australian Consumer Law:</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 42.55pt;
                      text-indent: -21.85pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(a)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">YOUR USE OF THE SERVICE AND ALL INFORMATION, PRODUCTS AND
                                    OTHER CONTENT (INCLUDING THAT OF THIRD PARTIES) INCLUDED IN OR
                                    ACCESSIBLE FROM THE SERVICE IS AT YOUR SOLE RISK. THE SERVICE
                                    IS PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS. THE
                                    COMPANY AND ANY SERVICE PROVIDER EXPRESSLY DISCLAIM ALL
                                    WARRANTIES OF ANY KIND AS TO THE SERVICE AND ALL INFORMATION,
                                    PRODUCTS AND OTHER CONTENT (INCLUDING THAT OF THIRD PARTIES)
                                    INCLUDED IN OR ACCESSIBLE FROM THE SERVICE, WHETHER EXPRESS OR
                                    IMPLIED, INCLUDING, BUT NOT LIMITED TO THE IMPLIED WARRANTIES
                                    OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
                                    NON-INFRINGEMENT.</span>
                            </p>

                            <p class="MsoListParagraphCxSpLast" style="
                      margin-left: 42.55pt;
                      text-indent: -21.85pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(b)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">BY PROVIDING INFORMATION (INCLUDING CREDENTIALS/PASSCODES) TO
                                    THE COMPANY FOR THE PURPOSES OF USING THE SERVICE, YOU MAY BE
                                    IN BREACH OF YOUR BANK OR OTHER SERVICE PROVIDERS POLICIES.
                                    THE COMPANY DOES NOT GIVE ANY INDEMNITY FOR ANY BREACH YOU MAY
                                    OR MAY NOT BE CONSIDERED TO HAVE MADE.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 42.55pt;
                      text-indent: -21.85pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(c)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">THE COMPANY AND ANY SERVICE PROVIDER MAKE NO WARRANTY
                                    THAT:</span>
                            </p>

                            <p class="MsoListParagraphCxSpFirst" style="
                      margin-bottom: 0cm;
                      margin-left: 63.8pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: black;
                      ">i.<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">THE SERVICE WILL MEET YOUR REQUIREMENTS;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-bottom: 0cm;
                      margin-left: 63.8pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: black;
                      ">ii.<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">THE SERVICE WILL BE UNINTERRUPTED, TIMELY, SECURE, OR
                                    ERROR-FREE;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-bottom: 0cm;
                      margin-left: 63.8pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: black;
                      ">iii.<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SERVICE
                                    WILL BE ACCURATE OR RELIABLE;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-bottom: 0cm;
                      margin-left: 63.8pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: black;
                      ">iv.<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">THE QUALITY OF ANY PRODUCTS, SERVICES, INFORMATION, OR OTHER
                                    MATERIAL PURCHASED OR OBTAINED BY YOU THROUGH THE SERVICE WILL
                                    MEET YOUR EXPECTATIONS; OR</span>
                            </p>

                            <p class="MsoListParagraphCxSpLast" style="
                      margin-bottom: 0cm;
                      margin-left: 63.8pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: black;
                      ">v.<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">ANY ERRORS IN THE TECHNOLOGY WILL BE CORRECTED.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">3.2<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">ANY MATERIAL DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE
                                    OF THE SERVICE IS DONE AT YOUR OWN DISCRETION AND RISK AND YOU
                                    ARE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM
                                    OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF ANY SUCH
                                    MATERIAL. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN,
                                    OBTAINED BY YOU FROM COMPANY OR SERVICE PROVIDER THROUGH OR
                                    FROM THE SERVICE WILL CREATE ANY WARRANTY NOT EXPRESSLY STATED
                                    IN THESE TERMS.<br>
                                    <br>
                                </span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-bottom: 0cm;
                      margin-left: 18.75pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -18pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">4<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">LIMITATION OF LIABILITY.</span></b>
                            </p>

                            <p class="MsoNormal" style="
                      margin-top: 0cm;
                      margin-right: 0cm;
                      margin-bottom: 0cm;
                      margin-left: 18.75pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -18.75pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">4.1&nbsp; To the maximum extent permissible under law, and in
                                    particular without prejudice to Your rights pursuant to the
                                    Australian Consumer Law, You agree that neither the Company or
                                    any Service Provider nor any of their affiliates, account
                                    providers or any of their affiliates will be liable for any
                                    harm, which lawyers and courts often call direct, indirect,
                                    incidental, special, consequential or exemplary damages,
                                    including, but not limited to, damages for loss of profits,
                                    goodwill, use, data or other intangible losses, even if
                                    Company or Service Provider has been advised of the
                                    possibility of such damages, resulting from:</span>
                            </p>

                            <p class="MsoListParagraphCxSpFirst" style="
                      margin-left: 42.55pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(a)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">The use or the inability to use the Service;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 42.55pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(b)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">The cost of getting substitute goods and services;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 42.55pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(c)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">Any products, data, information or services purchased or
                                    obtained or messages received or transactions entered into,
                                    through or from the Service;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 42.55pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(d)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">Unauthorized access to or alteration of Your transmissions or
                                    data;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 42.55pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(e)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">Statements or conduct of anyone on the Service;</span>
                            </p>

                            <p class="MsoListParagraphCxSpMiddle" style="
                      margin-left: 42.55pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(f)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">The use, inability to use, unauthorised use, performance or
                                    non-performance of any third party account provider site, even
                                    if the provider has been advised previously of the possibility
                                    of such damages; or</span>
                            </p>

                            <p class="MsoListParagraphCxSpLast" style="
                      margin-left: 42.55pt;
                      text-indent: -21.25pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">(g)<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">Any other matter relating to the Service.<br>
                                    <br>
                                </span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-bottom: 0cm;
                      margin-left: 18.75pt;
                      margin-bottom: 0.0001pt;
                      text-indent: -18pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">5<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">INDEMNIFICATION.</span></b>
                            </p>

                            <p class="MsoListParagraph" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">5.1<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">You agree to protect and fully compensate the Company and any
                                    Service Provider and their affiliates from any and all third
                                    party claims, liability, damages, expenses and costs
                                    (including, but not limited to, reasonable solicitors fees)
                                    caused by or arising from Your use of the Service, Your
                                    violation of the terms of this Agreement or Your infringement,
                                    or infringement by any other user of Your account, of any
                                    intellectual property or other right of anyone.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">5.2<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">You agree that any Service Provider is a third party
                                    beneficiary of the above provisions, with all rights to
                                    enforce such provisions as if that Service Provider were a
                                    party to this Agreement.<br>
                                    <br>
                                </span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 18.75pt;
                      text-indent: -18pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">6<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">PROTECTED INFORMATION.</span></b>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">6.1<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><u><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Privacy Policy</span></u><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">. The Company's privacy policy (which is available on the
                                    Company’s website) shall govern the use of all Customer
                                    Data.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">6.2<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><u><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Permitted Uses of Customer Data</span></u><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">. The Company and any Service Provider may: (a) use Customer
                                    Data internally to provide and improve the Services; (b) to
                                    the extent permitted by law, use, sell, license, distribute
                                    and disclose Aggregated Data; (c) to perform fraud screening,
                                    verify identities, and verify information. The Company and any
                                    Service Provider who has access to Customer Data will not
                                    disclose Customer Data to any third party other than
                                    Aggregated Data.<br>
                                    <br>
                                </span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 18.75pt;
                      text-indent: -18pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">7<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span></span><b><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">MISCELLANEOUS.</span></b>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">7.1<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><u><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Assignment</span></u><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">. The Company may assign or delegate this Agreement or any of
                                    its rights or duties hereunder, directly or indirectly without
                                    Your consent. Subject to the foregoing, this Agreement will be
                                    binding upon and inure to the benefit of the parties and their
                                    successors and assigns.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">7.2<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><u><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Jurisdiction</span></u><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">. This Agreement shall be governed by the laws of the State
                                    of Queensland.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">7.3<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><u><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Notices, etc</span></u><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">. Any notice, notification, demand or request provided or
                                    permitted to be given under this Agreement must be in writing
                                    and will have been deemed to have been properly given, unless
                                    explicitly stated otherwise, if sent by (i) overnight courier
                                    (signature required), (ii) registered or certified mail,
                                    postage prepaid, return receipt requested, (iii) facsimile
                                    with receipt of a "Transmission OK" acknowledgment
                                    confirmation during normal business hours to the place of
                                    business of the recipient, or (iv) personal delivery with a
                                    signed receipt. In the case delivery by facsimile the notice
                                    must be followed by a copy of the notice being delivered by a
                                    means provided in clauses (i), (ii) or (iv). All notices,
                                    notifications, demands or requests so given will be deemed
                                    given and received (A) if mailed, four (4) Working Days after
                                    being deposited in the mail, (B) if sent via overnight
                                    courier, the next Working Day after being deposited, (C) if
                                    facsimiled, the next Working Day after being sent by
                                    facsimile, and (D) if personally delivered, when
                                    delivered.</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-top: 0cm;
                      margin-right: 0cm;
                      margin-bottom: 7.5pt;
                      margin-left: 37.5pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">The address for notices to Company is:</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-top: 0cm;
                      margin-right: 0cm;
                      margin-bottom: 7.5pt;
                      margin-left: 37.5pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">c/- JHK Legal<br>
                                    Level 23, 10 Eagle Street<br>
                                    Brisbane QLD 4000</span>
                            </p>

                            <p class="MsoNormal" style="
                      margin-left: 21.3pt;
                      text-indent: -21.3pt;
                      line-height: 15pt;
                      background: white;
                    ">
                                <span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">7.4<span style="font: 7pt 'Times New Roman'">&nbsp;&nbsp;
                                    </span></span><u><span style="
                          font-size: 10pt;
                          font-family: 'Arial', sans-serif;
                          color: #333333;
                        ">Severability</span></u><span style="
                        font-size: 10pt;
                        font-family: 'Arial', sans-serif;
                        color: #333333;
                      ">. If any provision of this Agreement shall be held by a court
                                    of competent jurisdiction to be contrary to law, such
                                    provision shall be changed and interpreted so as to best
                                    accomplish the objectives of the original provision to the
                                    fullest extent allowed by law and the remaining provisions of
                                    this Agreement shall remain in full force and effect.</span>
                            </p>

                            <p class="MsoNormal">
                                <span style="
                        font-size: 10pt;
                        line-height: 115%;
                        font-family: 'Arial', sans-serif;
                      ">&nbsp;</span>
                            </p>
                        </div>
                    </div>
                    <div class="WordSection1">

                        <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm;margin-bottom:7.5pt;
    margin-left:0cm;line-height:30.0pt;background:white"><b><span style="font-size:
    12.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">End User Terms and
                                    Conditions of Use</span></b></p>

                        <p class="MsoNormal" style="margin-bottom:7.5pt;line-height:16.5pt;background:
    white"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">Important - Read Carefully Before Accepting These Terms and
                                    Conditions</span></b></p>

                        <p class="MsoNormal" style="margin-bottom:7.5pt;line-height:16.5pt;background:
    white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">If
                                You do&nbsp;<u>not</u>&nbsp;accept these Terms and Conditions You must not
                                click "I Agree" stating You agree to be bound by these Terms and
                                Conditions nor should You click "I Agree" stating that You have read
                                and agree to the terms of the Privacy Policy of the Company (which is available
                                on the Company’s website).</span></p>

                        <p class="MsoNormal" style="margin-bottom:7.5pt;line-height:16.5pt;background:
    white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">On
                                acceptance of these Terms and Conditions the Agreement will be finalised and
                                the following provisions shall apply to the relationship between You and the
                                Company.</span></p>

                        <p class="MsoNormal" style="margin-bottom:7.5pt;line-height:16.5pt;background:
    white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">These
                                Terms and Conditions ("Agreement") constitute a legally binding
                                agreement between the End User (an individual consumer, small business,
                                corporation or other entity that registers for the Service by submitting
                                credentials and accepting this Agreement, "You", "End User",
                                "Customer") and Credit Sense Australia Pty Ltd ACN 163 577 768
                                ("Company").</span></p>

                        <p class="MsoNormal" style="margin-bottom:7.5pt;line-height:16.5pt;background:
    white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">The
                                purpose of this Agreement is to regulate the legal relationship between You and
                                the Company in relation to Your use of the Service (defined below).</span></p>

                        <p class="MsoNormal" style="margin-bottom:7.5pt;line-height:16.5pt;background:
    white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">The
                                parties hereby agree as follows:</span></p>

                        <p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
    margin-left:18.75pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:15.0pt;
    background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">1.<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">DEFINITIONS.</span></b></p>

                        <p class="MsoListParagraphCxSpFirst" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">1.1<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">"Aggregated Data" means Customer Data and usage information that
                                has been stripped of all personally identifiable information.</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">1.2<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">"Authorised Recipient" means a Primary Service Provider or a
                                Secondary Service Provider.</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">1.3<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">"Customer Data" means a Customer's account
                                information, account access information, registration information and Content,
                                as provided by You or as You have consented to the Company obtaining or
                                accessing under this Agreement.</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">1.4<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">"Notified" and "Notification" means You have notified the
                                Company:</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:42.55pt;text-indent:
    -21.25pt;line-height:15.0pt;background:white"><span style="font-size:10.0pt;
    font-family:&quot;Arial&quot;,sans-serif;color:#333333">(a)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">of the identity of an Authorised Recipient for Your Customer
                                Data directly by using the Companies Service(s) as part of Your application
                                with an Authorised Recipient; and/or</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:42.55pt;text-indent:
    -21.25pt;line-height:15.0pt;background:white"><span style="font-size:10.0pt;
    font-family:&quot;Arial&quot;,sans-serif;color:#333333">(b)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">via an Authorised Recipient of your Customer Data by instructing
                                an Authorised Recipient to provide Your Customer Data to another Authorised
                                Recipient or instructing an Authorised Recipient to notify the Company on Your
                                behalf.</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:black">1.5<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">"Primary Service Provider" means a business You have authorised
                                the Company to provide Your Customer Data to (however the Company was
                                Notified). </span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:black">1.6<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">"Secondary Service Provider" means a business You have
                                authorised the Company to provide Your Customer Data to (however the Company
                                was Notified), that provides major or ancillary services to You in connection
                                with a Primary Services Provider. </span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:black">1.7<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">"Service(s)" means the provision of Your Customer Data by
                                the Company to an Authorised Recipient, on demand of the Authorised Recipient
                                to enable assessment by the Authorised Recipient of Your Customer Data.</span></p>

                        <p class="MsoListParagraphCxSpLast" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:black">1.8<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">"Working Day" means a day (other than a Saturday, Sunday or
                                public holiday) on which registered banks are open for business in Brisbane.</span></p>

                        <p class="MsoNormal" style="margin-bottom:0cm;margin-left:18.75pt;margin-bottom:
    .0001pt;text-indent:-18.0pt;line-height:15.0pt;background:white"><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">2.<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><b><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">SERVICES.</span></b>
                        </p>

                        <p class="MsoListParagraphCxSpFirst" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">2.2<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">The Company will provide the Services.</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif; color:#333333">2.3<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">To enable the Company to provide the Services:</span></p>

                        <p class="MsoListParagraphCxSpLast" style="margin-left:35.45pt;text-indent:-14.15pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">(a)<span style="font:7.0pt &quot;Times New Roman&quot;">
                                </span></span><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">Provide Accurate Information.</span></b><span style="font-size:
    10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">&nbsp;You, the End User,
                                agree to provide true, accurate, current and complete information about Yourself
                                and Your accounts maintained at other web sites and You agree to not
                                misrepresent Your identity or Your account information. You agree to keep Your
                                account information up to date and accurate.</span></p>

                        <p class="MsoNormal" style="margin-left:37.5pt;text-indent:-16.2pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">(b)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span><b><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Proprietary
                                    Rights.</span></b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">&nbsp;You may not copy, reproduce, distribute, or create
                                derivative works from the Service however those may be obtained. Further, You
                                agree not to reverse engineer or reverse compile any of the Service technology,
                                including but not limited to, any Java applets associated with the Service.</span></p>

                        <p class="MsoNormal" style="margin-left:37.5pt;text-indent:-16.2pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">(c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span><b><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Content
                                    You Provide.</span></b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">&nbsp;By entering into this Agreement You are licensing to the
                                Company and its service providers ("Service Provider"), any
                                information, data, passwords, materials or other content (collectively,
                                "Content") You provide through or to the Service. The Company and the
                                Service Provider may use, modify, display, distribute and create new material
                                using such Content to provide the Service to You. By submitting Content, You
                                automatically agree, or promise that the owner of such Content has expressly
                                agreed that, without any particular time limit, and without the payment of any
                                fees, the Company and the Service Provider may use the Content for the purposes
                                set out above. As between the Company and any Service Provider, the Company
                                owns Your confidential account information.</span></p>

                        <p class="MsoNormal" style="margin-left:37.5pt;text-indent:-16.2pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">(d)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span><b><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Third
                                    Party Accounts.</span></b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">&nbsp;By using the Service, You authorise the Company and any
                                Service Provider to access third party sites designated by You, on Your behalf,
                                to retrieve information requested by You, and to register for accounts
                                requested by You. For all purposes hereof, You hereby grant the Company and any
                                Service Provider a limited power of attorney, and You hereby appoint the
                                Company and any Service Provider as Your true and lawful attorney-in-fact and
                                agent, with full power of substitution and resubstitution, for You and in Your
                                name, place and stead, in any and all capacities, to access third party
                                internet sites, servers or documents, retrieve information, and use Your
                                information, all as described above, with the full power and authority to do
                                and perform each and every act and thing requisite and necessary to be done in
                                connection with such activities, as fully to all intents and purposes as You
                                might or could do in person. YOU ACKNOWLEDGE AND AGREE THAT WHEN THE COMPANY OR
                                ANY SERVICE PROVIDER ACCESSES AND RETRIEVES INFORMATION FROM THIRD PARTY SITES,
                                THE COMPANY AND ANY SERVICE PROVIDER ARE ACTING AS YOUR AGENT, AND NOT THE
                                AGENT OR ON BEHALF OF THE THIRD PARTY. You agree that third party account
                                providers shall be entitled to rely on the foregoing authorisation, agency and
                                power of attorney granted by You. You understand and agree that the Service is
                                not endorsed or sponsored by any third party account providers accessible
                                through the Service.</span></p>

                        <p class="MsoNormal" style="margin-left:37.5pt;text-indent:-16.2pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">(e)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span><b><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">You
                                    may
                                    withdraw authority.</span></b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333"> You are at liberty to withdraw the authority for the Company to
                                provide the Services at any time, by notifying the Company in writing of that
                                withdrawal. You acknowledge that the Company is not liable for any loss
                                suffered by You as a result of Your withdrawal of authority.<br>
                                <br>
                            </span></p>

                        <p class="MsoNormal" style="margin-left:18.75pt;text-indent:-18.0pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">3<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">DISCLAIMER OF WARRANTIES.</span></b></p>

                        <p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;
    margin-left:18.75pt;line-height:15.0pt;background:white"><b><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">YOU
                                    EXPRESSLY UNDERSTAND AND AGREE THAT:</span></b></p>

                        <p class="MsoListParagraphCxSpFirst" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">3.1<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">To the maximum extent permissible under law, and in particular
                                without prejudice to Your rights pursuant to the Australian Consumer Law:</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:42.55pt;text-indent:
    -21.85pt;line-height:15.0pt;background:white"><span style="font-size:10.0pt;
    font-family:&quot;Arial&quot;,sans-serif;color:#333333">(a)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">YOUR USE OF THE SERVICE AND ALL INFORMATION, PRODUCTS AND OTHER
                                CONTENT (INCLUDING THAT OF THIRD PARTIES) INCLUDED IN OR ACCESSIBLE FROM THE
                                SERVICE IS AT YOUR SOLE RISK. THE SERVICE IS PROVIDED ON AN "AS IS"
                                AND "AS AVAILABLE" BASIS. THE COMPANY AND ANY SERVICE PROVIDER
                                EXPRESSLY DISCLAIM ALL WARRANTIES OF ANY KIND AS TO THE SERVICE AND ALL
                                INFORMATION, PRODUCTS AND OTHER CONTENT (INCLUDING THAT OF THIRD PARTIES)
                                INCLUDED IN OR ACCESSIBLE FROM THE SERVICE, WHETHER EXPRESS OR IMPLIED,
                                INCLUDING, BUT NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY,
                                FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT.</span></p>

                        <p class="MsoListParagraphCxSpLast" style="margin-left:42.55pt;text-indent:-21.85pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">(b)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">BY PROVIDING INFORMATION (INCLUDING CREDENTIALS/PASSCODES) TO
                                THE COMPANY FOR THE PURPOSES OF USING THE SERVICE, YOU MAY BE IN BREACH OF YOUR
                                BANK OR OTHER SERVICE PROVIDERS POLICIES. THE COMPANY DOES NOT GIVE ANY
                                INDEMNITY FOR ANY BREACH YOU MAY OR MAY NOT BE CONSIDERED TO HAVE MADE.</span></p>

                        <p class="MsoNormal" style="margin-left:42.55pt;text-indent:-21.85pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">(c)<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">THE COMPANY AND ANY SERVICE PROVIDER MAKE NO WARRANTY THAT:</span></p>

                        <p class="MsoListParagraphCxSpFirst" style="margin-bottom:0cm;margin-left:63.8pt;
    margin-bottom:.0001pt;text-indent:-21.25pt;line-height:15.0pt;background:white"><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:black">i.<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">THE
                                SERVICE WILL MEET YOUR REQUIREMENTS;</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-bottom:0cm;margin-left:63.8pt;
    margin-bottom:.0001pt;text-indent:-21.25pt;line-height:15.0pt;background:white"><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:black">ii.<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">THE
                                SERVICE WILL BE UNINTERRUPTED, TIMELY, SECURE, OR ERROR-FREE;</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-bottom:0cm;margin-left:63.8pt;
    margin-bottom:.0001pt;text-indent:-21.25pt;line-height:15.0pt;background:white"><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:black">iii.<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">THE
                                RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SERVICE WILL BE ACCURATE OR
                                RELIABLE;</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-bottom:0cm;margin-left:63.8pt;
    margin-bottom:.0001pt;text-indent:-21.25pt;line-height:15.0pt;background:white"><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:black">iv.<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">THE
                                QUALITY OF ANY PRODUCTS, SERVICES, INFORMATION, OR OTHER MATERIAL PURCHASED OR
                                OBTAINED BY YOU THROUGH THE SERVICE WILL MEET YOUR EXPECTATIONS; OR</span></p>

                        <p class="MsoListParagraphCxSpLast" style="margin-bottom:0cm;margin-left:63.8pt;
    margin-bottom:.0001pt;text-indent:-21.25pt;line-height:15.0pt;background:white"><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:black">v.<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">ANY
                                ERRORS IN THE TECHNOLOGY WILL BE CORRECTED.</span></p>

                        <p class="MsoNormal" style="margin-left:21.3pt;text-indent:-21.3pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">3.2<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">ANY
                                MATERIAL DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SERVICE IS
                                DONE AT YOUR OWN DISCRETION AND RISK AND YOU ARE SOLELY RESPONSIBLE FOR ANY
                                DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD
                                OF ANY SUCH MATERIAL. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN,
                                OBTAINED BY YOU FROM COMPANY OR SERVICE PROVIDER THROUGH OR FROM THE SERVICE
                                WILL CREATE ANY WARRANTY NOT EXPRESSLY STATED IN THESE TERMS.<br>
                                <br>
                            </span></p>

                        <p class="MsoNormal" style="margin-bottom:0cm;margin-left:18.75pt;margin-bottom:
    .0001pt;text-indent:-18.0pt;line-height:15.0pt;background:white"><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">4<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><b><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">LIMITATION
                                    OF LIABILITY.</span></b></p>

                        <p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
    margin-left:18.75pt;margin-bottom:.0001pt;text-indent:-18.75pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">4.1&nbsp; To the maximum extent permissible under law, and in
                                particular without prejudice to Your rights pursuant to the Australian Consumer
                                Law, You agree that neither the Company or any Service Provider nor any of
                                their affiliates, account providers or any of their affiliates will be liable
                                for any harm, which lawyers and courts often call direct, indirect, incidental,
                                special, consequential or exemplary damages, including, but not limited to,
                                damages for loss of profits, goodwill, use, data or other intangible losses,
                                even if Company or Service Provider has been advised of the possibility of such
                                damages, resulting from:</span></p>

                        <p class="MsoListParagraphCxSpFirst" style="margin-left:42.55pt;text-indent:-21.25pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">(a)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">The use or the inability to use the Service;</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:42.55pt;text-indent:
    -21.25pt;line-height:15.0pt;background:white"><span style="font-size:10.0pt;
    font-family:&quot;Arial&quot;,sans-serif;color:#333333">(b)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">The cost of getting substitute goods and services;</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:42.55pt;text-indent:
    -21.25pt;line-height:15.0pt;background:white"><span style="font-size:10.0pt;
    font-family:&quot;Arial&quot;,sans-serif;color:#333333">(c)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">Any products, data, information or services purchased or
                                obtained or messages received or transactions entered into, through or from the
                                Service;</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:42.55pt;text-indent:
    -21.25pt;line-height:15.0pt;background:white"><span style="font-size:10.0pt;
    font-family:&quot;Arial&quot;,sans-serif;color:#333333">(d)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">Unauthorized access to or alteration of Your transmissions or
                                data;</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:42.55pt;text-indent:
    -21.25pt;line-height:15.0pt;background:white"><span style="font-size:10.0pt;
    font-family:&quot;Arial&quot;,sans-serif;color:#333333">(e)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">Statements or conduct of anyone on the Service;</span></p>

                        <p class="MsoListParagraphCxSpMiddle" style="margin-left:42.55pt;text-indent:
    -21.25pt;line-height:15.0pt;background:white"><span style="font-size:10.0pt;
    font-family:&quot;Arial&quot;,sans-serif;color:#333333">(f)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">The use, inability to use, unauthorised use, performance or
                                non-performance of any third party account provider site, even if the provider
                                has been advised previously of the possibility of such damages; or</span></p>

                        <p class="MsoListParagraphCxSpLast" style="margin-left:42.55pt;text-indent:-21.25pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">(g)<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">Any other matter relating to the Service.<br>
                                <br>
                            </span></p>

                        <p class="MsoNormal" style="margin-bottom:0cm;margin-left:18.75pt;margin-bottom:
    .0001pt;text-indent:-18.0pt;line-height:15.0pt;background:white"><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">5<span
                                    style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><b><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">INDEMNIFICATION.</span></b>
                        </p>

                        <p class="MsoListParagraph" style="margin-left:21.3pt;text-indent:-21.3pt;
    line-height:15.0pt;background:white"><span style="font-size:10.0pt;font-family:
    &quot;Arial&quot;,sans-serif;color:#333333">5.1<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
                                </span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">You agree to protect and fully compensate the Company and any
                                Service Provider and their affiliates from any and all third party claims,
                                liability, damages, expenses and costs (including, but not limited to,
                                reasonable solicitors fees) caused by or arising from Your use of the Service, Your
                                violation of the terms of this Agreement or Your infringement, or infringement
                                by any other user of Your account, of any intellectual property or other right
                                of anyone.</span></p>

                        <p class="MsoNormal" style="margin-left:21.3pt;text-indent:-21.3pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">5.2<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">You
                                agree
                                that any Service Provider is a third party beneficiary of the above provisions,
                                with all rights to enforce such provisions as if that Service Provider were a
                                party to this Agreement.<br>
                                <br>
                            </span></p>

                        <p class="MsoNormal" style="margin-left:18.75pt;text-indent:-18.0pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">6<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">PROTECTED INFORMATION.</span></b></p>

                        <p class="MsoNormal" style="margin-left:21.3pt;text-indent:-21.3pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">6.1<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span><u><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Privacy
                                    Policy</span></u><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">. The Company's privacy policy (which is available on the
                                Company’s website) shall govern the use of all Customer Data.</span></p>

                        <p class="MsoNormal" style="margin-left:21.3pt;text-indent:-21.3pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">6.2<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span><u><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Permitted
                                    Uses of Customer Data</span></u><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">. The Company and any Service Provider may: (a) use Customer
                                Data internally to provide and improve the Services; (b) to the extent
                                permitted by law, use, sell, license, distribute and disclose Aggregated Data;
                                (c) to perform fraud screening, verify identities, and verify information. The
                                Company and any Service Provider who has access to Customer Data will not
                                disclose Customer Data to any third party other than Aggregated Data.<br>
                                <br>
                            </span></p>

                        <p class="MsoNormal" style="margin-left:18.75pt;text-indent:-18.0pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">7<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">MISCELLANEOUS.</span></b></p>

                        <p class="MsoNormal" style="margin-left:21.3pt;text-indent:-21.3pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">7.1<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span><u><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Assignment</span></u><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">. The
                                Company may assign or delegate this Agreement or any of its rights or duties
                                hereunder, directly or indirectly without Your consent. Subject to the
                                foregoing, this Agreement will be binding upon and inure to the benefit of the
                                parties and their successors and assigns.</span></p>

                        <p class="MsoNormal" style="margin-left:21.3pt;text-indent:-21.3pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">7.2<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span><u><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Jurisdiction</span></u><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">. This
                                Agreement shall be governed by the laws of the State of Queensland.</span></p>

                        <p class="MsoNormal" style="margin-left:21.3pt;text-indent:-21.3pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">7.3<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span><u><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Notices,
                                    etc</span></u><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">. Any notice, notification, demand or request provided or
                                permitted to be given under this Agreement must be in writing and will have
                                been deemed to have been properly given, unless explicitly stated otherwise, if
                                sent by (i) overnight courier (signature required), (ii) registered or
                                certified mail, postage prepaid, return receipt requested, (iii) facsimile with
                                receipt of a "Transmission OK" acknowledgment confirmation during
                                normal business hours to the place of business of the recipient, or (iv)
                                personal delivery with a signed receipt. In the case delivery by facsimile the
                                notice must be followed by a copy of the notice being delivered by a means
                                provided in clauses (i), (ii) or (iv). All notices, notifications, demands or
                                requests so given will be deemed given and received (A) if mailed, four (4) Working
                                Days after being deposited in the mail, (B) if sent via overnight courier, the
                                next Working Day after being deposited, (C) if facsimiled, the next Working Day
                                after being sent by facsimile, and (D) if personally delivered, when delivered.</span>
                        </p>

                        <p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;
    margin-left:37.5pt;line-height:15.0pt;background:white"><span style="font-size:
    10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">The address for notices to
                                Company is:</span></p>

                        <p class="MsoNormal" style="margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;
    margin-left:37.5pt;line-height:15.0pt;background:white"><span style="font-size:
    10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">c/- JHK Legal<br>
                                Level 23, 10 Eagle Street<br>
                                Brisbane QLD 4000</span></p>

                        <p class="MsoNormal" style="margin-left:21.3pt;text-indent:-21.3pt;line-height:
    15.0pt;background:white"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;
    color:#333333">7.4<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp; </span></span><u><span
                                    style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Severability</span></u><span
                                style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">. If any
                                provision of this Agreement shall be held by a court of competent jurisdiction
                                to be contrary to law, such provision shall be changed and interpreted so as to
                                best accomplish the objectives of the original provision to the fullest extent
                                allowed by law and the remaining provisions of this Agreement shall remain in
                                full force and effect.</span></p>



                        <p class="MsoNormal"><span style="font-size:10.0pt;line-height:115%;font-family:
    &quot;Arial&quot;,sans-serif">&nbsp;</span></p>

                    </div>
                </div>
            </form>
        </div>

        <div id="loading-terms-and-condition" style="display: none">
            <div class="lead text-center">
                <h2>
                    <img src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/loading.gif"
                        alt="Loading">
                    Loading, please wait
                </h2>
            </div>
        </div>

        <div id="accept-terms" class="btngroup">
            <button class="btn pull-left btn-large btn-link big-button" type="button"
                style="color: grey; outline: none; width: auto" id="Decline-and-logout">
                Decline and Logout
            </button>
            <button class="btn pull-right btn-large btn-success big-button" type="button" id="IAgree-All-Terms">
                I Agree
            </button>

        </div>
        <div class="clearfix"></div>
        <div class="Terms-bottom-pad" style="padding-bottom: 50px"></div>
    </div>
</div>
</div>
<!-- -------------------goverment banifits------------------------------------- -->
<div class="alignMiddle" id="Q-Benefits-Gov" style="display: none;">
<div class="container creditsense-container" >
    <div id="Q-Benefits">
        <!-- If Centrelink Primary -->
        <div style="display: none;" id="receive-gov-benfit">
            <div class="page-header col-12">
                <h1>Do you receive government benefits?</h1>
            </div>
            <p class="lead">
                If you currently receive benefits, then you'll need to log into your
                myGov account to provide statements of income support (e.g. evidence of
                any Centrelink income, ATO notice of assessment, etc.)
            </p>
            <div class="btnGroup">
                <button class="btn pull-left btn-large btn-inverse big-button" type="button" id="receive-gov-benfit-no-btn">
                    No
                </button>
                <button class="btn pull-right btn-large btn-success big-button" type="button">
                    Yes
                </button>
            </div>
        </div>

        <div style="display: none;" id="have-mygov-account">
            <div class="page-header col-12">
                <h1>Do you have a myGov account?</h1>
            </div>
            <p class="lead">
                Use your myGov account to help confirm your identify, and also provide
                any additional supporting documents (e.g. identity information on your
                Medicare profile, ATO notice of assessment).
            </p>
            <div class="btnGroup">
                <button class="btn pull-left btn-inverse btn-large big-button" type="button">
                    No
                </button>
                <button class="btn pull-right btn-success btn-large big-button" type="button">
                    Yes
                </button>
            </div>
        </div>

        <div style="display: none;" id="receive-gov-benefit">
            <div class="page-header col-12">
                <h1>Do you receive government benefits?</h1>
            </div>
            <p class="lead">
                If you receive benefits, then you'll need to log into your WINZ account
                to provide statements of income support.
            </p>
            <div class="btnGroup">
                <button class="btn pull-left btn-inverse btn-large big-button" type="button">
                    No
                </button>
                <button class="btn pull-right btn-success btn-large big-button" type="button">
                    Yes
                </button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- --------------------------------success upload completed --------------------------------------------------- -->
<div class="alignMiddle" id="LoginStatus" style="display: none;">
    <div class="container creditsense-container">
        <div>
            <div class="page-header">
                <h1 id="LoginStatusHeader" style="color: rgb(0, 168, 20);font-size: 38.5px;">Statement upload complete
                </h1>
            </div>
            <div id="BankLoginResult">
                <p class="lead">
                    Bank account statement:
                    <span id="BankResult" style="margin-left: 10px;" retries="0"><span
                            class="BankResultLabel success">
                            <svg  width="15" height="12" viewBox="0 0 15 12" fill="none">
                                <path d="M15 2.02566V2.05322C14.9947 2.1536 14.9646 2.23476 14.9098 2.2967C12.101 5.46183 9.29238 8.62696 6.48398 11.7921C6.35332 11.9395 6.22354 12.0444 6.02842 11.9813C5.96572 11.961 5.87324 11.8947 5.75098 11.7824C3.87559 10.0607 1.9999 8.33916 0.123926 6.61766C0.0561523 6.55535 0.0148437 6.47182 0 6.36708V6.33157C0.0101562 6.23062 0.0453125 6.14927 0.105469 6.08752C0.679102 5.50056 1.25225 4.91312 1.8249 4.32521C1.93662 4.21043 2.02461 4.14149 2.08887 4.11838C2.27227 4.05219 2.4085 4.12861 2.55 4.25873C3.53516 5.16257 4.52002 6.06659 5.50459 6.97081C5.62217 7.07877 5.7124 7.1425 5.77529 7.16201C5.96191 7.21968 6.09082 7.1282 6.2165 6.98643C8.23818 4.70866 10.2597 2.43079 12.281 0.152832C12.4019 0.0166507 12.5409 -0.0285222 12.6981 0.0173136C12.7616 0.0358752 12.8398 0.0840785 12.9328 0.161924C13.5742 0.698126 14.2155 1.23433 14.8567 1.77053C14.9337 1.83474 14.9814 1.91978 15 2.02566Z" fill="#3C3C3C"/>
                                </svg>
                            Success
                        </span></span>
                    <br>
                </p>
                <hr class="">
            </div>
        </div>
    </div>
</div>
<!-- -----------------------------------login pending------------------------------------------------ -->
<div class="alignMiddle" id="LoginPending-Status" style="display: none;">
    <div class="container creditsense-container">
        <div class="page-header">
            <h1 id="LoginStatusHeader">Login pending</h1>
        </div>
        <div id="BankLoginResult">
            <p class="lead">
                Bank account statement:
                <span id="BankResult" style="margin-left: 10px;" retries="0"><span class="BankResultLabel pending"><img
                            src="https://569787936a37d0db319a-e0959f0c4b13f2119afa7f6d59970d69.ssl.cf4.rackcdn.com/img/loading-small.gif"
                            style="height: 25px;"> Pending</span></span>
                <br>
            </p>

            <div id="pleasewait" class="alert">
                <em><strong>It can sometimes take several minutes for this process to finish.</strong><br> Please keep
                    this tab open as we process your application.</em>
            </div>
            <hr>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<?php $this->endSection() ?>