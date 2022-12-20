@extends('layouts.master')

@section('content')
<style>
    .form-horizontal label {
        text-align: left;
    }

    .submit-btn {
        border-radius: 15px;
        background: #f5a31b;
        border: 0;
        padding: 12px 65px;
        color: #fff;
        font-weight: normal;
        font-size: 1.538rem;
        text-align: center;
    }

    .profile_header_img img {
        width: 230px;
        height: 230px;
        border: 1px solid #707070;
        border-radius: 50%;
    }

    .profile_header_img_cover img {
        border: 1px solid #707070;
        height: 224px;
    }

    input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        border: 0px solid #ccc;
        padding: 6px 0;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .custom-file-upload img {
        margin-right: 10px;
    }

    .setting_textarea {
        height: 100px !important;
    }

    .form-select {
        border: 1px solid #757575;
        border-radius: 0;
        padding: 12px 20px;
        font-size: 1.154rem;
        line-height: normal;
        height: 50px;
    }

    .date-select select {
        border: 1px solid #757575;
        border-radius: 0;
        padding: 12px 14px;
        font-size: 1.154rem;
        line-height: normal;
        height: 50px;
    }

    .form-horizontal .radio,
    .form-horizontal .checkbox {
        min-height: 50px;
        align-items: center;
        display: flex;
    }

    .radio label {
        margin-bottom: 0;
        padding-left: 29px;
        margin-right: 10px;
    }

    .radio input[type=radio]:checked~.check {
        background-color: #F5A31B;
    }

    .radio input[type=radio]:checked~.circle {
        border-color: #F5A31B;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="top-destination">
                <h1>Settings</h1>
            </div>
        </div>
    </div>
    <form enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal" action="/clients/settings">
        <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-5">
                    <div class="col-md-2">
                        <div class="input text"><label for="first-name">Name</label><input type="text" name="first_name" placeholder="First Name" class="form-control" id="first-name" value="{{ $user->name }}" /></div>
                    </div>
                    <div class="col-md-4">
                        <div class="date-select">
                            <label>Date of Birth</label><br>
                            <select name="dob[year]">
                                <option value="" selected="selected">Year</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                            </select><select name="dob[month]">
                                <option value="" selected="selected">Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select><select name="dob[day]">
                                <option value="" selected="selected">Day</option>
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Gender</label>
                        <div class="input radio"><input type="hidden" name="gender" value="" /><label for="gender-1"><input type="radio" name="gender" value="1" id="gender-1" placeholder="gender">Male</label><label for="gender-2"><input type="radio" name="gender" value="2" id="gender-2" placeholder="gender">Female</label></div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-5">
                        <div class="input email"><label for="email">Email</label><input type="email" name="email" placeholder="Email Address" disabled="disabled" class="form-control" id="email" value="ahmedawiss90@gmail.com" /></div>
                    </div>
                    <div class="col-md-3">
                        <div class="input text"><label for="phone">Phone</label><input type="text" name="phone" placeholder="Phone Number" class="form-control" id="phone" /></div>
                    </div>
                    <div class="col-md-3">
                        <div class="input text"><label for="emergency-contact">Emergency Contact</label><input type="text" name="emergency_contact" placeholder="Contact For Emergency" class="form-control" id="emergency-contact" /></div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="input select"><label for="nationality">Nationality</label><select name="nationality" placeholder="Nationality" class="form-select" id="nationality">
                                <optgroup label="countries">
                                    <option value="2">Afghan</option>
                                    <option value="3">Albanian</option>
                                    <option value="4">Algerian</option>
                                    <option value="5"></option>
                                    <option value="6">Andorran</option>
                                    <option value="7">Angolan</option>
                                    <option value="8"></option>
                                    <option value="239"></option>
                                    <option value="9"></option>
                                    <option value="10">Argentinian</option>
                                    <option value="11">Armenian</option>
                                    <option value="12"></option>
                                    <option value="13">Australian</option>
                                    <option value="14">Austrian</option>
                                    <option value="15">Azerbaijani</option>
                                    <option value="16">Bahamian</option>
                                    <option value="17">Bahraini</option>
                                    <option value="18">Bangladeshi</option>
                                    <option value="19">Barbadian</option>
                                    <option value="20">Belarusian</option>
                                    <option value="21">Belgian</option>
                                    <option value="22">Belizean</option>
                                    <option value="23">Beninese</option>
                                    <option value="24"></option>
                                    <option value="25">Bhutanese</option>
                                    <option value="26">Bolivian</option>
                                    <option value="27">Bosnian</option>
                                    <option value="28">Botswanan</option>
                                    <option value="29"></option>
                                    <option value="30">Brazilian</option>
                                    <option value="31">British Indian Ocean</option>
                                    <option value="32">British Virgin</option>
                                    <option value="33">Bruneian</option>
                                    <option value="34">Bulgarian</option>
                                    <option value="35">Burkinese</option>
                                    <option value="36">Burundian</option>
                                    <option value="37">Cambodian</option>
                                    <option value="38">Cameroonian</option>
                                    <option value="39">Canadian</option>
                                    <option value="40">Cape Verdean</option>
                                    <option value="41"></option>
                                    <option value="42"></option>
                                    <option value="43">Chadian</option>
                                    <option value="44">Chilean</option>
                                    <option value="45">Chinese</option>
                                    <option value="46"></option>
                                    <option value="47"></option>
                                    <option value="48">Colombian</option>
                                    <option value="49"></option>
                                    <option value="50">Congolese</option>
                                    <option value="51">Congolese</option>
                                    <option value="52"></option>
                                    <option value="53">Costa Rican</option>
                                    <option value="54">Croatian</option>
                                    <option value="55">Cuban</option>
                                    <option value="56">Cypriot</option>
                                    <option value="57">Czech</option>
                                    <option value="58">Danish</option>
                                    <option value="59">Djiboutian</option>
                                    <option value="60">Dominican</option>
                                    <option value="61">Dominican</option>
                                    <option value="62">East Timorese</option>
                                    <option value="63">Ecuadorean</option>
                                    <option value="64">Egyptian</option>
                                    <option value="65">Salvadorean</option>
                                    <option value="66">Guinean</option>
                                    <option value="67">Eritrean</option>
                                    <option value="68">Estonian</option>
                                    <option value="69">Ethiopian</option>
                                    <option value="70"></option>
                                    <option value="71"></option>
                                    <option value="72">Fijian</option>
                                    <option value="73">Finnish</option>
                                    <option value="74">French</option>
                                    <option value="75">Guyanese</option>
                                    <option value="76"></option>
                                    <option value="77"></option>
                                    <option value="78">Gabonese</option>
                                    <option value="79">Gambian</option>
                                    <option value="80"></option>
                                    <option value="81">Georgian</option>
                                    <option value="82">German</option>
                                    <option value="83">Ghanaian</option>
                                    <option value="84"></option>
                                    <option value="85">Greek</option>
                                    <option value="86"></option>
                                    <option value="87">Grenadian</option>
                                    <option value="88"></option>
                                    <option value="89"></option>
                                    <option value="90">Guatemalan</option>
                                    <option value="91">Guinean</option>
                                    <option value="92"></option>
                                    <option value="93"></option>
                                    <option value="94">Haitian</option>
                                    <option value="95"></option>
                                    <option value="96">-</option>
                                    <option value="97">Honduran</option>
                                    <option value="98">Chinese</option>
                                    <option value="99">Hungarian</option>
                                    <option value="100">Icelander</option>
                                    <option value="101">Indian</option>
                                    <option value="102">Indonesian</option>
                                    <option value="103">Iranian</option>
                                    <option value="104">Iraqi</option>
                                    <option value="105">Irish</option>
                                    <option value="107">Italian</option>
                                    <option value="238"></option>
                                    <option value="108">Jamaican</option>
                                    <option value="109">Japanese</option>
                                    <option value="110">Jordanian</option>
                                    <option value="111">Kazakh</option>
                                    <option value="112">Kenyan</option>
                                    <option value="113"></option>
                                    <option value="114">Kuwaiti</option>
                                    <option value="115"></option>
                                    <option value="116">Laotian</option>
                                    <option value="117">Latvian</option>
                                    <option value="118">Lebanese</option>
                                    <option value="119"></option>
                                    <option value="120">Liberian</option>
                                    <option value="121">Libyan</option>
                                    <option value="122">-</option>
                                    <option value="123">Lithuanian</option>
                                    <option value="124">-</option>
                                    <option value="240"></option>
                                    <option value="125"></option>
                                    <option value="126">Macedonian</option>
                                    <option value="127">Madagascan</option>
                                    <option value="128">Malawian</option>
                                    <option value="129">Malaysian</option>
                                    <option value="130">Maldivian</option>
                                    <option value="131">Malian</option>
                                    <option value="132">Maltese</option>
                                    <option value="133"></option>
                                    <option value="134"></option>
                                    <option value="135">Mauritanian</option>
                                    <option value="136">Mauritian</option>
                                    <option value="137"></option>
                                    <option value="138">Mexican</option>
                                    <option value="139"></option>
                                    <option value="140">Moldovan</option>
                                    <option value="141">Monacan</option>
                                    <option value="142">Mongolian</option>
                                    <option value="143"></option>
                                    <option value="144">Moroccan</option>
                                    <option value="145">Mozambican</option>
                                    <option value="146"></option>
                                    <option value="147">Namibian</option>
                                    <option value="148"></option>
                                    <option value="149">Nepalese</option>
                                    <option value="150">Dutch</option>
                                    <option value="151"></option>
                                    <option value="152"></option>
                                    <option value="153">New Zealand</option>
                                    <option value="154">Nicaraguan</option>
                                    <option value="155">Nigerien</option>
                                    <option value="156">Nigerian</option>
                                    <option value="157"></option>
                                    <option value="158"></option>
                                    <option value="159">North Korean</option>
                                    <option value="160"></option>
                                    <option value="161">Norwegian</option>
                                    <option value="162">Omani</option>
                                    <option value="163">Pakistani</option>
                                    <option value="106">Israeli</option>
                                    <option value="164"></option>
                                    <option value="241"></option>
                                    <option value="165">Panamanian</option>
                                    <option value="166">Guinean</option>
                                    <option value="167">Paraguayan</option>
                                    <option value="168">Peruvian</option>
                                    <option value="169">Filipino</option>
                                    <option value="170"></option>
                                    <option value="171">Polish</option>
                                    <option value="172">Portuguese</option>
                                    <option value="173"></option>
                                    <option value="174">Qatari</option>
                                    <option value="175"></option>
                                    <option value="176">Romanian</option>
                                    <option value="177">Russian</option>
                                    <option value="178">Rwandan</option>
                                    <option value="179"></option>
                                    <option value="180"></option>
                                    <option value="181"></option>
                                    <option value="243"></option>
                                    <option value="182"></option>
                                    <option value="183"></option>
                                    <option value="184"></option>
                                    <option value="185">Saudi</option>
                                    <option value="186">Senegalese</option>
                                    <option value="187">Serbian</option>
                                    <option value="188"></option>
                                    <option value="189">Sierra Leonian</option>
                                    <option value="190">Singaporean</option>
                                    <option value="191">Slovak</option>
                                    <option value="192">Slovenian</option>
                                    <option value="193">-</option>
                                    <option value="194">Somali</option>
                                    <option value="195">South African</option>
                                    <option value="196"></option>
                                    <option value="197">South Korean</option>
                                    <option value="198">Spanish</option>
                                    <option value="199">Sri Lankan</option>
                                    <option value="200"></option>
                                    <option value="201"></option>
                                    <option value="202">Sudanese</option>
                                    <option value="203">Surinamese</option>
                                    <option value="204"></option>
                                    <option value="205">Swazi</option>
                                    <option value="206">Swedish</option>
                                    <option value="207">Swiss</option>
                                    <option value="208">Syrian</option>
                                    <option value="209">Taiwanese</option>
                                    <option value="210">Tajik</option>
                                    <option value="211">Tanzanian</option>
                                    <option value="212">Thai</option>
                                    <option value="213">Togolese</option>
                                    <option value="214"></option>
                                    <option value="215"></option>
                                    <option value="216">Trinidadian</option>
                                    <option value="217">Tunisian</option>
                                    <option value="218">Turkish</option>
                                    <option value="219">Turkmen</option>
                                    <option value="220"></option>
                                    <option value="221">Tuvaluan</option>
                                    <option value="222">Ugandan</option>
                                    <option value="223">Ukrainian</option>
                                    <option value="224">Emirati</option>
                                    <option value="225">British</option>
                                    <option value="1">American</option>
                                    <option value="242"></option>
                                    <option value="226"></option>
                                    <option value="227">Uruguayan</option>
                                    <option value="228">Uzbek</option>
                                    <option value="229">Vanuatuan</option>
                                    <option value="230">Venezuelan</option>
                                    <option value="231">Vietnamese</option>
                                    <option value="232"></option>
                                    <option value="233"></option>
                                    <option value="234"></option>
                                    <option value="235">Yemeni</option>
                                    <option value="236">Zambian</option>
                                    <option value="237">Zimbabwean</option>
                                </optgroup>
                            </select></div>
                    </div>
                    <div class="col-md-7">
                        <div class="input text"><label for="address">Address</label><input type="text" name="address" placeholder="Address" class="form-control" id="address" /></div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-5">
                        <div class="input text"><label for="password">Password</label><input type="text" name="password" placeholder="Password" class="form-control" id="password" /></div>
                    </div>
                    <div class="col-md-5">
                        <div class="input text"><label for="confirm-password">Confirm Password</label><input type="text" name="confirm_password" placeholder="Confirm Password" class="form-control" id="confirm-password" /></div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-11">
                        <div class="input textarea"><label for="special-requirements">Special Requirements</label><textarea name="special_requirements" placeholder="Special Requirements" rows="6" class="form-control setting_textarea" id="special-requirements"></textarea></div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-3">
                        <input type="submit" value="Save all changes" class="submit-btn">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row mb-5 text-center">
                    <div class="profile_header_img">
                        <img src="https://lh3.googleusercontent.com/a/AEdFTp6a1ohZ9xuoc1tGQcfEIQfT-ihh0ABQPVQdSw2V=s96-c" width="100%">
                    </div>
                    <label class="custom-file-upload">
                        <input name="profile_url" type="file" />
                        <img src="/theme/Com2021/img/picture.svg" width="40" height="40"> Change profile photo </label>
                </div>
                <div class="row mb-5 text-center">
                    <div class="profile_header_img_cover">
                        <img src="/theme/Com2021/img/user_bg.png" width="100%">
                    </div>
                    <label class="custom-file-upload">
                        <input name="cover_url" type="file" />
                        <img src="/theme/Com2021/img/picture.svg" width="40" height="40"> Change Cover photo </label>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection