<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="<?= base_url() ?>front_assets/agility/agiliti-favicon.png">
    <title>Agiliti | 2021 Commercial Kickoff</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>front_assets/login_template/css/main.css?v3">
    <!--===============================================================================================-->
</head>

<style>

    /* The message box is shown when the user clicks on the password field */

    #message p {
        padding: 0px 5px;
        font-size: 14px;
        margin-bottom: 0px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -10px;
        content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -10px;
        content: "✖";
    }
</style>

<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url(<?=base_url()?>front_assets/images/FAUXSKO21/1_ForescoutSKO_LandingPage.png)">
        <div class="wrap-login100" style="text-align: center">
            <div class="login100-form-title" style="background-color: #ececec;position: unset">
                <img src="<?=base_url()?>front_assets/agility/Agiliti_logo_transparent.png" style="width: 50%;height: auto;background-color: #ececec;margin-top: 8px;margin-bottom: 8px;">
            </div>

        <span style="display: inline-block;margin-top: 20px;color: #d50000;">Already registered? <a href="<?=base_url('login')?>" style="color: #d50000;"><u>Click here</u></a></span>

        <form id="regForm" class="login100-form validate-form" method="post" action="<?= base_url() ?>register/add_customer" style="padding-top: 30px;">

            <div class="wrap-input100 validate-input m-b-26" data-validate="First name is required">
                <span class="label-input100">First name</span>
                <input class="input100" type="text" name="first_name" placeholder="Enter first name">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-26" data-validate="Last name is required">
                <span class="label-input100">Last name</span>
                <input class="input100" type="text" name="last_name" placeholder="Enter last name">
                <span class="focus-input100"></span>
            </div>

