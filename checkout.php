<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Fab Icon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logos/pathfavicon-01.png" /> 
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="assets/css/vander/bootstrap.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="assets/css/vander/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/vander/owl.carousel.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/vander/slick.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/img/logos/favicon.ico">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css?r=1">
    <link rel="stylesheet" href="assets/css/custom.css?r=1">
    <link rel="stylesheet" href="assets/css/application-form.css?r=1">
    
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- SDK de cliente para PayPal -->
	<script src="https://www.paypal.com/sdk/js?client-id=ARDCi3FIBBP9EAKeL5VTreoO1wmD1tF8IGOIehneZqbdaXpM5yC3Cr7K0FF75HwtlcVVtL35zt5YGjiq"></script>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/jwf6mkc.css">  

    <title>Path | Checkout</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BQWREFVWND"></script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BQWREFVWND');
</script>

    <style type="text/css">

    body{
        font-family: "skolar-sans-latin", sans-serif;
    }
    #scroll-top, #franja-contacto{ display:none!important }
    header{
        padding-top: 23vh;
        margin-bottom: 8%;

    }
    header h2{
        text-align: center;
        position: relative;
    }
    header h2::after{
        content: 'Book an exam';
        position: absolute;
        left: 0;
        top: -33%;
        right: 0;
        transform: scale(2,2);
        z-index: -1;
        opacity: .07;
    }
    .cont80{
        margin: 26vh auto;
        width: 75%;
        display:block;
    }
    .tit{
        position: relative
    }

    .boxi{
        box-shadow: 0px 0px 5px 1px #ddd;
        padding: 3%;
        margin-top: 4vh;
    }
    .boxi p {
        font-size: 1em;
        margin-top: 15px;
        width: 90%;
    }
    .tit::before{
        position: absolute;
        left: -3%;
        bottom: -50%;
        right: 0;
        font-size: 2.4em;
        z-index: -1;
        opacity: .07;
        content: attr(data-num);
    }
    /* #tit_pais::before{
        content: '01';

    }
    #tit_selectExam::before{
        content: '02';
    } */
    
    #exams{
        width: 67%;
    }
    #exams ul>div{
        width: 50%;
    }
    #exams ul>div:last-child{
        border-right: 1px solid #004972ab;
    }

    #modules{
        width: 30%
    }
    #exams ul{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    #exams ul li, #modules ul li{
        margin: 15px 1%;
        cursor: pointer;
        color: #004969;
        border: 1px solid #004969;
        padding: 5px 10px;
        transition: .2s cubic-bezier(0.13, 0.77, 0.33, 1);
        opacity: 0.35;
        position: relative;
    }
    #exams ul li{
        width: 90%;
    }
    #modules ul li{
        width: 85%;
    }
    #exams ul li::after{
        content: '✓';
        position: absolute;
        right: 2.5%;
        top:50%;
        transform: translateY(-50%);
        opacity: 0;
        transition: .2s cubic-bezier(0.13, 0.77, 0.33, 1);

    }
    #exams ul li:hover::after, #modules ul li:hover::after{
        opacity: 0.5
    }
    .exam-selected::after, .exam-selected{
        opacity: 1!important;
        background: #004969;
        color: white!important;
    }
    #exams ul li:hover, #modules ul li:hover{
        opacity: 0.75;

    }
    #examandmodule .boxi>div{
        display: flex;
        justify-content: space-between;
    }
    .disabled{
        opacity: 0.1!important;
        cursor: default!important;
    }
    .modules-selected{
        font-weight: 600;
        border-width: 3px;
        opacity: 1!important;
    }
    #examDetails{
        background: #e2eff2;
    }
    #examDetails>div{
        display: block!important;
    }
    #examDetails>div h6{
        font-weight: 600;
    }
    #dcto-alert{
        margin: 2%;
        font-size: 1em;
        margin-top: 15%;
        transition: .2s cubic-bezier(0.13, 0.77, 0.33, 1);
        color: white;
        background: #004972;
        padding: 0px 5px;
        border-radius: 3px;
        /* display: inline-block; */
        letter-spacing: 0.6px;

    }
    .dcto-appl{
        color: #004969;
        transform: scale(1.05);
        font-weight: 600;
    }
    #details-cont{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 0 5%;
    }
    #details-cont>div {
        width: 48%;
        margin: 3% 0;
    }
    #details-cont h6 {
        color: #004969;
    }
    #details-cont p{
        font-size: 1.3em
    }
    #exam-fin-det{
        font-size: 0.7em!important
    }
    input, button{
        font-family: var(--main-font);
    }
    #datesandtime>div{
        display: flex;
        justify-content: space-between;
    }
    #datesandtime>div>div{
        width: 30%
    }
    #datesandtime>div>div h4{
        height: 50px;
    }
    #datesandtime>div>div select, #datesandtime>div>div input{
        width: 66.6%;
        margin-top: 5%
    }
    .moduleDateDis{
        opacity: 0.3;
    }
    #tyc li{
        display: flex;
        align-items: center;
        margin: 3% 0;
        cursor: pointer;
        opacity: 0.9;
        transition: .2s cubic-bezier(0.13, 0.77, 0.33, 1);

    }
    #tyc li:hover{
        opacity: 1;
    }

    #tyc li span{
        font-size: 1em;
        margin-left: 10px;
    }
    #tyc li>div{
        width: 15px;
        height: 15px;
        border: 1px solid #004969;
        border-radius: 3px;
        cursor: pointer;
        position: relative;
        transition: .2s cubic-bezier(0.13, 0.77, 0.33, 1);
    }
    .li-yes>div{
        background: #004969;
    }
    .li-yes>div::after{
        content: '✓';
        color: white;
        font-size: 12px;
        left: 1px;
        top: -2px;
        position: absolute;
    }
    #submit-cont p, #pp-cont p{
        text-align: center;
        margin-top: -9%;
        width: 50%;
        margin: -9% auto 4%;
    }
    #pp-cont p{
        margin: auto auto 4%
    }
    #submit-cont button, #pp-cont button{
        background: white;
        border: 2px solid #004969;
        padding: 7px 25px;
        transition: .2s cubic-bezier(0.13, 0.77, 0.33, 1);
        color: #004969;
        margin: auto;
        display: block;
        font-weight: 600;
    }
    #submit-cont button:hover, #pp-cont button:hover{
        background: #004969;
        color: white;

    }
    #pp-cont{
        padding: 8%;
        background: #fafafa;
        display:none;
    }
    #pp-cont button{
        background: #fafafa;
    }

    #subtot-prc::before, #final-prc::before{
        content: 'U$D '
    }
    #countryRes{
        background: #fafafa;
        border: none;
        padding: 9px 25px;
        width: 100%;
    }
    #arg, #uy{
        display:none;
        color: #a50707;
        margin: 5% 5% 0;
    }
    .area-codes{
        width: 110px!important
    }
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}



.navbar-section{
    background: white;
    position: relative;
    margin-top: 0!important;
    padding-top: 40px!important;
    z-index: 9999;
}
.navbar-section>div{
    background: white;
    position: relative;
    margin-top: 0!important;
    z-index: 9999;
    padding-bottom: 20px!important;

}

#progreso-cont{
    position: fixed;
    background: white;
    width: 98%;
    left: 1%;
    top: 2%;
    z-index: 9;
}
#pasos-cont{
    display: flex;
    width: 90%;
    background: white;
    margin: auto;
    justify-content: space-between;
    box-shadow:0px 8px 18px 2px #ddd;
    padding: 13px 0 7px;
    position: relative;
}
#pasos-cont aside{
    width: 84%;
    position: absolute;
    height: 8px;
    left: 8%;
    top: 22px;
    /* background: #004972; */
    background: linear-gradient(to right, #004972 0%, #f0f0f0 0%)
}

