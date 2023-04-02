
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Stock-Market-Recommendation-and-Advisory -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Three Bulls</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="../img/lg.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<style>

  .modal-content{
    border-radius: 7px;
    background: #151E28;
}
.close{
    color: yellow;
}
.close:hover{
    color: yellowgreen;
}
.modal-body h1 {
    font-weight: 900;
    font-size: 2.3em;
    text-transform: uppercase;
}
 .modal-body span{
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-weight: 500;
  }

</style>  
</head>

<body>

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!--         <h4 class="modal-title">Modal Header</h4> -->
        </div>
        <div class="modal-body text-center">
          <h1 style="color: gold;">Important Notice</h1>
  <span>Our Website is all about stocks and analysis.</span>
  <span>Our main focus is Long Term Investing Strategy.</span>
  <span>For the retail investors and new people in market,our website of Advisory makes investing easier and helpful.</span>
  <span>Most of investor compromise with their investing because of lake of knowledge and advise but now we are available for them.</span>
  <br>
  <h4><span style="color: gold;"><strong>MANDATORY DISCLAIMER AS REQUIRED BY SEBI</strong></span></h4>
  <span>Equity Investment are subject to 100% market risks. Refer your financial consultant advice before Investing.</span>
  <span>This website is only for Educational and Learning,Knowledge Purposes.</span>
  <span>Admins have no responsibility for your intended decision & financial losses.</span>
  <span>Keep calculated & always analyzed your cash position and risk bearing capacity before following tips of our website.</span>
  <span>Stock market investments are VERY RISKY and being part of this group, you agree that you understand the Market risks involved.</span>
  <h4><span style="color: gold;"><strong>We are not sebi registered Advisors</strong></span></h4>
        </div>
      </div>
  
    </div>
  </div>
  <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="./script.js"></script>
  <script>
      $(document).ready(function(){       
          $('#myModal').modal('show');
           });
  </script>
  
  <!-- <div id="particles-js" style="position: absolute;width: 100%;height: 100vh;"></div>
        <script src="Particles/particles.js"></script>
    <script src="Particles/app.js"></script> -->
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">

    <div class="header">
      <script type="text/javascript" style="pointer-events: none; cursor: none;"
        src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
          {
            "symbols": [
              {
                "description": "SENSEX",
                "proName": "BSE:SENSEX"
              },
              {
                "description": "RELIANCE",
                "proName": "BSE:RELIANCE"
              },
              {
                "description": "INFY",
                "proName": "BSE:INFY"
              },
              {
                "description": "TCS",
                "proName": "BSE:TCS"
              },
              {
                "description": "WIPRO",
                "proName": "BSE:WIPRO"
              }
            ],
              "showSymbolLogo": true,
                "colorTheme": "dark",
                  "isTransparent": false,
                    "displayMode": "regular",
                      "locale": "in"
          }
        </script>
    </div>

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <span class="stockbar">
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_e4rTY4.json" background="transparent"
          speed="1" style="width: 40px; height: 40px;" loop autoplay></lottie-player>
      </span>
      <a href="index.php" class="logo d-flex align-items-center" style="color: yellow;">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span>Three Bulls</span>
      </a>
      <nav id="navbar" class="navbar">

        <ul>
          <li>
            <a class="nav-link scrollto one" style="" href="#">
              <form action="search.php" method="get">
              <div class="search1" style="">
                <span class="" style="">
                <i class="bi bi-search" >  <input class="in_search" type="search" name="search" value=""
                      placeholder="Search here your favourite Stocks..." style="border:0px"></i>

                    
                 
                </span>
              </div>
              </form>
              
            </a>
          </li>

          <li><a class="nav-link scrollto" href="#Stocks">Stocks</a></li>

          

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto"
          <?php
          if(isset($_SESSION['uname'])){
            echo $_SESSION['uname'];
          }
         
          ?> 
          href="../loginsign/login/login.php">

          LogIn/SignUp
          </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Keep Growing Your Capital With Us.</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Make Investment with us and grow your money.</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->






  <div id="particles-js" style="position: absolute;width: 100%;height: 100vh;"></div>
  <script src="../FlexStart/Particles/particles.js"></script>
  <script src="../FlexStart/Particles/app.js"></script>
  <main id="main">

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h1>Our Services</h1>
          <!-- <p>Odit est perspiciatis laborum et dicta</p> -->
        </header>
        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200" style="cursor: pointer;">
            <div class="box">
              <a href="#Total1">
                <img src="assets/img/values-1.png" class="img-fluid" alt="">
                <h3>Stocks</h3>
                <p>The real earning starts here!!</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400" style="cursor: pointer;">
            <div class="box">
              <a href="#Total2">
                <img src="assets/img/values-2.png" class="img-fluid" alt="" >
                <h3>Fear and Greed Index</h3>
                <p>F&G helps you time your trades and investments better.</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600" style="cursor: pointer;">
            <div class="box">
              <a href="#Total3">
                <img src="assets/img/values-3.png" class="img-fluid" alt="">
                <h3>Learn</h3>
                <p>Learn How to Trade the Market.</p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Values Section -->

    <!-- ======= Features Section ======= -->
    <div id="Total1"></div>
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2 style="margin-top: 75px; color:#FFC72B">Stocks</h2>
          <p style="color:white;">What we provide?</p>
        </header>
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-vector-pen"></i>
                  <h3>Fundamental Analysis</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-vector-pen"></i>
                  <h3>Technical Analysis</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-vector-pen"></i>
                  <h3>Dividends</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-vector-pen"></i>
                  <h3>Holding By Promoters</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-vector-pen"></i>
                  <h3>BalanceSheet</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-vector-pen"></i>
                  <h3>Daily Highest, Lowest Stock return</h3>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- / row -->
        <!-- Feature Tabs -->
        <span id="Total2"></span>
        <div class="row feture-tabs" data-aos="fade-up"
          style="display: flex;align-items: center;justify-content: center;">
          <div class="col-lg-6">
            <h3 style="display: grid;align-items: center;justify-content: center;">F&G Index</h3>

            <div class="">
              <img
                src="https://kvia.b-cdn.net/2020/11/hypatia-h_83b22dfbe0104442ddb969bd5bcdd1f4-h_722a8ff904e797ad369ef87da7bca752_preview.jpg"
                class="img-fluid" alt="">
            </div>
          </div><!-- End Feature Tabs -->



          <!-- Feature Icons -->
          <div id="Total3"></div>
          <div class="row feature-icons" data-aos="fade-up">
            <h3>Learn & Earn</h3>
            <div class="row">
              <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
              </div>
              <div class="col-xl-8 d-flex content">
                <div class="row align-self-center gy-4">
                  <div class="col-md-6 icon-box" data-aos="fade-up">
                    <i class="bi bi-book-half"></i>
                    <div>
                    <a href="../books/books.php">  <h4>Books</h4></a>
                      <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Ipsam, asperiores.</p>
                    </div>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-play"></i>
                    <div>
                    <a href="../sm/video.php"><h4>Videos</h4></a>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, quas!</p>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div><!-- End Feature Icons -->
        </div>
    </section><!-- End Features Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2 style="color: #FFC72B;">Our Team</h2> 
          <!-- <p>Our hard working team</p> -->
        </header>
        <div class="row gy-3" style="display: inline-flex;align-items: center;justify-content: space-evenly;">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="../img/lj.jfif" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jay Lakhani</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="../img/jd.jfif" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jay Italiya</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="../img/pm.jfif" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Parth Mangukiya</h4>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Team Section -->
    <!-- contact section begin -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <!--<h2>Contact</h2>-->
          <p style="color: #FFC72B;">Contact Us</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Charotar University<br>Nadiad,Gujarat.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+99 99XXXXXXXX<br>+99 99YYYYYYYY</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>it@charusat.com<br>contact@charusat.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <span style="color: #FFC72B;">Three Bulls</span>
            </a>
            <p style="color: white;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, expedita.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start" style="color: rgba(255, 255, 255, 0.822);">
            <h4>Contact Us</h4>
            <p>Charotar University <br>Nadiad,Gujarat.<br>
              <br>
              <strong style="color: yellow;">Phone:</strong> +99 99XXXXXXXX<br>
              <strong style="color: yellow;">Email:</strong> it@charusat.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="./script.js"></script>
  
</body>

</html>
