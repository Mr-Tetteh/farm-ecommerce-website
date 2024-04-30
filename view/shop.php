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
<br>

<div class="search-product">
    <form action="shop_search.php" method="post">
        <input class="form-control" name="search" placeholder="Search here..." type="text">
       
        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
    </form>
</div>


                        <div class="container">
                                <div class="col-lg-12">
                                    <div class="title-all text-center">
                                        <h1> Shop/ Produce</h1>
                                    </div>
                                </div>
                            </div>


                            <div class="row special-list">
                                <?php
                                global $session;
                                $products = new Product();

                                $result_set = $products->find_all_with_while();
                                while ($row = mysqli_fetch_array($result_set)) {
                                    $product_id = $row['id'];
                                    $product_name = $row['product_name'];
                                    $product_description = $row['product_description'];
                                    $product_price = $row['product_price'];
                                    $product_image = $row['image'];
                                    $product_contact = $row['contact']


                                    ?>

                                    <div class="col-sm-12 col-lg-12 mb-12 special-grid best-seller">
                                    <div class="products-single fix">

<div class="box-img-hover">
    <div class="type-lb">
        <p class="sale">Sale</p>
    </div>

    <img src="../uploads/<?php echo $product_image ?>" class="img-fluid" alt="" width="200px">

    <h5 id="prd_img_<?= $product_id ?>" hidden="hidden"> <?php echo $product_image ?> </h5>

    <div class="mask-icon">
        <ul>
            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                            class="fas fa-eye"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                            class="fas fa-sync-alt"></i></a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="right"
                   title="Add to Wishlist"><i
                            class="far fa-heart"></i></a></li>
        </ul>

        <button class="cart-button cart btn btn-success add-cart-btn" name="add" data-id="<?= $product_id ?>"
                data-s_id="<?= $session->id ?>" >Add to Cart
        </button>
    </div>
</div>
                                            </div>
                                            <div class="why-text">
                                                <h3 id="prd_name_<?= $product_id ?>"> <?php echo $product_name ?></h3>
                                                <h4 id="prd_des_<?= $product_id ?>"> <?php echo $product_description ?></h4>
                                                <h5 id="prd_price_<?= $product_id ?>"> <?php echo $product_price; ?></h5>
                                                <br>
                                                <a href="tel:<?php echo $product_contact; ?>">Call Farmer</a>

                                                <h5 id="prd_grand_price_<?= $product_id ?>" hidden><?php echo $product_price; ?></h5>

                                            </div>

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


<div class="row my-5">
    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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

