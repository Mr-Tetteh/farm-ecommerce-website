<?php include "../inculdes/header.php" ?>
<?php include "../inculdes/navigation.php" ?>



<?php
$blog = Blog_post::find_by_id($_GET['id']);

if (empty($_GET['id'])){
    redirect('inculdes/view_all_blogs.php');
}
  ?>


<?php if (isset($_POST['submit'])) {
    global $database;
    $blog = new Blog_post();
    $blog->blog_title = $_POST["blog_title"];
    $blog->blog_content = $_POST['blog_content'];
    $blog->blog_image =  $database->escape_string($_FILES['image']['name']);
    $blog_image_temp =   $database->escape_string($_FILES['image']['tmp_name']);

    move_uploaded_file($blog_image_temp, "./images/$blog->blog_image");


    $blog->create();
    if ($blog->create()){
        echo "<h1>Blog Updated Successfully😊 </h1>";
    }
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
                            <h4 class="card-title">Edit Blog Post</h4>

                            <form action="" method="post" enctype="multipart/form-data">


                                <div class="table-responsive">


                                    <div class="card">
                                        <div class="form-group">
                                            <label for="product-title">Blog Title:</label>
                                            <input type="text" class="form-control" id="product-title"
                                                   name="blog_title" placeholder="Enter Blog Title"  value="<?php echo $blog->blog_title?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="product-desc">Blog Content:</label>
                                            <textarea class="form-control" id="product-desc" name="blog_content"  placeholder="Blog Content here" >

                                             <?php echo $blog->blog_content?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="product-image">Image:</label>

                                            <img src="../images/<?php echo $blog->blog_image ?>"  class="img-fluid Responsive image" alt="Responsive image" height="200px" width="200px">
                                            <input type="file" class="form-control" id="product-image"
                                                   name="image">
                                        </div>

                                        <input type="submit" name="submit" value="Post Blog"
                                               class="btn btn-primary">
                            </form>

                        </div>
                    </div>
                </div>
            </div>

<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/custom.js"></script>
</div>
</div>