<?php include "../admin/inculdes/init.php" ?>
<?php ob_start(); ?>

<?php

global $session;

$customer = new Customer();
$customer->role;


?>


<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>AgriConnect - Freshness Homepage</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="right-phone-box">
                    <p>Call US :- <a href="#"> +233 245678901</a></p>
                </div>
                <div class="our-link">
                    <ul>
                        <?php if ($session->is_signed_in()) : ?>
                            <li><a href="./my-account.php?id=<?= $session->id ?>"><i class="fa fa-user s_color"></i> My
                                    Account</a></li>
                        <?php endif; ?>
                        <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                        <li><a href=contact.php><i class="fas fa-headset"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php if (!$session->is_signed_in()) : ?>
                    <div class="login-box">
                        <a class="btn btn-success" href="../register.php">Register Here</a>
                        <a class=" btn btn-primary" href="authentication/login.php">Sign In</a>
                    </div>
                <?php endif; ?>
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables and Fruits
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables, dairy products, poultry
                                products and meat!!
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../index.php">
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">

                    <!--  ******* trick code here ********-->
                    <li class="nav-item active"><a class="nav-link" href="#"></a></li>

                    <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>

                    <?php if ($session->is_signed_in()): ?>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">

                                <li><a href="./shop.php">Sidebar Shop</a></li>

                                <li><a href="shop-detail.php">Shop Detail</a></li>
                                <li><a href="cart.php?id=<?= $session->id ?>">Cart</a></li>
                                <li><a href="checkout.php?id=<?= $session->id ?>">Checkout</a></li>

                            </ul>
                        </li>
                    <?php endif ?>



                    <li class="nav-item"><a class="nav-link" href="./gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contact.php">Contact Us</a></li>
                    <?php if (!$session->is_signed_in()) : ?>
                        <li class="nav-item"><a class="nav-link" href="./login.php">Login </a></li>
                    <?php endif; ?>


                    <?php if ($session->is_signed_in()) : ?>

                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">User</a>
                            <ul class="dropdown-menu">
                                <li><a href="./my-account.php?id=<?= $session->id ?>">Profile </a></li>
                                <li><a href="../authentication/logout.php">Logout </a></li>
                            </ul>
                        </li>
                    <?php endif; ?>


                    <li class="nav-item"><a class="nav-link" href="../farmer/farmer_authentication/register_admin.php">Are you A farmer and Want to sell? Sign up here ! </a></li>



                </ul>
            </div>

            <div class="attr-nav">

                <?php if ($session->is_signed_in()) : ?>
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="view/cart.php?id=<?= $session->id ?>">
                                <i class="fa fa-shopping-bag"></i>
                                <span id="badge"><?php
                                    global $database;
                                    global $session;

                                    $sql = "SELECT * FROM cart WHERE user_id = $session->id";
                                    $result_set = $database->query($sql);

                                    $count_cart = mysqli_num_rows($result_set);
                                    //echo $count_cart;

                                    ?></span>
                                <p>My Cart (<span id="cart-number-display"><?= $count_cart ?></span>)</p>
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>




            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu --><!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>