<!--            <div class="wrap-input100 validate-input m-b-26" data-validate="Last name is required">-->
<!--                <span class="label-input100">Country</span>-->
<!--                <select class="input100" id="country" name="country">-->
<!--                    <option value="United States of America">United States of America</option>-->
<!--                    <option value="Canada">Canada</option>-->
<!--                    <option value="Afganistan">Afghanistan</option>-->
<!--                    <option value="Albania">Albania</option>-->
<!--                    <option value="Algeria">Algeria</option>-->
<!--                    <option value="American Samoa">American Samoa</option>-->
<!--                    <option value="Andorra">Andorra</option>-->
<!--                    <option value="Angola">Angola</option>-->
<!--                    <option value="Anguilla">Anguilla</option>-->
<!--                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>-->
<!--                    <option value="Argentina">Argentina</option>-->
<!--                    <option value="Armenia">Armenia</option>-->
<!--                    <option value="Aruba">Aruba</option>-->
<!--                    <option value="Australia">Australia</option>-->
<!--                    <option value="Austria">Austria</option>-->
<!--                    <option value="Azerbaijan">Azerbaijan</option>-->
<!--                    <option value="Bahamas">Bahamas</option>-->
<!--                    <option value="Bahrain">Bahrain</option>-->
<!--                    <option value="Bangladesh">Bangladesh</option>-->
<!--                    <option value="Barbados">Barbados</option>-->
<!--                    <option value="Belarus">Belarus</option>-->
<!--                    <option value="Belgium">Belgium</option>-->
<!--                    <option value="Belize">Belize</option>-->
<!--                    <option value="Benin">Benin</option>-->
<!--                    <option value="Bermuda">Bermuda</option>-->
<!--                    <option value="Bhutan">Bhutan</option>-->
<!--                    <option value="Bolivia">Bolivia</option>-->
<!--                    <option value="Bonaire">Bonaire</option>-->
<!--                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>-->
<!--                    <option value="Botswana">Botswana</option>-->
<!--                    <option value="Brazil">Brazil</option>-->
<!--                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>-->
<!--                    <option value="Brunei">Brunei</option>-->
<!--                    <option value="Bulgaria">Bulgaria</option>-->
<!--                    <option value="Burkina Faso">Burkina Faso</option>-->
<!--                    <option value="Burundi">Burundi</option>-->
<!--                    <option value="Cambodia">Cambodia</option>-->
<!--                    <option value="Cameroon">Cameroon</option>-->
<!--                    <option value="Canary Islands">Canary Islands</option>-->
<!--                    <option value="Cape Verde">Cape Verde</option>-->
<!--                    <option value="Cayman Islands">Cayman Islands</option>-->
<!--                    <option value="Central African Republic">Central African Republic</option>-->
<!--                    <option value="Chad">Chad</option>-->
<!--                    <option value="Channel Islands">Channel Islands</option>-->
<!--                    <option value="Chile">Chile</option>-->
<!--                    <option value="China">China</option>-->
<!--                    <option value="Christmas Island">Christmas Island</option>-->
<!--                    <option value="Cocos Island">Cocos Island</option>-->
<!--                    <option value="Colombia">Colombia</option>-->
<!--                    <option value="Comoros">Comoros</option>-->
<!--                    <option value="Congo">Congo</option>-->
<!--                    <option value="Cook Islands">Cook Islands</option>-->
<!--                    <option value="Costa Rica">Costa Rica</option>-->
<!--                    <option value="Cote DIvoire">Cote DIvoire</option>-->
<!--                    <option value="Croatia">Croatia</option>-->
<!--                    <option value="Cuba">Cuba</option>-->
<!--                    <option value="Curaco">Curacao</option>-->
<!--                    <option value="Cyprus">Cyprus</option>-->
<!--                    <option value="Czech Republic">Czech Republic</option>-->
<!--                    <option value="Denmark">Denmark</option>-->
<!--                    <option value="Djibouti">Djibouti</option>-->
<!--                    <option value="Dominica">Dominica</option>-->
<!--                    <option value="Dominican Republic">Dominican Republic</option>-->
<!--                    <option value="East Timor">East Timor</option>-->
<!--                    <option value="Ecuador">Ecuador</option>-->
<!--                    <option value="Egypt">Egypt</option>-->
<!--                    <option value="El Salvador">El Salvador</option>-->
<!--                    <option value="Equatorial Guinea">Equatorial Guinea</option>-->
<!--                    <option value="Eritrea">Eritrea</option>-->
<!--                    <option value="Estonia">Estonia</option>-->
<!--                    <option value="Ethiopia">Ethiopia</option>-->
<!--                    <option value="Falkland Islands">Falkland Islands</option>-->
<!--                    <option value="Faroe Islands">Faroe Islands</option>-->
<!--                    <option value="Fiji">Fiji</option>-->
<!--                    <option value="Finland">Finland</option>-->
<!--                    <option value="France">France</option>-->
<!--                    <option value="French Guiana">French Guiana</option>-->
<!--                    <option value="French Polynesia">French Polynesia</option>-->
<!--                    <option value="French Southern Ter">French Southern Ter</option>-->
<!--                    <option value="Gabon">Gabon</option>-->
<!--                    <option value="Gambia">Gambia</option>-->
<!--                    <option value="Georgia">Georgia</option>-->
<!--                    <option value="Germany">Germany</option>-->
<!--                    <option value="Ghana">Ghana</option>-->
<!--                    <option value="Gibraltar">Gibraltar</option>-->
<!--                    <option value="Great Britain">Great Britain</option>-->
<!--                    <option value="Greece">Greece</option>-->
<!--                    <option value="Greenland">Greenland</option>-->
<!--                    <option value="Grenada">Grenada</option>-->
<!--                    <option value="Guadeloupe">Guadeloupe</option>-->
<!--                    <option value="Guam">Guam</option>-->
<!--                    <option value="Guatemala">Guatemala</option>-->
<!--                    <option value="Guinea">Guinea</option>-->
<!--                    <option value="Guyana">Guyana</option>-->
<!--                    <option value="Haiti">Haiti</option>-->
<!--                    <option value="Hawaii">Hawaii</option>-->
<!--                    <option value="Honduras">Honduras</option>-->
<!--                    <option value="Hong Kong">Hong Kong</option>-->
<!--                    <option value="Hungary">Hungary</option>-->
<!--                    <option value="Iceland">Iceland</option>-->
<!--                    <option value="Indonesia">Indonesia</option>-->
<!--                    <option value="India">India</option>-->
<!--                    <option value="Iran">Iran</option>-->
<!--                    <option value="Iraq">Iraq</option>-->
<!--                    <option value="Ireland">Ireland</option>-->
<!--                    <option value="Isle of Man">Isle of Man</option>-->
<!--                    <option value="Israel">Israel</option>-->
<!--                    <option value="Italy">Italy</option>-->
<!--                    <option value="Jamaica">Jamaica</option>-->
<!--                    <option value="Japan">Japan</option>-->
<!--                    <option value="Jordan">Jordan</option>-->
<!--                    <option value="Kazakhstan">Kazakhstan</option>-->
<!--                    <option value="Kenya">Kenya</option>-->
<!--                    <option value="Kiribati">Kiribati</option>-->
<!--                    <option value="Korea North">Korea North</option>-->
<!--                    <option value="Korea Sout">Korea South</option>-->
<!--                    <option value="Kuwait">Kuwait</option>-->
<!--                    <option value="Kyrgyzstan">Kyrgyzstan</option>-->
<!--                    <option value="Laos">Laos</option>-->
<!--                    <option value="Latvia">Latvia</option>-->
<!--                    <option value="Lebanon">Lebanon</option>-->
<!--                    <option value="Lesotho">Lesotho</option>-->
<!--                    <option value="Liberia">Liberia</option>-->
<!--                    <option value="Libya">Libya</option>-->
<!--                    <option value="Liechtenstein">Liechtenstein</option>-->
<!--                    <option value="Lithuania">Lithuania</option>-->
<!--                    <option value="Luxembourg">Luxembourg</option>-->
<!--                    <option value="Macau">Macau</option>-->
<!--                    <option value="Macedonia">Macedonia</option>-->
<!--                    <option value="Madagascar">Madagascar</option>-->
<!--                    <option value="Malaysia">Malaysia</option>-->
<!--                    <option value="Malawi">Malawi</option>-->
<!--                    <option value="Maldives">Maldives</option>-->
<!--                    <option value="Mali">Mali</option>-->
<!--                    <option value="Malta">Malta</option>-->
<!--                    <option value="Marshall Islands">Marshall Islands</option>-->
<!--                    <option value="Martinique">Martinique</option>-->
<!--                    <option value="Mauritania">Mauritania</option>-->
<!--                    <option value="Mauritius">Mauritius</option>-->
<!--                    <option value="Mayotte">Mayotte</option>-->
<!--                    <option value="Mexico">Mexico</option>-->
<!--                    <option value="Midway Islands">Midway Islands</option>-->
<!--                    <option value="Moldova">Moldova</option>-->
<!--                    <option value="Monaco">Monaco</option>-->
<!--                    <option value="Mongolia">Mongolia</option>-->
<!--                    <option value="Montserrat">Montserrat</option>-->
<!--                    <option value="Morocco">Morocco</option>-->
<!--                    <option value="Mozambique">Mozambique</option>-->
<!--                    <option value="Myanmar">Myanmar</option>-->
<!--                    <option value="Nambia">Nambia</option>-->
<!--                    <option value="Nauru">Nauru</option>-->
<!--                    <option value="Nepal">Nepal</option>-->
<!--                    <option value="Netherland Antilles">Netherland Antilles</option>-->
<!--                    <option value="Netherlands">Netherlands (Holland, Europe)</option>-->
<!--                    <option value="Nevis">Nevis</option>-->
<!--                    <option value="New Caledonia">New Caledonia</option>-->
<!--                    <option value="New Zealand">New Zealand</option>-->
<!--                    <option value="Nicaragua">Nicaragua</option>-->
<!--                    <option value="Niger">Niger</option>-->
<!--                    <option value="Nigeria">Nigeria</option>-->
<!--                    <option value="Niue">Niue</option>-->
<!--                    <option value="Norfolk Island">Norfolk Island</option>-->
<!--                    <option value="Norway">Norway</option>-->
<!--                    <option value="Oman">Oman</option>-->
<!--                    <option value="Pakistan">Pakistan</option>-->
<!--                    <option value="Palau Island">Palau Island</option>-->
<!--                    <option value="Palestine">Palestine</option>-->
<!--                    <option value="Panama">Panama</option>-->
<!--                    <option value="Papua New Guinea">Papua New Guinea</option>-->
<!--                    <option value="Paraguay">Paraguay</option>-->
<!--                    <option value="Peru">Peru</option>-->
<!--                    <option value="Phillipines">Philippines</option>-->
<!--                    <option value="Pitcairn Island">Pitcairn Island</option>-->
<!--                    <option value="Poland">Poland</option>-->
<!--                    <option value="Portugal">Portugal</option>-->
<!--                    <option value="Puerto Rico">Puerto Rico</option>-->
<!--                    <option value="Qatar">Qatar</option>-->
<!--                    <option value="Republic of Montenegro">Republic of Montenegro</option>-->
<!--                    <option value="Republic of Serbia">Republic of Serbia</option>-->
<!--                    <option value="Reunion">Reunion</option>-->
<!--                    <option value="Romania">Romania</option>-->
<!--                    <option value="Russia">Russia</option>-->
<!--                    <option value="Rwanda">Rwanda</option>-->
<!--                    <option value="St Barthelemy">St Barthelemy</option>-->
<!--                    <option value="St Eustatius">St Eustatius</option>-->
<!--                    <option value="St Helena">St Helena</option>-->
<!--                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>-->
<!--                    <option value="St Lucia">St Lucia</option>-->
<!--                    <option value="St Maarten">St Maarten</option>-->
<!--                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>-->
<!--                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>-->
<!--                    <option value="Saipan">Saipan</option>-->
<!--                    <option value="Samoa">Samoa</option>-->
<!--                    <option value="Samoa American">Samoa American</option>-->
<!--                    <option value="San Marino">San Marino</option>-->
<!--                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>-->
<!--                    <option value="Saudi Arabia">Saudi Arabia</option>-->
<!--                    <option value="Senegal">Senegal</option>-->
<!--                    <option value="Seychelles">Seychelles</option>-->
<!--                    <option value="Sierra Leone">Sierra Leone</option>-->
<!--                    <option value="Singapore">Singapore</option>-->
<!--                    <option value="Slovakia">Slovakia</option>-->
<!--                    <option value="Slovenia">Slovenia</option>-->
<!--                    <option value="Solomon Islands">Solomon Islands</option>-->
<!--                    <option value="Somalia">Somalia</option>-->
<!--                    <option value="South Africa">South Africa</option>-->
<!--                    <option value="Spain">Spain</option>-->
<!--                    <option value="Sri Lanka">Sri Lanka</option>-->
<!--                    <option value="Sudan">Sudan</option>-->
<!--                    <option value="Suriname">Suriname</option>-->
<!--                    <option value="Swaziland">Swaziland</option>-->
<!--                    <option value="Sweden">Sweden</option>-->
<!--                    <option value="Switzerland">Switzerland</option>-->
<!--                    <option value="Syria">Syria</option>-->
<!--                    <option value="Tahiti">Tahiti</option>-->
<!--                    <option value="Taiwan">Taiwan</option>-->
<!--                    <option value="Tajikistan">Tajikistan</option>-->
<!--                    <option value="Tanzania">Tanzania</option>-->
<!--                    <option value="Thailand">Thailand</option>-->
<!--                    <option value="Togo">Togo</option>-->
<!--                    <option value="Tokelau">Tokelau</option>-->
<!--                    <option value="Tonga">Tonga</option>-->
<!--                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>-->
<!--                    <option value="Tunisia">Tunisia</option>-->
<!--                    <option value="Turkey">Turkey</option>-->
<!--                    <option value="Turkmenistan">Turkmenistan</option>-->
<!--                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>-->
<!--                    <option value="Tuvalu">Tuvalu</option>-->
<!--                    <option value="Uganda">Uganda</option>-->
<!--                    <option value="United Kingdom">United Kingdom</option>-->
<!--                    <option value="Ukraine">Ukraine</option>-->
<!--                    <option value="United Arab Erimates">United Arab Emirates</option>-->
<!--                    <option value="Uraguay">Uruguay</option>-->
<!--                    <option value="Uzbekistan">Uzbekistan</option>-->
<!--                    <option value="Vanuatu">Vanuatu</option>-->
<!--                    <option value="Vatican City State">Vatican City State</option>-->
<!--                    <option value="Venezuela">Venezuela</option>-->
<!--                    <option value="Vietnam">Vietnam</option>-->
<!--                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>-->
<!--                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>-->
<!--                    <option value="Wake Island">Wake Island</option>-->
<!--                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>-->
<!--                    <option value="Yemen">Yemen</option>-->
<!--                    <option value="Zaire">Zaire</option>-->
<!--                    <option value="Zambia">Zambia</option>-->
<!--                    <option value="Zimbabwe">Zimbabwe</option>-->
<!--                </select>-->
<!--                <span class="focus-input100"></span>-->
<!--            </div>-->

            <div class="wrap-input100 validate-input m-b-26" data-validate="Job Type is required">
                <span class="label-input100">Job Type</span>
                <select class="input100" id="job_type" name="job_type">
                    <option value="Accounting & Finance">Accounting & Finance</option>
                    <option value="Corp Dev & Strategy">Corp Dev & Strategy</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Executive Staff">Executive Staff</option>
                    <option value="HR & Learning">HR & Learning</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Operations & IT">Operations & IT</option>
                    <option value="Product Management">Product Management</option>
                    <option value="Sales">Sales</option>
                    <option value="Sales Engineering">Sales Engineering</option>
                    <option value="SDR">SDR</option>
                    <option value="Support">Support</option>

                    <optgroup label="___">
                        <option value="Other">Other</option>
                    </optgroup>
                </select>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                <span class="label-input100">Email</span>
                <input class="input100" type="email" name="email" placeholder="Enter email">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                <span class="label-input100">Password</span>
                <input class="input100" type="password" id="password" name="password" placeholder="Enter password">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 m-b-18" id="message" style="display: none">
                <span class="label-input100">Password Strength</span>
                <div>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
            </div>

            <div class="container-login100-form-btn m-b-7">
                <div class="g-recaptcha" data-callback="recaptchaCallback" style="text-align: -webkit-center;" data-sitekey="6LfbHKQZAAAAAA9nhI-4GNOmLakkRGGaBTJgHFbF"></div>
                <div class="gaps-2x"></div>
                <span id="errorcaptcha" style="color:red;display: none;">Please check 'I am not a robot' checkbox.</span>
            </div>

            <div class="container-login100-form-btn">
                <button type="submit" id="submit-reg-btn" class="login100-form-btn">
                    Register
                </button>
            </div>
        </form>

        <a href="<?=base_url()?>">
            <button class="btn btn-secondary" style="float: left;">
                Back
            </button>
        </a>

        <a href="/support/submit_ticket/displayForm" target="_blank" style="float: right;margin-right: 10px;">
            <span>
                <i class="far fa-life-ring"></i> SUPPORT
            </span>
        </a>
    </div>
