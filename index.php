<?php include "admin/inculdes/init.php" ?>
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
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/custom.css">

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
                    <p>Call US :- <a href="tel:+233 245678901"> +233 245678901</a></p>
                </div>
                <div class="our-link">
                    <ul>
                        <?php if ($session->is_signed_in()) : ?>
                            <li><a href="./my-account.php?id=<?= $session->id ?>"><i class="fa fa-user s_color"></i> My
                                    Account</a></li>
                        <?php endif; ?>
                        <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                        <li><a href="#"><i class="fas fa-headset"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php if (!$session->is_signed_in()) : ?>
                    <div class="login-box">
                        <a class="btn btn-success" href="authentication/register.php">Register Here</a>
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
                <a class="navbar-brand" href="./index.php">
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">

                    <!--  ******* trick code here ********-->
                    <li class="nav-item active"><a class="nav-link" href="#"></a></li>

                    <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="view/about.php">About Us</a></li>

                    <?php if ($session->is_signed_in()): ?>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">

                                <li><a href="./view/shop.php">Sidebar Shop</a></li>

                                <li><a href="./view/shop-detail.php">Shop Detail</a></li>
                                <li><a href="./view/cart.php?id=<?= $session->id ?>">Cart</a></li>
                                <li><a href="./view/checkout.php?id=<?= $session->id ?>">Checkout</a></li>

                            </ul>
                        </li>
                    <?php endif ?>
                    <li class="nav-item"><a class="nav-link" href="./view/gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="./vew/contact.php">Contact Us</a></li>
                    <?php if (!$session->is_signed_in()) : ?>
                        <li class="nav-item"><a class="nav-link" href="authentication/login.php">Login </a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link" href="./farmer/farmer_authentication/login.php">Are you A farmer and Want to sell? Sign up here ! </a></li>


                    <?php if ($session->is_signed_in()) : ?>

                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">User</a>
                            <ul class="dropdown-menu">
                                <li><a href="./my-account.php?id=<?= $session->id ?>">Profile </a></li>
                                <li><a href="./authentication/logout.php">Logout </a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>

            <div class="attr-nav">

                <?php if ($session->is_signed_in()) : ?>
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="./view/cart.php?id=<?= $session->id ?>">
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
        <!-- Start Side Menu -->

        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>

<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="./images/bn0.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> AgriConnect</strong></h1>
                        <p class="m-b-40">AgriConnect: Freshness Delivered, Farmers Empowered.

                            Eat Well, Do Good: Support Local Farmers, Enjoy Exceptional Food.<br> Taste the Difference:
                            Farm-Fresh Produce Delivered to Your Door.</p>
                        <br>
                        <?php if (!$session->is_signed_in()) : ?>

                            <p>
                                <a class="btn hvr-hover" href="./authentication/login.php">Login</a>
                                <a class="btn hvr-hover" href="./authentication/register.php">Register</a>
                            </p>
                        <?php endif; ?>
                        </a></p>

                    </div>
                </div>
            </div>
        </li>

        <li class="text-center">
            <img src="./images/meat1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> AgriConnect</strong></h1>
                        <p class="m-b-40">AgriConnect: Freshness Delivered, Farmers Empowered.

                            Eat Well, Do Good: Support Local Farmers, Enjoy Exceptional Food. <br> Taste the Difference:
                            Farm-Fresh Produce Delivered to Your Door.</p>
                        <br>
                        <?php if (!$session->is_signed_in()) : ?>

                            <p>
                                <a class="btn hvr-hover" href="./authentication/login.php">Login</a>
                                <a class="btn hvr-hover" href="./authentication/register.php">Register</a>
                            </p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="./images/banner-03.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> AgriConnect</strong></h1>
                        <p class="m-b-40">AgriConnect: Freshness Delivered, Farmers Empowered.

                            Eat Well, Do Good: Support Local Farmers, Enjoy Exceptional Food. <br> Taste the Difference:
                            Farm-Fresh Produce Delivered to Your Door.</p>
                        <br>
                        <p><a class="btn hvr-hover" href="./authentication/login.php">Shop Now!</a></p>
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

