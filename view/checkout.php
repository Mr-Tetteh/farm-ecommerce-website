<?php require_once "header.php" ?>
<?php include "protect_route_customer.php" ?>

<?php
if (empty($_GET['id'])) {
    redirect("login.php");
}

global $database;
global $session;

$customer = Customer::find_by_id($_GET['id'])

?>


<?php
//if (isset($_POST['submit'])) {
//
//    $payment = new Payment();
//    $payment->firstname = $_POST['firstname'];
//    $payment->lastname = $_POST['lastname'];
//    $payment->email = $_POST['email'];
//    $payment->address = $_POST['address'];
//    $payment->country = $_POST['country'];
//    $payment->city = $_POST['city'];
//    $payment->zip = $_POST['zip'];
//    $payment->shipping_address = $_POST['same-shipping'];
//    $payment->payment_method = $_POST['choice'];
//    $payment->shipping_method = $_POST['shipping-option'];
//
//    $payment->create();
//
//
//}
$sql = "SELECT * FROM cart WHERE user_id = $session->id";
$user_purchase = Carts::find_by_query($sql);
?>
<body>

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
                <h2>Checkout</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
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
            <div class="col-sm-12 col-lg-12 mb-12">
                <div class="checkout-address">
                    <div class="title-left">
                        <h3>Billing address</h3>
                    </div>
                    <form id="paymentForm" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name *</label>
                                <input type="text" class="form-control" id="firstName" name="firstname" placeholder=""
                                       value="<?php echo $customer->first_name ?>" required/>
                                <div class="invalid-feedback"> Valid first name is required.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name *</label>
                                <input type="text" class="form-control" id="lastName" name="lastname" placeholder=""
                                       value="<?php echo $customer->last_name ?>" required/>
                                <div class="invalid-feedback"> Valid last name is required.</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email Address *</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $customer->email ?>"
                                   id="email" placeholder="">
                            <div class="invalid-feedback"> Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Address *</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="" required>
                            <div class="invalid-feedback"> Please enter your shipping address.</div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="address">Country *</label>
                                <input type="text" class="form-control" name="country" id="country"
                                       value="<?php echo $customer->country ?>" required>
                                <div class="invalid-feedback"> Please select a valid country.</div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">City *</label>
                                <input type="text" class="form-control" name="city" id="city"
                                       value="<?php echo $customer->city ?>" required>
                                <div class="invalid-feedback"> Please provide a valid state.</div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip *</label>
                                <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
                                <div class="invalid-feedback"> Zip code required.</div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my
                                billing address</label>
                            <input id="txt-same-shipping" name="same-shipping" type="text" hidden value="false"/>
                        </div>

                        <hr class="mb-4">
                        <div class="title"><span>Payment</span></div>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">

                                <input id="payment" name="choice" value="credit card" type="text"
                                       class="payments custom-control-input"
                                       placeholder=" Type your payment option visa, momo, credit card or debit card" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="payment-icon">
                                    <ul>
                                        <li><img class="img-fluid" src="../images/payment-icon/1.png" alt=""></li>
                                        <li><img class="img-fluid" src="../images/payment-icon/2.png" alt=""></li>
                                        <li><img class="img-fluid" src="../images/payment-icon/3.png" alt=""></li>
                                        <li><img class="img-fluid" src="../images/payment-icon/5.png" alt=""></li>
                                        <li><img class="img-fluid" src="../images/payment-icon/7.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-1">
                </div>
            </div>
            <div class="col-sm-12 col-lg-12 mb-12">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="shipping-method-box">
                            <div class="title-left">
                                <h3>Shipping Method</h3>
                            </div>

                            <div class="mb-4">
                                <div class="custom-control custom-radio">
                                    <input id="shippingOption" name="shipping-option" value="Standard Delivery"
                                           class="custom-control-input" >
                                </div>
                                <div class="ml-4 mb-2 small">(2-5 business days)</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12  mb-12">
                        <div class="odr-box">
                            <div class="title-left">
                                <h3>Shopping cart</h3>
                            </div>
                            <div class="rounded p-2 bg-light">
                                <div class="media mb-2 border-bottom">
                                    <?php foreach ($user_purchase as $purcahse) : ?>
                                        <div class="media-body prd_name_"><a
                                                    href="../cart.html"> <?php echo $purcahse->product_name ?></a>
                                            <div class="small text-muted">Price: <?php echo $purcahse->product_price ?>
                                                <span class="mx-2">|</span> Qty: <?php echo $purcahse->qty ?>
                                                <span class="mx-2">|</span>
                                                Subtotal: <?php echo $purcahse->grand_total ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="order-box">
                            <div class="title-left">
                                <h3>Your order</h3>
                            </div>
                            <div class="d-flex">
                                <div class="font-weight-bold">Product</div>
                                <div class="ml-auto font-weight-bold">Total</div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex">
                                <h4>Sub Total</h4>
                                <?php $grandTotal = 0; ?>
                                <?php foreach ($user_purchase as $purchase) : ?>
                                    <div class="ml-auto font-weight-bold grand">
                                        $ <?php $grandTotal += $purchase->grand_total;
                                        echo $purchase->grand_total ?> </div>
                                <?php endforeach; ?>
                            </div>

                                <h4>Shipping Cost</h4>
                                <div class="ml-auto font-weight-bold"> Free</div>
                            </div>
                            <hr>
                            <div class="d-flex gr-total">
                                <h5>Grand Total</h5>
                                <div class="ml-auto h5"> GHC <?= number_format($grandTotal, 2); ?></div>
                                <input id="amount" type="hidden" value="<?= number_format($grandTotal, 2) ?>">
                            </div>
                            <hr>

                        </div>
                    </div>
                    <div class="ml-auto btn hvr-hover">

                        <div class="form-submit">
                            <input type="submit" onclick="payWithPaystack()" name="submit" value="Place Order"
                                   class="btn btn-primary pull-right btn hvr-hover">

                        </div>
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


