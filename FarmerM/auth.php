<?php

$fa_id = $_POST['fa_id'];
$f_name = $_POST['f_name'];
$address = $_POST['address'];
$itemname = $_POST['itemname'];
$quantity = $_POST['quantity'];

//Database connection
$conn = new mysqli('localhost', 'root', '', 'farmer management');
if ($conn->connect_error) {
  die('connection failed: ' . $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO farmer(fa_id,f_name,address,itemname,quantity) VALUES(?,?,?,?,?)");
  $stmt->bind_param("sssss", $fa_id, $f_name, $address, $itemname, $quantity);
  $stmt->execute();
  if ($stmt->error) {
    die($stmt->error);
  }
  $message = true;

  session_start();
  $_SESSION['isloggedin'] = $message;
  $_SESSION['loginId'] = $fa_id;


  header("location: /FarmerM/index.php");
  // header("Location: index.html");
  $stmt->close();
}
