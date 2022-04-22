<?php

/*
Basic PHP script to handle Instamojo RAP webhook.
*/
session_start();

use function Composer\Autoload\includeFile;

$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if ($major >= 5 and $minor >= 4) {
    ksort($data, SORT_STRING | SORT_FLAG_CASE);
} else {
    uksort($data, 'strcasecmp');
}
// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without <>
$mac_calculated = hash_hmac("sha1", implode("|", $data), "9cbf9b4ea1354d96a0e760c1694b1ef4");
if ($mac_provided == $mac_calculated) {
    if ($data['status'] == "Credit") {
        // Payment was successful, mark it as successful in your database.

        include("database_con.php");
        $purpose = $data['purpose'];
        $amount = $data['amount'];
        $name = strtoupper($data['buyer_name']);
        $email = $data['buyer'];
        $phone = $data['buyer_phone'];
        $status = $data['status'];
        $payment_id = $data['payment_id'];
        $date = $_SESSION['date'];
        $time = $_SESSION['time'];

        $query = "INSERT INTO successfull_payment(purpose, amount, name, email, phone, status, payment_id, date, time)VALUES('$purpose', '$amount', '$name', '$email', '$phone', '$status', '$payment_id', '$date', '$time')";
        mysqli_query($conn, $query);
    } else {
        // Payment was unsuccessful, mark it as failed in your database.
        // You can acess payment_request_id, purpose etc here.
    }
} else {
    echo "MAC mismatch";
}