#pasos-cont>div{
    width: 25%;
    text-align: center;
    margin: auto;
    z-index: 99;

}
#pasos-cont>div>div{
    cursor:pointer;
}
#pasos-cont>div>div>div{
    width: 26px;
    margin: auto;
    height: 26px;
    background: #f0f0f0;
    border-radius: 35px;
}
#pasos-cont>div>div span{
    font-size: 16px
}
#pasos-cont>div p{
    font-size: 16px;
    margin-top: 5px;
}

@media only screen and (max-width: 800px) {
    .cont80 {
        width: 90%;
    }
    .tit::before{
        bottom: 0%;
    }
    .boxi{
        padding: 7% 5%!important;
    }
    #examandmodule .boxi>div{
        display: block;
    }
    #exams, #modules{
        width: 100%
    }
    #exams ul>div {
        width: 48%;
    }
    #modules ul li, #exams ul li{
        width: 100%
    }
    #datesandtime>div{
        display: block;
    }
    #datesandtime>div>div{
        width: 100%;
        margin: 5vh 0
    }
    #datesandtime>div>div h4{ height: auto; margin-top: 25%}
    #datesandtime>div>div select, #datesandtime>div>div input {
        width: 100%;
    }
    #datesandtime>div>div:first-child h4{
        margin-top: 0;
    }
    #tyc li{
        justify-content: space-between;
    }
    #tyc li span{
        width: 85%;
        opacity: 0.9em;
    }
    #tyc li>div{
        width: 24px;
        height: 24px; 
    }
    #tyc li {
        margin: 12% 0;
    }
    #submit-cont p, #pp-cont p{
        width: 90%
    }
    #submit-cont{
        margin-top: -25%;
    }
    #pasos-cont{
        width: 100%
    }
    #pasos-cont>div p {
    font-size: 11px;
    margin-top: 5px;
    position: absolute;
    width: 16%;
    }
    #pasos-cont>div>div span {
    font-size: 14px;
    }
    #pasos-cont{
        padding-bottom: 50px;
    }

}
input[type="date"]
{
    display:block;
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    min-height: 1.
}

#paypal-button-container{
    display: flex;
    justify-content: center;
    align-items: center;
}
#dcto-appl{font-size: 1.3em;
    text-align: center;
    color: #004972;
    display: none;
    }
#subtot-prc-dcto::before,#final-prc-dcto::before{
    content: 'U$D';
}
.section-disabled *{
    cursor: not-allowed!important;
    opacity: 0.6!important;
}
    </style>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>

</head>

<body>

<div id="progreso-cont">
    <div>
        <div id="pasos-cont">
            <aside></aside>
            <div>
                <div class="anchor" data-link="#country">
                    <div>
                        <span>1</span>
                    </div>
                    <p>Select your country</p>
                </div>
            </div>
            <div>
                <div class="anchor" data-link="#examandmodule">
                    <div>
                        <span>2</span>
                    </div>
                    <p>Exam and modules</p>
                </div>
            </div> 
            <div>
                <div class="anchor" data-link="#dateandtime">
                    <div>
                        <span>3</span>
                    </div>
                    <p>Select date and time</p>
                </div>
            </div>
            <div>
                <div class="anchor" data-link="#personalinfo">
                    <div>
                        <span>4</span>
                    </div>
                    <p>Personal info</p>
                </div>
            </div>
            <div>
                <div class="anchor" data-link="#termsandconditions" onclick="return false;">
                    <div>
                        <span>5</span>
                    </div>
                    <p>Terms and conditions</p>
                </div>
            </div>
            <div>
                <div class="anchor" data-link="#payment">
                    <div>
                        <span>6</span>
                    </div>
                    <p>Payment</p>
                </div>
            </div> 
        
        </div>
    </div>
</div>

<!-- Navbar Section -->
<nav class="navbar-section container-fluid d-none d-sm-block" id="header">
<?php include 'header.html' ?>    
</nav>
<header>
    <h2>Book an exam</h2>
</header>



<div class="cont80" id="country">
    <div>
        <!-- <h4>01</h4> -->
        <h3 class="tit" data-num="01" id="tit_pais">Please select your country of residence</h3>
    </div>
    <div class="boxi">
        <div>
        <select id="countryRes" name="countryRes">
            <option value="">Choose your country</option>
            <option value="Afganistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bonaire">Bonaire</option>
            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
            <option value="Brunei">Brunei</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Canary Islands">Canary Islands</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Channel Islands">Channel Islands</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos Island">Cocos Island</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cote DIvoire">Cote DIvoire</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Curaco">Curacao</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="East Timor">East Timor</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands">Falkland Islands</option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Ter">French Southern Ter</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Great Britain">Great Britain</option>
            <option value="Greece">Greece</option>
            <option value="Greenland">Greenland</option>
            <option value="Grenada">Grenada</option>
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guinea">Guinea</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Hawaii">Hawaii</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="Indonesia">Indonesia</option>
            <option value="India">India</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Isle of Man">Isle of Man</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea North">Korea North</option>
            <option value="Korea Sout">Korea South</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Laos">Laos</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libya">Libya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macau">Macau</option>
            <option value="Macedonia">Macedonia</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Malawi">Malawi</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Martinique">Martinique</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico">Mexico</option>
            <option value="Midway Islands">Midway Islands</option>
            <option value="Moldova">Moldova</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Nambia">Nambia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherland Antilles">Netherland Antilles</option>
            <option value="Netherlands">Netherlands (Holland, Europe)</option>
            <option value="Nevis">Nevis</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk Island">Norfolk Island</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau Island">Palau Island</option>
            <option value="Palestine">Palestine</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Phillipines">Philippines</option>
            <option value="Pitcairn Island">Pitcairn Island</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Republic of Montenegro">Republic of Montenegro</option>
            <option value="Republic of Serbia">Republic of Serbia</option>
            <option value="Reunion">Reunion</option>
            <option value="Romania">Romania</option>
            <option value="Russia">Russia</option>
            <option value="Rwanda">Rwanda</option>
            <option value="St Barthelemy">St Barthelemy</option>
            <option value="St Eustatius">St Eustatius</option>
            <option value="St Helena">St Helena</option>
            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
            <option value="St Lucia">St Lucia</option>
            <option value="St Maarten">St Maarten</option>
            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
            <option value="Saipan">Saipan</option>
            <option value="Samoa">Samoa</option>
            <option value="Samoa American">Samoa American</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syria">Syria</option>
            <option value="Tahiti">Tahiti</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Thailand">Thailand</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Erimates">United Arab Emirates</option>
            <option value="United States of America">United States of America</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Vatican City State">Vatican City State</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Vietnam</option>
            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
            <option value="Wake Island">Wake Island</option>
            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
            <option value="Yemen">Yemen</option>
            <option value="Zaire">Zaire</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </div>
        <p id="arg">Please contact Path Examinations Latin America at argentina@pathexaminations.com to book an exam in your local currency.</p>
        <p id="uy">Please contact Path Examinations Latin America at uruguay@pathexaminations.com to book an exam in your local currency.</p>
    </div>
</div>

