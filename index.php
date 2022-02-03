<?php 
session_start();



if(isset($_GET['logout'])){

    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Crown Homes| Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/mainLogo.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <script>
window.onscroll = function() {
  growShrinkLogo()
};

function growShrinkLogo() {
  var Logo = document.getElementById("Logo")
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    Logo.style.width = '130px';

  } else {
    Logo.style.width = '170px';
  }
}
</script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="">info@crownhomes.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:02034793846">00123456789</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/core-img/mainLogo.png" alt="" style="width: 170px; padding-top:70px;" id='Logo'></a>


                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    
                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                         
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                
                                <li><a href="index.php">Home</a></li>
                                <li><a href="lets.php">Discover</a></li>
                                <li><a href="managebooking.php">Manage Booking</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact.php">Help</a></li>
                                <li><a href="Adminpage/page-login.php"><img src="img/icons/user.png" alt="" style='width:20px; height:20px;'></a></li>
                                <li>
                                      <?php //if user logs in print information

                                       if(isset($_SESSION['username'])) : ?>

                                      <p>Welcome back, <?php echo$_SESSION['username']; ?></p>
                                         <a href="index.php?logout=' 1'">Log Out</a

                                             <?php  endif ?>


                                </li>
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        
             <!-- Single Hero Slide -->
                <video class="single-hero-slide bg-img" style="position:relative; z-index:0;" autoplay muted loop >
                <source src="video/houses2.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
                </video>
               <div class="container h-100" style="position:absolute; top:15%; left:6%; z-index:1;">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 class=" wow fadeInUp" data-delay="100ms">FIND YOUR PERFECT HOLIDAY HOME</h2>
                            </div>
                            
                        </div>

                    </div>
                </div>    
       </section>
    <!-- ##### Hero Area End ##### -->

      <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search for your home</p>
                        </div>
                        <!-- Search Form -->
                        <form action="sales.php" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="cities" name="location">
                                            <option>Locations</option>
                                            <option>London</option>
                                            <option>Manchester</option>
                                            <option>Birmingham</option>
                                            <option>Leeds</option>
                                            <option>Liverpool</option>
                                            <option>Southampton</option>
                                            <option>Newcastle</option>
                                            <option>Sunderland</option>
                                            <option>Wolverhampton</option>
                                            <option>Portsmouth</option>
                                            <option>Bradford</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="bedrooms"  name="guests">
                                            <option>Guests</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="date" name="" class="form-control" placeholder="Check-in" required="true" name="check-in"> 
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <input type="date" name="" class="form-control" placeholder="Check-out" required="true" name="check-out"> 
                                    </div>
                                </div>

                               

                                <div class="col-12 search-form-second-steps">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                       <select class="form-control" id="catagories">
                                            <option>Building Type</option>
                                            <option>Apartment</option>
                                            <option>House</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                         <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                        <div data-min="120" data-max="820" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="120" data-value-max="820">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">120 sq. ft - 820 sq. ft</div>
                                    </div>

                                    <!-- Distance Range -->
                                    <div class="slider-range">
                                        <div data-min="10" data-max="1300" data-unit=" mil" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1300">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">10 mil - 1300 mil</div>
                                    </div>
                                </div>

                                        
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#" id="moreFilter">+ More filters</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" name="search" class="btn south-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Featured Properties</h2>
                        <p>Check out our most booked properties.</p>
                    </div>
                </div>
            </div>
            <div class="row">

            <?php 
            require_once 'include/DB_Functions.php';
            $db = new DB_Functions();
            $query= "SELECT * FROM Products ORDER BY 1 ASC  LIMIT 0,6";
            $db->getProducts($query);
             ?>

            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a new home</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">We provide luxury Properties available for sales  </h6>
                        <a href="sales.php" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>Client testimonials</h2>
                        <p>What our clients thinks about our services </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Stayed at Luxury 2/3 Bed Apartment in manchester</h5>
                            <p>Great location, beautiful apartment and a high end feel with all your comforts of home. I had a lovely stay... Thanks Ray</p>

                            <div class="testimonial-author-info">
                                <img src="img/blog-img/customer1.jpg" alt="">
                                <p>Olasheni, Dubai,United Arab Emirates<br> <span>Customer</span><br><span>January 2021</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Stayed at Hendon </h5>
                            <p>Modern and very decent accommodation 40 minutes from the center with bus and metro transport nearby. Large enough accommodation with children.</p>
                        </div>


                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Stayed at Luxury 3 Bed Apartment in the heart of Mayfair London UK</h5>
                            <p> Explained everything about the apartment and responded right away to all the questions I had. He was very helpful even helped me with all my luggage. Great host and a person. I will definitely rent from him again.</p>

                            <div class="testimonial-author-info">
                                <img src="img/blog-img/customer3.jpg" alt="">
                                <p>Christian, Kornwestheim, Germany <br><span>Customer</span><br><span>January 2021</span></p>
                            </div>
                        </div>

                        

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Stayed at Colindale apartment London UK</h5>
                            <p>Welcomed by amazing people! rapidly response to allour needs! We successfully seattle down in UK</p>

                            <div class="testimonial-author-info">
                                <img src="img/blog-img/Nopicture.png" alt="">
                                <p>경운 <br><span>Customer</span><br><span>March 2021</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Stayed at Hendon 4 bed Apartment London UK</h5>
                            <p>Place was great! It’s in a very good location close to public transportation. Don’t hesitate to book!</p>

                            <div class="testimonial-author-info">
                                <img src="img/blog-img/customer4.jpg" alt="">
                                <p>Fabiano, Mahwah, NJ <br><span>Customer</span><br><span>October 2020</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area End ##### -->

 

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/call.png" alt="" style='width:20px; height:20px;'> 00123456789</h6>
                                <h6><img src="img/icons/interface.png" alt="" style='width:20px; height:20px;'> info@crownshomes.com</h6>
                                <h6><img src="img/icons/location_tag.png" alt="" style='width:20px; height:20px;'> 10 heart Road London <br>NW9</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 18 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>11 AM - 15 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>12 PM - 16 PM</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>