<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="./images/gallery-img-10.jpg" alt=""/>
                    <a class="btn hvr-hover" href="#">Connecting You Directly to Local Farms.</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="./images/categories_img_05.jpg" alt=""/>
                    <a class="btn hvr-hover" href="#">Fresh, Local, Sustainable, AgriConnect Delivers!</a>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="./images/categories_img_03.jpg" alt=""/>
                    <a class="btn hvr-hover" href="#">Get the Best, Get AgriConnect!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<div class="box-add-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="./images/silverbeet-saute.jpeg" alt=""/>
                    <p> Enjoy mouthwatering recipes!</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="./images/categories_img_04.jpg" alt=""/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Fruits & Vegetables</h1>
                    <p>Ditch the Middleman. Get Farm-Fresh with AgriConnect.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".top-featured">Top featured</button>
                        <button data-filter=".best-seller">Best seller</button>
                    </div>
                </div>
            </div>
        </div>


<!-- End Products  -->

<!-- Start Blog  -->
<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Eat Fresh, Feel Great: Simple Tips for Healthy Eating with AgriConnect</h1>
                    <p>Eating healthy doesn't have to be complicated or expensive. At AgriConnect, we believe that
                        fresh, local produce is the foundation of a healthy diet. Here are a few simple tips to help you
                        get started:

                        <br> 1. Embrace the Rainbow: Fill your plate with a variety of colorful fruits and vegetables.
                        Each color offers a unique blend of vitamins and minerals, essential for overall health. With
                        AgriConnect, you have access to a vibrant selection of seasonal produce, ensuring a rainbow on
                        your plate all year round.

                        <br> 2. Think Simple: Skip the processed foods and focus on whole ingredients. Roasting
                        vegetables, grilling chicken, or whipping up a fresh salad are quick and easy ways to prepare
                        delicious and nutritious meals. AgriConnect delivers farm-fresh ingredients that are bursting
                        with flavor, so you can spend less time prepping and more time enjoying.

                        <br> 3. Snack Smart: Ditch the sugary treats and opt for healthy snacks that keep you energized
                        throughout the day. Grab some fresh berries, baby carrots with hummus, or a handful of nuts from
                        your AgriConnect delivery. These satisfying snacks will curb your cravings and keep you feeling
                        good.</p>
                </div>
            </div>
        </div>

        <div class="row">
        </div>
    </div>
</div

<div class="col-md-6 col-lg-4 col-xl-4">

   
    </div>
</div>
</div>
</div>
</div>


<!-- End Blog  -->


<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-01.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-02.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-03.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-04.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-05.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-06.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-07.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-08.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-09.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="./images/instagram-img-05.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->

<?php include "./view/footer.php"; ?>

<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script>
    $(document).ready(function(){
        function addToCart(id, user_id){
            let product_name = $(`#prd_name_${id}`).text(),
                product_description = $(`#prd_des_${id}`).text(),
                product_price = $(`#prd_price_${id}`).text(),
                product_image = $(`#prd_img_${id}`).text()

            let data = {
                user_id: user_id,
                product_id: id,
                product_name: product_name.trim(),
                product_description: product_description.trim(),
                product_price: product_price.trim(),
                product_image: product_image.trim(),
                product_grand_total: product_price.trim()
            }

            $.ajax({
                type: 'POST',
                url: 'requests/addToCart.php',
                data: data,
                success: function(res) {
                    let parsedData = JSON.parse(res);
                    if(parsedData.message.includes("success")) {
                        //console.log('Added to cart succesfully');
                        let cart = parseInt($('#cart-number-display').text().trim());
                        let newCart =++ cart;
                        $('#cart-number-display').text(newCart);
                    } else console.log('Failed to add to cart');
                }
            });
        }

        $('.add-cart-btn').on('click',function(e) {
            let id = $(this).data('id');
            let s_id = $(this).data('s_id');
            //console.log(id, s_id);
            addToCart(id,s_id);
        })
    });
</script>
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