<div class="cont80" id="examandmodule">
    <div>
        <!-- <h4>01</h4> -->
        <h3 class="tit" data-num="02" id="tit_selectExam">Select and exam an its module</h3>
    </div>
    <div class="boxi section-disabled" >
        <div>
            <div id="exams">
                <h5>Select exam:</h5>
                <ul>
                    <div>
                        <li data-price="40" class="exam speaking">A1- Speaking Performance Assessment (SPA) level I</li>
                        <li data-price="40" class="exam speaking">A1 Speaking Performance Assessment (SPA) level II</li>
                        <li data-price="40" class="exam speaking">A1+ Speaking Performance Assessment (SPA) level III</li>
                    </div>
                    <div>
                        <li data-price="40" class="exam">A1- Entry</li>
                        <li data-price="40" class="exam">A1 Access</li>
                        <li data-price="40" class="exam">A1+ Achiever</li>
                        <li data-price="50" class="exam">A2 Preliminary</li>
                        <li data-price="50" class="exam">A2+ Elementary</li>
                        <li data-price="60" class="exam">B1 Progress</li>
                        <li data-price="80" class="exam">B2 Competency</li>
                        <li data-price="80" class="exam">B2+ Forward</li>
                    </div>
                </ul>
            </div>
            <div id="modules">
                <h5>Select module(s):</h5>
                <ul>
                    <li id="selectSpeaking" class="module">Speaking</li>
                    <li id="selectListening" class="module no-spk">Listening</li>
                    <li id="selectRandW" class="module no-spk">Reading and writing</li>
                </ul>
                <div>
                    <p id="dcto-alert">Special offer! If 3 modules are ordered, you have 1 module for free.</p>
                    <p id="dcto-appl"><span><del id="subtot-prc-dcto" style="display: inline;"></del> <span id="final-prc-dcto"></span></span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="examDetails" class="boxi">
        <div>
            <h5>Exam details:</h5>
            <div id="details-cont">
                <div>
                    <h6>Exam fee:</h6>
                    <p><span><del id="subtot-prc">0</del> <span id="final-prc">0 </span></span></p>
                    <p id="exam-fin-det"><b></b> | <span></span></p>
                </div>
                <div>
                    <h6>Exam type:</h6><p>Online exam</p>
                </div>
                <div>
                    <h6>Certificate:</h6><p>Digital certificate</p>
                </div>
                <div>
                    <h6>Results:</h6><p>Issued 10 business days after the exam</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="cont80" id="dateandtime">
    <div>
        <!-- <h4>01</h4> -->
        <h3 class="tit" data-num="03" id="tit_pais">Select a date and time</h3>
    </div>
    <div class="boxi section-disabled">
        <div id="datesandtime">
            <div>
                <div id="speakingDate"  class="moduleDateDis">
                    <h4>Speaking module</h4>
                   
                    <div id="calen-cont-speak">

                    </div>
                    <div>
                        <select name="" id="speakingTime">
                            <option value="" hidden selected>Choose a time</option>
                            <option value="10:00 UK">10:00 UK</option>
                            <option value="11:00 UK">11:00 UK</option>
                            <option value="12:00 UK">12:00 UK</option>
                            <option value="13:00 UK">13:00 UK</option>
                            <option value="14:00 UK">14:00 UK</option>
                            <option value="15:00 UK">15:00 UK</option>
                            <option value="16:00 UK">16:00 UK</option>
                            <option value="17:00 UK">17:00 UK</option>
                            <option value="18:00 UK">18:00 UK</option>
                            <option value="19:00 UK">19:00 UK</option>
                        </select>
                    </div>
                    <p id="horaSpeaking"></p>
                </div>
                <div id="listeningDate"  class="moduleDateDis">
                    <h4>Listening module</h4>
                    <div id="calen-cont-listen">

                    </div>
                    <div>
                        <select name="" id="listeningTime">
                            <option value="" hidden selected>Choose a time</option>
                            <option value="00:00 UK">00:00 UK</option>
                            <option value="01:00 UK">01:00 UK</option>
                            <option value="02:00 UK">02:00 UK</option>
                            <option value="03:00 UK">03:00 UK</option>
                            <option value="04:00 UK">04:00 UK</option>
                            <option value="05:00 UK">05:00 UK</option>
                            <option value="06:00 UK">06:00 UK</option>
                            <option value="07:00 UK">07:00 UK</option>
                            <option value="08:00 UK">08:00 UK</option>
                            <option value="09:00 UK">09:00 UK</option>
                            <option value="10:00 UK">10:00 UK</option>
                            <option value="11:00 UK">11:00 UK</option>
                            <option value="12:00 UK">12:00 UK</option>
                            <option value="13:00 UK">13:00 UK</option>
                            <option value="14:00 UK">14:00 UK</option>
                            <option value="15:00 UK">15:00 UK</option>
                            <option value="16:00 UK">16:00 UK</option>
                            <option value="17:00 UK">17:00 UK</option>
                            <option value="18:00 UK">18:00 UK</option>
                            <option value="19:00 UK">19:00 UK</option>
                            <option value="20:00 UK">20:00 UK</option>
                            <option value="21:00 UK">21:00 UK</option>
                            <option value="22:00 UK">22:00 UK</option>
                            <option value="23:00 UK">23:00 UK</option>
                        </select>
                        <!-- <input type="time" /> -->
                    </div>
                    <p id="horaListening"></p>

                </div>
                <div id="randwDate" class="moduleDateDis">
                    <h4>Reading and writing module</h4>
                        <div id="calen-cont-RandW">

                        </div>
                        <div>
                        <select name="" id="RandWTime">
                            <option value="" hidden selected>Choose a time</option>
                            <option value="00:00 UK">00:00 UK</option>
                            <option value="01:00 UK">01:00 UK</option>
                            <option value="02:00 UK">02:00 UK</option>
                            <option value="03:00 UK">03:00 UK</option>
                            <option value="04:00 UK">04:00 UK</option>
                            <option value="05:00 UK">05:00 UK</option>
                            <option value="06:00 UK">06:00 UK</option>
                            <option value="07:00 UK">07:00 UK</option>
                            <option value="08:00 UK">08:00 UK</option>
                            <option value="09:00 UK">09:00 UK</option>
                            <option value="10:00 UK">10:00 UK</option>
                            <option value="11:00 UK">11:00 UK</option>
                            <option value="12:00 UK">12:00 UK</option>
                            <option value="13:00 UK">13:00 UK</option>
                            <option value="14:00 UK">14:00 UK</option>
                            <option value="15:00 UK">15:00 UK</option>
                            <option value="16:00 UK">16:00 UK</option>
                            <option value="17:00 UK">17:00 UK</option>
                            <option value="18:00 UK">18:00 UK</option>
                            <option value="19:00 UK">19:00 UK</option>
                            <option value="20:00 UK">20:00 UK</option>
                            <option value="21:00 UK">21:00 UK</option>
                            <option value="22:00 UK">22:00 UK</option>
                            <option value="23:00 UK">23:00 UK</option>
                        </select>
                    </div>
                    <p id="horaRandW"></p>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="cont80" id="personalinfo">
    <div>
        <!-- <h4>01</h4> -->
        <h3 class="tit" data-num="04" id="tit_pais">Personal details</h3>
    </div>
    <div class="boxi section-disabled">
        <div>
            <h5>Personal details:</h5>
            <form action="">
                <div class="affiliate" id="affiliate">

                <div class="form-section affiliate">

                <div class="inputs-row">

                    
                    <div class="input-cont">
                        <div class="form-label">Name<span class="required">*</span></div>
                        <input type="text" id="name" class="form-input">
                    </div>
                    
                    <div class="input-cont">
                        <div class="form-label">Surname<span class="required">*</span></div>
                        <input type="text" id="surname" class="form-input">
                    </div>
                    
                    
                    <div class="input-cont">
                            <div class="form-label">ID number<span class="required">*</span></div>
                            <input type="text" id="id-num" class="form-input non-required">
                    </div>
                    
                </div>


                <div class="inputs-row" style="margin-bottom: 15px">

                    <div class="input-cont">
                        <div class="form-label">Date of birth<span class="required">*</span></div>
                        <input type="date" id="birthdate" class="form-input">
                    </div>

                    <div class="input-cont">
                            <div class="form-label">Email<span class="required">*</span></div>
                            <input type="mail" id="email" class="form-input">
                    </div>
                    
                    <div class="input-cont">
                            <div class="form-label">Mobile phone number<span class="required">*</span></div>
                            <div style="display:flex">
                                <select class="form-input area-codes" id="area-code">
                                    <option value=""> -- </option>
                                    ${html_codes}
                                </select>
                                <input type="number" id="phone" class="form-input">
                            </div>
                    </div>
                    
                    

                </div>

                <div class="inputs-row" style="margin-bottom: 15px">

                    <div class="input-cont">
                            <div class="form-label">Country<span class="required">*</span></div>
                            <select id="country" name="country">
                                <option value="">--</option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                    </div>

                    <div class="input-cont">
                        <div class="form-label">State/County/Province<span class="required">*</span></div>
                        <input type="text" id="state" class="form-input">
                    </div>
                    <div class="input-cont">
                        <div class="form-label">City/Town<span class="required">*</span></div>
                        <input type="text" id="city" class="form-input">
                    </div>

                </div>

                <div class="inputs-row">

                    <div class="input-cont">
                        <div class="form-label">Address<span class="required">*</span></div>
                        <input type="text" id="address" class="form-input">
                    </div>

                    <div class="input-cont">
                        <div class="form-label">Postcode/Zipcode<span class="required">*</span></div>
                        <input type="text" id="zipcode" class="form-input">
                    </div>
                </div>

                <div class="err-msj-personal-details"></div>

                </div>
            </div>
            </form>
            
        </div>
    </div>
