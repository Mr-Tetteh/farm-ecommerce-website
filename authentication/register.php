<?php include "../admin/inculdes/init.php" ?>
<?php ob_start(); ?>


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


<?php
$customer = new Customer();

if (isset($_POST['submit'])) {
    $password = $_POST['customer_password'];
    $confirm = $_POST['customer_confirm_password'];
    $passwordStrength = checkPasswordStrength($password);

    if ($password !== $confirm) {
        $message = "Passwords do not match.";
    } elseif ($passwordStrength < 3) {
        $message = "Password is not strong enough.";
    } else {
        $customer->first_name = $_POST['customer_first_name'];
        $customer->last_name = $_POST['customer_last_name'];
        $customer->email = $_POST['customer_email'];
        $customer->password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        $customer->country = $_POST['customer_country'];
        $customer->city = $_POST['customer_city'];
        $customer->contact = $_POST['customer_contact'];

        $customer->create();
        header("Location: login.php");
        exit;
    }
} else {
    $message = "";
}

function checkPasswordStrength($password) {
    $strength = 0;
    if (strlen($password) >= 8) $strength++;
    if (preg_match("/[0-9]+/", $password)) $strength++;
    if (preg_match("/[a-z]+/", $password)) $strength++;
    if (preg_match("/[A-Z]+/", $password)) $strength++;
    if (preg_match("/\W+/", $password)) $strength++; 
    return $strength;
}
?>

<body>
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="../images/bn1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> AgriConnect</strong></h1>
                        <p class="m-b-40">AgriConnect: Freshness Delivered, Farmers Empowered.

                            Eat Well, Do Good: Support Local Farmers, Enjoy Exceptional Food.<br> Taste the Difference:
                            Farm-Fresh Produce Delivered to Your Door.</p>
                        <br>
                        <p><a class="btn hvr-hover" href="#">Register Now!</a></p>
                        </p>
                        </a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="../images/banner-02.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> AgriConnect</strong></h1>
                        <p class="m-b-40">AgriConnect: Freshness Delivered, Farmers Empowered.

                            Eat Well, Do Good: Support Local Farmers, Enjoy Exceptional Food. <br> Taste the Difference:
                            Farm-Fresh Produce Delivered to Your Door.</p>
                        <br>
                        <p><a class="btn hvr-hover" href="#">Register Now!</a></p>
                    </div>
                </div>
        </li>
        <li class="text-center">
            <img src="../images/bn0.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> AgriConnect</strong></h1>
                        <p class="m-b-40">AgriConnect: Freshness Delivered, Farmers Empowered.

                            Eat Well, Do Good: Support Local Farmers, Enjoy Exceptional Food. <br> Taste the Difference:
                            Farm-Fresh Produce Delivered to Your Door.</p>
                        <br>
                        <p><a class="btn hvr-hover" href="#">Register Now!</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->
<?php echo "<h1 class='text-danger text-center' > $message </h1>"  ?>
<!-- Start Register Form -->
<form id="loginForm" action="" method="post" class="bg-white p-4 mt-4">

    <div class="form-group">
        <label for="customer-name">First name:</label>
        <input type="text" class="form-control" id="customer-name" name="customer_first_name" required
               placeholder="Enter first name">
    </div>
    <div class="form-group">
        <label for="customer-name">Last name:</label>
        <input type="text" class="form-control" id="customer-name" name="customer_last_name" required
               placeholder="Enter last name">
    </div>
    <div class="form-group">
        <label for="customer-email">email:</label>
        <input type="email" class="form-control" id="customer-email" name="customer_email" required
               placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="customer-pass">password:</label>
        <input type="password" class="form-control" id="customer-pass" name="customer_password" required
               placeholder="Enter password">
    </div>

    <div class="form-group">
        <label for="customer-pass">Confirm password:</label>
        <input type="password" class="form-control" id="customer-pass" name="customer_confirm_password" required
               placeholder="Enter password">
    </div>
    
</div>

    <div class="form-group">
        <label for="customer-country">country:</label>
        <input type="text" class="form-control" id="customer-country" name="customer_country" required
               placeholder="Enter country">
    </div>
    <div class="form-group">
        <label for="customer-city">city:</label>
        <input type="text" class="form-control" id="customer-city" name="customer_city" required
               placeholder="Enter city">
    </div>
    <div class="form-group">
        <label for="customer-contact">contact:</label>
        <input type="text" class="form-control" id="customer-contact" name="customer_contact" required
               placeholder="Enter contact number">
    </div>

    <div class="form-group">
    </div>
    <div class="form-group text-center">
        <input type="submit" name="submit" value="Register" class="btn btn-primary">
    </div>
    <div class="text-center">
        Already have an account? <a href="login.php">Sign in</a>
    </div>
</form>


<!-- End Register Form -->

<?php include "../view/footer.php"; ?>

<!-- ALL JS FILES -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="../js/jquery.superslides.min.js"></script>
<script src="../js/bootstrap-select.js"></script>
<script src="../js/inewsticker.js"></script>
<script src="../js/bootsnav.js."></script>
<script src="../js/images-loded.min.js"></script>
<script src="../js/isotope.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/baguetteBox.min.js"></script>
<script src="../js/form-validator.min.js"></script>
<script src="../js/contact-form-script.js"></script>
<script src="../js/custom.js"></script>
<script>


