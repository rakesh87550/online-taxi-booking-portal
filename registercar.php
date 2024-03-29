<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BOOKCAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="carimages/car.png">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- Animated car stylesheet -->
    <link rel="stylesheet" href="css/carstyle.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <script src="js/respond.min.js"></script>


</head>

<body>
    <!-- leftside icon bar  -->
    <?php include("icon.php"); ?>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            
            <header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"></a>
						<!-- <img src="images/logo.png" alt="Sometaxi" width="250px" height="180px"> -->
						<h1 id="fh5co-logo"><a href="index.php"><i class="fa fa-taxi"></i>BOOKCAB<span style="font-size: 16px;letter-spacing: 0px;">A Complete Solution of Taxi</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a href="index.php">Home</a></li>
								<li>
									<a href="#" class="fh5co-sub-down">Taxi Service</a>
									<ul class="fh5co-sub-menu">
										<li><a href="#">Local Taxi</a></li>
										<li><a href="#">Round Trip</a></li>
									</ul>
								</li>
								<li><a href="#" target="_blank">Hotels</a></li>
								<li><a href="drycar/index.php">Dry Car</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li class="active"><a href="registercar.php" class="btn btn-primary btn-outline">Register Car</a></li>
								<li><a href="login.php" class="btn btn-primary btn-outline">Login</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

            <!-- end:header-top -->

            <div class="fh5co-hero" style="height: 1240px;">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg); height:1240px;">
                    <div class="desc">
                        <div class="container">
                            <div class="row" style="margin-top: -23em; border-left:2px solid #fff;border-right:2px solid #fff; border-radius:30px;">
                                <div class="animate-box">
                                    <h1 class="text-center" style="color:cornsilk; text-decoration:underline;">Register Your Car and Earn As You Want</h1><br>
                                    <form action="" method="post">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group text-center">
                                                <label for="firstname"><b> First Name </b></label>
                                                <input type="text" name="firstname" id="first name" class="form-control" placeholder="Enter your firstname" required="true" autocomplete="off">
                                            </div>
                                            <hr><br>
                                            <div class="form-group text-center">
                                                <label for="lastname"><b>Last Name</b> </label>
                                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter your last name" required="true" autocomplete="off">
                                            </div>
                                            <hr><br>
                                            <div class="form-group text-center">
                                                <label for="contact"><b>Contact Number</b> </label>
                                                <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter your contact number" required="true" autocomplete="off">
                                            </div>
                                            <hr><br>
                                            <div class="form-group text-center">
                                                <label for="email"><b>Email</b> </label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required="true" autocomplete="off" patterns="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                            </div>
                                            <hr><br>
                                            <div class="form-group text-center">
                                                <label for="city"><b>City</b> </label>
                                                <input type="text" name="city" id="city" class="form-control" placeholder="Enter your city" required="true" autocomplete="off">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="rc"><b>Car Vehicle RC</b></label>
                                                <input type="file" name="rc" id="rc" class="form-control">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="insurance"><b>Car Vehicle Insurance</b></label>
                                                <input type="file" name="insurance" id="insurance" class="form-control">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="daadhar"><b>Driver Aadhar Card</b></label>
                                                <input type="file" name="daadhar" id="daadhar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group text-center">
                                                <label for="state"><b> State </b></label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder="Enter your state" required="true" autocomplete="off">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="zip"><b>Zip Code</b> </label>
                                                <input type="number" name="zip" id="zip" class="form-control" placeholder="Enter your zip code" required="true" autocomplete="off">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="pancard"><b>Owner PAN Card</b> </label>
                                                <input type="file" name="pancard" id="pancard" class="form-control">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="passbook"><b>Owner Cancelled Caheque Or Passbook</b></label>
                                                <input type="file" name="passbook" id="passbook" class="form-control">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="aadhar"><b>Owner Aadhar Card</b></label>
                                                <input type="file" name="aadhar" id="aadhar" class="form-control">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="address"><b>Owner Address</b></label>
                                                <input type="file" name="address" id="address" class="form-control">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="permit"><b>Car Vehicle Permit</b></label>
                                                <input type="file" name="permit" id="permit" class="form-control">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="license"><b>Car Driving License</b></label>
                                                <input type="file" name="license" id="license" class="form-control">
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <label for="daddress"><b>Driver Address Proof</b></label>
                                                <input type="file" name="daddress" id="daddress" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="submit" name="submit" value="Submit Car" class="btn btn-primary btn-lg">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END fh5co-page -->
    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/sticky.js"></script>

    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- CS Select -->
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

</html>