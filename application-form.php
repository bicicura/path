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

    <!-- CSS exclusivamente para esta pag -->
    <link rel="stylesheet" href="assets/css/application-form.css">
    <title>Path | Application form</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BQWREFVWND"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BQWREFVWND');
    </script>

    <style type="text/css">
    /* 
    ======
    BANNER
    ======
    */

    .events-section p {
        font-size: 1rem;
        margin: .8rem 0!important;
    }

    .banner__subtitle-container {
        width: 100%;
    }


    .banner__subtitle {
        font-size: 1.6rem;
    }

    .content-area-span {
        background-color: #004969;
        padding: .2em .4em;
        border-radius: 2px;
        color: white;
        font-weight: bold;
    }


    /* 
    =====
    EVENT
    =====
    */

    .event__line {
    width: 12%;
    background-color: #004969;
    padding: 1.5px;
    opacity: .2;
    border-radius: 10px;
}

    .event__title {
        display: flex;
        align-items: baseline;
    }

    .event__title-col {
        display: flex;
        flex-direction: column;
    }

    .event__title p {
        color: #004969;
    }

    .event__title svg {
        margin-right: 12px;
    }

    .event__title-child1 {
        display: flex;
        align-items: center;
    }

    /* 
    ======
    FRANJA
    ======
    */

        .franja-container {
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            background-color: #004969;
        }
        .franja {
          width: 45%;
          display: flex;
          justify-content: space-between;
          padding: 2em 0;
          align-items: center;
        }

        .franja h3 {
            color: white;
            font-weight: 400;
        }

        .franja button {
            padding: 1em 4em;
            background-color: white;
            outline: none;
            border: none;
            border-radius: 2px;
            font-weight: bold;
            box-shadow: 0px 6px 20px -8px white;
        }


    /* 
    ==================
    QUOTE AFTER BANNER
    ==================
    */

        .quote__after-img {
            background-image: url(assets/img/University/students/path-quote.jpg); 
            margin: 6vh 0!important;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .quote__after-courtain {
            background-color: #000;
            opacity: .5;
        }

        .quote__after-text {
            text-align: center;
            padding: 24vh 0;
            position: relative;
            z-index: 100;
        }

        .quote__after-text h2 {
            color: white!important;
            font-weight: 400;
        }

        .quote__after-coma {
            position: absolute;
            top: 13%;
            left: 0;
        }

        /* 
        =======
        CONNECT
        =======
        */

        .connect {
            width: 100%;
            background-color: #F5F5F5;
            padding: 16vh 0;
        }

        .connect__title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .connect__container {
            /* border: 2px solid chartreuse; */
            display: flex;
            justify-content: space-between;
        }

        .connect__europe {
            /* border: 2px pink solid; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .connect__europe p {
            margin: 1.5rem 0;
            letter-spacing: .15rem;
        }

        .connect__europe i {
            margin: 0;
            font-size: 1.2rem;
        }

        .connect__social {
            width: 32%;
            justify-content: space-between;
        }

        .connect__img-cont {
            background-color: #004969;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .connect__img-cont img {
            max-width: 100%;
            transform: scale(.7, .7);
        }
        @media only screen and (max-width: 799px) {
            html {
                overflow-x: hidden;
            }

            .section {
            margin: 11vh 0 !important;
            }

            .navbar-mobile .container-fluid .logo img {
                height: 40px;
            }
            
            .boxed-btn {
                text-align: center;
            }

            .franja {
                flex-direction: column;
                width: 90%;
                margin: 0 auto;
            }

            .franja__title {
                opacity: 1;
                text-align: center;
                width: 100%;
            }

            .franja button {
            padding: 1em 3.2em;
            background-color: white;
            outline: none;
            border: none;
            border-radius: 2px;
            font-weight: bold;
            box-shadow: 0px 6px 10px -8px white;
            }

            .quote__title {
            opacity: 1;
            transition: .5s cubic-bezier(0.13, 0.77, 0.33, 1);
            margin: 0 5%;
            text-align: left;
            }
            
            .anim__home1, .anim__home2, .anim__home3, .anim__home4, .anim__home5, .europe, .latin, .asia, .africa {
                opacity: 1;
            } 

            .anim__home1, .anim__home2, .anim__home3, .anim__home4, .anim__home5 {
                margin: 8vh 0;
            }

            .connect__container {
                flex-direction: column;
            }

            .connect__europe {
                margin: 1.5rem 0;
            }
            
            .connect__europe p {
                margin: .8rem 0;
            }
            
            .connect__social {
                width: 20%;
            }
        }
        </style>
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar-section container-fluid d-none d-sm-block" id="header">
        
    </nav>

    <!-- Navbar for mobile screen -->
    <div class="navbar-mobile sticky-bar d-block d-sm-none">
        <div class="container-fluid">
            <div class="menu-toggler">
                <div class="hamburger-menu">
                    <a href="#">
                        <span>Menu</span>
                    </a>
                </div>
            </div>
            <div class="divider"></div>
            <div class="logo">
                <a href="#"><img src="assets/img/logos/path_logo-mob.svg" alt="logo" class="img-fluid"></a>
            </div>
            <div class="divider"></div>
            <div class="language">
                <div class="dropdown">
                    <button class="active" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="flag" src="assets\img\icons\Flags\uk-flag.png" alt="cuntry flag" />
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"><img src="assets\img\icons\Flags\spain-flag.png"
                                alt="flag image" class="flag" /></button>
                        
                    </div>
                </div>
            </div>
            
        </div>

        <div class="nav-menu-items">
            <ul class="nav-items">
                <li><a href="index.html">Home</a></li>
                <li class="menu-item-has-children"><a href="index.html">Meet Path</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">About us</a></li>
                        <li><a href="index-2.html">Think Forward Strategy</a></li>
                        <li><a href="index-3.html">Policies and Procedures</a></li>
                    </ul>
                </li>
                <!-- <li><a href="teachers-institutions.html" class="current-menu-item">Teachers and Institutions</a></li> -->
                <li class="menu-item-has-children"><a href="teachers-institutions.html">Teachers and Institutions</a>
                    <ul class="sub-menu">
                        <li><a href="courses.html">International Standards</a></li>
                        <li><a href="all-courses.html">Assesment Innovation</a></li>
                        <li><a href="course-detail.html">Join Path</a></li>
                        <li><a href="enrollment.html">Inbuilt Programme</a></li>
                        <li><a href="join.html">Q-mark</a></li>
                        <li><a href="teacher.html">NatGeo Learning</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-no-children"><a href="#">Students & Parents</a></li>
                <li class="menu-item-has-children"><a href="#">Our Examinations</a>
                    <ul class="sub-menu">
                        <li><a href="event.html">General Information</a></li>
                        <li><a href="event-detail.html">Speaking Only Exams</a></li>
                        <li><a href="event-detail.html">Four Skills Exams</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-no-children"><a href="#">News and Events</a></li>
            </ul>
        </div>

    </div>


    <div class="blog-detail__gradient-cont">
      <div class="blog-detail__gradient">
        </div>
          <section class="breadcrub-style-4 section margin-bottom-0" style="background-image: url('assets/img/application-form-banner.jpg')">
            <div class="container">
                <div class="heading-detail-blog text-center">
                    <h1>Application form</h1>
                  </div>
            </div>
          </section>
  </div>

    <!-- FORM -->
    <section id="form-section">

        <div>

            <h2>Please complete in full the following application form:</h2>
            <div class="aclaracion">
            <b>What to expect after you submit an application:</b>
                <br>
                <div class="steps-container">

                    <b>Step 1:</b> Submit the online application form
                    <br>
                    <b>Step 2:</b> We evaluate your application (5 business days) and then send you an agreement
                    <br>
                    <b>Step 3:</b> Once the agreement is signed, you will receive the Path welcome kit
                </div>
            </div>

            <div class="form-section">

                <div class="form-text">I would like to become a Path:</div>

                <div class="options-container" id="initial-options">

                    <div class="form-box" id="affiliate-option">Affiliate</div>
                    <div class="form-box" id="official-member-option">Official Member</div>

                </div>

            </div>

            <div id="forms-container">
            </div>



        </div>


    </section>




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


    <!-- Custom Script -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/toggler.js"></script>
    
    <!-- JS exclusivo para esta pag -->
    <script src="assets/js/application-form.js?r=4"></script>
</body>

</html>