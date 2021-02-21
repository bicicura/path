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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <title>Path LATAM | Checkout</title>
    <style type="text/css">

    header{
        padding-top: 10vh;
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
        width: 80%;
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
    .tit::before{
        position: absolute;
        left: -3%;
        bottom: -50%;
        right: 0;
        font-size: 2.4em;
        z-index: -1;
        opacity: .07;
    }
    #tit_pais::before{
        content: '01';

    }
    #tit_selectExam::before{
        content: '02';
    }
    #exams{
        width: 67%;
    }
    #exams ul>div{
        width: 50%;
    }
    #exams ul>div:last-child{
        border-right: 1px solid #f0f0f0;
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
    }
    #exams ul li:hover::after{
        opacity: 0.5
    }
    .examChosen::after{
        opacity: 1!important;
    }


    #exams ul li:hover{
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
    #examDetails>div{
        display: block!important;
    }
    #examDetails>div h6{
        font-weight: 600;
    }

    </style>
</head>

<body>


<header>
    <h2>Book an exam</h2>
</header>

<div class="cont80">
    <div>
        <!-- <h4>01</h4> -->
        <h3 class="tit" id="tit_pais">Please select your country of residence</h3>
    </div>
    <div class="boxi">
        <div>
            <select name="" id="">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
    </div>
</div>

<div class="cont80" id="examandmodule">
    <div>
        <!-- <h4>01</h4> -->
        <h3 class="tit" id="tit_selectExam">Select and exam an its module</h3>
    </div>
    <div class="boxi">
        <div>
            <div id="exams">
                <h5>Exam:</h5>
                <ul>
                    <div>
                        <li>A1- Speaking Performance Assessment (SPA) level I</li>
                        <li>A1 Speaking Performance Assessment (SPA) level II</li>
                        <li>A1+ Speaking Performance Assessment (SPA) level III</li>
                    </div>
                    <div>
                        <li>A1- Entry</li>
                        <li>A1 Access</li>
                        <li>A1+ Achiever</li>
                        <li>A2 Preliminary</li>
                        <li>A2+ Elementary</li>
                        <li>B1 Progress</li>
                        <li>B2 Competency</li>
                    </div>
                </ul>
            </div>
            <div id="modules">
                <h5>Module:</h5>
                <ul>
                    <li>Speaking</li>
                    <li>Listening</li>
                    <li>Reading and writing</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="examDetails" class="boxi">
        <div>
            <h5>Exam details:</h5>
            <div>
                <div>
                    <h6>Exam fee:</h6><p>$80</p>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&callback=initMap"
        async defer></script>
    <!-- Custom Script -->
    <script src="assets/js/map.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/toggler.js"></script>
</body>

</html>