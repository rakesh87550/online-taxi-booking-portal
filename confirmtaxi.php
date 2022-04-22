<?php
// connection
include_once("database_con.php");
if (isset($_POST['book'])) {
	$id = $_POST['id'];
	$tdes = $_POST['tdes'];
	$selquery = "SELECT * FROM taxicar WHERE id = '$id' ";
	$result = mysqli_query($conn, $selquery);
}
?>

<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SOMETAXI &mdash; A Unit of Some Group</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />

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
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<script src="js/respond.min.js"></script>
</head>

<body>
	<!-- leftside icon bar  -->
	<?php include("icon.php"); ?>
	<!-- start fh5co-wrapper -->
	<div id="fh5co-wrapper">
		<div id="fh5co-page">
			<!-- start header-top -->
			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"></a>
						<!-- <img src="images/logo.png" alt="Sometaxi" width="250px" height="180px"> -->
						<h1 id="fh5co-logo"><a href="index.php"><i class="fa fa-taxi"></i>SOMETAXI<span style="font-size: 16px;letter-spacing: 0px;">A Unit of Some Group</span></a></h1>
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
								<li><a href="https://www.somegroup.in" target="_blank">Some Hotels</a></li>
								<li><a href="drycar/index.php">Dry Car</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="registercar.php" class="btn btn-primary btn-outline">Register Car</a></li>
								<li><a href="login.php" class="btn btn-primary btn-outline">Login</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			<!-- end header-top -->
			<!-- showing detals -->
			<div class="fh5co-hero">
				<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background: linear-gradient(to right, rgba(255, 60, 0, 0.788) 0%, rgba(253, 173, 0, 0.801) 100%);">
					<div class="container">
						<h2 class="text-center" style="color:#fff; margin-top:12px;">Book Your Taxi</h2>
						<div class="row">
							<div class="col-lg-12" style="background-color: #0000006b; height:500px;       margin-top: 10px; border-radius:30px; color:#fff; padding:10px;">
								<?php
								if (mysqli_num_rows($result) > 0) {
								?>
									<table class="table">
										<thead>
											<tr>
												<th>TAXI</th>
												<th>TAXI NAME</th>
												<th>PICKUP FROM</th>
												<th>DESTINATION</th>
												<th>PICKUP DATE</th>
												<th>PICKUP TIME</th>
												<th>TOTAL COST</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$row = mysqli_fetch_assoc($result);
											echo '<tr>';
											echo '<td><div class="text-center">
                                                    <img src="' . $row['taxi_img'] . '" class="img img-rounded" height="70px" width="120px"></div></td>';
											echo '<td>' . $row['taxiname'] . '</td>';
											echo '<td>' . $row['placefrom'] . '</td>';
											echo '<td>' . $tdes . '</td>';
											echo '<td>' . $row['date'] . '</td>';
											echo '<td>' . $row['picktime'] . '</td>';
											echo '<td>' . $row['total cost'] . '.00</td>';
											$row['gst'];
											echo '</tr>';
											?>
										</tbody>
									</table>
									<hr>
								<?php
								} else {
									echo "<p style='color:red; text-align:center;'>NO DATA FOUND</p>";
								} ?>
								<h3 class="text-center" style="color:#fff;">Please Signup To Complete Payment</h3>
								<!-- start user details form -->
								<form action="pay.php" method="post">
									<div class="col-xxs-12 col-xs-6 mt">
										<div class="input-field">
											<label for="name">Name :</label>
											<input type="text" name="name" class="form-control" id="from-place" placeholder="Enter Name" required="true" autocomplete="off" />
										</div>
									</div>
									<div class="col-xxs-12 col-xs-6 mt">
										<div class="input-field">
											<label for="email">Email :</label>
											<input type="email" name="email" class="form-control" id="from-place" placeholder="Enter Email" required="true" autocomplete="off" />
										</div>
									</div>
									<div class="col-xxs-12 col-xs-6 mt">
										<div class="input-field">
											<label for="phone">Phone Number :</label>
											<input type="number" name="phone" class="form-control" id="from-place" placeholder="Enter Phone Number" required="true" autocomplete="off" />
										</div>
									</div>
									<div class="col-xxs-12 col-xs-6 mt">
										<div class="input-field">
											<label for="address">Full Address :</label>
											<input type="text" name="address" class="form-control" id="from-place" placeholder="Enter Full Address" required="true" autocomplete="off" />
										</div>
									</div>
									<?php
									echo '
                                        <div class="text-center">
                                        
                                        <input type="hidden" name="id" value=' . $id . '>
                                        <input type="hidden" name="taxiname" value=' . $row['taxiname'] . '>
                                        <input type="hidden" name="gst" value=' . $row['gst'] . '>
                                        <input type="hidden" name="totalcost" value=' . $row['total cost'] . '>
										<input type="hidden" name="date" value=' . $row['date'] . '>
										<input type="hidden" name="time" value=' . $row['picktime'] . '>
                                        <input type="submit" name="submit" class="btn btn-primary" value="Book Taxi">
                                        </div>';
									?>
								</form>
								<!-- end form -->
								<!-- <form action="" method="post">  </form>-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end showing details -->
			<!-- start footer -->
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
								<p>Copyright <?php echo date('Y'); ?> <a href="www.sometaxi.com">SomeTaxi</a> &nbsp;||&nbsp; Design By<a href="https://encodeinformatics.com" target="_blank"><img src="carimages/web.png" alt="" width="140px" height="50px"></a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- end footer -->
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