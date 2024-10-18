<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'farmer management');
if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    $fa_id = isset($_SESSION['loginId']) ? $_SESSION['loginId'] : header('location: /FarmerM/index.php');
    $stmt = $conn->prepare("DELETE FROM farmer WHERE fa_id = ?");
    $stmt->bind_param("s", $fa_id);
    $stmt->execute();
    if ($stmt->error) {
        die($stmt->error);
    }

    $_SESSION = array();
    session_destroy();

    echo "<p class='text-warning'>Account Deleted successfully</p>";
    echo "<a class='btn btn-secondary' href='index.php'>Take me to the home</p>";
}
