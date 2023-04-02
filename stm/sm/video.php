<?php
    include "conn.php";
    session_start();
    if(!isset($_SESSION['uname'])){
      header("Location: {$hostname}/stm/loginsign/login/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../img/lg.png" rel="icon">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<style>
    
        body {
            font-family: "Overpass", sans-serif;
            box-sizing: border-box;
            background-color:#151E28;
          }

          .section-header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px; 
            background: #151E28;
          }
          
          .section-header h1 {
            font: 400 32px "Montserrat", sans-serif;
            text-transform: uppercase;
            color: gold;
            font-weight: bolder;
          }
          
          .video-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(370px, 1fr));
            grid-gap: 15px;
            max-width: 1100px;
            padding: 15px; 
            margin: 0 auto;
            box-sizing: border-box;
          }
          
          .video-gallery .gallery-item {
            position: relative;
            width: 100%;
            height: 400px;
            background: #000;
            cursor: pointer;
            overflow: hidden;
          }
          
          .video-gallery .gallery-item img {
            position: relative;
            display: block;
            width: 115%;
            height: 400px;
            object-fit: cover;
            opacity: .5;
            /*transition: opacity .35s, transform .35s;*/
            transition: all 350ms ease-in-out;
            transform: translate3d(-23px, 0, 0);
            /*backface-visibility: hidden;*/
          }
          
          .north-cascades-img {
            object-position: 50% 30%;
          }
          
          .video-gallery .gallery-item .gallery-item-caption {
            padding: 32px;
            font-size: 1em;
            color: #fff;
            text-transform: uppercase;
          }
          
          .video-gallery .gallery-item .gallery-item-caption,
          .video-gallery .gallery-item .gallery-item-caption > a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
          }
          
          .video-gallery .gallery-item h2 {
            font-weight: 300;
            overflow: hidden;
            padding: 12px 0;
          }
          
          .video-gallery .gallery-item h2,
          .video-gallery .gallery-item p {
            position: relative;
            margin: 0;
            z-index: 1;
            pointer-events: none;
          }
          
          .video-gallery .gallery-item p {
            letter-spacing: 1px;
            font-size: 12px;
            padding: 12px 0;
            opacity: 0;
            transition: opacity 0.35s, transform 0.35s;
            transform: translate3d(10%, 0, 0);
          }
          
          .video-gallery .gallery-item:hover img {
            opacity: 0.3;
            transform: translate3d(0, 0, 0);
          }
          
          .video-gallery .gallery-item .gallery-item-caption {
            text-align: left;
          }
          
          .video-gallery .gallery-item h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 15%;
            height: 1px;
            background: #fff;
            transition: transform 0.3s;
            transform: translate3d(-100%, 0, 0);
          }
          
          .video-gallery .gallery-item:hover h2::after {
            transform: translate3d(0, 0, 0);
          }
          
          .video-gallery .gallery-item:hover p {
            opacity: 1;
            transform: translate3d(0, 0, 0);
          }
          
          /*
          @media screen and (max-width: 784px) {
            .video-gallery {
              width: 100%;
              padding: 15px;    
          
            }
            .video-gallery .gallery-item {
              width: 95%;
              margin: 0 auto; 
              width: 100%;
            }
          }
          */
    </style>
    <title>Video</title>
