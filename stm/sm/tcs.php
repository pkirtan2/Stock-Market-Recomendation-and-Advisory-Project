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
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <title>TCS</title>
    <link rel="stylesheet" href="infy1.css">
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
      <a href="indexlogin.php" class="logo d-flex align-items-center" style="color: yellow;">
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

          <li><a class="nav-link scrollto" href="#Watchlist">Watchlist</a></li>

          <li><a class="nav-link scrollto" href="#Notification">Notification</a></li>

         

          <li><a class="nav-link scrollto" href="profile.php">Welcome <?PHP
          echo $_SESSION['uname']; ?></a></li>
          <li><a class="nav-link scrollto" href="\stm/loginsign/login/logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

    <!-- TradingView Widget BEGIN -->
<div class="price">
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
    {
    "symbol": "BSE:TCS",
    "width": 1000,
    "locale": "in",
    "colorTheme": "dark",
    "isTransparent": false
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
  <div class="chartheading">
    <h1>Chart</h1>
  </div>
  <!-- TradingView Widget BEGIN -->
<div class="minichart">
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.MediumWidget(
    {
    "symbols": [
      [
        "BSE:TCS|12M"
      ]
    ],
    "chartOnly": false,
    "width": 1000,
    "height": 400,
    "locale": "in",
    "colorTheme": "dark",
    "gridLineColor": "rgba(42 ,46, 57, 0)",
    "fontColor": "#787B86",
    "isTransparent": false,
    "autosize": false,
    "showVolume": false,
    "scalePosition": "no",
    "scaleMode": "Normal",
    "fontFamily": "Trebuchet MS, sans-serif",
    "noTimeScale": false,
    "valuesTracking": "1",
    "chartType": "line",
    "container_id": "tradingview_32d24"
  }
    );
    </script>
  </div>
  <!-- TradingView Widget END -->
  <div class="technicalchartheading">
    <h1>Technical Chart</h1>
  </div>
  <!-- TradingView Widget BEGIN -->
<div class="technical_chart">
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 610,
  "symbol": "BSE:TCS",
  "interval": "5",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "in",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_02c0a"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="company_profile">
  <h1>Company Profile</h1>
</div>
<div class="profile">
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-profile.js" async>
  {
  "symbol": "BSE:TCS",
  "width": 780,
  "height": 470,
  "colorTheme": "dark",
  "isTransparent": true,
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="fundamental_analysis">
  <h1>Fundamental Analysis</h1>
</div>
<div class="fundamental">
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
  {
  "symbol": "BSE:TCS",
  "colorTheme": "dark",
  "isTransparent": true,
  "largeChartUrl": "",
  "displayMode": "compact",
  "width": "480",
  "height": "520",
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->
</body>
</html>