</div>


<div class="cont80" id="termsandconditions">
    <div>
        <!-- <h4>01</h4> -->
        <h3 class="tit" data-num="05" id="tit_pais">Terms and conditions</h3>
    </div>
    <div class="boxi section-disabled">
        <div id="tyc">
            <ul>
                <li><div></div><span>The information provided is correct, and if the candidate is under 18, parental consent has been provided.</span></li>
                <li><div></div><span>I have read and understood the Path Examinations <a>Policies and procedures</a> and <a>Terms and conditions</a>.</span></li>
                <li><div></div><span>I agree to receive news and offers.</span></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="cont80" id="payment">
    <div id="submit-cont">
        <p>Upon submission, you will be provided with a payment button to complete your registration.</p>
        <button>SUBMIT</button>
    </div>
</div>


<!-- <div class="cont80"> -->
    <div id="pp-cont">
        <p>Thank you! You can now proceed with the payment to complete your order.</p>
        <div id="paypal-button-container"></div>
    </div>
<!-- </div> -->





<!-- Footer Section -->
<footer class="footer-section" id="footer">
<div class="container-fluid">
    <div class="divider"></div>
    <div class="row footer-content">
        <div class="col-12 col-md-6 col-lg-4">
            <img class="brand-logo" src="assets/img/logos/path_logo.png" alt="University Logo">
            <div class="contact-links">
                <div class="link">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>167-169 Great Portland St., 5th Floor<br>Westminster, London W1W 5PF<br>United Kingdom</p>
                </div>
                <div class="link">
                    <i class="fas fa-envelope"></i>
                    <p>info@pathexaminations.com</p>
                </div>
                <div class="link">
                    <i class="fas fa-phone"></i>
                    <p>+44 020 3468 2534</p>
                </div>
                <div class="link social-icons">
                    <a target="_blank" href="https://www.facebook.com/pathexams"><i
                            class="fab fa-facebook-square"></i></a>
                    <a target="_blank" href="https://www.instagram.com/pathexams"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
            <h5>Links</h5>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="meet-path.html">Meet Path</a></li>
                <li><a href="teachers-institutions.html">Teachers and institutions</a></li>
                <li><a href="our-examinations.html">Our examinations</a></li>
                <li><a href="news-and-events.php">News and events</a></li>
            </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
            <h5>Information</h5>
            <ul>
                <li><a href="#">Job opportunities</a></li>
                <li><a href="#">Give us feedback</a></li>
            </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
            <h5>Policies</h5>
            <ul>
                <li><a href="privacy-policy.html">Privacy policy</a></li>
                <li><a href="terms-and-conditions.html">Terms and conditions</a></li>
                <li><a href="cookies-policy.html">Cookies policy</a></li>
            </ul>
        </div>
        <!-- <div class="col-12 col-md-6 col-lg-2 d-flex footer__flag-container justify-content-center">
            <div class="footer__e-flag"><img src="assets\img\icons\Flags\uk.png" alt=""></div>
            <div class="footer__e-flag"><img src="assets\img\icons\Flags\spanish.png" alt=""></div> 
        </div> -->
    </div>


</div>

<div class="copyright">
    <div class="container-fluid">
        <p>Copyright © <a class="footer-a" href="assets\img\University\About-us-1\Path-Examinations-Ltd.pdf">Path Examinations Ltd.</a> 2021 | London, United Kingdom</p>
    </div>
    <!-- Scroll Top Start -->
    <a id="scroll-top" class="d-flex justify-content-center align-items-center">
        <i class="flaticon-up-arrow"></i>
    </a>
</div>

<script>
    $("#scroll-top").click(function() {
        $('html,body').animate({
            scrollTop: $(".header").offset().top},
            'slow');
    });

    // Funcion que levanta los datos del form cuando cliquean en enviar
    $(document).on('click', '#send_message', function(e){
        e.preventDefault()

        var name = $('#franja-contacto #name').val()
        var email = $('#franja-contacto #email').val()
        var message = $('#franja-contacto #message').val()

        $.ajax({
            url:'api.php?func=enviar_mail',
            method:'POST',
            cache: false,
            data:{
                name,
                email,
                message
            },
            dataType:'text',
            success:function(data){
                
                console.log(data)
                $('#franja-contacto #name').val('')
                $('#franja-contacto #email').val('')
                $('#franja-contacto #message').val('')
                $('#form-msj').html('Thank you!')
                $('#form-msj').slideDown(200)
            }
        });


    })

    
</script>
    
</footer>
<div>

</div>


    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!-- JQuery Link -->
    <script src="assets/js/vander/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vander/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/vander/popper.min.js"></script>
    <script src="assets/js/vander/bootstrap.min.js"></script>
    <script src="assets/js/vander/owl.carousel.min.js"></script>
    <script src="assets/js/vander/slick.min.js"></script>
    <script src="assets/js/vander/waypoints.min.js"></script>
    <script src="assets/js/vander/jQuery.rcounter.js"></script>

    <!-- Google maps geolocation -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&callback=initMap"
        async defer></script> -->
    <!-- Custom Script -->
    <script src="assets/js/map.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/toggler.js"></script>
</body>
<script>

var global_pedido;

$(document).ready(function() {
    setTimeout(() => {
        
        $('#calen-cont-speak').load('speakingCalendar.html')
        $('#calen-cont-listen').load('listeningCalendar.html')
        $('#calen-cont-RandW').load('RandWCalendar.html')
    }, 300);
})