</head>
<body>
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
      <a href="../sm/indexlogin.php" class="logo d-flex align-items-center" style="color: yellow;">
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

          <li><a class="nav-link scrollto" href="#Watchlist">Stocks</a></li>

          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          
          
          <li><a class="nav-link scrollto" href="profile.php">Welcome <?PHP
          echo $_SESSION['uname']; ?></a></li>
          <li><a class="nav-link scrollto" href="\stm/loginsign/login/logout.php">Logout</a></li>
          <!-- <li><a class="getstarted scrollto" href="../loginsign/login/login.php">LogIn/SignUp</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>    <div class="content">
  
        <div class="section-header">
          <h1>Video </h1>  
         </div>
        
        <div class="video-gallery">
          
          <div class="gallery-item ">
           <img src="../img/How-to-Invest-in-Share-Market-A-Beginners-Guide-cover-trade-brains.jpg" alt="Beginner Guide">
            <div class="gallery-item-caption">
              <!--<div>-->
                <h2>Beginner Guide</h2>
                <p>Complete Guide to Share Market</p>
              <!--</div>-->
              <a class="vimeo-popup" href="https://youtu.be/VuJURlJ-S24" target="blank"></a>
              
            </div>
          </div>
      
          <div class="gallery-item">
            <img src="../img/compounding power.jpg" alt="Power of Compounding"/>
            <div class="gallery-item-caption">
              <!--<div>-->
                <h2>Power of Compounding</h2>
                <p>Secrerts and Concept of Compounding</p>
              <!--</div>-->
              <a class="vimeo-popup" href="https://youtu.be/EjWIzh-r6nI" target="blank"></a>
            </div>
          </div>
          
          <div class="gallery-item">
           <img src="../img/dividends.jpg" class="north-cascades-img" alt="Power of DIVIDENDS"/>
            <div class="gallery-item-caption">
              <!--<div>-->
                <h2>Power of DIVIDENDS</h2>
                <p>Power of DIVIDENDS for FINANCIAL FREEDOM</p>
              <!--</div>-->
              <a class="vimeo-popup" href="https://youtu.be/0VYHPqvuBdk" target="blank"></a>
            </div>
          </div>
      
          <div class="gallery-item">
            <img src="../img/fundamental analysis.jpg" alt="HOW to ANALYZE STOCKS"/>
            <div class="gallery-item-caption">
              <!--<div>-->
                <h2>HOW to ANALYZE STOCKS</h2>
                <p>HOW to ANALYZE STOCKS (Fundamental Analysis) for BEGINNERS</p>
              <!--</div>-->
              <a class="vimeo-popup" href="https://youtu.be/x3S52jQ7cS4" target="blank"></a>
            </div>
          </div>

          <div class="gallery-item">
            <img src="../img/Best Way to Invest In Your 20s.jpg" alt="Best Way to Invest In Your 20s"/>
            <div class="gallery-item-caption">
              <!--<div>-->
                <h2>Best Way to Invest In Your 20s</h2>
                <p>Best Way to Invest In Your 20s | MAGIC OF COMPOUNDING</p>
              <!--</div>-->
              <a class="vimeo-popup" href="https://youtu.be/0GdaeFYQkL0" target="blank"></a>
            </div>
          </div>

          <div class="gallery-item">
            <img src="../img/INTRINSIC VALUE of a STOCK.jpg" alt="INTRINSIC VALUE of a STOCK"/>
            <div class="gallery-item-caption">
              <!--<div>-->
                <h2>INTRINSIC VALUE of a STOCK</h2>
                <p>How To Calculate INTRINSIC VALUE of a STOCK?</p>
              <!--</div>-->
              <a class="vimeo-popup" href="https://youtu.be/97Aw4TIBRIk" target="blank"></a>
            </div>
          </div>

          <div class="gallery-item">
            <img src="../img/How to Invest First 500.jpg" alt="How to Invest First 500?"/>
            <div class="gallery-item-caption">
              <!--<div>-->
                <h2>How to Invest First 500?</h2>
                <p>How to Invest First 500? LIVE DEMO to BUY Stocks & Index Funds</p>
              <!--</div>-->
              <a class="vimeo-popup" href="https://youtu.be/IrfRdDFEyMc" target="blank"></a>
            </div>
          </div>

          <div class="gallery-item">
            <img src="../img/Trading vs Investing in Stock Market.jpg" alt="Basics of TECHNICAL & FUNDAMENTAL ANALYSIS"/>
            <div class="gallery-item-caption">
              <!--<div>-->
                <h2>Basics of TECHNICAL & FUNDAMENTAL ANALYSIS</h2>
                <p>Trading vs Investing in Stock Market</p>
              <!--</div>-->
              <a class="vimeo-popup" href="https://youtu.be/0kDRlNJvgpM" target="blank"></a>
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function () {
            $(".video-gallery").magnificPopup({
              delegate: "a",
              type: "iframe",
              gallery: {
                enabled: true
              }
            });
          });
          
      </script>
      <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>