<?php include "footer.php"; ?>

<!-- ALL JS FILES -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script>
    let txtSameShipping = $("#txt-same-shipping");
    $("#same-address").on("change", () => {
        txtSameShipping.val() === "false" ?
            txtSameShipping.val("true") :
            txtSameShipping.val("false")
    });
</script>
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
<script src="https://js.paystack.co/v1/inline.js"></script>

<script>
    var paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener('submit', payWithPaystack, false);

    function payWithPaystack(e) {
        e.preventDefault();
        var handler = PaystackPop.setup({
            key: 'pk_test_5131f71c2c533282339e2d59db3d4234c4b67d87', // Replace with your public key
            email: document.getElementById('email').value,
            //amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
            amount: <?= number_format($grandTotal, 2) ?> * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
            currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
            callback: function (res) {

                $.ajax({
                    type: 'POST',
                    url: '../requests/update-order.php',
                    data: {
                        update_order: true,
                        user_id: <?= $session->id ?>,
                        reference: res.reference,
                        transaction: res.transaction,
                        grand_total: $('#amount').val(),
                        
                        firstname: $(`#firstName`).val(),
                        lastname: $(`#lastName`).val(),
                        email: $(`#email`).val(),
                        address: $(`#address`).val(),
                        country: $(`#country`).val(),
                        city: $(`#city`).val(),
                        zip: $(`#zip`).val(),
                        same: $(`#txt-same-shipping`).val(),
                        payment: $(`#payment`).val(),
                        shipping: $(`#shippingOption`).val()


                    },
                    success: function (res) {
                        window.location.href = '../index.php';
                    }
                });
            },
            onClose: function () {
                alert('Transaction was not completed, window closed.');
            },
        });
        handler.openIframe();
    }


</script>

<script>


</script>
</body>

</html>

