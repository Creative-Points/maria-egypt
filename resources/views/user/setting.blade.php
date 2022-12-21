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
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        @endif
        <form enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal"
            action="{{ route('user.save_setting') }}">
            {{-- <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div> --}}
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-9">
                    <div class="row mb-5">
                        <div class="col-md-2">
                            <label for="title">Title</label>
                            <div class="form-group form_select label-floating">
                                <select name="title" id="title" class="required form-control">
                                    <option value="">Title</option>
                                    <option value="Mr" @if ($user->title == 'Mr') selected @endif>Mr</option>
                                    <option value="Ms." @if ($user->title == 'Ms.') selected @endif>Ms.</option>
                                    <option value="Mrs" @if ($user->title == 'Mrs') selected @endif>Mrs</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input text"><label for="first-name">Name</label><input type="text" name="name"
                                    placeholder="Full Name" class="form-control" id="first-name"
                                    value="{{ $user->name }}" /></div>
                        </div>
                        {{-- <div class="col-md-4">
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
                    </div> --}}
                        <div class="col-md-3">
                            <label>Gender</label>
                            <div class="input radio">
                                <input type="hidden" name="gender" value="" />
                                <label for="gender-1">
                                    <input type="radio" name="gender" value="1" id="gender-1" placeholder="gender"
                                        @if ($user->gender == 1) checked @endif>
                                    Male
                                </label>
                                <label for="gender-2">
                                    <input type="radio" name="gender" value="2" id="gender-2" placeholder="gender"
                                        @if ($user->gender == 2) checked @endif>
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-5">
                            <div class="input email"><label for="email">Email</label><input type="email" name="email"
                                    placeholder="Email Address" disabled="disabled" class="form-control" id="email"
                                    value="{{ $user->email }}" /></div>
                        </div>
                        <div class="col-md-3">
                            <div class="input text"><label for="phone">Phone EXT</label><input type="text"
                                    name="phone_ext" placeholder="Phone Number" value="{{ $user->phone_ext }}"
                                    class="form-control" id="phone" /></div>
                        </div>
                        <div class="col-md-3">
                            <div class="input text"><label for="phone">Phone</label><input type="text" name="phone"
                                    placeholder="Phone Number" value="{{ $user->phone }}" class="form-control"
                                    id="phone" /></div>
                        </div>
                        {{-- <div class="col-md-3">
                        <div class="input text"><label for="emergency-contact">Emergency Contact</label><input type="text" name="emergency_contact" placeholder="Contact For Emergency" class="form-control" id="emergency-contact" /></div>
                    </div> --}}
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-4">
                            <div class="input select"><label for="nationality">Nationality</label><select required name="nationality"
                                    placeholder="Nationality" class="form-select" id="nationality">
                                    <optgroup label="countries">
                                        <option value="" selected="selected">Select your Nationality</option>
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
                                    </optgroup>
                                </select></div>
                        </div>
                        <div class="col-md-3">
                            <div class="input text"><label for="nation">Your Nationality</label><input type="text" name="nation"
                                    placeholder="Your Nationality" value="{{ $user->nation }}" class="form-control"
                                    id="nation" disabled/></div>
                        </div>
                        {{-- <div class="col-md-7">
                        <div class="input text"><label for="address">Address</label><input type="text" name="address" placeholder="Address" class="form-control" id="address" /></div>
                    </div> --}}
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-5">
                            <div class="input text"><label for="password">Password</label><input type="password"
                                    name="password" placeholder="Password" class="form-control" id="password" /></div>
                        </div>
                        <div class="col-md-5">
                            <div class="input text"><label for="confirm-password">Confirm Password</label><input
                                    type="password" name="password_confirmation" placeholder="Confirm Password"
                                    class="form-control" id="confirm-password" /></div>
                        </div>
                    </div>
                    {{-- <div class="row mb-5">
                    <div class="col-md-11">
                        <div class="input textarea"><label for="special-requirements">Special Requirements</label><textarea name="special_requirements" placeholder="Special Requirements" rows="6" class="form-control setting_textarea" id="special-requirements"></textarea></div>
                    </div>
                </div> --}}
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <input type="submit" value="Save all changes" class="submit-btn">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row mb-5 text-center">
                        <div class="profile_header_img">
                            <img src="https://lh3.googleusercontent.com/a/AEdFTp6a1ohZ9xuoc1tGQcfEIQfT-ihh0ABQPVQdSw2V=s96-c"
                                width="100%">
                        </div>
                        <label class="custom-file-upload">
                            {{-- <input name="profile_url" type="file" />
                        <img src="/theme/Com2021/img/picture.svg" width="40" height="40"> Change profile photo </label> --}}
                    </div>
                    {{-- <div class="row mb-5 text-center">
                    <div class="profile_header_img_cover">
                        <img src="/theme/Com2021/img/user_bg.png" width="100%">
                    </div>
                    <label class="custom-file-upload">
                        <input name="cover_url" type="file" />
                        <img src="/theme/Com2021/img/picture.svg" width="40" height="40"> Change Cover photo </label>
                </div> --}}
                </div>
            </div>
        </form>
    </div>
@endsection
