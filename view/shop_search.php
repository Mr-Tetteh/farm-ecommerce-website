<?php require_once "header.php" ?>
<?php include "protect_route_customer.php" ?>


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
                <h2>Shop</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-8 text-center text-sm-left">
                            <div class="toolbar-sorter-right">
                                <span>Sort by </span>
                                <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                                    <option data-display="Select">Nothing</option>
                                    <option value="1">Popularity</option>
                                    <option value="2">High Price → High Price</option>
                                    <option value="3">Low Price → High Price</option>
                                    <option value="4">Best Selling</option>
                                </select>
                            </div>
                            <p>Showing all 4 results</p>
                        </div>


                        <div class="col-12 col-sm-4 text-center text-sm-right">

                            <ul class="nav nav-tabs ml-auto">

                                <li>

                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i
                                                class="fa fa-th"></i> </a>
                                </li>

                            </ul>
                        </div>

                    </div>


                    <div class="product-categorie-box">

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">

                                <div class="row">

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <?php


                                        $product = new Product();

                                        if (isset($_POST['submit'])) {

                                            $item = $_POST['search'];

                                            if (empty($item)) {
                                                redirect('shop.php');
                                            } else {

                                                $found_item = $product->search($item);

                                                $count = mysqli_num_rows($found_item);
                                            }
                                        }

                                        if ($count == 0) {

                                            echo "<h1> Found nothing </h1>";

                                        } else {

                                        echo "<h1> Result Found </h1>";

                                        while ($row = mysqli_fetch_assoc($found_item)) {
                                        $product_name = $row['product_name'];
                                        $product_price = $row['product_price'];
                                        $product_description = $row['product_description'];
                                        $product_image = $row['image']


                                        ?>

                                        <div class="products-single fix">

                                            <div class="box-img-hover">

                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>

                                                <img src="../uploads/<?php echo $product_image ?>" class="img-fluid" alt="Responsive image">
                                        
                                        <h5 id="prd_img_<?= $product_id ?>" hidden="hidden"> <?php echo $product_image ?> </h5>
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                               title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                               title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                               title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                    <a class="cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h3><?php echo $product_name ?></h3>
                                                <h4><?php echo $product_description ?></h4>
                                                <h5> <?php echo $product_price ?></h5>

                                            </div>
                                            <?php }
                                            } ?>

                                        </div>


                                    </div>
                                    `
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                    <div class="search-product">
                        <form action="shop_search.php" method="post">
                            <<div class="search-product">
    <form action="shop_search.php" method="post">
        <input class="form-control" name="search" placeholder="Search here..." type="text">
       
        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
    </form>
</div>

                    
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>

<!-- End Shop Page -->

<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-01.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-02.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-03.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-04.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-05.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-06.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-07.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-08.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-09.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="../images/instagram-img-05.jpg" alt=""/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- End Instagram Feed  -->


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

