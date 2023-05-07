<?php
error_reporting(E_ERROR);

session_start();
// $username=$_session['username'];
$username=$_SESSION['fname'];
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Crypto Evolution </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
<style>
  .img1{
  /* border-radius: 50%; */
  height:98px;
  width:98px;
}
</style>
</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box home-section">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Crypto Evolution
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="service.html">Services</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="why.html">Why Us</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="team.html">Team</a>
              </li> -->
              <!--  -->
              <!-- <li class="nav-item">
              <a> <//?php if(isset($_SESSION['email'])){echo $email;}else{echo"<li class='nav-item'><a class='nav-link' href='login.php'> <i class='fa fa-user' aria-hidden='true'></i> Login</a>
              </li> ";}?></a> -->
              
  
              <?php if(isset($_SESSION['fname'])){ }else{echo"<li class='nav-item'><a class='nav-link js-scroll-trigger' href='login.php?'> <i class='fa fa-user' aria-hidden='true'></i>Login</a></li> ";}?>
              <?php if(isset($_SESSION['fname'])){ }else{echo"<li class='nav-item'><a class='nav-link js-scroll-trigger' href='signup.php?'>Register</a></li> ";}?>
              <?php if(isset($_SESSION['fname'])){ }else{echo"<li class='nav-item'><a class='nav-link js-scroll-trigger' href='#about'>BUY CRYPTO</a></li> ";}?>
              
              </li></a>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="dashboard.php"></i><?php echo"<font color='white'> <padding='5px'>" . $fname."</font>";?></a>
              <?php
                   if(isset($_SESSION['fname'])){echo'
                    <li class="nav-item">
              <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="dashboard.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    </ul>
                </li>
            </li>
                    
                    ';}else {
                    echo"";
                  }?>;
              
              
            </ul>
              <?php if(isset($_SESSION['fname'])){echo"<li class='nav-item'><a class='nav-link js-scroll-trigger' href='logout.php?page=home.php?'>Logout</a></li> ";}else {
                echo"";
              }?>
            
              </li>
              <!-- <li class="nav-item">
              <//?php if(isset($_SESSION['.username'])){ echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout_user.php">Logout</i></a></li>' ;}else
                       {echo"<li class='nav-item'><a class='nav-link js-scroll-trigger' href='login.php?'>Login</a></li> ";}?>
              </li> -->
              <!-- <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form> -->
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Buy, Sell & Trade <br>
                      Cryptocurrencies
                    </h1>
                    <p>
                    CryptoEvolution is a trading platform that allows users to buy, sell, and trade cryptocurrencies with ease. Cryptocurrencies are digital assets that use encryption techniques to regulate the generation of units and verify transfers of funds. CryptoEvolution offers a user-friendly interface that enables traders to trade a wide range of cryptocurrencies, including Bitcoin, Ethereum, Ripple, and Litecoin, among others. With CryptoEvolution, traders can monitor real-time market data, track their trading history, and make informed decisions using a variety of analytical tools.                    </p>
                    <div class="btn-box">
                      <a href="#more" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Our <br>
                      Services
                    </h1>
                    <p>
                    Trading: CryptoEvolution allows users to buy, sell, and trade a wide range of cryptocurrencies, including Bitcoin, Ethereum, Ripple, Litecoin, and more.<br>
                    <br>Real-Time Market Data: The platform provides users with real-time market data, including price charts, order books, and trade history, enabling traders to make informed decisions.
                    </p>
                    <div class="btn-box">
                      <a href="#services" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      About <br>
                      Us
                    </h1>
                    <p>
                    At CryptoEvolution, our mission is to make it easy and secure for anyone to buy, sell, and trade cryptocurrencies. We believe that cryptocurrencies are the future of money, and that everyone should have the opportunity to participate in this exciting new market.<br><br>
                    Our platform provides a user-friendly interface that enables traders to monitor real-time market data, track their trading history, and make informed decisions using a variety of analytical tools. We also offer a mobile app, so users can access their accounts and trade on the go.
                    </p>
                    <div class="btn-box">
                      <a href="#about" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2 id="services">
            Our <span>Services</span>
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Currency Wallet
                </h5>
                <p>
                A currency wallet, also known as a digital wallet or cryptocurrency wallet, is a software program that stores public and private keys used to send, receive and store cryptocurrencies.
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Security Storage
                </h5>
                <p>
                CryptoEvolution stores the majority of their users' funds in cold storage, which means that they are stored offline and not accessible via the internet. This helps to protect against hacking and other cyber attacks.
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Expert Support
                </h5>
                <p>
                Users can contact CryptoEvolution's support team through the "Contact Us" page on their website, where they can submit a support ticket with their question or issue. The support team aims to respond to all inquiries within a timely manner and works to resolve any problems as quickly and efficiently as possible.
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            View All
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2 id="about">
          About <span>Us</span>
        </h2>
        <p>
        CryptoEvolution is a trading platform that allows users to buy, sell, and trade cryptocurrencies with ease. Cryptocurrencies are digital assets that use encryption techniques to regulate the generation of units and verify transfers of funds. CryptoEvolution offers a user-friendly interface that enables traders to trade a wide range of cryptocurrencies, including Bitcoin, Ethereum, Ripple, and Litecoin, among others. With CryptoEvolution, traders can monitor real-time market data, track their trading history, and make informed decisions using a variety of analytical tools.                    </p>

        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              We Are Crypto Evolution
            </h3>
            <p>
            CryptoEvolution, traders can monitor real-time market data, track their trading history, and make informed decisions using a variety of analytical tools. The platform also provides a secure and reliable trading environment, ensuring that users' funds and personal information are always protected. Whether you're a seasoned trader or just starting out in the world of cryptocurrencies, CryptoEvolution is a great platform to help you get started with your trading journey.
            </p>
            <p>
            CryptoEvolution is a great platform to help you get started with your trading journey..
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 id="more">
          Why Choose <span>Us</span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Expert Management
            </h5>
            <p>
            CryptoEvolution offers expert support to their users through various channels, including email and live chat. Their customer support team consists of knowledgeable and experienced professionals who are trained to assist users with any issues or questions they may have.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Secure Investment
            </h5>
            <p>
            Currency wallets can be stored on a variety of devices, including computers, mobile phones, and hardware devices. They come in different types, including hot wallets and cold wallets. A hot wallet is connected to the internet and is more convenient for frequent use, while a cold            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Instant Trading
            </h5>
            <p>
            Real-Time Market Data: The platform provides users with real-time market data, including price charts, order books, and trade history, enabling traders to make informed decisions.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Happy Customers
            </h5>
            <p>
            Customer Support: The platform offers 24/7 customer support via email and live chat, to assist users with any questions or issues they may have. 
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- team section -->
  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
          Our <span> Team</span>
        </h2>
      </div>

      <div class="team_container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="Images/Screenshot.png" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Joseph Brown
                </h5>
                <p>
                  Marketing Head
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/Crypto.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Nancy White
                </h5>
                <p>
                  Marketing Head
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/blog13.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Earl Martinez
                </h5>
                <p>
                  Marketing Head
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/blog9.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Josephine Allard
                </h5>
                <p>
                  Marketing Head
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end team section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What says our <span>Customers</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Trade
                    </h6>
                    <p>
                      Expert Trader
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                CryptoEvolution provides a range of educational resources, such as tutorials, videos, and articles, to help users learn about cryptocurrencies, trading strategies, and market analysis. These resources are designed to help users gain a deeper understanding of the cryptocurrency market and make more informed trading decisions. </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                     Coin Minner
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                CryptoEvolution provides a range of educational resources, such as tutorials, videos, and articles, to help users learn about cryptocurrencies, trading strategies, and market analysis. These resources are designed to help users gain a deeper understanding of the cryptocurrency market and make more informed trading decisions.
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      Trader
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                CryptoEvolution provides a range of educational resources, such as tutorials, videos, and articles, to help users learn about cryptocurrencies, trading strategies, and market analysis. These resources are designed to help users gain a deeper understanding of the cryptocurrency market and make more informed trading decisions. </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
Trader
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                CryptoEvolution provides a range of educational resources, such as tutorials, videos, and articles, to help users learn about cryptocurrencies, trading strategies, and market analysis. These resources are designed to help users gain a deeper understanding of the cryptocurrency market and make more informed trading decisions. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +1478 2563 726
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  cryptoevolution@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
            CryptoEvolution offers expert support to their users through various channels, including email and live chat. Their customer support team consists of knowledgeable and experienced professionals who are trained to assist users with any issues or questions they may have.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="service.html">
                Services
              </a>
              <a class="" href="why.html">
                Why Us
              </a>
              <a class="" href="team.html">
                Team
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="#">Crypo Evolution</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
