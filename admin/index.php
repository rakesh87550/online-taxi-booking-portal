<?php
// admin login page
session_start();
// connection
include_once("../database_con.php");
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $query = "SELECT * FROM admin where email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  $check = mysqli_num_rows($result);
  if ($check > 0) {
    $_SESSION['email'] = $_POST['email'];
    header("location: dashboard.php");
    die();
  } else {
    header("location: index.php");
    die();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Incredible Cab &mdash; All Over The India</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="../carimages/car.png">
  <!-- Animate.css -->
  <link rel="stylesheet" href="../css/animate.css">

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />

</head>

<body class="sidebar-light">
  <div class="icon-bar">
    <a href='#' class='facebook' target='_blank'>
      click here to visit <i class=" fab fa-facebook-square"></i>
    </a>
    <a href='#' class='twitter' target='_blank'>
      click here to visit<i class=" fab fa-twitter-square"></i>
    </a>

    <a href='#' class='instagram' target='_blank'>
      click here to visit<i class="fab fa-instagram"></i>
    </a>
    <a href='' class='linkedin' target='_blank'>
      click here to visit<i class=" fab fa-linkedin"></i>
    </a>
    <a href='#' class='youtube' target='_blank'>
      click here to visit<i class=" fab fa-youtube-square"></i></a>
  </div>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center">
                <h1 style="color: #5e2572; font-weight: bold;"><i class="fa fa-taxi"></i> INCREDIBLE CAB</h1>
                <h4 style="color: #5e2572;">Welcome To Admin Panel</h4>
              </div>
              <form action="" method="post" class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Username" autocomplete="off" required="true">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password" required="true">
                </div>
                <div class="mt-3">
                  <input type="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- plugins:js -->
  <script src="assets/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>