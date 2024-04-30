<?php require_once "header.php" ?>
<?php include "protect_route_customer.php" ?>


<body>
<!-- Start Main Top -->
<!-- End Main Top -->

<!-- Start Main Top -->
<!-- End Main Top -->


        <h2 class="text-center"><u class="fa-dashboard">Testimonials</u></h2> <br>


        <?php $comments = Comment::find_all() ?>


        <!-- Carousel -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <?php foreach ($comments as $comment) : ?>

                <div class="carousel-inner">

                    <div class="carousel-item active" data-bs-interval="10000">

                        <h2 class="text-warning text-center"><?php echo $comment->content ?></h2>
                        <h5 class="text-center text-dark"><?php echo "By: $comment->username " ?></h5>

                        <div class="carousel-caption d-none d-md-block">

                        </div>

                    </div>


                </div>
            <?php endforeach; ?>



        </div>


        <div class="card-header">
            <h2>Leave a Comment </h2>
        </div>
        <div class="card-body">
            <div class="media mb-3">
                <?php
                global $database;
                if (isset($_POST['submit'])) {
                    $username = $database->escape_string(($_POST['username']));
                    $content = $database->escape_string(($_POST['content']));

                    $new_comment = Comment::create_comment($username, $content);


                    if ($new_comment && $new_comment->save()) {
                        redirect("shop-detail.php");

                    } else {
                        $message = "There was a problem";
                    }

                } else {
                    $username = "";
                    $content = "";
                }

                ?>

                <form method="post" action="" class="col-md-12">
                    <div class="media-body">
                        <input type="text" class="form-control" name="username" placeholder="Name" required>
                        <br>
                        <lable>Enter Content</lable>
                        <textarea name="content" class="form-control" id="" required cols="30" rows="10">

                                </textarea>
                    </div>
            </div>
            <input type="submit" name="submit" value="Leave a Review" class="btn btn-primary pull-right btn hvr-hover">

            <hr>
        </div>
    </div>
</div>


<!-- End Cart -->

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

    <div class="blog-box">

        <div class="blog-img">
            <?php
            $blog = new Blog_post();

            $result_set = $blog->find_all_with_while();

            while ($row = mysqli_fetch_array($result_set)) {
            $blog_image = $row['blog_image'];
            $blog_content = $row['blog_content'];
            $blog_title = $row['blog_title'];


            ?>
            <img class="img-fluid margin-right" width="200px" height="200px" src="./images/<?php echo $blog_image ?>" alt=""/>
        </div>
        <div class="blog-content">
            <div class="title-blog">
                <h3><?php echo $blog_title ?></h3>
                <p>

                    <?php echo $blog_content ?>
                </p>
            </div>
            <ul class="option-blog">
                <li><a href="#"><i class="far fa-heart"></i></a></li>
                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                <li><a href="#"><i class="far fa-comments"></i></a></li>
            </ul>
            <?php } ?>

        </div>
    </div>
</div>
</div>
</div>
</div>


<!-- End Blog  -->


<!-- Start Instagram Feed  -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
<!-- End Instagram Feed  -->


<!-- Start Footer  -->
<!-- End Footer  -->


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


