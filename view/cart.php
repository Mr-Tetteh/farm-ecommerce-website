<?php require_once "header.php" ?>
<?php
$cart = new Carts();
?>


<body>
<!-- Start Main Top -->

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
                <h2>Cart</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        global $session;
                        global $database;
                        $sql = "SELECT * FROM cart WHERE user_id = $session->id ";
                        $result_set = $database->query($sql);

                        if(empty($result_set->num_rows)) { ?>
                            <tr>
                                <td colspan="6">
                                    <div class="w-100 d-flex justify-content-center">
                                        No Items In Cart
                                    </div>
                                </td>
                            </tr>
                            <?php } else {
                            while ($row = mysqli_fetch_assoc($result_set)) {
                                $cart_id = $row['id'];
                                $product_name = $row['product_name'];
                                $product_price = $row['product_price'];
                                $product_discription = $row['product_discription'];
                                $product_qty = $row['qty'];
                                $product_image = $row['image'];
                                $product_user_id = $row['user_id'];
                                $product_id = $row['product_id'];

                                ?>

                                <!--                            --><?php
//                            if (isset($_POST['update'])) {
//
//                                $cart->qty = $_POST['qty'];
//                                $cart->update();
//                            }
//                            ?>
                                <tr>
                                <form action="checkout.php" method="post">
                                        <td class="thumbnail-img">
                                            <a href="#">
                                                <img class="img-fluid" src="<?php echo $product_image ?>"
                                                     alt=""/>
                                            </a>
                                        </td>
                                        <td class="name-pr">


                                            <a href="#">
                                                <?php echo $product_name ?>
                                            </a>
                                            <input type="text" name="prd_name" value="<?php echo $product_name ?>" hidden>

                                        </td>
                                        <td class="price-pr">
                                            <p>$ <?php echo $product_price ?></p>
                                        </td>

                                        <input type="text" id="prd_price_<?= $product_id ?>" data-prd_price="<?= $product_price?>"
                                               name="prd_price" value="<?php echo $product_price ?>" hidden>


                                        <td class="quantity-box quantity">
                                            <!--onchange="javasript:updateCartTotal(<?php /*=$product_id */ ?>)"-->
                                            <input type="number" id="prd_qty_<?= $product_id ?>"
                                                   data-prd_id="<?= $product_id ?>" data-crt="<?= $cart_id ?>"
                                                   size="4"
                                                   value="<?php echo $product_qty; ?>" min="1" step="1" name="qty"
                                                   class="c-input-text text prd_qty">
                                        </td>

                                        <td class="total-pr">
                                            <p id="cart_total_<?= $product_id ?>">
                                                $ <?php echo number_format($product_price * $product_qty, 2)?>
                                            </p>
                                        </td>

                                        <td class="remove-pr">
                                            <a href="../actions/delete_cart.php?id=<?= $cart_id ?>">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                </tr>
                            <?php }
                        }
                         ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       


</div>
<!-- End Cart -->

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
<!-- End Instagram Feed  -->


<!-- Start Footer  -->
<!-- End Footer  -->


<?php include "./footer.php"; ?>

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
    $(document).ready(function () {

        $('.prd_qty').on('change', function () {
            let $this      = $(this);
            let $crt       = $this.data('crt');
            let $prd_id    = $this.data('prd_id');
            let $prd_qty   = $this.val();
            let $prd_price = $(`#prd_price_${$prd_id}`).data('prd_price');
            let $total     = parseFloat($prd_qty) * parseFloat($prd_price);
            $(`#cart_total_${$prd_id}`).text(`$${$total.toFixed(2)}`);
            //console.log('prd_id',$prd_id, 'prd_qty', $prd_qty, 'prd_price', $prd_price, 'prd_total', $total.toFixed(2), 'cart_id', $crt);

            //make ajax request to server and set qty in cart
            $.ajax({
                type: 'POST',
                url: '../requests/update-qty.php',
                data: {
                    update_qty: true,
                    prd_id: $prd_id,
                    crt_id: $crt,
                    qty: $prd_qty,
                    grand_total: $total
                },
                success: function(res) {
                    console.log(res)
                }
            });

        });
    });

</script>
</body>

</html>

