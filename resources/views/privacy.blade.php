@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="top-destination">
                <h1>Privacy Policy</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="program_content">
                <div class="program_panes" id="wiki">
                    <div class="program_desc">
                        <p>MariaEgypt is committed to developing quality touring experiences for our clients, working to personalize each experience to individual budgets and interests and ensuring that each of our clients is treated to quality service and an unforgettable experience while in&nbsp;any country they chose to visit.<br>
                            <br>
                            Additionally, we aim to build a sense of trust with our clients, which we hope will encourage them to return again and again to use our services. An important part of this relationship is our commitment to operate our tours honestly and reliably from the beginning of the booking and planning process through the completion of the tour and beyond. We value your trust and are honored that you might choose us to help your vacation a memorable one. As a result we make it a high priority to ensure the privacy and confidentiality of any personal information that you provide us. Please read the policy below to learn about our privacy practices. By using this website and our planning resources you are accepting the privacy practices described below.<br>
                            <br>
                            <strong>Information We Collect From You</strong>
                        </p>
                        <p>&nbsp;</p>
                        <p><u><strong>A.</strong></u> All credit/debit cards details and personally identifiable information will NOT be stored, sold, shared, rented or leased to any third parties. &nbsp;</p>
                        <p>&nbsp;</p>
                        <p><u><strong>B.</strong></u> The Website Policies and Terms &amp; Conditions may be changed or updated occasionally to meet the requirements and standards. Therefore the Customers’ are encouraged to frequently visit these sections in order to be updated about the changes on the website. Modifications will be effective on the day they are posted.&nbsp;</p>
                        <p>&nbsp;</p>
                        <p><u><strong>C.</strong></u> Some of the advertisements you see on the Site are selected and delivered by third parties, such as ad networks, advertising agencies, advertisers, and audience segment providers. These third parties may collect information about you and your online activities, either on the Site or on other websites, through cookies, web beacons, and other technologies in an effort to understand your interests and deliver to you advertisements that are tailored to your interests. Please remember that we do not have access to, or control over, the information these third parties may collect. The information practices of these third parties are not covered by this privacy policy.&nbsp;</p>
                        <p><br>
                            <br>
                            <strong><em>We may also share your information in the following circumstances:</em></strong><br>
                            • In response to subpoenas, court orders, or other legal process; to establish or exercise our legal rights; to defend against legal claims; or as otherwise required by law. In such cases we reserve the right to raise or waive any legal objection or right available to us.<br>
                            • When we believe it is appropriate to investigate, prevent, or take action regarding illegal or suspected illegal activities; to protect and defend the rights, property, or safety of our company or this website, our customers, or others; and in connection with our Terms of Service and other agreements.<br>
                            <br>
                            Other than as set out above, you will be notified when personal information about you will be shared with third parties, and you will have an opportunity to choose not to have us share such information. MariaEgypt take your privacy and confidentiality very seriously. In no circumstances, other than those outlined above, will any of your personal information be shared with other entities or third-parties.<br>
                            <br>
                            <strong>How we protect your information</strong><br>
                            Our goal is for you to feel confident using this website and the travel arrangements offered here and we are committed to protecting the information we collect in order to engender such confidence. While no website is completely secure, we have implemented the best measures available to us in order to protect the sensitive information that you provide us with administrative, electronic, and physical security measures. Only those employees that are managing your account will have access to your personal information and only when they are performing business functions where this information is necessary. We have employed MacAffee Security software to encrypt your information while transmitting your personal information within our system and to other necessary users of that information. This software also employs firewalls and intrusion detection systems to prevent any breakdowns in the security of this site or access to your information by unauthorized persons.<br>
                            <br>
                            <strong>External Links</strong><br>
                            If any part of this website links you to another site, those sites do not operate under this Privacy Policy. We recommend you examine the privacy statements posted on those other websites to understand their procedures for collecting, using, and disclosing personal information.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 offset-md-3">
            <a id="Form"></a>
            <form id="bookform" method="post" action="/Egypt/reservation_forms/requests/mail/">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group label-floating is-empty">
                            <input name="name" type="text" id="name" value="" class="form-control" required="" placeholder="Name *">
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group label-floating is-empty">
                            <input name="UserEmail" value="" type="email" required="" class="form-control" id="UserEmail" placeholder="E-mail *" onfocusout="validateMail()">
                            <div id="mail-validation"></div>
                            <span class="material-input"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group label-floating form_select is-empty">
                            <select id="nationality" class="form-control" name="nationality" required="">
                                <option value="" selected="selected">Select your Nationality *</option>
                                <option value="American">American</option>
                                <option value="Afghan">Afghan</option>
                                <option value="Albanian">Albanian</option>
                                <option value="Algerian">Algerian</option>
                                <option value="Andorran">Andorran</option>
                                <option value="Angolan">Angolan</option>
                                <option value="Argentinian">Argentinian</option>
                                <option value="Armenian">Armenian</option>
                                <option value="Australian">Australian</option>
                                <option value="Austrian">Austrian</option>
                                <option value="Azerbaijani">Azerbaijani</option>
                                <option value="Bahamian">Bahamian</option>
                                <option value="Bahraini">Bahraini</option>
                                <option value="Bangladeshi">Bangladeshi</option>
                                <option value="Barbadian">Barbadian</option>
                                <option value="Belarusian">Belarusian</option>
                                <option value="Belgian">Belgian</option>
                                <option value="Belizean">Belizean</option>
                                <option value="Beninese">Beninese</option>
                                <option value="Bhutanese">Bhutanese</option>
                                <option value="Bolivian">Bolivian</option>
                                <option value="Bosnian">Bosnian</option>
                                <option value="Botswanan">Botswanan</option>
                                <option value="Brazilian">Brazilian</option>
                                <option value="British&nbsp;Indian Ocean">British&nbsp;Indian Ocean</option>
                                <option value="British Virgin">British Virgin</option>
                                <option value="Bruneian">Bruneian</option>
                                <option value="Bulgarian">Bulgarian</option>
                                <option value="Burkinese">Burkinese</option>
                                <option value="Burundian">Burundian</option>
                                <option value="Cambodian">Cambodian</option>
                                <option value="Cameroonian">Cameroonian</option>
                                <option value="Canadian">Canadian</option>
                                <option value="Cape Verdean">Cape Verdean</option>
                                <option value="Chadian">Chadian</option>
                                <option value="Chilean">Chilean</option>
                                <option value="Chinese">Chinese</option>
                                <option value="Colombian">Colombian</option>
                                <option value="Congolese">Congolese</option>
                                <option value="Costa Rican">Costa Rican</option>
                                <option value="Croatian">Croatian</option>
                                <option value="Cuban">Cuban</option>
                                <option value="Cypriot">Cypriot</option>
                                <option value="Czech">Czech</option>
                                <option value="Danish">Danish</option>
                                <option value="Djiboutian">Djiboutian</option>
                                <option value="Dominican">Dominican</option>
                                <option value="East Timorese">East Timorese</option>
                                <option value="Ecuadorean">Ecuadorean</option>
                                <option value="Egyptian">Egyptian</option>
                                <option value="Salvadorean">Salvadorean</option>
                                <option value="Guinean">Guinean</option>
                                <option value="Eritrean">Eritrean</option>
                                <option value="Estonian">Estonian</option>
                                <option value="Ethiopian">Ethiopian</option>
                                <option value="Fijian">Fijian</option>
                                <option value="Finnish">Finnish</option>
                                <option value="French">French</option>
                                <option value="Guyanese">Guyanese</option>
                                <option value="Gabonese">Gabonese</option>
                                <option value="Gambian">Gambian</option>
                                <option value="Georgian">Georgian</option>
                                <option value="German">German</option>
                                <option value="Ghanaian">Ghanaian</option>
                                <option value="Greek">Greek</option>
                                <option value="Grenadian">Grenadian</option>
                                <option value="Guatemalan">Guatemalan</option>
                                <option value="Guinean">Guinean</option>
                                <option value="Haitian">Haitian</option>
                                <option value="Honduran">Honduran</option>
                                <option value="Hungarian">Hungarian</option>
                                <option value="Icelander">Icelander</option>
                                <option value="Indian">Indian</option>
                                <option value="Indonesian">Indonesian</option>
                                <option value="Iranian">Iranian</option>
                                <option value="Iraqi">Iraqi</option>
                                <option value="Irish">Irish</option>
                                <option value="Israeli">Israeli</option>
                                <option value="Italian">Italian</option>
                                <option value="Jamaican">Jamaican</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Jordanian">Jordanian</option>
                                <option value="Kazakh">Kazakh</option>
                                <option value="Kenyan">Kenyan</option>
                                <option value="Kuwaiti">Kuwaiti</option>
                                <option value="Laotian">Laotian</option>
                                <option value="Latvian">Latvian</option>
                                <option value="Lebanese">Lebanese</option>
                                <option value="Liberian">Liberian</option>
                                <option value="Libyan">Libyan</option>
                                <option value="Lithuanian">Lithuanian</option>
                                <option value="Macedonian">Macedonian</option>
                                <option value="Madagascan">Madagascan</option>
                                <option value="Malawian">Malawian</option>
                                <option value="Malaysian">Malaysian</option>
                                <option value="Maldivian">Maldivian</option>
                                <option value="Malian">Malian</option>
                                <option value="Maltese">Maltese</option>
                                <option value="Mauritanian">Mauritanian</option>
                                <option value="Mauritian">Mauritian</option>
                                <option value="Mexican">Mexican</option>
                                <option value="Moldovan">Moldovan</option>
                                <option value="Monacan">Monacan</option>
                                <option value="Mongolian">Mongolian</option>
                                <option value="Moroccan">Moroccan</option>
                                <option value="Mozambican">Mozambican</option>
                                <option value="Namibian">Namibian</option>
                                <option value="Nepalese">Nepalese</option>
                                <option value="Dutch">Dutch</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaraguan">Nicaraguan</option>
                                <option value="Nigerien">Nigerien</option>
                                <option value="Nigerian">Nigerian</option>
                                <option value="North Korean">North Korean</option>
                                <option value="Norwegian">Norwegian</option>
                                <option value="Omani">Omani</option>
                                <option value="Pakistani">Pakistani</option>
                                <option value="Panamanian">Panamanian</option>
                                <option value="Guinean">Guinean</option>
                                <option value="Paraguayan">Paraguayan</option>
                                <option value="Peruvian">Peruvian</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Polish">Polish</option>
                                <option value="Portuguese">Portuguese</option>
                                <option value="Qatari">Qatari</option>
                                <option value="Romanian">Romanian</option>
                                <option value="Russian">Russian</option>
                                <option value="Rwandan">Rwandan</option>
                                <option value="Saudi">Saudi</option>
                                <option value="Senegalese">Senegalese</option>
                                <option value="Serbian">Serbian</option>
                                <option value="Sierra Leonian">Sierra Leonian</option>
                                <option value="Singaporean">Singaporean</option>
                                <option value="Slovak">Slovak</option>
                                <option value="Slovenian">Slovenian</option>
                                <option value="Somali">Somali</option>
                                <option value="South African">South African</option>
                                <option value="South Korean">South Korean</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Sri Lankan">Sri Lankan</option>
                                <option value="Sudanese">Sudanese</option>
                                <option value="Surinamese">Surinamese</option>
                                <option value="Swazi">Swazi</option>
                                <option value="Swedish">Swedish</option>
                                <option value="Swiss">Swiss</option>
                                <option value="Syrian">Syrian</option>
                                <option value="Taiwanese">Taiwanese</option>
                                <option value="Tajik">Tajik</option>
                                <option value="Tanzanian">Tanzanian</option>
                                <option value="Thai">Thai</option>
                                <option value="Togolese">Togolese</option>
                                <option value="Trinidadian">Trinidadian</option>
                                <option value="Tunisian">Tunisian</option>
                                <option value="Turkish">Turkish</option>
                                <option value="Turkmen">Turkmen</option>
                                <option value="Tuvaluan">Tuvaluan</option>
                                <option value="Ugandan">Ugandan</option>
                                <option value="Ukrainian">Ukrainian</option>
                                <option value="Emirati">Emirati</option>
                                <option value="British">British</option>
                                <option value="Uruguayan">Uruguayan</option>
                                <option value="Uzbek">Uzbek</option>
                                <option value="Vanuatuan">Vanuatuan</option>
                                <option value="Venezuelan">Venezuelan</option>
                                <option value="Vietnamese">Vietnamese</option>
                                <option value="Yemeni">Yemeni</option>
                                <option value="Zambian">Zambian</option>
                                <option value="Zimbabwean">Zimbabwean</option>
                            </select>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group label-floating form_select is-empty">
                            <select id="age_group" class="form-control" name="age_group" required="">
                                <option value="" selected="selected">Age Group</option>
                                <option value="18-24">18-24</option>
                                <option value="25-34">25-34</option>
                                <option value="35-44">35-44</option>
                                <option value="45-55">45-55</option>
                                <option value="> 55">&gt; 55</option>
                            </select>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group label-floating">
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group form_select label-floating is-empty">
                                        <select name="phone_ext" id="phone_ext" class="required form-control">
                                            <option value="">Country Code</option>
                                            <option data-countrycode="DZ" value="213">Algeria (+213)</option>
                                            <option data-countrycode="AD" value="376">Andorra (+376)</option>
                                            <option data-countrycode="AO" value="244">Angola (+244)</option>
                                            <option data-countrycode="AI" value="1264">Anguilla (+1264)</option>
                                            <option data-countrycode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                            <option data-countrycode="AR" value="54">Argentina (+54)</option>
                                            <option data-countrycode="AM" value="374">Armenia (+374)</option>
                                            <option data-countrycode="AW" value="297">Aruba (+297)</option>
                                            <option data-countrycode="AU" value="61">Australia (+61)</option>
                                            <option data-countrycode="AT" value="43">Austria (+43)</option>
                                            <option data-countrycode="AZ" value="994">Azerbaijan (+994)</option>
                                            <option data-countrycode="BS" value="1242">Bahamas (+1242)</option>
                                            <option data-countrycode="BH" value="973">Bahrain (+973)</option>
                                            <option data-countrycode="BD" value="880">Bangladesh (+880)</option>
                                            <option data-countrycode="BB" value="1246">Barbados (+1246)</option>
                                            <option data-countrycode="BY" value="375">Belarus (+375)</option>
                                            <option data-countrycode="BE" value="32">Belgium (+32)</option>
                                            <option data-countrycode="BZ" value="501">Belize (+501)</option>
                                            <option data-countrycode="BJ" value="229">Benin (+229)</option>
                                            <option data-countrycode="BM" value="1441">Bermuda (+1441)</option>
                                            <option data-countrycode="BT" value="975">Bhutan (+975)</option>
                                            <option data-countrycode="BO" value="591">Bolivia (+591)</option>
                                            <option data-countrycode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                            <option data-countrycode="BW" value="267">Botswana (+267)</option>
                                            <option data-countrycode="BR" value="55">Brazil (+55)</option>
                                            <option data-countrycode="BN" value="673">Brunei (+673)</option>
                                            <option data-countrycode="BG" value="359">Bulgaria (+359)</option>
                                            <option data-countrycode="BF" value="226">Burkina Faso (+226)</option>
                                            <option data-countrycode="BI" value="257">Burundi (+257)</option>
                                            <option data-countrycode="KH" value="855">Cambodia (+855)</option>
                                            <option data-countrycode="CM" value="237">Cameroon (+237)</option>
                                            <option data-countrycode="CA" value="1">Canada (+1)</option>
                                            <option data-countrycode="CV" value="238">Cape Verde Islands (+238)</option>
                                            <option data-countrycode="KY" value="1345">Cayman Islands (+1345)</option>
                                            <option data-countrycode="CF" value="236">Central African Republic (+236)</option>
                                            <option data-countrycode="CL" value="56">Chile (+56)</option>
                                            <option data-countrycode="CN" value="86">China (+86)</option>
                                            <option data-countrycode="CO" value="57">Colombia (+57)</option>
                                            <option data-countrycode="KM" value="269">Comoros (+269)</option>
                                            <option data-countrycode="CG" value="242">Congo (+242)</option>
                                            <option data-countrycode="CK" value="682">Cook Islands (+682)</option>
                                            <option data-countrycode="CR" value="506">Costa Rica (+506)</option>
                                            <option data-countrycode="HR" value="385">Croatia (+385)</option>
                                            <option data-countrycode="CU" value="53">Cuba (+53)</option>
                                            <option data-countrycode="CY" value="90392">Cyprus North (+90392)</option>
                                            <option data-countrycode="CY" value="357">Cyprus South (+357)</option>
                                            <option data-countrycode="CZ" value="42">Czech Republic (+42)</option>
                                            <option data-countrycode="DK" value="45">Denmark (+45)</option>
                                            <option data-countrycode="DJ" value="253">Djibouti (+253)</option>
                                            <option data-countrycode="DM" value="1809">Dominica (+1809)</option>
                                            <option data-countrycode="DO" value="1809">Dominican Republic (+1809)</option>
                                            <option data-countrycode="EC" value="593">Ecuador (+593)</option>
                                            <option data-countrycode="EG" value="20">Egypt (+20)</option>
                                            <option data-countrycode="SV" value="503">El Salvador (+503)</option>
                                            <option data-countrycode="GQ" value="240">Equatorial Guinea (+240)</option>
                                            <option data-countrycode="ER" value="291">Eritrea (+291)</option>
                                            <option data-countrycode="EE" value="372">Estonia (+372)</option>
                                            <option data-countrycode="ET" value="251">Ethiopia (+251)</option>
                                            <option data-countrycode="FK" value="500">Falkland Islands (+500)</option>
                                            <option data-countrycode="FO" value="298">Faroe Islands (+298)</option>
                                            <option data-countrycode="FJ" value="679">Fiji (+679)</option>
                                            <option data-countrycode="FI" value="358">Finland (+358)</option>
                                            <option data-countrycode="FR" value="33">France (+33)</option>
                                            <option data-countrycode="GF" value="594">French Guiana (+594)</option>
                                            <option data-countrycode="PF" value="689">French Polynesia (+689)</option>
                                            <option data-countrycode="GA" value="241">Gabon (+241)</option>
                                            <option data-countrycode="GM" value="220">Gambia (+220)</option>
                                            <option data-countrycode="GE" value="7880">Georgia (+7880)</option>
                                            <option data-countrycode="DE" value="49">Germany (+49)</option>
                                            <option data-countrycode="GH" value="233">Ghana (+233)</option>
                                            <option data-countrycode="GI" value="350">Gibraltar (+350)</option>
                                            <option data-countrycode="GR" value="30">Greece (+30)</option>
                                            <option data-countrycode="GL" value="299">Greenland (+299)</option>
                                            <option data-countrycode="GD" value="1473">Grenada (+1473)</option>
                                            <option data-countrycode="GP" value="590">Guadeloupe (+590)</option>
                                            <option data-countrycode="GU" value="671">Guam (+671)</option>
                                            <option data-countrycode="GT" value="502">Guatemala (+502)</option>
                                            <option data-countrycode="GN" value="224">Guinea (+224)</option>
                                            <option data-countrycode="GW" value="245">Guinea - Bissau (+245)</option>
                                            <option data-countrycode="GY" value="592">Guyana (+592)</option>
                                            <option data-countrycode="HT" value="509">Haiti (+509)</option>
                                            <option data-countrycode="HN" value="504">Honduras (+504)</option>
                                            <option data-countrycode="HK" value="852">Hong Kong (+852)</option>
                                            <option data-countrycode="HU" value="36">Hungary (+36)</option>
                                            <option data-countrycode="IS" value="354">Iceland (+354)</option>
                                            <option data-countrycode="IN" value="91">India (+91)</option>
                                            <option data-countrycode="ID" value="62">Indonesia (+62)</option>
                                            <option data-countrycode="IR" value="98">Iran (+98)</option>
                                            <option data-countrycode="IQ" value="964">Iraq (+964)</option>
                                            <option data-countrycode="IE" value="353">Ireland (+353)</option>
                                            <option data-countrycode="IL" value="972">Israel (+972)</option>
                                            <option data-countrycode="IT" value="39">Italy (+39)</option>
                                            <option data-countrycode="JM" value="1876">Jamaica (+1876)</option>
                                            <option data-countrycode="JP" value="81">Japan (+81)</option>
                                            <option data-countrycode="JO" value="962">Jordan (+962)</option>
                                            <option data-countrycode="KZ" value="7">Kazakhstan (+7)</option>
                                            <option data-countrycode="KE" value="254">Kenya (+254)</option>
                                            <option data-countrycode="KI" value="686">Kiribati (+686)</option>
                                            <option data-countrycode="KP" value="850">Korea North (+850)</option>
                                            <option data-countrycode="KR" value="82">Korea South (+82)</option>
                                            <option data-countrycode="KW" value="965">Kuwait (+965)</option>
                                            <option data-countrycode="KG" value="996">Kyrgyzstan (+996)</option>
                                            <option data-countrycode="LA" value="856">Laos (+856)</option>
                                            <option data-countrycode="LV" value="371">Latvia (+371)</option>
                                            <option data-countrycode="LB" value="961">Lebanon (+961)</option>
                                            <option data-countrycode="LS" value="266">Lesotho (+266)</option>
                                            <option data-countrycode="LR" value="231">Liberia (+231)</option>
                                            <option data-countrycode="LY" value="218">Libya (+218)</option>
                                            <option data-countrycode="LI" value="417">Liechtenstein (+417)</option>
                                            <option data-countrycode="LT" value="370">Lithuania (+370)</option>
                                            <option data-countrycode="LU" value="352">Luxembourg (+352)</option>
                                            <option data-countrycode="MO" value="853">Macao (+853)</option>
                                            <option data-countrycode="MK" value="389">Macedonia (+389)</option>
                                            <option data-countrycode="MG" value="261">Madagascar (+261)</option>
                                            <option data-countrycode="MW" value="265">Malawi (+265)</option>
                                            <option data-countrycode="MY" value="60">Malaysia (+60)</option>
                                            <option data-countrycode="MV" value="960">Maldives (+960)</option>
                                            <option data-countrycode="ML" value="223">Mali (+223)</option>
                                            <option data-countrycode="MT" value="356">Malta (+356)</option>
                                            <option data-countrycode="MH" value="692">Marshall Islands (+692)</option>
                                            <option data-countrycode="MQ" value="596">Martinique (+596)</option>
                                            <option data-countrycode="MR" value="222">Mauritania (+222)</option>
                                            <option data-countrycode="YT" value="269">Mayotte (+269)</option>
                                            <option data-countrycode="MX" value="52">Mexico (+52)</option>
                                            <option data-countrycode="FM" value="691">Micronesia (+691)</option>
                                            <option data-countrycode="MD" value="373">Moldova (+373)</option>
                                            <option data-countrycode="MC" value="377">Monaco (+377)</option>
                                            <option data-countrycode="MN" value="976">Mongolia (+976)</option>
                                            <option data-countrycode="MS" value="1664">Montserrat (+1664)</option>
                                            <option data-countrycode="MA" value="212">Morocco (+212)</option>
                                            <option data-countrycode="MZ" value="258">Mozambique (+258)</option>
                                            <option data-countrycode="MN" value="95">Myanmar (+95)</option>
                                            <option data-countrycode="NA" value="264">Namibia (+264)</option>
                                            <option data-countrycode="NR" value="674">Nauru (+674)</option>
                                            <option data-countrycode="NP" value="977">Nepal (+977)</option>
                                            <option data-countrycode="NL" value="31">Netherlands (+31)</option>
                                            <option data-countrycode="NC" value="687">New Caledonia (+687)</option>
                                            <option data-countrycode="NZ" value="64">New Zealand (+64)</option>
                                            <option data-countrycode="NI" value="505">Nicaragua (+505)</option>
                                            <option data-countrycode="NE" value="227">Niger (+227)</option>
                                            <option data-countrycode="NG" value="234">Nigeria (+234)</option>
                                            <option data-countrycode="NU" value="683">Niue (+683)</option>
                                            <option data-countrycode="NF" value="672">Norfolk Islands (+672)</option>
                                            <option data-countrycode="NP" value="670">Northern Marianas (+670)</option>
                                            <option data-countrycode="NO" value="47">Norway (+47)</option>
                                            <option data-countrycode="OM" value="968">Oman (+968)</option>
                                            <option data-countrycode="PW" value="680">Palau (+680)</option>
                                            <option data-countrycode="PA" value="507">Panama (+507)</option>
                                            <option data-countrycode="PG" value="675">Papua New Guinea (+675)</option>
                                            <option data-countrycode="PY" value="595">Paraguay (+595)</option>
                                            <option data-countrycode="PE" value="51">Peru (+51)</option>
                                            <option data-countrycode="PH" value="63">Philippines (+63)</option>
                                            <option data-countrycode="PL" value="48">Poland (+48)</option>
                                            <option data-countrycode="PT" value="351">Portugal (+351)</option>
                                            <option data-countrycode="PR" value="1787">Puerto Rico (+1787)</option>
                                            <option data-countrycode="QA" value="974">Qatar (+974)</option>
                                            <option data-countrycode="RE" value="262">Reunion (+262)</option>
                                            <option data-countrycode="RO" value="40">Romania (+40)</option>
                                            <option data-countrycode="RU" value="7">Russia (+7)</option>
                                            <option data-countrycode="RW" value="250">Rwanda (+250)</option>
                                            <option data-countrycode="SM" value="378">San Marino (+378)</option>
                                            <option data-countrycode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                            <option data-countrycode="SA" value="966">Saudi Arabia (+966)</option>
                                            <option data-countrycode="SN" value="221">Senegal (+221)</option>
                                            <option data-countrycode="CS" value="381">Serbia (+381)</option>
                                            <option data-countrycode="SC" value="248">Seychelles (+248)</option>
                                            <option data-countrycode="SL" value="232">Sierra Leone (+232)</option>
                                            <option data-countrycode="SG" value="65">Singapore (+65)</option>
                                            <option data-countrycode="SK" value="421">Slovak Republic (+421)</option>
                                            <option data-countrycode="SI" value="386">Slovenia (+386)</option>
                                            <option data-countrycode="SB" value="677">Solomon Islands (+677)</option>
                                            <option data-countrycode="SO" value="252">Somalia (+252)</option>
                                            <option data-countrycode="ZA" value="27">South Africa (+27)</option>
                                            <option data-countrycode="ES" value="34">Spain (+34)</option>
                                            <option data-countrycode="LK" value="94">Sri Lanka (+94)</option>
                                            <option data-countrycode="SH" value="290">St. Helena (+290)</option>
                                            <option data-countrycode="KN" value="1869">St. Kitts (+1869)</option>
                                            <option data-countrycode="SC" value="1758">St. Lucia (+1758)</option>
                                            <option data-countrycode="SD" value="249">Sudan (+249)</option>
                                            <option data-countrycode="SR" value="597">Suriname (+597)</option>
                                            <option data-countrycode="SZ" value="268">Swaziland (+268)</option>
                                            <option data-countrycode="SE" value="46">Sweden (+46)</option>
                                            <option data-countrycode="CH" value="41">Switzerland (+41)</option>
                                            <option data-countrycode="SI" value="963">Syria (+963)</option>
                                            <option data-countrycode="TW" value="886">Taiwan (+886)</option>
                                            <option data-countrycode="TJ" value="7">Tajikstan (+7)</option>
                                            <option data-countrycode="TH" value="66">Thailand (+66)</option>
                                            <option data-countrycode="TG" value="228">Togo (+228)</option>
                                            <option data-countrycode="TO" value="676">Tonga (+676)</option>
                                            <option data-countrycode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                            <option data-countrycode="TN" value="216">Tunisia (+216)</option>
                                            <option data-countrycode="TR" value="90">Turkey (+90)</option>
                                            <option data-countrycode="TM" value="7">Turkmenistan (+7)</option>
                                            <option data-countrycode="TM" value="993">Turkmenistan (+993)</option>
                                            <option data-countrycode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                            <option data-countrycode="TV" value="688">Tuvalu (+688)</option>
                                            <option data-countrycode="UG" value="256">Uganda (+256)</option>
                                            <option data-countrycode="GB" value="44">UK (+44)</option>
                                            <option data-countrycode="UA" value="380">Ukraine (+380)</option>
                                            <option data-countrycode="AE" value="971">United Arab Emirates (+971)</option>
                                            <option data-countrycode="UY" value="598">Uruguay (+598)</option>
                                            <option data-countrycode="US" value="1">USA (+1)</option>
                                            <option data-countrycode="UZ" value="7">Uzbekistan (+7)</option>
                                            <option data-countrycode="VU" value="678">Vanuatu (+678)</option>
                                            <option data-countrycode="VA" value="379">Vatican City (+379)</option>
                                            <option data-countrycode="VE" value="58">Venezuela (+58)</option>
                                            <option data-countrycode="VN" value="84">Vietnam (+84)</option>
                                            <option data-countrycode="VG" value="84">Virgin Islands - British (+1284)</option>
                                            <option data-countrycode="VI" value="84">Virgin Islands - US (+1340)</option>
                                            <option data-countrycode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                            <option data-countrycode="YE" value="969">Yemen (North)(+969)</option>
                                            <option data-countrycode="YE" value="967">Yemen (South)(+967)</option>
                                            <option data-countrycode="ZM" value="260">Zambia (+260)</option>
                                            <option data-countrycode="ZW" value="263">Zimbabwe (+263)</option>
                                        </select>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="form-group label-floating is-empty">
                                        <input type="text" class="form-control" value="" placeholder="Phone" name="UserPhone" id="UserPhone" minlength="6" maxlength="13" title="Please enter Valid number (6 to 13 digit)">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group label-floating is-empty">
                            <div id="Arrival2">
                                <input name="arrival" value="" type="text" class="form-control datepicker hasDatepicker" id="datepickerArrival2" placeholder="From *" readonly="" required=""><button type="button" class="ui-datepicker-trigger"><i class="fa fa-calendar"></i></button>
                            </div>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group label-floating is-empty">
                            <div id="Departure2">
                                <input name="departure" value="" type="text" class="form-control datepicker hasDatepicker" id="datepickerDeparture2" placeholder="To" readonly=""><button type="button" class="ui-datepicker-trigger"><i class="fa fa-calendar"></i></button>
                            </div>
                            <span class="material-input"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group label-floating is-empty">
                            <input id="adults" class="form-control" name="adults" value="" placeholder="No of Adults *" required="" type="number" min="1" max="100">
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group label-floating is-empty">
                            <input name="children" class="children form-control" value="" id="children" placeholder="Child" onchange="childAge()" type="number" min="0" max="20">
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group label-floating is-empty">
                            <input name="children_age" class="children_age form-control" value="" id="children_age" placeholder="Child Age">
                            <span class="material-input"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group label-floating form_select is-empty">
                            <select class="form-control" name="holiday_type" title="Please select holiday type!" required="">
                                <option value="" selected="selected">Select Holiday Type</option>
                                <option value="Travel Packages">Travel Packages</option>
                                <option value="Multi-destination Packages">Multi-destination Packages</option>
                                <option value="Excursions">Excursions</option>
                                <option value="Shore Excursions">Shore Excursions</option>
                            </select>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input class="flight" name="flight" type="checkbox" value="Yes" onchange="valueChanged()"><span class="checkbox-material"><span class="check"></span></span> Add flight offer to your vacation package </label>
                            </div>
                        </div>
                    </div>
                    <div class="flight_from" style="display:none">
                        <div class="col-12">
                            <div class="form-group label-floating is-empty">
                                <input id="departure_airport" class="form-control" name="departure_airport" value="" placeholder="Departure Airport">
                                <span class="material-input"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group label-floating is-empty">
                            <textarea placeholder="Please advise your tour requirements" required="" style="text-align: left; line-height:1.7em; height:115px;" class="form-control" name="comment" id="comment" autocomplete="off"></textarea>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">

                            <button class="new_btn_book" id="submit_book" style="background-color:#ff8100 ;">Submit</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="url_goal" name="url_goal" value="general">
                <input type="hidden" id="program_id" name="program_id" value="Contact">
            </form>
        </div>
    </div>
</div>
@endsection

