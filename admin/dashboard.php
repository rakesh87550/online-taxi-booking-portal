<?php
session_start();
if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
} else {
  header("location:index.php");
  die();
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
  <!-- Animate.css -->
  <link rel="stylesheet" href="../css/animate.css">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="../carimages/car.png">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />

</head>

<body class="sidebar-light">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
        <!-- logo -->
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="dashboard.php">
            <h1 style="color: #5e2572; font-weight: bold;"><i class="fa fa-taxi"></i> INCREDIBLE CAB</h1>
          </a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php">
            <h1 style="color: #5e2572; font-weight: bold;"><i class="fa fa-taxi"></i> INCREDIBLE CAB</h1>
          </a>
        </div>
        <!-- navbar right menu -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">ADMIN</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="localtaxi.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Local Taxi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="roundtriptaxi.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Round Trip Taxi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="successpayment.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Successfull Payment</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <h3 class="p-3">Encoders Unlimited</h3>
                    <div class="card-body">
                    </div>
                  </div>
                </div>
                <div class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <h3 class="p-3">Encoders Unlimited</h3>
                    <div class="card-body">
                    </div>
                  </div>
                </div>
                <div class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <h3 class="p-3">Encoders Unlimited</h3>
                    <div class="card-body">
                    </div>
                  </div>
                </div>
                <div class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <h3 class="p-3">Encoders Unlimited</h3>
                    <div class="card-body">
                    </div>
                  </div>
                </div>
                <div class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <h3 class="p-3">Encoders Unlimited</h3>
                    <div class="card-body">
                    </div>
                  </div>
                </div>
                <div class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <h3 class="p-3">Encoders Unlimited</h3>
                    <div class="card-body">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?php echo date('Y'); ?> <a href="https://www.encodeinformatics.com" target="_blank">EncodersUnlimited</a>. All Rights Reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

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