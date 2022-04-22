<?php
session_start();
$_SESSION['user-name'] = $name;
$_SESSION['user-phone'] = $phone;
// connection
include_once("database_con.php");
$selquery = "SELECT * FROM successfull_payment WHERE name = '$name' AND phone = '$phone'";
$result = mysqli_query($conn, $selquery);

?>

<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Incredible Cab &mdash; All Over The India</title>
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
                    <!-- show brand name -->
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index2.php"><i class="icon-airplane"></i>Incredible Cab</a></h1>
                        <!-- start navigation -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li><a href="index2.php">Home</a></li>
                                <li><a href="#">Page</a></li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Page1</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="#">Subpage1</a></li>
                                        <li><a href="#">Subpage2</a></li>
                                        <li><a href="#">Subpage3</a></li>
                                        <li><a href="#">Subpage4</a></li>
                                        <li><a href="#">Subpage5</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Page2</a></li>
                                <li><a href="#">Page3</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="registercar.php" class="btn btn-primary btn-outline">Register Car</a></li>
                                <li class="active">
                                    <div class="dropdown show">
                                        <a class="btn btn-primary btn-outline dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php echo $name; ?>
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
                        <!-- end navigation -->
                    </div>
                </div>
            </header>
            <!-- end header-top -->

            <!-- show all taxi -->
            <div class="fh5co-hero">
                <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background: linear-gradient(to right, rgba(255, 60, 0, 0.788) 0%, rgba(253, 173, 0, 0.801) 100%);">
                    <div class="container">
                        <h2 class="text-center" style="color:#fff; margin-top:12px;">Your All Bookings</h2>
                        <div class="row">
                            <div class="col-lg-12" style="background-color: #0000006b; height:500px; margin-top: 10px; border-radius:30px; color:#fff; padding:10px;">
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
                                                <th>SIT NUMBER</th>
                                                <th>PICKUP DATE</th>
                                                <th>PICKUP TIME</th>
                                                <th>DETAILS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- show from database -->
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                echo '<td><img src="' . $row['taxi_img'] . '" class="img img-rounded" height="60px" width="120px"></td>';
                                                echo '<td>' . $row['taxiname'] . '</td>';
                                                echo '<td>' . $row['placefrom'] . '</td>';
                                                echo '<td>' . $tdes . '</td>';
                                                echo '<td>' . $row['sitnumber'] . ' Sit</td>';
                                                echo '<td>' . $row['date'] . '</td>';
                                                echo '<td>' . $row['picktime'] . '</td>';
                                                echo '<td>
                                                <form action="details.php" target="_blank" method="post">
                                                <input type="hidden" name="id" value=' . $row['id'] . '>
                                                <input type="hidden" name="tdes" value=' . $tdes . '>
                                                <input type="submit" name="submit" class="btn btn-primary" value="Details">
                                                </form>
                                                </td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                <?php
                                } else {
                                    echo "<p style='color:red; text-align:center;'>NO DATA FOUND</p>";
                                } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of showing taxi -->

            <!-- start footer -->
            <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row row-bottom-padded-md">
                            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                                <h3>About Incredible Cab</h3>
                                <p>Demo content by Encoders Unlimited Demo content by Encoders Unlimited Demo content by Encoders Unlimited Demo content by Encoders Unlimited</p>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                                <h3>Top Taxi Routes</h3>
                                <ul>
                                    <li><a href="#">Taxi Rental</a></li>
                                    <li><a href="#">Taxi Rental</a></li>
                                    <li><a href="#">Taxi Rental</a></li>
                                    <li><a href="#">Taxi Rental</a></li>
                                    <li><a href="#">Taxi Rental</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                                <h3>Top Hotels</h3>
                                <ul>
                                    <li><a href="#">Incredible Cab</a></li>
                                    <li><a href="#">Incredible Cab</a></li>
                                    <li><a href="#">Incredible Cab</a></li>
                                    <li><a href="#">Incredible Cab</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                                <h3>Interest</h3>
                                <ul>
                                    <li><a href="#">Beaches</a></li>
                                    <li><a href="#">Family Travel</a></li>
                                    <li><a href="#">Budget Travel</a></li>
                                    <li><a href="#">Food &amp; Drink</a></li>
                                    <li><a href="#">Mountain Views</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                                <h3>Best Places</h3>
                                <ul>
                                    <li><a href="#">Sikkim</a></li>
                                    <li><a href="#">Darjeeling</a></li>
                                    <li><a href="#">Kurseong</a></li>
                                    <li><a href="#">kalimpong</a></li>
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
                                <p>Copyright <?php echo date('Y'); ?> <a href="https://encodeinformatics.com" target="_blank">Encoders Unlimited</a>. All Rights Reserved.</p>
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