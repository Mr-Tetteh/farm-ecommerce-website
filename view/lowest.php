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
                                <div class="info-box-header">
                                    <h4>Sort by ⬇:<span id="toggle" class="glyphicon glyphicon-menu-up pull-right"></span></h4>
                                </div>
                                <div class="inside"><br>
                                    <a href="highest.php">Price Highest to Lowest </a> <br>
                                    <a href="lowest.php">Price Lowest to Highest </a>


                                </div>

                            </div>
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

                    <?php
                    global $session;
                    global $database;
//                    $products = new Product();
                    $sql =  "SELECT * FROM proudct ORDER BY product_price DESC ";

                   $result_set = $database->query($sql);
                    while ($row = mysqli_fetch_array($result_set)) {
                    $product_id = $row['id'];
                    $product_name = $row['product_name'];
                    $product_description = $row['product_description'];
                    $product_price = $row['product_price'];
                    $product_image = $row['image'];


                    ?>
                    <div class="product-categorie-box">

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">

                                <div class="row">

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">

                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="../admin/images/<?php echo $product_image ?>"
                                                     class="img-fluid Responsive image">
                                                <h5 id="prd_img_<?= $product_id ?>"
                                                    hidden="hidden"> <?php echo $product_image ?> </h5>
                                            </div>
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
                                                <button class="cart-button cart btn btn-success add-cart-btn"
                                                        name="add" data-id="<?= $product_id ?>"
                                                        data-s_id="<?= $session->id ?>">Add to Cart
                                                </button>
                                            </div>

                                        </div>
                                        <div class="why-text">
                                            <h3 id="prd_name_<?= $product_id ?>"> <?php echo $product_name ?></h3>
                                            <h4 id="prd_des_<?= $product_id ?>"> <?php echo $product_description ?></h4>

                                            <h5 id="prd_price_<?= $product_id ?>"> <?php echo $product_price; ?></h5>
                                            <h5 id="prd_grand_price_<?= $product_id ?>"
                                                hidden><?php echo $product_price; ?></h5>

                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">


                                </div>

                            </div>
                            <?php } ?>

                        </div>

                    </div>

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
                <input class="form-control" name="search" placeholder="Search here..." type="text">

                <button type="submit" name="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="filter-price-left">
            <div class="title-left">
                Search here 👆🏻
            </div>
            <div class="price-box-slider">
                <div id="slider-range"></div>
                <p>
                    <input type="text" id="amount" readonly
                           style="border:0; color:#fbb714; font-weight:bold;">
                    <button class="btn hvr-hover" type="submit">Filter</button>
                </p>
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
                <img src="..images/instagram-img-01.jpg" alt=""/>
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
<!-- End Instagram Feed  -->


<?php include "footer.php"; ?>

<!-- ALL JS FILES -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

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
                url: '../requests/addToCart.php',
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

        $(".info-box-header").click(function () {

            $(".inside").slideToggle("fast");

            $("#toggle").toggleClass("glyphicon-menu-down glyphicon , glyphicon-menu-up glyphicon ");


        });

    });
</script>
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