$(document).ready(function() {



$( "#countryRes" ).change(function() {
    if ($( "#countryRes" ).val() == "Argentina" || $( "#countryRes" ).val() == "Uruguay") {
        $('body').css('overflow-y','hidden')
    }else{
        $('body').css('overflow-y','auto')
        $('html, body').animate({
            scrollTop: $("#examandmodule").offset().top - 100
        }, 400);
        $('#examandmodule .boxi').removeClass('section-disabled')
    }
    if ($( "#countryRes" ).val() == "Argentina") {
        $('#arg').slideDown()
    }else{
        $('#arg').slideUp()
    }
    if ($( "#countryRes" ).val() == "Uruguay") {
        $('#uy').slideDown()
    }else{
        $('#uy').slideUp()
    }

});


$('.exam').click(function() {
    // $('.exam').removeClass('exam-selected')

    if ( $(this).hasClass('exam-selected') ) {
        $(this).removeClass('exam-selected')
        $('.module').removeClass('modules-selected')
        $('.module').removeClass('disabled')
        
    }else{
        $('.exam').removeClass('exam-selected')
        $(this).addClass('exam-selected')
        // console.log($('.exam-selected').text())
    }
        $('.module').removeClass('modules-selected')
        
            $('#speakingDate').addClass('moduleDateDis')
            $('#speakingDate input, #speakingDate select').attr("disabled", true);
            $('#listeningDate').addClass('moduleDateDis')
            $('#listeningDate input, #listeningDate select').attr("disabled", true);
            $('#randwDate').addClass('moduleDateDis')
            $('#randwDate input, #randwDate select').attr("disabled", true);
            actualizarCarrito()
    if($(this).hasClass('speaking')){
        $('.no-spk').addClass('disabled')
    }else{
        $('.no-spk').removeClass('disabled')
    }
    countModules()

})

$(document).on('change', '#datesandtime input, #datesandtime select', function(){
    actualizarCarrito()
})

$('.module').click(function() {
    if ($(".exam-selected")[0]){
        if($(this).hasClass('disabled')){
            return false
        }
        if ( $(this).hasClass('modules-selected') ) {
            
            $(this).removeClass('modules-selected')
        }else{
            $('.modules').removeClass('modules-selected')
            $('#speakingDate').addClass('moduleDateDis')
            $(this).addClass('modules-selected')
        }
        countModules()
        disableDates()
        actualizarCarrito(modules)

    }else{
        alert('First choose an exam')
    }
})

function countModules(){
    var numItems = $('.modules-selected').length
    if (numItems == 3 ) {
        $('#dcto-alert').addClass('dcto-appl')
    }else{
        $('#dcto-alert').removeClass('dcto-appl')
    }
    if (numItems > 0) {
        $('#dateandtime .boxi').removeClass('section-disabled')
    }else{
        $('#dateandtime .boxi').addClass('section-disabled')

    }
}


function disableDates() {
    $('.moduleDateDis input, .moduleDateDis select').attr("disabled", true);
    if ($('#selectSpeaking').hasClass('modules-selected')) {
        $('#speakingDate').removeClass('moduleDateDis')
        $('#speakingDate input, #speakingDate select').attr("disabled", false);
    }else{
        $('#speakingDate').addClass('moduleDateDis')
        $('#speakingDate input, #speakingDate select').attr("disabled", true);
    }
    if ($('#selectListening').hasClass('modules-selected')) {
        $('#listeningDate').removeClass('moduleDateDis')
        $('#listeningDate input, #listeningDate select').attr("disabled", false);
    }else{
        $('#listeningDate').addClass('moduleDateDis')
        $('#listeningDate input, #listeningDate select').attr("disabled", true);
    }
    if ($('#selectRandW').hasClass('modules-selected')) {
        $('#randwDate').removeClass('moduleDateDis')
        $('#randwDate input, #randwDate select').attr("disabled", false);
    }else{
        $('#randwDate').addClass('moduleDateDis')
        $('#randwDate input, #randwDate select').attr("disabled", true);
    }
}
disableDates();


$('#tyc li').click(function() {
    // $('.exam').removeClass('exam-selected')

    if ( $(this).hasClass('li-yes') ) {
        $(this).removeClass('li-yes')
    }else{
        $(this).addClass('li-yes')
    }
})


function actualizarCarrito(){

    var modules = [];
    var modules_name = [];
    $('.modules-selected').each(function(){

        var module_selector = ''

        if($(this).html()=='Speaking'){
            module_selector = '#speakingDate'
        }else if($(this).html()=='Listening'){
            module_selector = '#listeningDate'
        }else if($(this).html()=='Reading and writing'){
            module_selector = '#randwDate'
        }
        var module_date = $(module_selector + ' input').val()
        var module_time = $(module_selector + ' select').val()

        var module = {"module": $(this).text(), "date": module_date, "time": module_time}
        modules.push(module);
        modules_name.push( $(this).text() );

    })

    prc_module = parseInt($('.exam-selected').attr('data-price'));
    sub_tot = prc_module * modules.length;

    if (modules.length == 3) {
        $('#subtot-prc').css('display','inline')
        $('#subtot-prc').text(sub_tot)
        $('#subtot-prc-dcto').text(sub_tot)
        final_price = prc_module*2;
        $('#final-prc').text(final_price)
        $('#final-prc-dcto').text(final_price)
        $('#dcto-appl').fadeIn()

    }else{
        $('#dcto-appl').fadeOut()
        $('#subtot-prc').css('display','none');
        final_price = sub_tot;
        $('#final-prc').text(final_price);
        $('#subtot-prc-dcto, #final-prc-dcto').text('')

    }

    $('#exam-fin-det b').text($('.exam-selected').text())

    
    var detalle_pedido = {
        exam: $('.exam-selected').text(),
        module: modules,
        price_module: prc_module,
        final_price: final_price
    }

    global_pedido = detalle_pedido

    console.log( modules_name )
    $('#exam-fin-det span').text(modules_name.join(' - '))

}


    $('#submit-cont button').click(function() {
    var todoOk = 'si';
    if( $('#countryRes').val() == '' ){
        alert('Please select your country of residence')
        todoOk = 'no';
    }
    if( $('.modules-selected').length == 0 || $('.modules-selected').length == 0 ){
        alert('Select and exam an its module')
        todoOk = 'no';
    }
    // if ($('#speakingDate').val('') || $('#listeningDate').val('') || $('#randwDate').val('') ) {
    //     console.log('sdfsdf')
    // }
    $('#datesandtime>div>div').each(function() {
        if (!$(this).hasClass('moduleDateDis')) {
            let input = $(this).find('input');
            let select = $(this).find('select');
            if (input.val() == "" || select.val() == "" ) {
                alert('Select a date and time')
                todoOk = 'no';
                return false;

            }
        }
    })
    var x = 0;
    $('#affiliate input').each(function() {
        if ($(this).val() == "") {
            alert('Complete your personal details')
            todoOk = 'no';
            return false;
        }
    })
    $('#tyc li').each(function() {
        if (!$(this).hasClass('li-yes')) {
            alert('Accept terms and conditions')
            todoOk = 'no';
            return false;
        }
    })

    if (todoOk == 'si') {
        $('#pp-cont').slideDown()
        $("html, body").delay(150).animate({
            scrollTop: $('#pp-cont').offset().top 
        }, 700);

        $('.cont80').slideUp()

        // Levantamos los campos
        var name = $('#name').val()
        var surname = $('#surname').val()
        var id_number = $('#id-num').val()
        var birthdate = $('#birthdate').val()
        var email = $('#email').val()
        var area_code = $('#area-code').val()
        var phone = $('#phone').val()
        var country = $('#country').val()
        var state = $('#state').val()
        var city = $('#city').val()
        var address = $('#address').val()
        var zipcode = $('#zipcode').val()

        // Hacemos el init_checkout
        $.ajax({
            url:'api.php?func=init_checkout',
            method:'POST',
            cache: false,
            data:{
                name,
                surname,
                id_number,
                birthdate,
                email,
                area_code,
                phone,
                country,
                state,
                city,
                address,
                zipcode,
                detalle_pedido: JSON.stringify(global_pedido)
            },
            dataType:'text',
            success:function(data){
                console.log('data')
                console.log(data)
                data = JSON.parse(data)
                // Mostramos el boton de paypal
                if(data.error==0){
                    $('#progreso-cont').remove()
                    render_paypal_button(data.id)
                }
            }
        });


    }
    
})




var global_area_codes = [{"name":"--","dial_code":"","code":"--"},{"name":"Afghanistan","dial_code":"+93","code":"AF"},{"name":"Albania","dial_code":"+355","code":"AL"},{"name":"Algeria","dial_code":"+213","code":"DZ"},{"name":"AmericanSamoa","dial_code":"+1 684","code":"AS"},{"name":"Andorra","dial_code":"+376","code":"AD"},{"name":"Angola","dial_code":"+244","code":"AO"},{"name":"Anguilla","dial_code":"+1 264","code":"AI"},{"name":"Antigua and Barbuda","dial_code":"+1268","code":"AG"},{"name":"Argentina","dial_code":"+54","code":"AR"},{"name":"Armenia","dial_code":"+374","code":"AM"},{"name":"Aruba","dial_code":"+297","code":"AW"},{"name":"Australia","dial_code":"+61","code":"AU"},{"name":"Austria","dial_code":"+43","code":"AT"},{"name":"Azerbaijan","dial_code":"+994","code":"AZ"},{"name":"Bahamas","dial_code":"+1 242","code":"BS"},{"name":"Bahrain","dial_code":"+973","code":"BH"},{"name":"Bangladesh","dial_code":"+880","code":"BD"},{"name":"Barbados","dial_code":"+1 246","code":"BB"},{"name":"Belarus","dial_code":"+375","code":"BY"},{"name":"Belgium","dial_code":"+32","code":"BE"},{"name":"Belize","dial_code":"+501","code":"BZ"},{"name":"Benin","dial_code":"+229","code":"BJ"},{"name":"Bermuda","dial_code":"+1 441","code":"BM"},{"name":"Bhutan","dial_code":"+975","code":"BT"},{"name":"Bosnia and Herzegovina","dial_code":"+387","code":"BA"},{"name":"Botswana","dial_code":"+267","code":"BW"},{"name":"Brazil","dial_code":"+55","code":"BR"},{"name":"British Indian Ocean Territory","dial_code":"+246","code":"IO"},{"name":"Bulgaria","dial_code":"+359","code":"BG"},{"name":"Burkina Faso","dial_code":"+226","code":"BF"},{"name":"Burundi","dial_code":"+257","code":"BI"},{"name":"Cambodia","dial_code":"+855","code":"KH"},{"name":"Cameroon","dial_code":"+237","code":"CM"},{"name":"Canada","dial_code":"+1","code":"CA"},{"name":"Cape Verde","dial_code":"+238","code":"CV"},{"name":"Cayman Islands","dial_code":"+ 345","code":"KY"},{"name":"Central African Republic","dial_code":"+236","code":"CF"},{"name":"Chad","dial_code":"+235","code":"TD"},{"name":"Chile","dial_code":"+56","code":"CL"},{"name":"China","dial_code":"+86","code":"CN"},{"name":"Christmas Island","dial_code":"+61","code":"CX"},{"name":"Colombia","dial_code":"+57","code":"CO"},{"name":"Comoros","dial_code":"+269","code":"KM"},{"name":"Congo","dial_code":"+242","code":"CG"},{"name":"Cook Islands","dial_code":"+682","code":"CK"},{"name":"Costa Rica","dial_code":"+506","code":"CR"},{"name":"Croatia","dial_code":"+385","code":"HR"},{"name":"Cuba","dial_code":"+53","code":"CU"},{"name":"Cyprus","dial_code":"+537","code":"CY"},{"name":"Czech Republic","dial_code":"+420","code":"CZ"},{"name":"Denmark","dial_code":"+45","code":"DK"},{"name":"Djibouti","dial_code":"+253","code":"DJ"},{"name":"Dominica","dial_code":"+1 767","code":"DM"},{"name":"Dominican Republic","dial_code":"+1 849","code":"DO"},{"name":"Ecuador","dial_code":"+593","code":"EC"},{"name":"Egypt","dial_code":"+20","code":"EG"},{"name":"El Salvador","dial_code":"+503","code":"SV"},{"name":"Equatorial Guinea","dial_code":"+240","code":"GQ"},{"name":"Eritrea","dial_code":"+291","code":"ER"},{"name":"Estonia","dial_code":"+372","code":"EE"},{"name":"Ethiopia","dial_code":"+251","code":"ET"},{"name":"Faroe Islands","dial_code":"+298","code":"FO"},{"name":"Fiji","dial_code":"+679","code":"FJ"},{"name":"Finland","dial_code":"+358","code":"FI"},{"name":"France","dial_code":"+33","code":"FR"},{"name":"French Guiana","dial_code":"+594","code":"GF"},{"name":"French Polynesia","dial_code":"+689","code":"PF"},{"name":"Gabon","dial_code":"+241","code":"GA"},{"name":"Gambia","dial_code":"+220","code":"GM"},{"name":"Georgia","dial_code":"+995","code":"GE"},{"name":"Germany","dial_code":"+49","code":"DE"},{"name":"Ghana","dial_code":"+233","code":"GH"},{"name":"Gibraltar","dial_code":"+350","code":"GI"},{"name":"Greece","dial_code":"+30","code":"GR"},{"name":"Greenland","dial_code":"+299","code":"GL"},{"name":"Grenada","dial_code":"+1 473","code":"GD"},{"name":"Guadeloupe","dial_code":"+590","code":"GP"},{"name":"Guam","dial_code":"+1 671","code":"GU"},{"name":"Guatemala","dial_code":"+502","code":"GT"},{"name":"Guinea","dial_code":"+224","code":"GN"},{"name":"Guinea-Bissau","dial_code":"+245","code":"GW"},{"name":"Guyana","dial_code":"+595","code":"GY"},{"name":"Haiti","dial_code":"+509","code":"HT"},{"name":"Honduras","dial_code":"+504","code":"HN"},{"name":"Hungary","dial_code":"+36","code":"HU"},{"name":"Iceland","dial_code":"+354","code":"IS"},{"name":"India","dial_code":"+91","code":"IN"},{"name":"Indonesia","dial_code":"+62","code":"ID"},{"name":"Iraq","dial_code":"+964","code":"IQ"},{"name":"Ireland","dial_code":"+353","code":"IE"},{"name":"Israel","dial_code":"+972","code":"IL"},{"name":"Italy","dial_code":"+39","code":"IT"},{"name":"Jamaica","dial_code":"+1 876","code":"JM"},{"name":"Japan","dial_code":"+81","code":"JP"},{"name":"Jordan","dial_code":"+962","code":"JO"},{"name":"Kazakhstan","dial_code":"+7 7","code":"KZ"},{"name":"Kenya","dial_code":"+254","code":"KE"},{"name":"Kiribati","dial_code":"+686","code":"KI"},{"name":"Kuwait","dial_code":"+965","code":"KW"},{"name":"Kyrgyzstan","dial_code":"+996","code":"KG"},{"name":"Latvia","dial_code":"+371","code":"LV"},{"name":"Lebanon","dial_code":"+961","code":"LB"},{"name":"Lesotho","dial_code":"+266","code":"LS"},{"name":"Liberia","dial_code":"+231","code":"LR"},{"name":"Liechtenstein","dial_code":"+423","code":"LI"},{"name":"Lithuania","dial_code":"+370","code":"LT"},{"name":"Luxembourg","dial_code":"+352","code":"LU"},{"name":"Madagascar","dial_code":"+261","code":"MG"},{"name":"Malawi","dial_code":"+265","code":"MW"},{"name":"Malaysia","dial_code":"+60","code":"MY"},{"name":"Maldives","dial_code":"+960","code":"MV"},{"name":"Mali","dial_code":"+223","code":"ML"},{"name":"Malta","dial_code":"+356","code":"MT"},{"name":"Marshall Islands","dial_code":"+692","code":"MH"},{"name":"Martinique","dial_code":"+596","code":"MQ"},{"name":"Mauritania","dial_code":"+222","code":"MR"},{"name":"Mauritius","dial_code":"+230","code":"MU"},{"name":"Mayotte","dial_code":"+262","code":"YT"},{"name":"Mexico","dial_code":"+52","code":"MX"},{"name":"Monaco","dial_code":"+377","code":"MC"},{"name":"Mongolia","dial_code":"+976","code":"MN"},{"name":"Montenegro","dial_code":"+382","code":"ME"},{"name":"Montserrat","dial_code":"+1664","code":"MS"},{"name":"Morocco","dial_code":"+212","code":"MA"},{"name":"Myanmar","dial_code":"+95","code":"MM"},{"name":"Namibia","dial_code":"+264","code":"NA"},{"name":"Nauru","dial_code":"+674","code":"NR"},{"name":"Nepal","dial_code":"+977","code":"NP"},{"name":"Netherlands","dial_code":"+31","code":"NL"},{"name":"Netherlands Antilles","dial_code":"+599","code":"AN"},{"name":"New Caledonia","dial_code":"+687","code":"NC"},{"name":"New Zealand","dial_code":"+64","code":"NZ"},{"name":"Nicaragua","dial_code":"+505","code":"NI"},{"name":"Niger","dial_code":"+227","code":"NE"},{"name":"Nigeria","dial_code":"+234","code":"NG"},{"name":"Niue","dial_code":"+683","code":"NU"},{"name":"Norfolk Island","dial_code":"+672","code":"NF"},{"name":"Northern Mariana Islands","dial_code":"+1 670","code":"MP"},{"name":"Norway","dial_code":"+47","code":"NO"},{"name":"Oman","dial_code":"+968","code":"OM"},{"name":"Pakistan","dial_code":"+92","code":"PK"},{"name":"Palau","dial_code":"+680","code":"PW"},{"name":"Panama","dial_code":"+507","code":"PA"},{"name":"Papua New Guinea","dial_code":"+675","code":"PG"},{"name":"Paraguay","dial_code":"+595","code":"PY"},{"name":"Peru","dial_code":"+51","code":"PE"},{"name":"Philippines","dial_code":"+63","code":"PH"},{"name":"Poland","dial_code":"+48","code":"PL"},{"name":"Portugal","dial_code":"+351","code":"PT"},{"name":"Puerto Rico","dial_code":"+1 939","code":"PR"},{"name":"Qatar","dial_code":"+974","code":"QA"},{"name":"Romania","dial_code":"+40","code":"RO"},{"name":"Rwanda","dial_code":"+250","code":"RW"},{"name":"Samoa","dial_code":"+685","code":"WS"},{"name":"San Marino","dial_code":"+378","code":"SM"},{"name":"Saudi Arabia","dial_code":"+966","code":"SA"},{"name":"Senegal","dial_code":"+221","code":"SN"},{"name":"Serbia","dial_code":"+381","code":"RS"},{"name":"Seychelles","dial_code":"+248","code":"SC"},{"name":"Sierra Leone","dial_code":"+232","code":"SL"},{"name":"Singapore","dial_code":"+65","code":"SG"},{"name":"Slovakia","dial_code":"+421","code":"SK"},{"name":"Slovenia","dial_code":"+386","code":"SI"},{"name":"Solomon Islands","dial_code":"+677","code":"SB"},{"name":"South Africa","dial_code":"+27","code":"ZA"},{"name":"South Georgia and the South Sandwich Islands","dial_code":"+500","code":"GS"},{"name":"Spain","dial_code":"+34","code":"ES"},{"name":"Sri Lanka","dial_code":"+94","code":"LK"},{"name":"Sudan","dial_code":"+249","code":"SD"},{"name":"Suriname","dial_code":"+597","code":"SR"},{"name":"Swaziland","dial_code":"+268","code":"SZ"},{"name":"Sweden","dial_code":"+46","code":"SE"},{"name":"Switzerland","dial_code":"+41","code":"CH"},{"name":"Tajikistan","dial_code":"+992","code":"TJ"},{"name":"Thailand","dial_code":"+66","code":"TH"},{"name":"Togo","dial_code":"+228","code":"TG"},{"name":"Tokelau","dial_code":"+690","code":"TK"},{"name":"Tonga","dial_code":"+676","code":"TO"},{"name":"Trinidad and Tobago","dial_code":"+1 868","code":"TT"},{"name":"Tunisia","dial_code":"+216","code":"TN"},{"name":"Turkey","dial_code":"+90","code":"TR"},{"name":"Turkmenistan","dial_code":"+993","code":"TM"},{"name":"Turks and Caicos Islands","dial_code":"+1 649","code":"TC"},{"name":"Tuvalu","dial_code":"+688","code":"TV"},{"name":"Uganda","dial_code":"+256","code":"UG"},{"name":"Ukraine","dial_code":"+380","code":"UA"},{"name":"United Arab Emirates","dial_code":"+971","code":"AE"},{"name":"United Kingdom","dial_code":"+44","code":"GB"},{"name":"United States","dial_code":"+1","code":"US"},{"name":"Uruguay","dial_code":"+598","code":"UY"},{"name":"Uzbekistan","dial_code":"+998","code":"UZ"},{"name":"Vanuatu","dial_code":"+678","code":"VU"},{"name":"Wallis and Futuna","dial_code":"+681","code":"WF"},{"name":"Yemen","dial_code":"+967","code":"YE"},{"name":"Zambia","dial_code":"+260","code":"ZM"},{"name":"Zimbabwe","dial_code":"+263","code":"ZW"},{"name":"land Islands","dial_code":"","code":"AX"},{"name":"Bolivia, Plurinational State of","dial_code":"+591","code":"BO"},{"name":"Brunei Darussalam","dial_code":"+673","code":"BN"},{"name":"Cocos (Keeling) Islands","dial_code":"+61","code":"CC"},{"name":"Congo, The Democratic Republic of the","dial_code":"+243","code":"CD"},{"name":"Cote d'Ivoire","dial_code":"+225","code":"CI"},{"name":"Falkland Islands (Malvinas)","dial_code":"+500","code":"FK"},{"name":"Guernsey","dial_code":"+44","code":"GG"},{"name":"Holy See (Vatican City State)","dial_code":"+379","code":"VA"},{"name":"Hong Kong","dial_code":"+852","code":"HK"},{"name":"Iran, Islamic Republic of","dial_code":"+98","code":"IR"},{"name":"Isle of Man","dial_code":"+44","code":"IM"},{"name":"Jersey","dial_code":"+44","code":"JE"},{"name":"Korea, Democratic People's Republic of","dial_code":"+850","code":"KP"},{"name":"Korea, Republic of","dial_code":"+82","code":"KR"},{"name":"Lao People's Democratic Republic","dial_code":"+856","code":"LA"},{"name":"Libyan Arab Jamahiriya","dial_code":"+218","code":"LY"},{"name":"Macao","dial_code":"+853","code":"MO"},{"name":"Macedonia, The Former Yugoslav Republic of","dial_code":"+389","code":"MK"},{"name":"Micronesia, Federated States of","dial_code":"+691","code":"FM"},{"name":"Moldova, Republic of","dial_code":"+373","code":"MD"},{"name":"Mozambique","dial_code":"+258","code":"MZ"},{"name":"Palestinian Territory, Occupied","dial_code":"+970","code":"PS"},{"name":"Pitcairn","dial_code":"+872","code":"PN"},{"name":"Réunion","dial_code":"+262","code":"RE"},{"name":"Russia","dial_code":"+7","code":"RU"},{"name":"Saint Barthélemy","dial_code":"+590","code":"BL"},{"name":"Saint Helena, Ascension and Tristan Da Cunha","dial_code":"+290","code":"SH"},{"name":"Saint Kitts and Nevis","dial_code":"+1 869","code":"KN"},{"name":"Saint Lucia","dial_code":"+1 758","code":"LC"},{"name":"Saint Martin","dial_code":"+590","code":"MF"},{"name":"Saint Pierre and Miquelon","dial_code":"+508","code":"PM"},{"name":"Saint Vincent and the Grenadines","dial_code":"+1 784","code":"VC"},{"name":"Sao Tome and Principe","dial_code":"+239","code":"ST"},{"name":"Somalia","dial_code":"+252","code":"SO"},{"name":"Svalbard and Jan Mayen","dial_code":"+47","code":"SJ"},{"name":"Syrian Arab Republic","dial_code":"+963","code":"SY"},{"name":"Taiwan, Province of China","dial_code":"+886","code":"TW"},{"name":"Tanzania, United Republic of","dial_code":"+255","code":"TZ"},{"name":"Timor-Leste","dial_code":"+670","code":"TL"},{"name":"Venezuela, Bolivarian Republic of","dial_code":"+58","code":"VE"},{"name":"Viet Nam","dial_code":"+84","code":"VN"},{"name":"Virgin Islands, British","dial_code":"+1 284","code":"VG"},{"name":"Virgin Islands, U.S.","dial_code":"+1 340","code":"VI"}]

var html_codes = ''
for(c in global_area_codes){
    html_codes += `<option value="${global_area_codes[c].dial_code}">${global_area_codes[c].code + ' - ' + global_area_codes[c].dial_code}</option>`
}
$('#area-code').html(html_codes)

var vacc = 0;
function dateYtimeOk(params) {
    $('#datesandtime>div>div').each(function() {
        if (!$(this).hasClass('moduleDateDis')) {
            let input = $(this).find('input');
            let select = $(this).find('select');
            if (input.val() == "" || select.val() == "" ) {
                vacc = 1
                return false;
            }else{
                vacc = 0
            }
        }
    })
    if (vacc == 0) {
        $('#personalinfo .boxi').removeClass('section-disabled')
        
    }
}

var d = new Date()
var gmtHours = -d.getTimezoneOffset()/60;
console.log( gmtHours);

var dt = new Date();
var test = dt.setHours( dt.getHours() - gmtHours );
let date = new Date( test );

// alert(date);

$(document).on('change', '#speakingTime', function(){

    // $('#speakingTime, #speakingCalendar').change(function() {
    
    // console.log(new Date($('#speakingCalendar').val()).getDay())
    if (new Date($('#speakingCalendar').val()).getDay() == 0 || new Date($('#speakingCalendar').val()).getDay() == 6) {
        alert("This module is only avaible during business days")
        $('#speakingCalendar').val('')
    }
    if ($('#speakingCalendar').val() != '' ) {
        let fechaSpeak = $('#speakingCalendar').val()

        let horaSpeak = $('#speakingTime').val().replace(" UK", "");
        var localTime = new Date(fechaSpeak+"T"+horaSpeak)
        var gmtHours = -d.getTimezoneOffset()/60;
        var ggaa = localTime.setHours( localTime.getHours() + gmtHours );
        
        $('#horaSpeaking').text(new Date( ggaa ))
    }
    dateYtimeOk()
})
// $(document).on('change', '#speakingCalendar', function() {
//     if (new Date($('#speakingCalendar').val()).getDay() == 0 || new Date($('#speakingCalendar').val()).getDay() == 6) {
//             alert("This module is only avaible during business days")
//             $('#speakingCalendar').val('')
//     }
// })

$(document).on('change', '#listeningTime', function(){

    if ($('#listeningCalendar').val() != '' ) {
        let fechaList = $('#listeningCalendar').val()

        let horaList = $('#listeningTime').val().replace(" UK", "");
        var localTime = new Date(fechaList+"T"+horaList)
        var gmtHours = -d.getTimezoneOffset()/60;
        var ggaa = localTime.setHours( localTime.getHours() + gmtHours );
        
        $('#horaListening').text(new Date( ggaa ))
    }
    dateYtimeOk()

})

$(document).on('change', '#RandWTime', function(){
// $('#RandWTime, #RandWCalendar').change(function() {
    if ($('#RandWCalendar').val() != '' ) {
        let fechaSpeak = $('#RandWCalendar').val()

        let horaSpeak = $('#RandWTime').val().replace(" UK", "");
        var localTime = new Date(fechaSpeak+"T"+horaSpeak)
        var gmtHours = -d.getTimezoneOffset()/60;
        var ggaa = localTime.setHours( localTime.getHours() + gmtHours );
        
        $('#horaRandW').text(new Date( ggaa ))
    }
    dateYtimeOk()

})


$('#personalinfo').on('keyup', 'input', function(e) {
    $('#termsandconditions .boxi').removeClass('section-disabled')
    $('#personalinfo input').each(function() {
        if(!$(this).val()){
            $('#termsandconditions .boxi').addClass('section-disabled')
           return false;
        }
    });
})



if ($(window).width() < 800) {

    $('#exams ul li').click(function () {
        $('html, body').animate({
            scrollTop: $("#modules").offset().top - 150
        }, 400);
    })
    
}

$('.anchor').click(function(ev) {
    let href = $(this).attr('data-link');

    $('html, body').animate({
            scrollTop: $(href).offset().top - 150
    }, 700);
    console.log(href)
})


let country = $("#country").offset().top;
let examMod = $("#examandmodule").offset().top;
let dateandtime = $("#dateandtime").offset().top;
let personinfo = $("#personalinfo").offset().top;
let termsandco = $("#termsandconditions").offset().top;
let payment = $("#payment").offset().top;

$(window).scroll( function(){
    
    let bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    let top_of_screen = $(window).scrollTop();   
    // console.log(top_of_screen)


    if (country < top_of_screen +200) {
        $('.anchor[data-link="#country"]>div').css({'color':'white', 'background-color':'#004972'})
        $('#pasos-cont aside').css('background', 'linear-gradient(to right, #004972 0%, #f0f0f0 0%)')
    }else{
        $('.anchor[data-link="#country"]>div').css({'color':'black', 'background-color':'#f0f0f0'})
    }
    if (examMod < top_of_screen +200) {
        $('#pasos-cont aside').css('background', 'linear-gradient(to right, #004972 20%, #f0f0f0 20%)')
        $('.anchor[data-link="#examandmodule"]>div').css({'color':'white', 'background-color':'#004972'})
    }else{
        $('.anchor[data-link="#examandmodule"]>div').css({'color':'black', 'background-color':'#f0f0f0'})
    }  
    if (dateandtime < top_of_screen +200) {
        $('#pasos-cont aside').css('background', 'linear-gradient(to right, #004972 40%, #f0f0f0 40%)')
        $('.anchor[data-link="#dateandtime"]>div').css({'color':'white', 'background-color':'#004972'})
    }else{
        $('.anchor[data-link="#dateandtime"]>div').css({'color':'black', 'background-color':'#f0f0f0'})
    }  
    if (personinfo < top_of_screen +200) {
        $('#pasos-cont aside').css('background', 'linear-gradient(to right, #004972 60%, #f0f0f0 60%)')
        $('.anchor[data-link="#personalinfo"]>div').css({'color':'white', 'background-color':'#004972'})
    }else{
        $('.anchor[data-link="#personalinfo"]>div').css({'color':'black', 'background-color':'#f0f0f0'})
    }  
    if (termsandco < top_of_screen +200) {
        $('#pasos-cont aside').css('background', 'linear-gradient(to right, #004972 80%, #f0f0f0 80%)')
        $('.anchor[data-link="#termsandconditions"]>div').css({'color':'white', 'background-color':'#004972'})
    }else{
        $('.anchor[data-link="#termsandconditions"]>div').css({'color':'black', 'background-color':'#f0f0f0'})
    }  
    if (payment < top_of_screen +200) {
        $('#pasos-cont aside').css('background', 'linear-gradient(to right, #004972 100%, #f0f0f0 100%)')
        $('.anchor[data-link="#payment"]>div').css({'color':'white', 'background-color':'#004972'})
    }else{
        $('.anchor[data-link="#payment"]>div').css({'color':'black', 'background-color':'#f0f0f0'})
    }  
});
// termina el F() scroll



$(document).on('click', '.section-disabled', function(e) {
    e.preventDefault()
})

setTimeout(() => {
    $('#listeningCalendar, #RandWCalendar, #speakingCalendar').attr('placeholder','Select date')
    
}, 1100);


})

function render_paypal_button(checkout_id){

    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: global_pedido.final_price
            },
            custom_id: checkout_id,
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function() {
        console.log('data: ')
        console.log(data)
        window.location = "paypal-transaction-complete.php?orderID="+data.orderID;				
    });
    }
    }).render('#paypal-button-container');
}

</script>
</html>


