<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>UAlbany Care Plus : Appointment</title>
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
        <link rel="stylesheet" type="text/css" href="assets/css/button.css"/> 
        <!-- Bootstrap progressbar  --> 
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
                                <a class="login modal-form"  href="index.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End header -->



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
                        <a class="navbar-brand" href="student.php">UAlbany Care Plus</a>              

                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                            <li><a href="student.php">Home</a></li>
                            <li class="active"><a href="#">Book Appointment</a></li>
                            <li><a href="mprofile.php">Manage Profile</a></li>
                            <li><a href="studentcontact.php">Contact</a></li>
                        </ul>                     
                    </div><!--/.nav-collapse -->

                </div>     
            </nav>
        </section>
        <!-- End login modal window -->

        <section id="single-page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-page-header-left">
                                <h2>Make Appointment</h2>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-page-header-right">
                                <ol class="breadcrumb">
                                    <li><a href="student.php">Home</a></li>
                                    <li class="active">Book Appointment</li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End single page header -->

        <!-- Start Feature -->
        <section id="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area">
                            <h2 class="title">Appointment</h2>
                            <span class="line"></span>
                            <p>Schedule Appointment with our best specialist</p>
                            <form method="post" action="date.php">
                                <button >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </form></br>
                            <form method="post" action="dimmu.php">
                                <button>Immunization</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feature -->



<!-- Start footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                    <p>UAlbany Care Plus</p>
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