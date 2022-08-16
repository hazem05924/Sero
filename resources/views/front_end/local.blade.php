<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sero</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('cms/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('cms/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('cms/css/style2.css') }}">
    <style>
        ::-webkit-scrollbar{
             width: 10px;

        }
        ::-webkit-scrollbar-track {
            background:white;

        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 50px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        ::-webkit-scrollbar-thumb:active {
            background: #212375;
        }

    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('cms/assets/img/551).svg') }}" alt="" style="width: 65px; height: 65px;"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto d-flex justify-content-center align-content-center align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __("Home") }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url("cms/web/login") }}" ><i class="fas fa-sign-in-alt"></i> {{ __("sign in") }}</a></li>
                    <li class="nav-item">
                        <div class="dropdown">
                          {{-- <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('cms/assets/img/en-US.png')}}" alt="" style="width: 25px; height: 25px; border-radius: 50%;"> En - English</a> --}}
                          <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">  {{ __('language') }}</a>

                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                      <li>
                                          <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                              {{ $properties['native'] }}
                                          </a>
                                      </li>
                                  @endforeach


                          </ul>
                        </div>
                  </li>
                    @if (Auth::guard('web')->id())
                    <div class="dropdown m-3">
                        {{-- <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('cms/assets/img/en-US.png')}}" alt="" style="width: 25px; height: 25px; border-radius: 50%;"> En - English</a> --}}
                        <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button"
                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            @if (auth('web')->user()->image == '')
                            <img src="{{ asset('storage/images/user.jpg') }}" alt="Logo" style="width: 25px; height: 25px; border-radius: 50%">

                            @else
                            <img src="{{ asset('storage/images/register/'.auth('web')->user()->image) }}" alt="Logo" style="width: 25px; height: 25px;">

                            @endif
                            {{ auth('web')->user()->full_name }}
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li class="nav-item ">
                                <a href="{{ route('logout') }}" class="nav-link text-black">
                                    <i class="fas fa-sign-out-alt ml-2"></i>
                                         {{__("Log Out")}}
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('profile_edit_user') }}" class="nav-link text-black">
                                    <i class="fas fa-user ml-2"></i>
                                         {{ __("Profile") }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endif




            </div>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">{{__("Welcome To")}} <span>{{ __("Sero") }}</span></h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">{{ __("The journey of travel through three easy, easy and fast steps") }}</h2>
                </div>
            </div>
        </div>
        <div class="warpper">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <div class="tabs">
                <label class="tab" id="one-tab" for="one"><i class="fas fa-hotel"></i> {{ __("Hotels") }}</label>
                <label class="tab" id="two-tab" for="two"><i class="fas fa-car"></i> {{ __("Transportation") }}</label>
            </div>
            <div class="panels col-10">

                <div class="panel position-relative" id="one-panel">
                    <div class="add1 d-flex flex-wrap justify-content-start align-content-center align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Location" class="form-label">{{ __("Destination") }} <span>*</span></label>
                            <select id="Location" class="form-control col-3" name="Location">
                            <option value="Makkah">{{ __("Makkah") }}</option>
                            <option value="Madinah">{{ __("Madinah") }}</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="date-in" class="form-label">{{__("Checkin")}} <span>*</span></label>
                            <input type="date" name="date-in" id="date-in" class="form-control col-3">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="date-out" class="form-label">{{__("Checkout")}} <span>*</span></label>
                            <input type="date" name="date-out" id="date-out" class="form-control col-3">
                        </div>
                        {{-- <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Nationality" class="form-label">Nationality</label>
                            <select id="Nationality" class="form-control col-3" name="Nationality">
                            <option value="">Select Nationality</option>
                            <option value="BH">Bahrain</option>
                            <option value="KW">Kuwait</option>
                            <option value="OM">Oman</option>
                            <option value="QA">Qatar</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="">----Other Nationalities----</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IT">Italy</option>
                            <option value="CI">Ivory Coast</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea(North Korea)</option>
                            <option value="KR">Korea(South Korea)</option>
                            <option value="XK">Kosovo</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao PDR</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macau</option>
                            <option value="MK">Macedonia</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestine</option>
                            <option value="PS">Palestine</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="RE">Reunion Island</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian</option>
                            <option value="RW">Rwanda</option>
                            <option value="SH">Saint Helena</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SN">Senegal</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syria</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States of America</option>
                            <option value="UY">Uruguay</option>
                            <option value="UM">US Minor Outlying Islands</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VA">Vatican City</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Vietnam</option>
                            <option value="VI">Virgin Islands (U.S.)</option>
                            <option value="WF">Wallis and Futuna Islands</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                          </select>
                            </select>
                        </div> --}}

                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="input-group" class="form-label">{{__("Details")}} <span>*</span></label>
                            <div class="input-group" id="input-group">
                                <input type="text" class="form-control border-0" placeholder="2 {{ __("Traveller(s)") }}">
                                <input type="text" class="form-control border-0" placeholder="0 {{ __("Children(s)") }}">
                                <input type="text" class="form-control border-0" placeholder="1 {{ __("Room(s)") }}">
                            </div>
                        </div>

                        <div class="btn1 col-6 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn p-2 w-100">{{__("Search")}}</button>
                        </div>

                    </div>
                </div>
                <div class="panel position-relative" id="two-panel">
                    <div class="add2 d-flex flex-wrap justify-content-start align-content-center align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Route" class="form-label">{{__("Route")}} <span>*</span></label>
                            <select class="form-control" id="Route" name="Route">
                            <option value="">{{ __("Select Route") }}</option>
                            <option value="58">Jeddah - Makkah - Madinah - Madinah Airport</option>
                            <option value="59">Parking - Haram's Station</option>
                            <option value="60">Jeddah - Makkah - Madinah - Madinah Airport with Institutional Isolation</option>
                            <option value="67">Yanbu - makkah - madinah - Yanbu</option>
                            <option value="69">jeddah-makkah-jeddah</option>
                        </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="date-in" class="form-label">{{__("Date")}} <span>*</span></label>
                            <input type="date" name="date-in" id="date-in" class="form-control col-3">
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Vehicle" class="form-label">{{ __("No of Vehicle") }} <span>*</span></label>
                            <input type="text" name="Vehicle" id="Vehicle" placeholder="No of Vehicle" class="form-control col-3">
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Guests" class="form-label">{{ __("No of Guests") }} <span>*</span></label>
                            <input type="text" name="Guests" id="Guests" placeholder="No of Guests" class="form-control col-3">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Type" class="form-label">{{ __("Vehicle Type") }}</label>
                            <select class="form-control" id="Type" name="Type">
                            <option value="">{{ __("Select Vehicle Type") }}</option>
                            <option value="">Sedan Car</option>
                            <option value="">SUV Car</option>
                            <option value="">Bus</option>
                            <option value="">Van</option>
                        </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Category" class="form-label">{{ __("Vehicle Category") }}</label>
                            <select class="form-control" id="Category" name="Category">
                            <option value="">{{ __("Select Category") }}</option>
                            <option value="">{{ __("VIP") }}</option>
                            <option value="">{{ __("Premium") }}</option>
                            <option value="">{{ __("Normal") }}</option>
                        </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="From" class="form-label">{{ __("From") }}</label>
                            <select class="form-control" id="From" name="From">
                            <option value="">{{ __("Select Model From") }}</option>
                            <option value="">2010</option>
                            <option value="">2011</option>
                            <option value="">2012</option>
                            <option value="">2013</option>
                            <option value="">2014</option>
                            <option value="">2015</option>
                            <option value="">2016</option>
                            <option value="">2017</option>
                            <option value="">2018</option>
                            <option value="">2019</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                            <option value="">2022</option>
                        </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="to" class="form-label">{{ __("To") }}</label>
                            <select class="form-control" id="to" name="to">
                            <option value="">{{ __("Select Model To") }}</option>
                            <option value="">2010</option>
                            <option value="">2011</option>
                            <option value="">2012</option>
                            <option value="">2013</option>
                            <option value="">2014</option>
                            <option value="">2015</option>
                            <option value="">2016</option>
                            <option value="">2017</option>
                            <option value="">2018</option>
                            <option value="">2019</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                            <option value="">2022</option>
                        </select>
                        </div>
                        {{-- <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="Company" class="form-label">Company</label>
                            <select class="form-control" id="Company" name="Company">
                                <option value="">Select Company</option>
                                <option value="1">Saudi Public Transport Company</option>
                                <option value="2">Makkah Transportation Company</option>
                                <option value="5">aljazeera company for transportation</option>
                                <option value="7">Al Arabia Company For The Transportation of pilgrims</option>
                                <option value="8">Dalah Company For Transportation of Pilgrims</option>
                                <option value="9">Al madinah Al menawarah for the transportation of pilgrims</option>
                                <option value="10">Umm Alqura Co </option>
                                <option value="11">Hafil Company For Transportaion</option>
                                <option value="13">Abdulelah M. Ali Maghrabi for the transportation of pilgrims</option>
                                <option value="14">Nasir Andullah Abu Sarhad Group for the transportation of pilgrims</option>
                                <option value="15">Farouk Jamil Khogeer for the transportation of pilgrims</option>
                                <option value="16">Qawafil international for tourism services</option>
                                <option value="17">Shqadaf Company For Transportation</option>
                                <option value="18">Rawahel al mashaer for the transportation of pilgrims </option>
                                <option value="19">Rabitat Makah For Trading Transportation</option>
                                <option value="20">Tabarak Internation for the transportation of pilgrims</option>
                                <option value="21">Almassa Almotamiza for the transportation of pilgrims</option>
                                <option value="22">Dura Al Munawwarah</option>
                                <option value="23">Zaer transport company for Transportation</option>
                                <option value="24">Carthage Alhadetha Company for the transportation of pilgrims</option>
                                <option value="26">Saudi Qaed Co</option>
                                <option value="27">Hussein Mohammad Hijazi For Transportaion of Tourism And Umraa</option>
                                <option value="28">Mazaya For The Transportation of Pilgrims</option>
                                <option value="29">Aram Advaced Co.</option>
                                <option value="30">Maaden Hajj And Umrah Trasportation</option>
                                <option value="31">Al Serag Transportation Co.</option>
                                <option value="32">Ruba Al Hijaz</option>
                                <option value="33">alwessam almutamayiza for the transportation of pilgrims</option>
                                <option value="34">EL Mahanaa El momaiz For The Transportation of Pilgrims</option>
                                <option value="35">Rekab Alowla for the transportation of pilgrims</option>
                                <option value="36">Al Safeer Company For The Transportation of pilgrims</option>
                                <option value="37">Mustakbal Al Mashair For TheTransportation of Pilgrims</option>
                                <option value="38">Arkan Almashaer for the transportation of pilgrims</option>
                                <option value="39">Ameer Albaher For The Transportation of pilgrims</option>
                                <option value="5640">dawahi alkhair company</option>
                                <option value="5641">makkiyoon Al Zahabia Est For Transportation</option>
                                <option value="5642">Al Khomri Company For Hotels, Hajj and Umrah</option>
                                <option value="5645">Trabut Co Ltd</option>
                                <option value="5923">West Fleet</option>
                                <option value="5925">Afaj Alalmeeya Company</option>
                                <option value="5926">alwataniya company for umrah</option>
                                <option value="5928">Al Baraka Company</option>
                                <option value="5932">Samaya for the transportation of pilgrims</option>
                                <option value="5933">Travel Gate</option>
                                <option value="5935">SHARIA FOUNDATION</option>
                                <option value="5936">saad sayed alsaadi</option>
                                <option value="173330">basma emaar group for transportation</option>
                                <option value="198825">Ghazi Odeh Al - Ahmadi Foundation for the transportation of pilgrims</option>
                                <option value="199480">faisal alqithami for transporter</option>
                                <option value="199481">Visitors for Umrah Services</option>
                                <option value="200565">muasasat quraysh lilnaqaliat</option>
                                <option value="200874">muasasat albayt aleatiq lilnaql albariyi</option>
                                <option value="201301">muasasat badr tahir al'azhri lilnaql albariyi</option>
                                <option value="205711">ِAbdoh hasan jorob shatta</option>
                                <option value="205954">muasasat nasir eali muhamad mahdi linaql alzuwwar walmuetamirin</option>
                                <option value="206328">muasasat sulayman bin mufawz bin fayiz alharbi lilnaqliat</option>
                                <option value="206581">sharikat aldahaa alhadithat likhadamat almuetamarin almahduda</option>
                                <option value="206838">Ayed Awad Al Harbi Transport Est</option>
                                <option value="207497">muasasat al'iihsan lilnaqaliat</option>
                                <option value="208449">muasasat hamd bin ebdalrhmn bin hamd albasam altijaria</option>
                                <option value="208589">muasasat alzahrat almutamayizat linaql almuetamarin walziwwar</option>
                                <option value="208872">muasasat bayan alfurasan almutahidat lilnaql albariyi</option>
                                <option value="209448">bin khatlah development.co.ltd</option>
                                <option value="210182">muasasat eabdallah muhamad alghamidi likhadamat almuetamarin</option>
                                <option value="210332">muasasat safariat alrakb linaql almuetamarin</option>
                                <option value="210635">muasasat qawafil albayan lilnaql albariyi</option>
                                <option value="211562">Ahmed Mubarak Al Otaibi Transport Est</option>
                                <option value="212037">sharikat 'awan alzuhur liltijarat walmuqawalat waleiqarat</option>
                                <option value="212682">muasasat nayif eayid euayd almueabadii alharbii linaql almuetamrin walziwwar</option>
                                <option value="212683">muasasat nusuk alrahmat linaql alhujaj walmuetamarin</option>
                                <option value="214177">Saad Rashed Al - Lehyani Est</option>
                                <option value="215727">Modern Wajih Foundation for the transfer of pilgrims and visitors</option>
                                <option value="216972">majmueat alqaliti alduwalia</option>
                                <option value="217152">Wafaa Foundation for the transfer of pilgrims and visitors</option>
                                <option value="217334">Foundation Turki Mohammed Abdulrahman Juhani</option>
                                <option value="217518">qasswa for haj &amp; umra ltd.</option>
                                <option value="217704">muasasat alsafwat aleasriat linaql alhujaj walmuetamarin</option>
                                <option value="217892">مؤسسة ريان زيني عارف زينول لنقل الحجاج والمعتمرين</option>
                                <option value="218271">muasasat eayid hamidan hamuwd alsabhii lilnaql</option>
                                <option value="218464">ajyal altwhed for transporter</option>
                                <option value="218658">muasasat naji jbr eayid aleutaybi linaql alhujaj walmuetamarin</option>
                                <option value="218854">muasasat albadar walfajr lilnaqaliat</option>
                                <option value="219849">muasasat eubayd 'ahmad aleamiri linaql alzuwwar walmuetamirin</option>
                                <option value="220252">Naif Aloufi EST</option>
                                <option value="220253">sharikat buruj alealam lil'iinsha' waltaemir almahduda</option>
                                <option value="221072">Mhd bin Idris bin Awwad al Otaibi Est</option>
                                <option value="221280">Rasael alhuda for transportation</option>
                                <option value="223002">muasasat yasir sulayman almahmadi linaql alzuwwar walmuetamirin</option>
                                <option value="223007">muasasat saeid 'ahmad alzahrani linaql alhujaj walmuetamarin</option>
                                <option value="223013">sharikat rabitat almadina liltijarah walnaql almahduda</option>
                                <option value="223017">muasasat aldiyafat almumayazat lilnaqliat</option>
                                <option value="223020">muasasat qulub al'iikhwan lilnaqaliat</option>
                                <option value="223023">muasasat muhamad ebdallh etaallh al'ahmadii linaql alhujaj walmuetamarin</option>
                                <option value="223025">EZEE Saad Mohammed Al Qahtani Foundation for the transfer of pilgrims and Umrah</option>
                                <option value="223028">azeeza transportation</option>
                                <option value="223030">al nadi alaalmi</option>
                                <option value="223035">Reboo Taiba Company Ltd.</option>
                                <option value="223041">asfar alayman </option>
                                <option value="223046">NAIF MESFER AL LEHYANI FOUNDATION FOR UMRAH</option>
                                <option value="223048">jameel rizq alharbi foun dation</option>
                                <option value="223050">Est hamda ahmed alsuhaimi</option>
                                <option value="223053">abdalah majed alhamid for pi</option>
                                <option value="223057">saudi maan company</option>
                                <option value="223063">muasasat nukhbat alzuwwar linaql alhujaj walmuetamarin</option>
                                <option value="223070">duaa alkubra est</option>
                                <option value="223072">sharikat khalid hamd eali hazazy</option>
                                <option value="223075">trckrunaway transportion</option>
                                <option value="223077">Alfaf company</option>
                                <option value="223087">tareeq al hudda transport company</option>
                                <option value="223089">muasasat eabdalmjyd eali alzahrani linaql alzuwwar walmuetamirin</option>
                                <option value="223096">Qawafil alrraha</option>
                                <option value="223102">Alajour Foundation for Transportation of Visitors and Umrah</option>
                                <option value="223116">sharikat nabras alduwaliat liltanmiat alsiyahiat almahduda</option>
                                <option value="223121">al - nakhla national trasport for pilgrims &amp; umrah</option>
                                <option value="223143">ahlam EST</option>
                                <option value="223145">NADA ALTOMOH CO</option>
                                <option value="223176">Saleh Adnan Mosli Est</option>
                                <option value="223178">branch prince of sea</option>
                                <option value="223206">maktab 'ajwa' alsewdyt litanzim alrihlat</option>
                                <option value="223242">muasasat nawaqil aldhahabiat lilnaql albariyi</option>
                                <option value="223245">olayaan Transport Est</option>
                              </select>
                        </div> --}}
                        <div class=" btn1 col-12 col-sm-12 col-md-6 col-lg-3">
                            <button type="button" class="btn p-2 w-100">{{ __("Search") }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">

    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ asset('cms/assets/img/WhatsApp Image 2022-06-19 at 4.08.40 PM.svg') }}" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>{{ __("About Us") }}</h4>
                        <p>{{ __("'Sero' is a step that started its journey from the era of the founder, may God rest his soul, whose first goal is to facilitate the matters of tourism and travel for travelers by providing multiple services at flexible prices.") }}</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
        </div>
    </section>
    <!-- Project One Row-->
    <section class="services" id="services" style="margin-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card1 card-1">
                        <h5 >{{ __("Flights") }}</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card1 card-2">
                        <h5>{{ __("HOTELS") }}</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card1 card-3">
                        <h5>{{ __("TRANSPORT") }}</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="card1 card-4">
                        <h5>{{ __("DOMESTIC UMRAH") }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-content-center align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">{{ __("Email") }}</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">info@sero.com.sa</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">{{ __("Address") }}</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">طريق الملك عبدالله الفرعي،المدينة المنورة </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">{{ __("Phone") }}</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+966920007075</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-wrap mt-3">
                <div class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4 text-decoration-none" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-start" style="border-bottom: 2px solid white;">{{ __("Our services") }}</h4>
                    <ul dir="ltr" style="height: 150px; overflow: hidden;">
                        <li> {{ __("Get a visa from anywhere in the world within 24 hours") }}</li>
                        <li> {{ __("Connecting travelers and hotels") }}</li>
                        <li> {{ __("Providing ground services of all kinds (providing buses, metro tickets, transportation services)") }}</li>
                        <li> Book flights at the lowest prices with a group of airlines</li>
                        <li> Designing flexible and special packages to suit Umrah performers and pilgrims of all levels.</li>
                        <li> Providing reservations for all hotels around the world</li>
                    </ul>
                </div>

                <div dir="ltr" class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-start" style="border-bottom: 2px solid white;">{{ __("Quick links") }}</h4>

                    <div class="widget-contact-list">
                        <ul dir="ltr">
                            <li>
                                <a href="{{ route("home") }}"> {{ __("Home") }}</a>
                            </li>
                            <li>
                                <a href="#about1"> {{ __("About") }}</a>
                            </li>
                            <li>
                                <!-- link trigger modal -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#Modal">{{ __("privacy policy") }}</a>

                                <!-- Modal -->
                                <div class="modal modal-fullscreen-lg-down fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-black">
                                                <div class=" p-5">
                                                    <h1 class="text-center p-3">Privacy Policy</h1>
                                                    <h3 class="text-danger">Sero com platform rules and policies</h3>
                                                    <p>Our company and all our systems are subject to the general system and policies of the country of origin, which is the Kingdom of Saudi Arabia. Currently, we accept online payments by using credit cards, which include “Visa and MasterCard” cards and can be debited through the currency available in the services via the platform, which can be in Saudi riyals or US dollars, In the event that you wish to usee the electronic payment method via the Internet, there must be a match and complete authorization and a match in the details in the customer ID and the ID of the card holder, which must be completely identical to make purchases</p>

                                                    <p>In cases of refund, only refundable amounts of transactions made on this electronic platform will be refunded to the original payment method through which the payment for the transactions was completed.</p>

                                                    <p>Some basic data related to delivery information, such as customer name, location, postal address and contact numbers, will be stored for the purposes of ensuring delivery. Other personally identifiable information will not be stored.</p>

                                                    <h3 class="text-danger">Cancellation fees
                                                    </h3>
                                                    <ul>
                                                        <li>If cancellation is made between 0 days – 24 days prior to the departure date, 100% of the reservations value will be deducted and will not be refunded in any way.</li>

                                                        <li>If the cancellation is made within a period of time between 25 to 60 days before the scheduled departure date, 50% of the reservation value will be deducted.</li>

                                                        <li>If the cancellation is made within a period of time equal to or greater than 61 days from the scheduled departure date, only 10% of the total value of the reservations will be charged.</li>
                                                        <li>In the event that the name of the data provided in the reservations does not match the data details in the passport, a fine of only 150 Saudi riyals will be required to change the name of the traveler if the change is possible</li>

                                                        <li>For hotels, the siro.com platform does not charge any special additional fees to provide cancellation services as an additional fee in addition to the cancellation fees charged by the hotel in its cancellation policy</li>
                                                    </ul>

                                                    <h3 class="text-danger">General Provisions</h3>

                                                    <p>Through our platform, you can book and travel to any specific destinations you wish, and these destinations may involve greater risks than others, whatever kind of risk, and you will have to bear all responsibility in terms of costs, consequences and full personal responsibility</p>

                                                    <p>sero com platform requests its travelers and all guests to consult the local authorities in their country or the country of travel, and to evaluate travel ban decisions, warnings, advertisements or all instructions issued by local authorities before booking travel to international or domestic destinations in general, certain regions and destinations Especially without any responsibility on the platform</p>

                                                    <p>By providing and selling travel and reservation services to certain countries or destinations, the siro com platform is not in any way responsible or liable for the warning or risks in those destinations, and the siro platform is not considered a guarantor or recommender of travel to these destinations, and the siro platform does not bear any responsibility for Damages, losses or delays that may result from failure to provide correct documents relating to travel, entry, exit or length of stay at those destinations</p>

                                                    <p>Sero Platform and its affiliates, agencies, or suppliers are not responsible in any way for errors, acts, omissions, representations, warranties, violations or negligence made by any airline, hotel or other service provider, and the platform is not responsible for Any personal injury, death, property damage, or any other damages, fees or expenses arising therefrom, Neither Sero nor any of the companies and agents it deals with or any of the service providers of the platform assume any responsibility and will not refund the money in the event of any delay, cancellation of reservation, increase in taxes, force majeure, strikes and riots, or any other actions Others are out of direct control, and the platform shall not be liable for any additional expenses, litigation, delay, redirection, or litigation to any parties or authorities</p>

                                                    <p>Sero Platform reserves its exclusive and complete rights and in its sole discretion to delete, change, limit or discontinue the Site or any material posted on it, and is under no obligation to take into account the needs of any user in connection therewith.</p>

                                                    <p>Sero Platform reserves all its exclusive rights to prevent or deny access to any user of this website or any part of it without prior notice.</p>

                                                    <p>By agreeing to the terms and conditions relating to any of the operations on this platform, you expressly and are bound to agree to be bound by the terms and conditions of purchase and services imposed by any provider or supplier of the service you choose to deal with, including, but not limited to, the payment of all amounts when due in accordance with to the restrictions and rules imposed by the provider or supplier of the services in relation to the availability of the services and the timely use of prices, products or services, and you acknowledge that there may be additional requirements from some suppliers and/or a third party In relation to a third party, the provision of the Service or participation in the Participation, and that you are fully aware that the terms, conditions, rules, and restrictions imposed on the Offer may result in the cancellation of your reservations, or that the Sero Platform debits your account for costs incurred by the Platform as a result of your stay</p>

                                                    <p>No waiver by Sero platform shall be deemed or enforceable in any of the terms and conditions and in any form whatsoever, as is binding, what is stated in writing on the site, or approved and signed by its authorized representative in accordance with the regulations and laws</p>

                                                    <p>All these terms and conditions shall be governed by and construed in accordance with the laws and regulations in force in the Kingdom of Saudi Arabia, and any dispute shall be subject to the exclusive jurisdiction of the appropriate and competent courts and judicial organs located in the Kingdom of Saudi Arabia.</p>

                                                    <h3 class="text-danger">Payment terms and conditions</h3>

                                                    <p>Neither the Sero platform nor its developer will and will not request, store or share any data related to customers' credit cards, login data for their bank accounts, or prepaid cards over the phone or e-mail and under any circumstances</p>

                                                    <p>In the event of a note on payments through our electronic payment gateway, our security team will contact you via e-mail from the following address info@sero.com.sa, and a photo of the credit card will be requested from the front and back on the CVV code For verification, please contact the secure email address: info@sero.com.sa</p>

                                                    <p>In the event that you receive any communication or email from another email address purporting to be sent to you by the Siro platform and requesting any personal or security data, please never reply to that email, and please forward such message to our specialized email which is info@sero.com.sa You will also have to delete, directly and immediately, this anonymous message</p>

                                                    <h3 class="text-danger">Payment for the services provided by the Sero platform can be paid through the following channels:</h3>

                                                    <ul>
                                                        <li>The electronic payment gateway page on our website</li>
                                                        <li>Electronic payment via the secure link on the domain of the Siro platform</li>
                                                        <li>Deposit cash into the Siro platform account at Alinma Bank according to the following IBAN data (IBAN SA1205000068203403610000)</li>
                                                    </ul>

                                                    <p>The user will be warned, and confirmed to agree that he will create electronic payments and that he will issue or create electronic payment instructions and that he will provide his card or credit card data or his or her bank data</p>

                                                    <p>The user is considered the legal user and authorized to use his credit card or bank account, and he is considered legally authorized to carry out payments, withdrawals and bank debits from his accounts in favor of these operations</p>

                                                    <p>The user fully bears all responsibility related to the need to ensure that he has provided the card or bank account details accurately and correctly</p>

                                                    <p>The user will authorize the debiting of the credit card or/and the bank account specified by him for payment in favor of the Sero platform</p>

                                                    <p>The user / customer bears all responsibility for providing sufficient cash balance in the credit card / or bank account that he will use during the payment process for the financial dues and invoices resulting from the services and reservations chosen by him, bearing in mind that all payments are inclusive of all fees related to</p>


                                                    <h3 class="text-danger">Visa Terms and Conditions</h3>

                                                    <p>Nationals of the Arabian Gulf [GCC countries] do not need to obtain a visa, and these terms and conditions relate to all other nationalities outside of the Gulf Cooperation Council countries</p>

                                                    <ul>
                                                        <li>Tourist visa is not valid for work or residence</li>

                                                        <li>The standard duration of a tourist visa is 90 days (unless the visa states otherwise on the sticker or printed visa document).</li>

                                                        <li>The tourist must not “default” or exceed the legal period of the visa, and violating this is considered a violation of the laws of the Kingdom of Saudi Arabia, and the violator will be subject to legal procedures and legal penalties, which may include, but are not limited to financial fines or even access to a ban on entering the Kingdom of Saudi Arabia in the future</li>

                                                        <li>A passport must be valid and valid for a period of no less than six months, and it must be capable of entering the Kingdom of Saudi Arabia and then the next destination. At least two blank pages must be available in the passport, corresponding to one another.</li>
                                                        <li>Al-Sayeh had to cooperate fully with the work team of the Sero platform to fill in and verify the data as follows</li>

                                                        <li>Al-Sayeh is responsible and accountable for the correctness and safety of all the data he submits to the platform, as well as the safety and authenticity of all documents that he will submit to the Siro platform team, including all documents and data that Al-Sayeh himself uploads on the Siro website</li>

                                                        <li>Tourist visa fees are not refundable or refundable in any way, in the event that the tourist decides to cancel a trip after the issuance of the visa reference number (MOVA), [issued after the success of the tourist visa application]</li>

                                                        <li>Sero platform or its team does not bear any legal responsibility or any complaints related to the customer’s violation of the terms, conditions and codes referred to above, and the policies and procedures related to them, and does not accept any kind of liability of any kind in this regard.</li>

                                                        <li>Visitors to the Kingdom of Saudi Arabia must obey the Islamic laws and regulations of the Kingdom and the controls, customs and traditions related to its civilization and society.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-start" style="border-bottom: 2px solid white;">{{ __("Social Media") }}</h4>
                    <div class="social d-flex justify-content-center" style="margin-left: auto; margin-right: auto;">
                        <a class="mx-2 " href="https://twitter.com/serovision1?s=21&t=ObGKxjr4RhzOnCC9EgP2mg"><i class="fab fa-twitter "></i></a>
                        <a class="mx-2 " href="https://www.facebook.com/profile.php?id=100082581573020"><i class="fab fa-facebook-f "></i></a>
                        <a class="mx-2 " href="https://www.instagram.com/serovision.1/"><i class="fab fa-instagram "></i></a>
                        <a class="mx-2 " href="https://wa.me/message/PTITBIUHHPWWJ1"><i class="fab fa-whatsapp "></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">{{ __("All rights reserved Privacy Policy") }} &copy; Sero 2022 - 23</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('cms/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
