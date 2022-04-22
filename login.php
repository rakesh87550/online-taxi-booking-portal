<?php
session_start();
$msg = "";
// Database connection
include("database_con.php");
if (isset($_POST['signin'])) {
    $name = mysqli_real_escape_string($conn, $_POST['your_name']);
    $_SESSION['user-name'] = strtoupper($name);
    $phone = mysqli_real_escape_string($conn, $_POST['your_phone']);
    $_SESSION['user-phone'] = $phone;
    $selquery = "SELECT * FROM signup WHERE phone = '$phone'";
    $result = mysqli_query($conn, $selquery);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        header("location:index2.php");
        die();
    } else {
        $msg = "Enter a valid details";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOMETAXI &mdash; A Unit of Some Group</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="loginassets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="loginassets/css/style.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="carimages/car.png">
</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="loginassets/images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">PLEASE LOGIN</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name" required="true" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label for="your_phone"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="phone" name="your_phone" id="your_phone" placeholder="Your Phone" required="true" autocomplete="off" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="btn btn-primary btn-block" value="Log in" />
                            </div>
                            <h3 style="color:#ff1e00;"><?php echo $msg; ?></h3>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>