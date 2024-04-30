<?php include "./inculdes/farmer_header.php" ?>
<?php //include "./inculdes/farmer_header.php" ?>



<?php
error_reporting(E_ALL);
global $database;

if (isset($_POST['submit'])) {
    $product = new Product();
    $hash = md5(time());

    $product->categories =    $_POST['product_cat'];
    $product->product_name =  $_POST['product_title'];
    $product->product_price = $_POST['product_price'];
    $product->product_price = $_POST['product_price'];
    $product->product_keywords =  $_POST['product_keywords'];
    $product->image =  $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $product->product_description = $_POST['product_desc'];
    $product->usr_id = $_POST['user_id'];
    $product->contact = $_POST['contact'];

    var_dump($hash);


    $dst = "../admin/uploads/$hash$product->image";
    $product->image = $dst;

    var_dump($product->image);

    var_dump(move_uploaded_file($post_image_temp, $dst));

    var_dump($product->create());

     redirect("view_all_farmer_product_Mgt.php");
    exit;
   
}
?>

<body>
<!-- Side Bar -->
<!-- End Side Bar -->
<!-- Page wrapper  -->
<?php include "./inculdes/farmer_navigation.php"?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <h2>Product & Category Management</h2>
                <p>Here you can add your products!</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3><?php echo $session->username; ?></h3>
                            <h4 class="card-title">Product Management</h4>
                            <div class="table-responsive">


                                <div class="card">

                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label for="product-cat">Category:</label>
                                                <input type="text" class="form-control" id="product-cat"
                                                       name="product_cat" placeholder="Enter Category" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="product-title">Product Name:</label>
                                                <input type="text" class="form-control" id="product-title"
                                                       name="product_title" placeholder="Enter Product Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="product-price">Price:</label>
                                                <input type="number" step="0.01" class="form-control" id="product-price"
                                                       name="product_price" placeholder="Enter Product Price" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="product-desc">Description:</label>
                                                <textarea class="form-control" id="product-desc" name="product_desc" placeholder="" required>
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="product-image">Image:</label>
                                                <input type="file" class="form-control" id="product-image"
                                                       name="image">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="user_id"
                                                       name="user_id" placeholder="Enter Product Category"
                                                       value="<?php echo $session->id ?>" hidden>
                                            </div>

                                            <div class="form-group">
                                                <label for="product-image">Contact:</label>
                                                <input type="text" class="form-control" id="user_id"
                                                       name="contact" placeholder="Enter Contact">
                                            </div>
                                            <div class="form-group">
                                                <label for="product-keywords">Category with product belongs to:</label>
                                                <input type="text" class="form-control" id="product-keywords"
                                                       name="product_keywords" placeholder="Enter Product Category"
                                                       required>
                                            </div>
                                            <input type="submit" name="submit" value="Post Product"
                                                   class="btn btn-primary">
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
</div>


<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>