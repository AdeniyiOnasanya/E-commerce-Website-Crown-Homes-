<?php 
session_start();



if(isset($_GET['logout'])){

    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');

}

?>
<?php if($_POST["submit"]) {
    $recipient="info@huthmans.com";
    $subject=$_POST["subject"];
    $sender=$_POST["name"];
    $phoneN= $_POST["phoneNum"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nPhoneNumber: $phoneN\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    
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
    <title>Crown Homes | Help</title>

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
                        <a href="tel:02034793846">001234567890</a>
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
                    <a class="nav-brand" href="index.php"><img src="img/core-img/mainLogo.png" alt="" style="width: 170px; padding-top:50px;" id='Logo'></a>

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

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Help</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 18 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>10 AM - 15 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="img/icons/call.png" alt="" style='width:20px; height:20px;'> 00123456789</h6>
                            <h6><img src="img/icons/interface.png" alt="" style='width:20px; height:20px;'> info@crownhomes.com</h6>
                            <h6><img src="img/icons/location_tag.png" alt="" style='width:20px; height:20px;'> 10 heart Road London <br>EN9 1JH</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="contact.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name"  placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="phoneNum"  placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email"  placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject"  placeholder="Your Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message"  cols="30" rows="10" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn south-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->

    <section class="">
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2473.8032958716212!2d-0.005054484587438029!3d51.68174350576233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761fffa0b48ad7%3A0x4a4924431b4a1cbb!2sFlair%20Business%20Equ%20Ltd%2C%20110%20Brooker%20Rd%2C%20Waltham%20Abbey%20EN9%201JH!5e0!3m2!1sen!2suk!4v1585218768327!5m2!1sen!2suk" width="100%" height="540px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </section>

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
                                <h6><img src="img/icons/interface.png" alt="" style='width:20px; height:20px;'> info@crownhomes.com</h6>
                                <h6><img src="img/icons/location_tag.png" alt="" style='width:20px; height:20px;'> 10 heart Road London <br>Nw9</h6>
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

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6>
                            </div>
                        
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Featured Properties</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            
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
