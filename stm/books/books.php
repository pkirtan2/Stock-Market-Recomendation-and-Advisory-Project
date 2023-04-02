<?php
    include "conn.php";
   
    session_start();
    if(!isset($_SESSION['uname'])){
      header("Location: {$hostname}/stm/loginsign/login/login.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="../sm/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../sm/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../sm/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../sm/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../sm/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="books.css">
    <link href="../sm/assets/css/style.css" rel="stylesheet">
    <link href="./lg.png" rel="icon">
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
</header>
    <div class="title">
        <h1>Books</h1>
    </div>
    <!-- <div class="books">
        <div class="book_title">
            <h1>The Intelligent Investor</h1>
        </div> 
        <div class="image">
            <img src="../img/Books_Images/intelligent_investor.png" alt="image">
            <div class="preview">
                <button><a href="../Investment_Books/The Intelligent Investor The Definitive Book On Value Investing, Revised Edition by Benjamin Graham, Jason Zweig (z-lib.org).pdf" target = "blank">Preview</a></button>
            </div>
        </div>
        <div class="bookdetails">
            <h4>The Intelligent Investor is based on value investing, an investment approach Graham began teaching at Columbia Business School in 1928 and subsequently refined with David Dodd.This sentiment was echoed by other Graham disciples such as Irving Kahn and Walter Schloss. Warren Buffett read the book at age 20 and began using the value investing taught by Graham to build his own investment portfolio.</h4>
        </div>
        <div class="download">
            <button><a href="../Investment_Books/The Intelligent Investor The Definitive Book On Value Investing, Revised Edition by Benjamin Graham, Jason Zweig (z-lib.org).pdf" download>Download</a></button>
        </div>
    </div> -->
    <div class="product-card">
        <div class="product-image">
        <img src="../img/Books_Images/intelligent_investor.png">
        <div class="preview">
            <button><a href="../Investment_Books/The Intelligent Investor The Definitive Book On Value Investing, Revised Edition by Benjamin Graham, Jason Zweig (z-lib.org).pdf" target = "blank">Preview</a></button>
        </div>
      </div>
      <div class="product-details">
        <h1>The Intelligent Investor</h1>
        <p>The Intelligent Investor is based on value investing, an investment approach Graham began teaching at Columbia Business School in 1928 and subsequently refined with David Dodd.This sentiment was echoed by other Graham disciples such as Irving Kahn and Walter Schloss. Warren Buffett read the book at age 20 and began using the value investing taught by Graham to build his own investment portfolio.</p>
        <button><a href="../Investment_Books/The Intelligent Investor The Definitive Book On Value Investing, Revised Edition by Benjamin Graham, Jason Zweig (z-lib.org).pdf" download>Download</a></button>
      </div>
    </div>
    
    <div class="product-card">
        <div class="product-image">
        <img src="../img/Books_Images/richdadpoordad.jfif">
        <div class="preview">
            <button><a href="../Investment_Books/Rich Dad Poor Dad What the Rich Teach Their Kids About Money—That the Poor and Middle Class Do Not by Robert T. Kiyosaki (z-lib.org).epub.pdf" target = "blank">Preview</a></button>
        </div>
      </div>
      <div class="product-details">
        <h1>Rich Dad Poor Dad</h1>
        <p>Rich Dad Poor Dad is written in the style of a set of parables, ostensibly based on Kiyosaki's life.The titular "rich dad" is his friend's father who accumulated wealth due to entrepreneurship and savvy investing, while the "poor dad" is claimed to be Kiyosaki's own father who he says worked hard all his life but never obtained financial security.</p>
        <button><a href="../Investment_Books/Rich Dad Poor Dad What the Rich Teach Their Kids About Money—That the Poor and Middle Class Do Not by Robert T. Kiyosaki (z-lib.org).epub.pdf" download>Download</a></button>
      </div>
    </div>

    <div class="product-card">
        <div class="product-image">
        <img src="../img/Books_Images/warren buffett way.jfif">
        <div class="preview">
            <button><a href="../Investment_Books/The Warren Buffett Way by Robert G. Hagstrom (z-lib.org).pdf" target = "blank">Preview</a></button>
        </div>
      </div>
      <div class="product-details">
        <h1>The Warren Buffett Way</h1>
        <p>The Warren Buffett Way, a book by author Robert Hagstrom, which outlines the business and investment principles of value investing practiced by American businessman and investor Warren Buffett.</p>
        <button><a href="../Investment_Books/The Warren Buffett Way by Robert G. Hagstrom (z-lib.org).pdf" download>Download</a></button>
      </div>
    </div>

    <div class="product-card">
        <div class="product-image">
        <img src="../img/Books_Images/The Psychology of Money.jfif">
        <div class="preview">
            <button><a href="../Investment_Books/The Psychology of Money Timeless Lessons on Wealth, Greed, and Happiness by Morgan Housel (z-lib.org).epub.pdf" target = "blank">Preview</a></button>
        </div>
      </div>
      <div class="product-details">
        <h1>The Psychology of Money</h1>
        <p>A fundamental point of The Philosophy of Money is that money brings about personal freedom. The effect of freedom can be appreciated by considering the evolution of economic obligations. When someone is a slave, their whole person is subject to the master.</p>
        <button><a href="../Investment_Books/The Psychology of Money Timeless Lessons on Wealth, Greed, and Happiness by Morgan Housel (z-lib.org).epub.pdf" download>Download</a></button>
      </div>
    </div>

    <div class="product-card">
        <div class="product-image">
        <img src="../img/Books_Images/Warren Buffetts management secrets.jfif">
        <div class="preview">
            <button><a href="../Investment_Books/Warren Buffetts management secrets  proven tools for personal and business success by Buffett, Mary (z-lib.org).pdf" target = "blank">Preview</a></button>
        </div>
      </div>
      <div class="product-details">
        <h1>Warren Buffetts management secrets</h1>
        <p>Mary Buffett and David Clark have written the first book ever to take an in-depth look at Warren Buffett's philosophies for personal and professional management—what they are, how they work, and how you can use them.</p>
        <button><a href="../Investment_Books/Warren Buffetts management secrets  proven tools for personal and business success by Buffett, Mary (z-lib.org).pdf" download>Download</a></button>
      </div>
    </div>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="../sm/assets/js/main.js"></script>
</body>
</html>