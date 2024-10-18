<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_SESSION['isloggedin'])) {
    $islogedin = $_SESSION['isloggedin'];
} else {
    $islogedin = false;
}
?>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>FARMER / FARM</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   
</head>
<body class="main-layout ">
  
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="row">
                <div class="col-md-12 location_icon_bottum">
                    <div class="row">
                        <div class="col-md-8 ">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active"> <a href="index.php">HOME</a> </li>
                                            <li> <a href="#about">ABOUT</a> </li>
                                            <li><a href="#product">ITEMS</a></li>
                                            <?php echo $islogedin ? '<li><a href="profile.php">PROFILE</a></li>' : ''; ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <form class="search">
                                <input class="form-control" type="text" placeholder="Search">
                                <button><img src="images/search_icon.png"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/banner.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>FARM / FARMER</h1>
                            <span>MANAGEMENT SYSTEM</span>

                            <p></p>
                            <a class="buynow" href="#product">PRODUCTS</a>
                            <?php echo $islogedin ? '<a class="buynow ggg" href="logout.php">Logout</a>' : '<a class="buynow ggg" href="login.php">Buy Product</a>'; ?>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>FARM / FARMER</h1>
                            <span>MANAGEMENT SYSTEM</span>

                            <p> </p>
                            <a class="buynow" href="#product">PRODUCTS</a>
                            <?php echo $islogedin ? '<a class="buynow ggg" href="logout.php">Logout</a>' : '<a class="buynow ggg" href="login.php">Buy Product</a>'; ?>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>FARM / FARMER</h1>
                            <span>MANAGEMENT SYSTEM</span>

                            <p> </p>
                            <a class="buynow" href="#product">PRODUCTS</a>
                            <?php echo $islogedin ? '<a class="buynow ggg" href="logout.php">Logout</a>' : '<a class="buynow ggg" href="login.php">Buy Product</a>'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>About <br><strong class="black"> Farm / Farmer Management System </strong></h2>
                        <p>Agricultural production management is entering into a new era where every day farmer’s
                            decisions are supported by highly sophisticated Farm Management Information Systems (FMISs).
                            The latter have evolved from simple record keeping software into complex systems that can
                            manipulate large amounts of data and provide decision support capabilities.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="images/about.png" alt="img"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- offer -->
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>BENEFITERS<strong class="black"> </strong></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                        <div class="offer_box">
                            <h3>FARMER</h3>
                            <figure><img src="images/farmer.jpg" alt="img" /></figure>
                            <p> </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin_ttt">
                        <div class="offer_box">
                            <h3>SHOP OWNERS</h3>
                            <figure><img src="images/img7.jpg" alt="img" /></figure>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin-lkk">
                        <div class="offer_box">
                            <h3>Farm Factory</h3>
                            <figure><img src="images/img9.jpg" alt="img" /></figure>
                            <p> </p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end offer -->

    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Nature<strong class="black"> products</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="images/product_img1.jpg" alt="#" />
                                    <h3>Fresh Apple <a class="btn btn-primary buynow ggg" href="login.php">Add</a></h3>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="images/coconut.jpg" alt="#" />
                                    <h3>Coconut <a class="btn btn-primary buynow ggg" href="login.php">Add</a></h3>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="images/product_img4.jpg" alt="#" />
                                    <h3>Paddy <a class="btn btn-primary buynow ggg" href="login.php">Add</a></h3>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="images/img6.jpg" alt="#" />
                                    <h3>Carrot <a class="btn btn-primary buynow ggg" href="login.php">Add</a></h3>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="images/product_img5.jpg" alt="#" />
                                    <h3> Wheat <a class="btn btn-primary buynow ggg" href="login.php">Add</a></h3>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end product -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
</body>

</html>