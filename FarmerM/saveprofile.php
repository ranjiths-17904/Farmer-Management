<?php
session_start();
$f_id = $_POST['f_name'];
$f_name = $_POST['l_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$conn = new mysqli('localhost', 'root', '', 'farmer management');

if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    // $fa_id = $_GET['fa_id'];
    $fa_id = $_SESSION['loginId'];

    $stmt = $conn->prepare("UPDATE farmer SET f_name = ?, address = ?, s_name = ?, email = ?, phone = ? WHERE fa_id = ?");
    $stmt->bind_param("ssssss", $f_name, $address, $l_name, $email, $phone, $fa_id);
    $stmt->execute();
    if ($stmt->error) {
        die($stmt->error);
    }
     echo "Register Successful";
    header('location: /FarmerM/index.php');
}


