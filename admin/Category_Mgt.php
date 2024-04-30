<?php include "inculdes/header.php" ?>
<?php

    $products = Product::find_all();

?>

<section id="category">
    <!-- Side Bar -->
    <?php include "inculdes/navigation.php"?>


    <div class="page-wrapper">

  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4>Categories Overview</h4>
                    <p>Below is a list of all categories available on AgriConnect.</p>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Product Nam</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Category Rows will be populated here -->
                            <!-- Example static row: -->
                            <?php   foreach ($products as $product) : ?>
                            <tr>
                                <td><?php echo $product->product_name?></td>
                                <td><?php echo $product->categories ?> </td>
                                <td>
                                    <a href="./actions/edit_product_Mgt_.php?id=<?php echo $product->id?>" class="btn btn-primary">Edit</a>

                                    <a href="./actions/delete_cat_mgt.php?id=<?php echo $product->id?>" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <!-- More rows added here dynamically via server-side scripting or JavaScript -->
                        </tbody>
                    </table>
                    <button class="btn btn-success">Add New Category</button>
                </div>
            </div>
        </div>
    </div>
    </section>

      <!-- ALL JS FILES -->
      <script src="../js/jquery-3.2.1.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/custom.js"></script>
      <script>
          // JavaScript functions for handling the actions
          function viewOrderDetails(orderId) {
              // Logic to view order details
              console.log('View details for order', orderId);
              // Typically, this would involve opening a modal or redirecting to a page with order details.
          }
  
          function updateOrderStatus(orderId) {
              // Logic to update the status of an order
              console.log('Update status for order', orderId);
              // This could involve opening a modal with a form to change the order status.
          }
  
          function manageLogistics(orderId) {
              // Logic to manage logistics for an order
              console.log('Manage logistics for order', orderId);
              // This could open a modal or a new section to view and update logistics information.
          }
      </script>
  </body>
  </html>
  