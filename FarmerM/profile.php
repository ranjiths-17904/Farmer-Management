<html>

<head>
    <link rel="stylesheet" href="css/style-profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
</head>

<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'farmer management');
if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    // $fa_id = $_GET['fa_id'];
    
    $fa_id = isset($_SESSION['loginId']) ? $_SESSION['loginId'] : header('location: /FarmerM/index.php');
    $stmt = $conn->prepare("SELECT * FROM farmer WHERE fa_id = ?");
    $stmt->bind_param("s", $fa_id);
    $stmt->execute();
    if ($stmt->error) {
        die($stmt->error);
    }
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        // print_r($row);
        
        $f_name = $row['f_name'];
        $l_name = $row['s_name'];
        $address = $row['address'];
        $email = $row['email'];
        $phone = $row['phone'];
    }
}
?>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold"><?php echo htmlspecialchars($f_name); ?></span>
                    <span class="text-black-50"><?php echo htmlspecialchars($email); ?></span>
                    <span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="saveprofile.php" method="post">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="First name" value="<?php echo htmlspecialchars($f_name); ?>" name="f_name">
                            </div>
                            <br>

                            <div class="col-md-6">
                                <label class="labels">Surname</label>
                                <input type="text" class="form-control" value="<?php echo htmlspecialchars($l_name); ?>" placeholder="surname" name="l_name">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="enter phone number" value="<?php echo htmlspecialchars($phone); ?>" name="phone">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo htmlspecialchars($address); ?>" name="address">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label class="labels">Email ID</label>
                                <input type="text" class="form-control" placeholder="enter email id" value="<?php echo htmlspecialchars($email); ?>" name="email">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 border-right">
                <center><h2>Account Center</h2></center>
                <center><h2><a class="btn btn-primary" href="delete.php">Delete Account</a></h2></center>
                
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>