<?php require_once "header.php" ?>
<?php include "protect_route_customer.php" ?>

<?php

if (empty($_GET['id'])){
    redirect('login.php');
}
$customer = Customer::find_by_id($_GET['id']);



if(isset($_POST['submit'])){
  $customer->first_name = $_POST['first_name'];
    $customer->last_name =   $_POST['last_name'];
    $customer->password =  $_POST['password'];
    $customer->contry =  $_POST['country'];
    $customer->city =  $_POST['city'];
    $customer->contact =   $_POST['contact'];
    $customer->email =  $_POST['email'];

    $customer->save();

}

?>

<body>
    <!-- Start Main Top -->
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <!-- End Main Top -->

    <!-- Start Top Search -->
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

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Account</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    </div>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="product-cat">First Name:</label>
                            <input type="text" class="form-control" id="product-cat" name="first_name" value="<?php echo $customer->first_name ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="product-title">Last Name:</label>
                            <input type="text" class="form-control" id="product-title" name="last_name" value="<?php echo $customer->last_name ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="product-desc">Country:</label>
                            <input type="text" class="form-control" id="contry" name="country"  value="<?php echo $customer->country ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="product-desc">City:</label>
                            <input type="text" class="form-control" id="city" name="city"  value="<?php echo $customer->city ?>" required>

                        </div>
                        <div class="form-group">
                            <label for="product-desc">Contact:</label>
                            <input type="text" class="form-control" id="city" name="contact"  value="<?php echo $customer->contact ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="product-desc">Email:</label>
                            <input type="text" class="form-control" id="city" name="email"  value="<?php echo $customer->email ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="text"  class="form-control" id="password" name="password" placeholder="Leave empty to keep the same password" >
                        </div>
                        <input type="submit" name="submit" value="Update Profile" class="btn btn-primary">
                    </form>
                </div>


                </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End My Account -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="i../mages/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <!-- End Footer  -->


    <?php include "footer.php"; ?>

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
</body>

</html>

