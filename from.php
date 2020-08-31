<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Responsive Sticky Navbar</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
          <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/swiper.css">
        <!-- icofont css -->
    <link rel="stylesheet" type="text/css" href="css/icofont.css" media="all" />
    <!-- carousel css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" media="all" />
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" media="all" />
    <!-- counterup css -->
    <link href="css/jquery.classycountdown.css" rel="stylesheet" type="text/css">
    
    <!-- query.wm-zoom-1 css -->
    <link rel="stylesheet" type="text/css" href="css/jquery.wm-zoom-1.0.min.css" media="all" />
    <!-- flexslider css -->
    <link rel="stylesheet" type="text/css" href="css/flexslider.css" media="all" />
    <!-- fonts/stylesheet css -->
    <link rel="stylesheet" type="text/css" href="fonts/stylesheet.css" media="all" />
    
    <!-- slicknav css -->
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css" media="all" />
    
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="css/main.css" media="all" />
    
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<header>
      <div class="container-fluid top_header">
        <div class="container">
          <p class="float_left">Laundry on the Go !</p>
          
          <div class="float_right">
            <ul>
              <li><a href=""><i class="fa fa-facebook"></i></a></li>
              <li><a href=""><i class="fa fa-twitter"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div> <!-- end container -->
      </div><!-- end top_header -->
      <div class="bottom_header top-bar-gradient">
        <div class="container clear_fix">
          <div class="float_left logo">
            <a href="index.php">
              <img src="images/logo_1.png" width="220" height="90" alt="LAUNDRY">
            </a>
          </div>
          <div class="float_right address">
            
            <div class="top-info">
              <div class="icon-box">
                <span class="separator icon icon-Phone2"></span>              
              </div>
              <div class="content-box">
                <p>080 - 40993222 <br><span>Sabbirsp38@gmail.com</span></p>
              </div>
            </div>
            <div class="top-info">
              <div class="icon-box">
                <span class="separator icon icon-Timer"></span>
              </div>
              <div class="content-box">
                <p>Mon - Sun 8.00am - 10.00pm <br><span>Except National Holidays and Festivals</span></p>
              </div>
            </div>
          </div>
        </div> <!-- end container -->
      </div> <!-- end bottom_header -->
    </header>

<!-- Manu Start Here  -->

<div class="manugradient">
  <div class="container">
    <nav class="navbar  navcoustom ">
      <div class="container-fluid">
        <ul class="nav navbar-nav  justify-content-center">
          <li class="nav-item"><a href="index.php">Home</a></li>
          <li class="nav-item"><a href="about.php">About Us</a></li>
          <li class="nav-item"><a href="services.php">Services</a></li>
          <li class="nav-item"><a href="from.php">Order Pickup</a></li>
          <li class="nav-item"><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </div>
    </nav>  
  </div>
</div>

<!-- Manu End Here -->



<!--From start here-->
<div  class=" container">
  <form method="post" action="process.php">
    <div class="contact">
        <div class="row">
            <div class="col-lg-6 col-md-6"> 
                    <input type="text" name="uname" class="form-control custins"  placeholder="Full Name" required>  
              </div>
              <div class="col-lg-6 col-md-6">
                 <input type="number" name="pnum" class="form-control custins"  placeholder="Phone Number" required>
              </div>
              <div class="col-lg-12 col-md-12">
                <input type="email" name="uemail" class="form-control custins" aria-describedby="sizing-addon1" placeholder="Email" required>
                <input type="text" name="uloc" class="form-control custins" aria-describedby="sizing-addon1" placeholder="pickup location" required>
            </div>
            <div class="col-lg-12 col-md-12">
                <textarea name="msg" type="text"  class="form-control custins"></textarea>
               <center><button class="btn btn-lg " type="submit" value="submit" required>Sand Your Message</button></center>
            </div>

             
        </div>
    </div>
  </form>
</div>
<!--From End here-->
   
<!-- Fotter Start here -->
    <footer >
      
      <div class="bottom_footer container-fluid">
        <div class="container">
          <p class="float_left">Copyright © Sabbir Mahmud | Dhaka. All rights reserved.</p>
          <p class="float_right">Powered by: <a href="http://eitsbd.net/" target="_blank">Express IT Solutions</a></p>
        </div>
      </div> <!-- End bottom_footer -->
    </footer>


</body>
</html>







<script src="js/swiper.js"></script>
  <script>
   $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('navbar-fixed-top');
            }

            else {
                  $('nav').removeClass('navbar-fixed-top');
            }
      })


    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>
