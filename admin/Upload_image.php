<?php require_once "inculdes/header.php" ?>
<?php require_once "inculdes/protect_route.php" ?>
<?php require_once "inculdes/navigation.php" ?>

<?php
global $database;
if (isset($_POST['upload'])) {
    $photo = new Images();
    $photo->title = $_POST['title'];
    $photo->image = $database->escape_string($_FILES['image']['name']);
    $photo_temp = $database->escape_string($_FILES['image']['tmp_name']);


    move_uploaded_file($photo_temp, "./images/$photo->image");

    $photo->create();
}



?>


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
                            <h4 class="card-title">Product Management</h4>
                            <div class="table-responsive">


                                <div class="card">

                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="product-image">Image title:</label>
                                                <input type="text" class="form-control" id="product-image" name="title">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                            <input type="submit" name="upload" value="Update Product"
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