</div>
</div>

<!--===============================================================================================-->
<script src="<?=base_url()?>front_assets/login_template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>front_assets/login_template/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>front_assets/login_template/vendor/bootstrap/js/popper.js"></script>
<script src="<?=base_url()?>front_assets/login_template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>front_assets/login_template/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>front_assets/login_template/vendor/daterangepicker/moment.min.js"></script>
<script src="<?=base_url()?>front_assets/login_template/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>front_assets/login_template/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>



<script src="<?=base_url()?>front_assets/login_template/js/register.js?v=11"></script>

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script src="https://kit.fontawesome.com/fd91b3535c.js" crossorigin="anonymous"></script>

<?php
$msg = $this->input->get("msg");
switch ($msg) {
    case "A":
        $m = "Email already exits.";
        $t = "error";
        break;
    case "E":
        $m = "Something went wrong, please try again!";
        $t = "error";
        break;
    case "Done":
        $m = "You are successfully registered, you can now login!";
        $t = "success";
        break;
    default:
        $m = 0;
        break;
}
?>
<script type="text/javascript">

    $(document).ready(function () {
        <?php if ($msg): ?>
        Swal.fire(
            '',
            "<?= $m ?>",
            '<?= $t ?>'
        )<?=($t=='success')?'.then(()=>{window.location.replace("'.base_url().'login")})':''?>;
        <?php endif; ?>
    });

    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function () {
        document.getElementById("message").style.display = "block";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function () {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }
</script>

</body>
</html>
