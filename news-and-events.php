<?php

require 'connection.php';

$q = $pdo->prepare("SELECT * FROM entradas");
$q->execute(); 
$q = $q->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/jwf6mkc.css">
   <!-- Fab Icon -->
   <link rel="shortcut icon" type="image/png" href="assets/img/logos/pathfavicon-01.png" /> 
  <!-- Fonts Awesome Icons -->
  <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css" />
  <!-- Flaticon -->
  <link rel="stylesheet" href="assets/css/vander/flaticon.css">
  <!-- Bootstrap Link -->
  <link rel="stylesheet" href="assets/css/vander/bootstrap.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <title>Path | News and Events</title>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BQWREFVWND"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BQWREFVWND');
</script>

  <style>

    @media only screen and (max-width: 799px) {
      .social-icon {
        right: 5%;
        top: 8%!important;
        z-index: 10;
        left: unset!important;;
        }
    }

    .card-body h6 {
      color: black!important;
    } 

    .header-img {
      position: relative;
    }

    .social-icon {
      position: absolute;
      top: 18%;
      left: 4%;
      background: rgba(0, 73, 105, .7);
      /* width: 3.8%; */
      border-radius: 4px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      }

      .social-icon i {
        color: #fff;
      }

      .social-icon ul {
        margin: 0;
      }
  </style>
</head>

<body>
<div class="covid-banner"><p>View our <a target="_blank" href="covid.html"><b>Coronavirus (COVID 19) page</b></a> for the latest updates</p></div>
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
              <a href="#"><img src="assets/img/logos/logo-mob.jpg" alt="logo" class="img-fluid"></a>
          </div>
          <div class="divider"></div>
          <!-- <div class="language">
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
          </div> -->
      </div>
      <div class="nav-menu-items">
          <ul class="nav-items">
              <li><a href="index.html">Home</a></li>
              <li class="menu-item-has-children"><a href="meet-path.html">Meet Path</a>
                  <ul class="sub-menu">
                      <li><a href="meet-path.html#about-us">About us</a></li>
                      <li><a href="meet-path.html#recognition-and-validation">Recognition and validation</a></li>
                      <li><a href="meet-path.html#think-forward-strategy">Think Forward strategy</a></li>
                      <li><a href="meet-path.html#policies-and-procedures">Policies and procedures</a></li>
                  </ul>
              </li>
              <li class="menu-item-has-children"><a href="teachers-institutions.html">Teachers and Institutions</a>
                  <ul class="sub-menu">
                      <li><a href="teachers-institutions.html#international-standards">International standards</a></li>
                      <li><a href="teachers-institutions.html#assessment-innovation">Assessment innovations</a></li>
                      <li><a href="teachers-institutions.html#join-path">Join Path</a></li>
                      <li><a href="teachers-institutions.html#inbuilt-programme">Inbuilt programme</a></li>
                      <li><a href="teachers-institutions.html#q-mark">Q-mark</a></li>
                      <li><div class="natgeo"><a href="teachers-institutions.html#natgeo-learning">NatGeo Learning</a><div class="natgeo-cont"><img src="assets\img\logos\nat-geo-01.svg" alt=""></div></div></li>
                  </ul>
              </li>
              <li class="menu-item-has-children"><a href="our-examinations.html">Our examinations</a>
                  <ul class="sub-menu">
                      <div><ul><li><a href="our-examinations.html#general-information" style="font-weight: bold;">General information</a></li><div style="margin-left: 10px;"><li><a href="our-examinations.html#about-our-exams">About our exams</a></li><li><a href="our-examinations.html#exam-modules">Exam modules</a></li><li><a href="our-examinations.html#map-of-levels">Map of levels</a></li></div></ul></div>
                      <div><ul><li><a href="our-examinations.html#speaking-only-exams" style="font-weight: bold;">Speaking-only exams</a></li><div style="margin-left: 10px;"><li><a href="our-examinations.html#AminusSPAlevelI">A1- | Speaking Performance Assessment (SPA) level I</a></li><li><a href="our-examinations.html#aSPAlevelII">A1 | Speaking Performance Assessment (SPA) level II</a></li><li><a href="our-examinations.html#AplusSPAlevelIII">A1+ | Speaking Performance Assessment (SPA) level III</a></li></div></ul></div>
                      <div><ul><li><a href="our-examinations.html#four-skill-exam" style="font-weight: bold;">Four-skill exams</a></li><div style="margin-left: 10px;"><li><a href="our-examinations.html#a1entrylevel">A1- | Entry level</a></li></li><li><a href="our-examinations.html#A1AccessLevel">A1 | Access level</a></li></li><li><a href="our-examinations.html#A1AchieverLevel">A1+ | Achiever level</a></li></li><li><a href="our-examinations.html#A2PreliminaryLevel">A2 | Preliminary level</a></li></li><li><a href="our-examinations.html#A2ElementaryLevel">A2+ | Elementary level</a></li></li><li><a href="our-examinations.html#B1ProgressLevel">B1 | Progress level</a></li><li><a href="our-examinations.html#B2CompetencyLevel">B2 | Competency level</a></li><li><a href="our-examinations.html#B2ForwardLevel">B2+ | Forward level</a></li></div></ul></div>
                  </ul>
              </li>
              <li class="menu-item-has-no-children"><a href="news-and-events.php">News and events</a></li>
          </ul>
      </div>
  </div>

  <!-- Breadcrumb -->
  <section class="breadcrub-style-4 section margin-bottom-0 header-img">
    <div class="social-icon">
      <ul>
          <li><a target="_blank" href="https://www.facebook.com/pathexams"><i class="fab fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://www.instagram.com/pathexams"><i class="fab fa-instagram"></i></a></li>
          <li><i class="fas fa-envelope" id="open-form-popup"></i></li>
          <li><i class="fas fa-phone" id="open-opening-popup"></i></li>      
      </ul>
  </div>
    <div class="container">
      <div class="heading">
        <h1>News and events</h1>
      </div>
    </div>
  </section>

    <!-- Popup -->
    <div id="load-pop-ups">
      
    </div>

  <!-- Popular Courses -->
  <section class="popular-courses section margin-top-0">
    <div class="container">
      <h2 class="rotated-text-2 d-none d-md-block">Our news!</h2>

      <div class="row">

        
        <?php

        foreach ($q as $key => $entrada) {
          $id = $entrada['id'];
          $img_url = $entrada['thumbnail'];
          $titulo = $entrada['titulo'];

            echo '
            <div class="col-12 col-md-6 col-lg-3 padding-0 blog-entry">
              <div class="course-card-style-3">
                <div class="card">
                  <a href="blog-detail.php?id='.$id.'">
                    <div class="thumb">
                      <img class="card-img-top"
                      src="assets/blog_imgs/'.$img_url.'" alt="Card image cap">
                    </div>
                    
                    <div class="card-img-overlay">
                      <div class="card-body" style="cursor: pointer">
                        <h6>'.$titulo.'</h6>
                      </div>
                    </div>
                  </a>  
                </div>
              </div>
            </div>';
            
        }
            
       ?>
      
    </div>
      
    </div>
  </section>

  <div id="cookie-banner"></div>

  <!-- Footer Section -->
  <footer class="footer-section" id="footer">
    
  </footer>


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
  <!-- Popper Js -->
  <script src="assets/js/vander/popper.min.js"></script>
  <script src="assets/js/vander/bootstrap.min.js"></script>
  <!-- Custom Script -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/toggler.js"></script>
</body>

</html>