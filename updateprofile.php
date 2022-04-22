<?php
session_start();
$_SESSION['user-name'];
// Connection
include("database_con.php");
$selquery = "SELECT * FROM signup WHERE phone = {$_SESSION['user-phone']}";
$result = mysqli_query($conn, $selquery);
$row = mysqli_fetch_assoc($result);
$userid = $row['id'];
$username = $row['name'];
$useremail = $row['email'];
$userphone = $row['phone'];
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = strtoupper(mysqli_real_escape_string($conn, $_POST['username']));
    $_SESSION['user-name'] = $name;
    $email = mysqli_real_escape_string($conn, $_POST['useremail']);
    $phone = mysqli_real_escape_string($conn, $_POST['userphone']);
    $updatequery = "UPDATE signup SET name = '$name' , email = '$email' , phone = '$phone' WHERE id = '$id'";
    echo $updatequery;
    $value = mysqli_query($conn, $updatequery);
    if ($value) {
        header("location:index2.php");
    } else {
        header("location:updateprofile.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOMETAXI &mdash; A Unit of Some Group</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="carimages/car.png">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
    <style>
        body {
            background: linear-gradient(to right, rgba(255, 60, 0, 0.788) 0%, rgba(253, 173, 0, 0.801) 100%);
        }

        .emp-profile {
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }

        .profile-img {
            text-align: center;
        }

        .profile-img img {
            width: 70%;
            height: 100%;
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }

        .profile-head h5 {
            color: #333;
        }

        .profile-head h6 {
            color: #0062cc;
        }

        .profile-edit-btn {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }

        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }

        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }

        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }

        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }

        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }

        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }

        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }

        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-work ul {
            list-style: none;
        }

        .profile-tab label {
            font-weight: 600;
        }

        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }
    </style>
</head>

<body>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <h1 id="fh5co-logo"><a href="index.php"><i class="fa fa-taxi"></i>SOMETAXI<span style="font-size: 16px;letter-spacing: 0px;">A Unit of Some Group</span></a></h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            <?php echo $_SESSION['user-name']; ?>
                        </h5>
                        <h6>
                            <?php echo $_SESSION['user-phone']; ?>
                        </h6>
                        <h6>
                            <?php echo $useremail; ?>
                        </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>WORK LINK</p>
                        <a href="index2.php">Home</a><br />
                        <a href="mybookings.php">Bookings</a><br />
                        <a href="close.php">Logout</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="" method="post">
                                <div class="row my-2">
                                    <div class="col-md-6">
                                        <label for="username">User Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required="true" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-md-6">
                                        <label for="useremail">User Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="useremail" class="form-control" value="<?php echo $useremail; ?>" required="true" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-md-6">
                                        <label for="userphone">User Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="userphone" class="form-control" value="<?php echo $userphone; ?>" required="true" autocomplete="off">
                                    </div>
                                </div><br>
                                <input type="hidden" name="id" value="<?php echo $userid; ?>">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary btn-outline btn-block" name="update" value="Update Profile" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>