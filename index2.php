<?php
session_start();
$_SESSION['user-name'];
$_SESSION['user-phone'];
?>
<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SOMETAXI &mdash; A Unit of Some Group</title>
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
						<h1 id="fh5co-logo"><a href="index.php"><i class="fa fa-taxi"></i>SOMETAXI<span style="font-size: 16px;letter-spacing: 0px;">A Unit of Some Group</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active"><a href="index.php">Home</a></li>
								<li>
									<a href="#" class="fh5co-sub-down">Taxi Service</a>
									<ul class="fh5co-sub-menu">
										<li><a href="#">Local Taxi</a></li>
										<li><a href="#">Round Trip</a></li>
									</ul>
								</li>
								<li><a href="https://www.somegroup.in" target="_blank">Some Hotels</a></li>
								<li><a href="drycar/index.php">Dry Car</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="registercar.php" class="btn btn-primary btn-outline">Register Car</a></li>
								<li>
									<div class="dropdown show">
										<a class="btn btn-primary btn-outline dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<?php echo $_SESSION['user-name']; ?>
										</a>

										<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<a class="dropdown-item" href="mybookings.php">Bookings</a>
											<a class="dropdown-item" href="updateprofile.php">Update Profile</a>
											<a class="dropdown-item" href="close.php">Logout</a>
										</div>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- end:header-top -->

			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
					<div class="desc">
						<div class="container">
							<div class="row">
								<div class="col-sm-5 col-md-5">
									<div class="tabulation animate-box">

										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active">
												<a href="#localtaxi" aria-controls="localtaxi" role="tab" data-toggle="tab">Local Taxi</a>
											</li>
											<li role="presentation">
												<a href="#roundtrip" aria-controls="roundtrip" role="tab" data-toggle="tab">Round Trip</a>
											</li>
											<!-- <li role="presentation">
												<a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Packages</a>
											</li> -->
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="localtaxi">
												<div class="row">
													<form method="POST" action="showcars.php">
														<div class="col-xxs-12 col-xs-6 mt">
															<div class="input-field">
																<label for="from">From:</label>
																<!-- <input type="text" name="tfrom" class="form-control" id="from-place" placeholder="Siliguri , West Bengal" disabled /> -->
																<select class="cs-select cs-skin-border" name="tfrom" id="from-place">
																	<option value="" disabled>Pickup Place</option>
																	<option value="siliguri, westbengal">Siliguri, WestBengal</option>
																	<option value="Batabari">Batabari</option>
																	<option value="Murti">Murti</option>
																	<option value="Moynaguri">Moynaguri</option>
																	<option value="Jalpaiguri">Jalpaiguri</option>
																	<option value="Banarhat">Banarhat</option>
																	<option value="Binnaguri">Binnaguri</option>
																	<option value="Oodlabari">Oodlabari</option>
																	<option value="Gazoldoba">Gazoldoba</option>
																	<option value="Talipara more">Talipara more</option>
																	<option value="Birpara Falakata">Birpara Falakata</option>
																	<option value="Falakata">Falakata</option>
																	<option value="Dhupguri">Dhupguri</option>
																	<option value="Alipurduar">Alipurduar</option>
																	<option value="Jaygaon">Jaygaon</option>
																</select>
															</div>
														</div>
														<div class="col-xxs-12 col-xs-6 mt">
															<div class="input-field">
																<label for="to">To:</label>
																<!-- <input type="text" name="tdes" class="form-control" id="to-place" placeholder="Destination City" required="true" autocomplete="off" /> -->
																<select class="cs-select cs-skin-border" name="tdes" id="to-place">
																	<option value="" disabled>Destination Place</option>
																	<option value="Malbazar">Malbazar</option>
																	<option value="Jalpaiguri">Jalpaiguri</option>
																	<option value="New Jalpaiguri  / Njp">New Jalpaiguri / Njp</option>
																	<option value="Bagdogra">Bagdogra</option>
																	<option value="Samsing Sunntalekhola">Samsing Sunntalekhola</option>
																	<option value="Jhalong Bindu">Jhalong Bindu</option>
																	<option value="Murti Batabari">Murti Batabari</option>
																	<option value="Murti Drop">Murti Drop</option>
																	<option value="Darjeeling">Darjeeling</option>
																	<option value="Lava,Kalimpong">Lava,Kalimpong</option>
																	<option value="Delo, Kalimpong">Delo, Kalimpong</option>
																	<option value="Jaldapara">Jaldapara</option>
																	<option value="Hassimar">Hassimar</option>
																	<option value="Lataguri">Lataguri</option>
																</select>
															</div>
														</div>
														<div class="col-xxs-12 col-xs-6 mt alternate">
															<div class="input-field">
																<label for="date-start">Pickup Date:</label>
																<input type="text" name="tdate" class="form-control" id="date-start" placeholder="Enter Date" required="true" />
															</div>
														</div>
														<div class="col-xxs-12 col-xs-6 mt alternate">
															<div class="input-field">
																<label for="package">Package Type</label>
																<!-- <input type="text" name="ttype" class="form-control" id="package" placeholder="Package Type" required="true" /> -->
																<select class="cs-select cs-skin-border" name="ttype" id="package">
																	<option value="" disabled>Package Type</option>
																	<option value="ac">AC Car</option>
																	<option value="nonac">NON AC Car</option>
																	<!--<option>4</option>-->
																</select>
															</div>
														</div>
														<div class="col-sm-12 mt col-xs-6 mt">
															<section>
																<label for="class">Choose Your Car:</label>
																<select class="cs-select cs-skin-border" name="tsit">
																	<option value="" disabled>Car Types</option>
																	<option value="4">Mini</option>
																	<option value="3">Prime Sedan</option>
																	<option value="3">Prime Multimedia</option>
																	<option value="7">Prime SUV</option>
																	<option value="9">LUX</option>
																	<option value="18">Traveller</option>
																</select>
															</section>
														</div>
														<div class="col-xxs-12 col-xs-6 mt">
															<section>
																<label for="class">Adult:</label>
																<select class="cs-select cs-skin-border" name="tadult">
																	<option value="" disabled>Select Adults</option>
																	<option value="0">0</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																</select>
															</section>
														</div>
														<div class="col-xxs-12 col-xs-6 mt">
															<section>
																<label for="class">Children:</label>
																<select class="cs-select cs-skin-border" name="tchild">
																	<option value="" disabled>Select Children</option>
																	<option value="0">0</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																</select>
															</section>
														</div>
														<div class="col-xs-12">
															<input type="submit" name="submit" class="btn btn-primary btn-block" value="Search Taxi">
														</div>
													</form>
												</div>
											</div>

											<div role="tabpanel" class="tab-pane" id="roundtrip">
												<div class="row">
													<form method="POST" action="showcars2.php">
														<div class="col-xxs-12 col-xs-6 mt">
															<div class="input-field">
																<label for="from">From:</label>
																<!-- <input type="text" name="tfrom" class="form-control" id="from-place" placeholder="Siliguri , West Bengal" disabled /> -->
																<select class="cs-select cs-skin-border" name="tfrom">
																	<option value="" disabled>Pickup Place</option>
																	<option value="siliguri, westbengal">Siliguri, WestBengal</option>
																</select>
															</div>
														</div>
														<div class="col-xxs-12 col-xs-6 mt">
															<div class="input-field">
																<label for="tofrom">To: From</label>
																<!-- <input type="text" name="tdes1" class="form-control" id="to-place" placeholder="Destination City" required="true" /> -->
																<select class="cs-select cs-skin-border" name="tdes1">
																	<option value="" disabled>Destination Place 1</option>
																	<option value="darjeeling">Darjeeling</option>
																</select>
															</div>
														</div>
														<div class="col-xxs-12 col-xs-6 mt">
															<div class="input-field">
																<label for="from">To: </label>
																<!-- <input type="text" name="tdes2" class="form-control" id="to-place" placeholder="Destination City" required="true" /> -->
																<select class="cs-select cs-skin-border" name="tdes1">
																	<option value="" disabled>Destination Place 2</option>
																	<option value="gangtok">Gangtok</option>
																</select>
															</div>
														</div>
														<div class="col-xxs-12 col-xs-6 mt alternate">
															<div class="input-field">
																<label for="date-start">Pickup Date:</label>
																<input type="text" name="tdate" class="form-control" id="date-start" placeholder="Enter Date" required="true" />
															</div>
														</div>
														<div class="col-sm-12 mt">
															<section>
																<label for="class">Choose Your Car::</label>
																<select class="cs-select cs-skin-border" name="tsit">
																	<option value="" disabled>Car Types</option>
																	<option value="mini">Mini</option>
																	<option value="sedan">Prime Sedan</option>
																	<option value="multimedia">Prime Multimedia</option>
																	<option value="suv">Prime SUV</option>
																	<option value="lux">LUX</option>
																	<option value="traveller">Traveller</option>
																</select>
															</section>
														</div>
														<div class="col-xxs-12 col-xs-6 mt">
															<section>
																<label for="class">Adult:</label>
																<select class="cs-select cs-skin-border" name="tadult">
																	<option value="" disabled>Select Adults</option>
																	<option value="0">0</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																</select>
															</section>
														</div>
														<div class="col-xxs-12 col-xs-6 mt">
															<section>
																<label for="class">Children:</label>
																<select class="cs-select cs-skin-border" name="tchild">
																	<option value="" disabled>Select Children</option>
																	<option value="0">0</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																</select>
															</section>
														</div>
														<div class="col-xs-12">
															<input type="submit" name="submit" class="btn btn-primary btn-block" value="Search Taxi">
														</div>
													</form>
												</div>
											</div>

											<div role="tabpanel" class="tab-pane" id="packages">
												<div class="row">
													<div class="col-xxs-12 col-xs-6 mt">
														<div class="input-field">
															<label for="from">City:</label>
															<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA" />
														</div>
													</div>
													<div class="col-xxs-12 col-xs-6 mt">
														<div class="input-field">
															<label for="from">Destination:</label>
															<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan" />
														</div>
													</div>
													<div class="col-xxs-12 col-xs-6 mt alternate">
														<div class="input-field">
															<label for="date-start">Departs:</label>
															<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" />
														</div>
													</div>
													<div class="col-xxs-12 col-xs-6 mt alternate">
														<div class="input-field">
															<label for="date-end">Return:</label>
															<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy" />
														</div>
													</div>
													<div class="col-sm-12 mt">
														<section>
															<label for="class">Rooms:</label>
															<select class="cs-select cs-skin-border">
																<option value="" disabled selected>1</option>
																<option value="economy">1</option>
																<option value="first">2</option>
																<option value="business">3</option>
															</select>
														</section>
													</div>
													<div class="col-xxs-12 col-xs-6 mt">
														<section>
															<label for="class">Adult:</label>
															<select class="cs-select cs-skin-border">
																<option value="" disabled selected>1</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</section>
													</div>
													<div class="col-xxs-12 col-xs-6 mt">
														<section>
															<label for="class">Children:</label>
															<select class="cs-select cs-skin-border">
																<option value="" disabled selected>1</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</section>
													</div>
													<div class="col-xs-12">
														<input type="submit" class="btn btn-primary btn-block" value="Search Packages">
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="desc2 animate-box">
									<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
										<p>HandCrafted by <a href="http://encodeinformatics.com" target="_blank" class="fh5co-site-name">EncodersUnlimited</a></p>
										<h2>We Take Pride In Your Ride.</h2>
										<h3>Ride from Siliguri to anywhere you want.</h3>
										<p><a class="btn btn-primary btn-lg" href="index.php"><i class="fa fa-taxi"></i>&nbsp;Start Ride</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="fh5co-blog-section" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3 style="border-radius:30px;border-bottom:2px solid rgb(241, 74, 8);border-left:2px solid rgb(241, 74, 8);border-right:2px solid rgb(241, 74, 8);padding:5px;">Varity Of Cars</h3>
							<p>Our Car Details</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<!--<a href="#"><img class="img-responsive" src="images/place-1.jpg" alt=""></a>-->
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="#">Mini Car</a></h3>
										<span class="comment"><a href="">Enjoy Your Everyday Dependable Ride<i class="icon-bubble2"></i></a></span>
										<p>Demo content by Encoders Unlimited</p>
										<!--<p><a href="#">Learn More...</a></p>-->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<!--<a href="#"><img class="img-responsive" src="images/place-2.jpg" alt=""></a>-->
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="#">Prime Sedan</a></h3>
										<span class="comment"><a href="">Sedan With Free Wi-Fi and Top Drivers<i class="icon-bubble2"></i></a></span>
										<p>Demo content by Encoders Unlimited</p>
										<!--<p><a href="#">Learn More...</a></p>-->
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<!--<a href="#"><img class="img-responsive" src="images/place-3.jpg" alt=""></a>-->
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="#">Prime Multimedia</a></h3>
										<span class="comment"><a href="">Enjoy Music, Radio, Videos On The Go<i class="icon-bubble2"></i></a></span>
										<p>Demo content by Encoders Unlimited</p>
										<!--<p><a href="#">Learn More...</a></p>-->
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-md-block"></div>
					</div>

					<div class="row row-bottom-padded-md">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<!--<a href="#"><img class="img-responsive" src="images/place-1.jpg" alt=""></a>-->
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="#">Prime SUV</a></h3>
										<span class="comment"><a href="">SUVs With Free Wi-Fi And Top Drivers<i class="icon-bubble2"></i></a></span>
										<p>Demo content by Encoders Unlimited</p>
										<!--<p><a href="#">Learn More...</a></p>-->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<!--<a href="#"><img class="img-responsive" src="images/place-2.jpg" alt=""></a>-->
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="#">luxurious</a></h3>
										<span class="comment"><a href="">The New Luxury Ride With Top Drivers<i class="icon-bubble2"></i></a></span>
										<p>Demo content by Encoders Unlimited</p>
										<!--<p><a href="#">Learn More...</a></p>-->
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<!--<a href="#"><img class="img-responsive" src="images/place-3.jpg" alt=""></a>-->
								<div class="blog-text">
									<div class="prod-title">
										<h3><a href="#">Traveller</a></h3>
										<span class="comment"><a href="">Traveller Makes You Happy and Enjoyfull<i class="icon-bubble2"></i></a></span>
										<p>Demo content by Encoders Unlimited</p>
										<!--<p><a href="#">Learn More...</a></p>-->
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-md-block"></div>
					</div>

					<div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Cars <i class="icon-arrow-right22"></i></a></p>
					</div>

				</div>
			</div>

			<div id="fh5co-destination">
				<div class="tour-fluid">
					<div class="row">
						<div class="col-md-12">
							<ul id="fh5co-destination-list" class="animate-box">
								<li class="one-forth text-center" style="background-image: url(images/place-1.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Alipurduar</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-2.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Chilapata</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-3.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Cooch Behar</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-4.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Murti</h2>
										</div>
									</a>
								</li>

								<li class="one-forth text-center" style="background-image: url(images/place-5.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Darjeeling</h2>
										</div>
									</a>
								</li>
								<li class="one-half text-center">
									<div class="title-bg">
										<div class="case-studies-summary">
											<h2>Most Popular Destinations</h2>
											<span><a href="#">View All Destinations</a></span>
										</div>
									</div>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-6.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Jaldapara</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-7.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Jalpaiguri</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-8.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Kalimpong</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-9.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Lataguri</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-10.png); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Siliguri</h2>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>


			<div id="fh5co-tours" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3 style="border-radius:30px;border-bottom:2px solid rgb(241, 74, 8);border-left:2px solid rgb(241, 74, 8);border-right:2px solid rgb(241, 74, 8);padding:5px;">Hot Tours</h3>
							<p>Best Hot & New Tour Destinations in Dooars. Explore best deals on Hot & New vacation packages at lowest prices with Some Taxi.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
							<div href="#"><img src="images/place-5.png" alt="Darjeeling" class="img-responsive">
								<div class="desc">
									<span class="text-center" style="background-color:#000; padding:5px; border-radius:15px; width:120px; color:white;">Hot Sale</span>
									<h3>Darjeeling</h3>
									<span>3 nights 4 days</span>
									<span class="price">RS 10,000</span>
									<a class="btn btn-primary btn-outline" href="tours/booking.php">One Way<i class="icon-arrow-right22"></i></a>
									<a class="btn btn-primary btn-outline" href="tours/booking2.php">Round Trip <i class="icon-arrow-right22"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
							<div href="#"><img src="images/place-4.png" alt="Sikkim" class="img-responsive">
								<div class="desc">
									<h3>Sikkim</h3>
									<span>4 nights 5 days</span>
									<span class="price">RS 13,000</span>
									<a class="btn btn-primary btn-outline" href="tours/booking.php">One Way<i class="icon-arrow-right22"></i></a>
									<a class="btn btn-primary btn-outline" href="tours/booking2.php">Round Trip <i class="icon-arrow-right22"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
							<div href="#"><img src="images/place-8.png" alt="Kalimpong" class="img-responsive">
								<div class="desc">
									<span class="text-center" style="background-color:#000; padding:5px; border-radius:15px; width:120px; color:white;">Hot Sale</span>
									<h3>Kalimpong</h3>
									<span>3 nights 4 days</span>
									<span class="price">RS 9,000</span>
									<a class="btn btn-primary btn-outline" href="tours/booking.php">One Way<i class="icon-arrow-right22"></i></a>
									<a class="btn btn-primary btn-outline" href="tours/booking2.php">Round Trip <i class="icon-arrow-right22"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-12 text-center animate-box">
							<p><a class="btn btn-primary btn-outline btn-lg" href="tours/tours.php">See All Offers <i class="icon-arrow-right22"></i></a></p>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-features">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3 style="border-radius:30px;border-bottom:2px solid rgb(241, 74, 8);border-left:2px solid rgb(241, 74, 8);border-right:2px solid rgb(241, 74, 8);padding:5px;">Top Travel Plans</h3>
							<p>Planning a trip today can be confusing and time consuming. A Some Taxi || A unit of Some Group, not only arranges the various modes of transportation, but may also be able to save you money with early booking discounts, special fares, hotel deals and travel advisories.</p>
						</div>
						<div class="col-md-4 animate-box">

							<div class="feature-left">
								<span class="icon">
									<i class="icon-hotairballoon"></i>
								</span>
								<div class="feature-copy">
									<h2>Family Travel</h2>
									<p>If you’re planning your next family vacation or just want to be inspired by other travelling families, visit our site.</p>
									<p><a href="#" class="btn btn-outline">Explore</a></p>
								</div>
							</div>

						</div>

						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-search"></i>
								</span>
								<div class="feature-copy">
									<h2>Travel Plans</h2>
									<p>I firmly believe that each minute spent wasted in the hotel looking stuff up is a minute I’m not getting to enjoy my trip!</p>
									<p><a href="#" class="btn btn-outline">Explore</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-wallet"></i>
								</span>
								<div class="feature-copy">
									<h2>Honeymoon</h2>
									<p>Honeymoon packages assures a beautiful beginning of your married life and live best moments with your partner.</p>
									<p><a href="#" class="btn btn-outline">Explore</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 animate-box">

							<div class="feature-left">
								<span class="icon">
									<i class="icon-wine"></i>
								</span>
								<div class="feature-copy">
									<h2>Business Travel</h2>
									<p>Book your Business Tours with us for the best travel packages that are affordable and are packed with all the goodness.</p>
									<p><a href="#" class="btn btn-outline">Explore</a></p>
								</div>
							</div>

						</div>

						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-genius"></i>
								</span>
								<div class="feature-copy">
									<h2>Solo Travel</h2>
									<p>Solo travel at its best is deliciously self-indulgent: spend as long or as little as you like in a place.</p>
									<p><a href="#" class="btn btn-outline">Explore</a></p>
								</div>
							</div>

						</div>
						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-chat"></i>
								</span>
								<div class="feature-copy">
									<h2>Explorer</h2>
									<p>We ensure that our experienced and well-trained professionals ensure that everything is carried on safely and swiftly.</p>
									<p><a href="#" class="btn btn-outline">Explore</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="caranimation">
				<h2 style="text-align:center; color:#F78536; margin-top:40px;">ANYTIME ANYWHERE</h2>
				<div class="highway">
				</div>
				<div class="city">
				</div>
				<div class="car">
					<img src="carimages/car.png" alt="car">
				</div>
				<div class="wheel">
					<img src="carimages/wheel.png" alt="wheel" class="back-wheel">
					<img src="carimages/wheel.png" alt="wheel" class="front-wheel">
				</div>
			</div>


			<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Happy Clients</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box-testimony animate-box">
								<blockquote>
									<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
									<p>&ldquo;It's rare to get a good and flawless taxi service. Some Taxi managed to adapt completely to my needs, at a price that other companies could not beat.&rdquo;</p>
								</blockquote>
								<p class="author">Sandip Roy</p>
								<!--<span class="subtext">Creative Director</span>-->
							</div>

						</div>
						<div class="col-md-4">
							<div class="box-testimony animate-box">
								<blockquote>
									<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
									<p>&ldquo;Providing Best services. It was such a good experience & car condition was good driver was drive very good . Such a great time spend in Delhi. With Bharat Taxi.&rdquo;</p>
								</blockquote>
								<p class="author">Rakesh Saha</p>
								<!--<span class="subtext">Creative Director</span>-->
							</div>


						</div>
						<div class="col-md-4">
							<div class="box-testimony animate-box">
								<blockquote>
									<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
									<p>&ldquo;Really the ride was awesome. The service was very nice. I had booked from Some Taxi. The employees were very generous and polite and facilities were also excellent.&rdquo;</p>
								</blockquote>
								<p class="author">Rounak Natta</p>
								<!--<span class="subtext">Creative Director</span>-->
							</div>

						</div>
					</div>
				</div>
			</div>
			<footer>
				<div id="footer">
					<div class="container">
						<div class="row row-bottom-padded-md">
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>About SomeTaxi</h3>
								<p>SomeTaxi offers the best cab operators and drivers for every prime location of Dooars to make your journey hassle free. We ensure to provide the unforgettable experience to our customers.</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>Top Hotels</h3>
								<ul>
									<li><a href="#">Gorumara</a></li>
									<li><a href="#">Chilapata</a></li>

								</ul>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>Interest</h3>
								<ul>

									<li><a href="#">Family Travel</a></li>
									<li><a href="#">Budget Travel</a></li>
									<li><a href="#">Round Trips</a></li>
									<li><a href="#">Local Trips</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>Best Places</h3>
								<ul>
									<li><a href="#">Siliguri</a></li>
									<li><a href="#">Darjeeling</a></li>
									<li><a href="#">Gangtok</a></li>
									<li><a href="#">Coochbihar</a></li>
									<li><a href="#">Dooars</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
								<h3>Affordable</h3>
								<ul>
									<li><a href="#">Food &amp; Drink</a></li>
									<li><a href="#">Fare Taxi</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center">
								<p class="fh5co-social-icons">
									<!-- <a href="#"><i class="icon-twitter2"></i></a> -->
									<a href="https://www.facebook.com/Some-Taxi-101657141777626/?modal=admin_todo_tour"><i class="icon-facebook2"></i></a>
									<a href="https://www.instagram.com/sometaxi/"><i class="icon-instagram"></i></a>
									<!-- <a href="#"><i class="icon-dribbble2"></i></a> -->
									<!-- <a href="#"><i class="icon-youtube"></i></a> -->
								</p>
								<p>Copyright <?php echo date('Y'); ?> <a href="www.sometaxi.com">SomeTaxi</a> &nbsp; Design By<a href="https://encodeinformatics.com" target="_blank"><img src="carimages/web.png" alt="" width="140px" height="50px"></a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>



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