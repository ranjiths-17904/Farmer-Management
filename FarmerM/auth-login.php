<?php
session_start();
$name = $_POST['name'];
$fa_id = $_POST['fa_id'];
print($name);
print($fa_id);
$conn = new mysqli('localhost', 'root', '', 'farmer management');

if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("SELECT * FROM farmer WHERE f_name = ? AND fa_id = ?");
    $stmt->bind_param("ss", $name, $fa_id);
    $stmt->execute();
    if ($stmt->error) {
        die($stmt->error);
    } else {
        $result = $stmt->get_result();

        if (count($result->fetch_all()) != 0) {
            session_start();
            $_SESSION['isloggedin'] = true;
            $_SESSION['loginId'] = $fa_id;
            header('location: /FarmerM/index.php');
        } else {
            $_SESSION['loginerror'] = 'Id or Name is Wrong';
            header('location: /FarmerM/login.php');
        }
    }
}
