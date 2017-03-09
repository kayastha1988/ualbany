<?php session_start(); ?>
<script>
<?php
if (isset($_REQUEST["err"])) {
    ?>alert("<?php echo $_REQUEST["err"]; ?>");
        window.location = 'index.php';
<?php }
?>
</script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>UAlbany Care</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
        <!-- Font Awesome -->
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">    
        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
        <!-- Animate css -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
        <!-- Progress bar  -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
        <!-- Theme color -->
        <link id="switcher" href="assets/css/theme-color/purple-theme.css" rel="stylesheet">

        <!-- Main Style -->
        <link href="style.css" rel="stylesheet">

        <!-- Fonts -->

        <!-- Open Sans for body font -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Lato for Title -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    

        <style>


            .error
            {
                border-color:red;
            }
            .normal
            {
                border-color:black;
            }


        </style>
        <!--message dialog box-->
        <link href="alertify/themes/alertify.core.css" rel="stylesheet" type="text/css"/>
        <link href="alertify/themes/alertify.default.css" rel="stylesheet" type="text/css"/>
        <script src="alertify/lib/alertify.min.js" type="text/javascript"></script>


    </head>
    <body>

        <!-- BEGAIN PRELOADER -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- END PRELOADER -->

        <!-- SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        <!-- END SCROLL TOP BUTTON -->
        <?php
        if (isset($_SESSION['msg'])) {
            echo "<script>";
            echo "alertify.success(\"" . $_SESSION['msg'] . "\")";
            echo "</script>";
            unset($_SESSION['msg']);
        }
        ?>
        <!-- Start header -->
        <header id="header">
            <!-- header top search -->

            <!-- header bottom -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="header-contact">
                                <ul>
                                    <li>
                                        <div class="phone">
                                            <i class="fa fa-phone"></i>
                                            <a href="callto:"+1(518) 442-5454" >+1(518) 442-5454</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="mail">
                                            <i class="fa fa-envelope"></i>
                                            <a href="mailto:askUHC@albany.edu">askUHC@albany.edu</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="header-login">
                                <a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">Login / Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End header -->

        <!-- Start login modal window -->
        <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
            <div class="modal-dialog">
                <!-- Start login section -->
                <div id="login-content" class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="login1.php">
                            <div class="form-group">
                                <input type="email" name="uname" id="user name" placeholder="E-mail" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" id="password" placeholder="Password" class="form-control" required>
                            </div>
                            <div class="loginbox">
                             <!--<label><input type="checkbox"><span>Remember me</span></label>-->
                                <button class="btn signin-btn" type="submit">SIGN IN</button>
                            </div>                    
                        </form>
                    </div>
                    <div class="modal-footer footer-box">
                        <a href="forget.php">Forgot password ?</a>
                        <span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>            
                    </div>
                </div>
                <!-- Start signup section -->
                <div id="signup-content" class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
                    </div>
                    <div class="modal-body">
                        <form action="registration1.php" method="post">
                            <div class="form-group">
                                <input placeholder="First Name" class="form-control" id="first name" name="fname" required>
                            </div>
                            <div class="form-group">
                                <input placeholder="Last name" class="form-control" id="last name" name="lname" required>
                            </div>
                            <div class="form-group">
                                <input placeholder="Email" type="email" class="form-control" id="email address" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control" name="passwd" id="passwd" required>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" class="form-control" id="confirm password" required>
                            </div>
                            <div class="form-group">
                                Gender&nbsp;&nbsp;
                                <input type="radio" name="gender" value="male" id="gender"/>Male&nbsp;
                                <input type="radio" value="female" name="gender" id="gender" />Female<br /><br>

                                Type of User<br/><br/>
                                <select name="type" >

                                    <option required>----Select----</option>
                                    <option value="p" >Patient</option>
                                    <option value="d">Doctor</option>
                                </select>
                            </div>
                            <div class="signupbox">
                                <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
                            </div>
                            <div class="loginbox">
                                <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
                                <button class="btn signin-btn" name="btnSignup" type="submit">SIGN UP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End login modal window -->

        <!-- BEGIN MENU -->
        <section id="menu-area">      
            <nav class="navbar navbar-default" role="navigation">  
                <div class="container">
                    <div class="navbar-header">
                        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- LOGO -->              
                        <!-- TEXT BASED LOGO -->
                        <a class="navbar-brand" href="index.php">UAlbany Care Plus</a>              

                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="appointment.php">Book Appointment</a></li>

                            <li><a href="contact.php">Contact</a></li>
                        </ul>                     
                    </div><!--/.nav-collapse -->

                </div>     
            </nav>
        </section>
        <!-- END MENU --> 

        <!-- Start slider -->
        <section id="slider">
            <div class="main-slider">
                <div class="single-slide">
                    <img src="assets/images/slider.jpg" alt="img">
                    <div class="slide-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="slide-article">
                                        <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">We take care for you</h1>
                                        <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Hours of Operation

                                            9:00am to 4:30 pm - Monday through Friday during the Fall and Spring Semesters
                                            8:00am to 3:30pm - Monday through Friday during the Summer and Breaks
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <img src="assets/images/3.jpg" alt="img">
                    <div class="slide-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="slide-article">
                                        <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">UAlbany Health Care+</h1>
                                        <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s"></p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </section>
        <!-- End slider -->



        <!-- Start about  -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area">
                            <h2 class="title">About us</h2>
                            <span class="line"></span>
                            <p>Student Health Services strives to promote student health and wellness by providing medical treatment, prevention and education in an environment that respects the uniqueness of each individual.</br></p>
                            <P style="color:RED">	As is the case with all appointments at Student Health Services:
                            <p>This service is available for registered students only.
                                All registered students receive care at the Student Health Services at no
                                cost for visits (though we recommend all student remember
                                to bring their health insurance information in the event
                                outside medical services are needed)


                            </p>
                            <P style="color:RED">	At this time available services to students include:<BR/></p>

                            <p>	Making UAlbany Student Health Services appointments.<BR/>
                                &nbsp; &nbsp; Cancelling UAlbany Student Health Services appointments. </p>


                            <P>		 <a href="http://www.albany.edu/health_center/directions.shtml">Click here </a> for 
                                shuttle information and also for driving directions to UAlbany Health Care.<BR/>
                            </P>		
                            <P>Please send feedback to <a href="mailto:askUHC@albany.edu">askUHC@albany.edu</a>.

                            </P>	
                            <P>Best wishes for a healthy school year! </P>
                        </div>
                    </div>












                    <!-- Start footer -->
                    <footer id="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="footer-left">
                                        <p>UAlbany Care Plus</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
                </footer>
                <!-- End footer -->

                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <!-- Bootstrap -->
                <script src="assets/js/bootstrap.js"></script>
                <!-- Slick Slider -->
                <script type="text/javascript" src="assets/js/slick.js"></script>    
                <!-- counter -->
                <script src="assets/js/waypoints.js"></script>
                <script src="assets/js/jquery.counterup.js"></script>
                <!-- Wow animation -->
                <script type="text/javascript" src="assets/js/wow.js"></script> 
                <!-- progress bar   -->
                <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  


                <!-- Custom js -->
                <script type="text/javascript" src="assets/js/custom.js"></script>

                </body>
                </html>