@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="top-destination">
                <h1>Contact Us </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="program_content">
                <div class="program_panes" id="wiki">
                    <div class="program_desc">
                        <p style="text-align:center"><strong>Are you thinking about going on a trip soon? Do you need a custom itinerary complete with information on how to get around and local etiquette as well as budget-friendly tips? We are here to help you.&nbsp;</strong></p>
                        <p style="text-align:center">&nbsp;</p>
                        <p style="text-align:center">Do not hesitate to contact us to benefit from the advantages offered by our agency. We start processing all your questions and group travel reservations immediately. All you have to do is fill the below form and tell us what your dream destination is. The information you provide to us on this inquiry form will help us provide the perfect adventure for you. Let us organize your dream trip!</p>
                        <p style="text-align:center">&nbsp;</p>
                        <p style="text-align:center">&nbsp;</p>
                        <div class="book_now col-md-6  offset-md-3">
                            <a id="Form"></a>
                            <form id="bookform" method="post" action="/Egypt/reservation_forms/requests/mail/">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group label-floating">
                                            <input name="name" type="text" id="name" value="" class="form-control" required placeholder="Name *">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group label-floating">
                                            <input name="UserEmail" value="" type="email" required class="form-control" id="UserEmail" placeholder="E-mail *" onfocusout="validateMail()">
                                            <div id="mail-validation"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group label-floating form_select">
                                            <select id="nationality" class="form-control" name="nationality" required>
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
                                                <option value="British Indian Ocean">British Indian Ocean</option>
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
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group label-floating form_select">
                                            <select id="age_group" class="form-control" name="age_group" required>
                                                <option value="" selected="selected">Age Group</option>
                                                <option value="18-24">18-24</option>
                                                <option value="25-34">25-34</option>
                                                <option value="35-44">35-44</option>
                                                <option value="45-55">45-55</option>
                                                <option value="> 55">> 55</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group label-floating">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="form-group form_select label-floating">
                                                        <select name="phone_ext" id="phone_ext" class="required form-control">
                                                            <option value="">Country Code</option>
                                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                                            <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                            <option data-countryCode="GB" value="44">UK (+44)</option>
                                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                            <option data-countryCode="US" value="1">USA (+1)</option>
                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="form-group label-floating">
                                                        <input type="text" class="form-control" value="" placeholder="Phone" name="UserPhone" id="UserPhone" minlength="6" maxlength="13" title="Please enter Valid number (6 to 13 digit)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group label-floating">
                                            <div id="Arrival2">
                                                <input name="arrival" value="" type="text" class="form-control datepicker" id="datepickerArrival2" placeholder="From *" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group label-floating">
                                            <div id="Departure2">
                                                <input name="departure" value="" type="text" class="form-control datepicker" id="datepickerDeparture2" placeholder="To" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group label-floating">
                                            <input id="adults" class="form-control" name="adults" value="" placeholder="No of Adults *" required type="number" min="1" max="100" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group label-floating">
                                            <input name="children" class="children form-control" value="" id="children" placeholder="Child" onChange="childAge()" type="number" min="0" max="20" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group label-floating">
                                            <input name="children_age" class="children_age form-control" value="" id="children_age" placeholder="Child Age" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group label-floating form_select">
                                            <select class="form-control" name="holiday_type" title="Please select holiday type!" required>
                                                <option value="" selected='selected'>Select Holiday Type</option>
                                                <option value="Travel Packages">Travel Packages</option>
                                                <option value="Multi-destination Packages">Multi-destination Packages</option>
                                                <option value="Excursions">Excursions</option>
                                                <option value="Shore Excursions">Shore Excursions</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input class="flight" name="flight" type="checkbox" value="Yes" onchange="valueChanged()"> Add flight offer to your vacation package </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flight_from" style="display:none">
                                        <div class="col-12">
                                            <div class="form-group label-floating">
                                                <input id="departure_airport" class="form-control" name="departure_airport" value="" placeholder="Departure Airport" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group label-floating">
                                            <textarea placeholder="Please advise your tour requirements" required style="text-align: left; line-height:1.7em; height:115px;" class="form-control" name="comment" id="comment" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div id='recaptcha' class="g-recaptcha" data-sitekey="6LegDoYUAAAAALe9PVEiSlLyX3RzYBzKmoKrxMEz" data-callback="SubmitRegistration" data-size="invisible"></div>
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
            </div>
        </div>
    </div>
</div>
@endsection