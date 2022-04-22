<?php
session_start();
// fetch all the data from confirmtaxi.php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = strtoupper($_POST['name']);
    $_SESSION['user-name'] = strtoupper($_POST['name']);
    $email = $_POST['email'];
    $_SESSION['user-email'] = $_POST['email'];
    $phone = $_POST['phone'];
    $_SESSION['user-phone'] = $_POST['phone'];
    $taxiname = $_POST['taxiname'];
    $_SESSION['taxiname'] = $_POST['taxiname'];
    $address = $_POST['address'];
    $_SESSION['user-address'] = $_POST['address'];
    $totalcost = $_POST['totalcost'];
    $_SESSION['total-cost'] = $_POST['totalcost'];
    $date = $_POST['date'];
    $_SESSION['date'] = $_POST['date'];
    // Database Config
    include_once("../database_con.php");
    $selquery = "SELECT * FROM signup WHERE phone = '$phone'";
    $result = mysqli_query($conn, $selquery);
    $number = mysqli_num_rows($result);
    if ($number > 0) {
        echo "Your Are Aleady Registered !! Please Login..";
    } else {
        mysqli_query($conn, "INSERT INTO signup(name,email,phone)VALUES('$name', '$email', '$phone')");
        // include instamojo library
        include("../instamojo/Instamojo.php");

        // instamojo api integrate
        $api = new Instamojo\Instamojo("test_a9f2a231f639959ab7ab27c5ce3", "test_87df672fa55540944ef03adf05d", 'https://test.instamojo.com/api/1.1/');

        // create e new payment request
        try {
            $response = $api->paymentRequestCreate(array(
                "purpose" => $taxiname,
                "amount" => $totalcost,
                "send_email" => true,
                "email" => $email,
                "buyer_name" => $name,
                "phone" => $phone,
                "send_sms" => true,
                "allow_repeated_payments" => false,
                "redirect_url" => "http://sometaxi.com/drycar/thank.php"
                //"webhook" => "https://sometaxi.com/drycar/webhook.php"
            ));
            //print_r($response);

            $pay_url = $response['longurl'];
            header("location:$pay_url");
        } catch (Exception $e) {
            print('Error: ' . $e->getMessage());
        }
    }
}
