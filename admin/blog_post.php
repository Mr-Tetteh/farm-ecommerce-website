<?php include "inculdes/header.php"; ?>
<?php require_once "inculdes/protect_route.php" ?>
<?php include "inculdes/navigation.php" ?>

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
        echo "<h1>Blog Posted Successfully😊 </h1>";
    }
} ?>

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
                            <h4 class="card-title">Blog Post</h4>

                            <form action="" method="post" enctype="multipart/form-data">


                                <div class="table-responsive">


                                    <div class="card">
                                        <div class="form-group">
                                            <label for="product-title">Blog Title:</label>
                                            <input type="text" class="form-control" id="product-title"
                                                   name="blog_title" placeholder="Enter Blog Title" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="product-desc">Blog Content:</label>
                                            <textarea class="form-control" id="product-desc" name="blog_content"
                                                      placeholder="Blog Content here" required>
                                                </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="product-image">Image:</label>
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
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>