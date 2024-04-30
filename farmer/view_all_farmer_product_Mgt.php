<?php include "./inculdes/farmer_header.php" ?>

<?php
global $database;

if (isset($_POST['submit'])) {
    $product = new Product();
    $product->categories = $_POST['product_cat'];
    $product->product_name = $_POST['product_title'];
    $product->product_price = $_POST['product_price'];
    $product->product_price = $_POST['product_price'];
    $product->product_keywords = $_POST['product_keywords'];
    $product->image = $database->escape_string($_FILES['image']['name']);
    $post_image_temp = $database->escape_string($_FILES['image']['tmp_name']);
    $product->product_description = $_POST['product_desc'];

    move_uploaded_file($post_image_temp, "../admin/images/$product->image");
    $product->create();
}
?>

<body>
<!-- Side Bar -->
<!-- End Side Bar -->
<!-- Page wrapper  -->
<?php include "./inculdes/farmer_navigation.php" ?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <h2>Product & Category Management</h2>
            <p>Here you can add your products!</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="card-body">
                <h4 class="card-title">View_Product Management</h4>
                <div class="table-responsive">


                    <?php $products = Product::find_by_query("SELECT * FROM proudct WHERE usr_id = $session->id");

                    ?>

                    <section id="category">
                        <!-- Side Bar -->


                        <div class="page-wrapper">


                            <div class="row">

                                <h4>Categories Overview</h4>
                                <p>Below is a list of all categories available on AgriConnect.</p>
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Product ID</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product price</th>
                                        <th scope="col">Product Description</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Product Keyword</th>

                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Category Rows will be populated here -->
                                    <!-- Example static row: -->
                                    <?php foreach ($products as $product) : ?>

                                        <tr>

                                            <td><?php echo $product->id ?></td>
                                            <td><?php echo $product->categories ?> </td>
                                            <td><?php echo $product->product_name ?> </td>
                                            <td><?php echo $product->product_price ?> </td>
                                            <td><?php echo $product->product_description ?> </td>
                                            <td><?php echo $product->contact ?> </td>
                                            <td><img src="../admin/images/<?php echo $product->image ?>" width="200px">
                                            </td>
                                            <td><?php echo $product->product_keywords ?> </td>
                                            <td>
                                                <a href="./actions/edit_product_Mgt_.php?id=<?php echo $product->id ?>"
                                                   class="btn btn-primary">Edit</a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <!-- More rows added here dynamically via server-side scripting or JavaScript -->
                                    </tbody>
                                </table>
                                <a class="btn btn-primary" href="farmer_product_Mgt.php">Add New Product </a>
                            </div>
                        </div>
                </div>
            </div>
            </section>


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