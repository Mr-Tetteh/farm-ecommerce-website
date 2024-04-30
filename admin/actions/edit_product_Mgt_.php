<?php require_once "../inculdes/init.php"; ?>
<?php  require_once "../inculdes/protect_route.php"?>
<?php


if (empty($_GET['id'])){
    redirect('Category_Mgt.php');
}

$product = Product::find_by_id($_GET['id']);

    if (isset($_POST['submit'])){

     $product->categories =  $_POST['product_cat'];
     $product->product_name =  $_POST['product_title'];
     $product->product_price =   $_POST['product_price'];
     $product->product_description =   $_POST['product_desc'];
     $product->product_keywords =   $_POST['product_keywords'];

     $product->save();

     redirect("../Category_Mgt.php");

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriConnect Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/custom.css">
    <!-- Additional CSS for sidebar and background -->
    <link rel="stylesheet" href="../css/styles.css">


</head>

<body>
<!-- Side Bar -->
<div class="span-12">
    <aside class="sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a href="../index.php" class="active">Dashboard</a></li>
                <li> <a href="../User_Mgt.php">Admin Users</a></li>
                <li> <a href="../Customer_user_Mgt.php">Customer Users</a></li>
                <li> <a href="../Product_Mgt.php">Product Management</a></li>
                <li> <a href="../Order_Mgt.php">Order Management</a></li>
                <li> <a href="../Order_details.php">Order Details</a></li>
                <li> <a href="../Category_Mgt.php">Category Management</a></li>
                <li> <a href="../blog_post.php">Post Blog</a></li>
                <li> <a href="../view_all_blogs.php"> View All Post Blog</a></li>

            </ul>
        </nav>

        <a  class="btn-success" href="../authentication/logout.php" >Logout</a>
    </aside>
</div>
    <!-- End Side Bar -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <h2>Product & Category Management</h2>
                    <p>Here you can manage your products!</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Product Management</h4>
                                <div class="table-responsive">

                                

<div class="card">
    <div class="card-header">
        Update Product
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="product-cat">Category:</label>
                <input type="text" class="form-control" id="product-cat" name="product_cat" placeholder="Enter Category"  value="<?php echo $product->categories ?> ">
            </div>
            <div class="form-group">
                <label for="product-title">Product Name:</label>
                <input type="text" class="form-control" id="product-title" name="product_title" placeholder="Enter Product Name" value="<?php echo $product->product_name ?>">
            </div>
            <div class="form-group">
                <label for="product-price">Price:</label>
                <input type="number" step="0.01" class="form-control" id="product-price" name="product_price" placeholder="Enter Product Price" value="<?php echo $product->product_price ?>">
            </div>
            <div class="form-group">
                <label for="product-desc">Description:</label>
                <textarea class="form-control" id="product-desc" name="product_desc" placeholder="Enter Product Description" >
                    <?php echo $product->product_description ?>
                </textarea>
            </div>
<!--            <div class="form-group">-->
<!--                <label for="product-image">Image:</label>-->
<!--                <input type="file" class="form-control" id="product-image" name="product_image" accept="image/*">-->
<!--            </div>-->
            <div class="form-group">
                <label for="product-keywords">Keywords:</label>
                <input type="text" class="form-control" id="product-keywords" name="product_keywords" placeholder="Enter Product Keywords" value="<?php echo $product->product_keywords ?>" >
            </div>
            <input type="submit" name="submit" value="Update Product" class="btn btn-primary">
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