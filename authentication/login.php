<?php require_once "../../final/admin/inculdes/init.php" ?>
<?php ob_start() ?>

<?php
global $session;
if (isset($_POST['submit'])){

   $user_email = trim($_POST['email']);
   $user_password =  trim($_POST['password']);


    if ($customer = $user_found = Customer::verify_customer($user_email, $user_password)) {
        $session->login($customer);
        redirect("../view/shop.php");
    }else{
        $message = " Email or Password incorrect ";
    }
}else{
    $message = "";
}


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
    <link rel="stylesheet" href="../..//final/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../../final/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../final/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../final/css/custom.css">

    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
       <!-- Start Slider -->

<!--     **************  This code doesn't make the site user friendly ***** -->
<!--       <div id="slides-shop" class="cover-slides">-->
<!--        <ul class="slides-container">-->
<!--            <li class="text-center">-->
<!--                <img src="./images/bn1.jpg" alt="">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <h1 class="m-b-20"><strong>Welcome To <br> AgriConnect</strong></h1>-->
<!--                            <p class="m-b-40">AgriConnect: Freshness Delivered, Farmers Empowered.-->
<!--                               -->
<!--                                Eat Well, Do Good: Support Local Farmers, Enjoy Exceptional Food.<br>  Taste the Difference: Farm-Fresh Produce Delivered to Your Door.</p>-->
<!--                            <br>-->
<!--                            <p><a class="btn hvr-hover" href="#">Shop Now!</a></p>-->
<!--                            </p>-->
<!--                        </a></p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="text-center">-->
<!--                <img src="./images/banner-02.jpg" alt="">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <h1 class="m-b-20"><strong>Welcome To <br> AgriConnect</strong></h1>-->
<!--                            <p class="m-b-40">AgriConnect: Freshness Delivered, Farmers Empowered.-->
<!--                               -->
<!--                                Eat Well, Do Good: Support Local Farmers, Enjoy Exceptional Food. <br>  Taste the Difference: Farm-Fresh Produce Delivered to Your Door.</p>-->
<!--                                <br>-->
<!--                                <p><a class="btn hvr-hover" href="#">Shop Now!</a></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="text-center">-->
<!--                <img src="./images/bn0.jpg" alt="">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <h1 class="m-b-20"><strong>Welcome To <br> AgriConnect</strong></h1>-->
<!--                            <p class="m-b-40">AgriConnect: Freshness Delivered, Farmers Empowered.-->
<!--                               -->
<!--                                Eat Well, Do Good: Support Local Farmers, Enjoy Exceptional Food. <br> Taste the Difference: Farm-Fresh Produce Delivered to Your Door.</p>-->
<!--                            <br>-->
<!--                                <p><a class="btn hvr-hover" href="#">Shop Now!</a></p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <div class="slides-navigation">-->
<!--            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
<!--            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>-->
<!--        </div>-->
<!--    </div>-->
    <!-- End Slider -->
<!-- Start Login Form -->
<div class="login-form-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Note the action is set to the login_process.php script -->
                    <form id="loginForm" action=" " method="post" class="bg-white p-4 mt-4">
                        <h2 class="text-center mb-4">Login</h2>
                        <?php  echo "<b>$message</b>"  ?>
                        <!-- Email input -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                        </div>

                        <!-- Password input -->
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                        </div>

                        <!-- Submit button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
                        </div>

                        <!-- Registration Link -->
                        <div class="text-center">
                            <a href="./register.php">Don't have an account? Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Form -->
    <!-- ALL JS FILES -->

       <?php include "../view/footer.php"; ?>

       <!-- ALL JS FILES -->
       <script src="js/jquery-3.2.1.min.js"></script>
       <script src="js/popper.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <!-- ALL PLUGINS -->
       <script src="js/jquery.superslides.min.js"></script>
       <script src="js/bootstrap-select.js"></script>
       <script src="js/inewsticker.js"></script>
       <script src="js/bootsnav.js."></script>
       <script src="js/images-loded.min.js"></script>
       <script src="js/isotope.min.js"></script>
       <script src="js/owl.carousel.min.js"></script>
       <script src="js/baguetteBox.min.js"></script>
       <script src="js/form-validator.min.js"></script>
       <script src="js/contact-form-script.js"></script>
       <script src="js/custom.js"></script>
</body>

</html>

