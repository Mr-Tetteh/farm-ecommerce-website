<?php include "inculdes/header.php"?>

<body>
<!-- Side Bar -->
<?php include "inculdes/navigation.php"?>
    <div class="page-wrapper">
     
        <div class="content">
        
            <div class="row">
                <div class="col-12">
                    <h2>Order Management</h2>
                    <p>View and manage all orders and their logistics.</p>
                </div>
            </div>
           
            <div class="container-fluid">




                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Orders</h4>
<!--                                 Order List Table -->
                                <?php $orders = UserOrder::getUserOrders();
                                //print_r($orders);
                                foreach($orders as $order):
                                ?>
                                <div class="table-responsive">
                                    <h5>Order Number: <?= $order->transaction_id ?></h5>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Product Description</th>
                                            <th>Product Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Grand Total</th>
                                            <th>Reference</th>
                                            <th>Customer Firstname</th>
                                            <th>Customer Lastname</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Country</th>
                                            <th>City</th>
                                            <th>Zip</th>
                                            <th>Payment Method</th>
                                            <th>Shipping Address</th>
                                            <th>Shipping Method</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $products = UserOrder::groupOrders($order->transaction_id);
                                        foreach($products as $product):
                                        ?>
                                            <tr>
                                                <td><?= $product->id ?></td>
                                                <td><?= $product->product_name ?> </td>
                                                <td><?= $product->product_discription ?></td >
                                                <td><?= $product->product_price ?> </td>
                                                <td><?= $product->qty ?></td>
                                                <td><?= $product->grand_total ?></td>
                                                <td><?= $product->amount ?></td>
                                                <td><?= $product->reference ?></td>
                                                <td><?= $product->firstname ?></td>
                                                <td><?= $product->lastname ?></td>
                                                <td><?= $product->email ?></td>
                                                <td><?= $product->address ?></td>
                                                <td><?= $product->country ?></td>
                                                <td><?= $product->city ?></td>
                                                <td><?= $product->zip ?></td>
                                                <td><?= $product->shipping_address ?></td>
                                                <td><?= $product->payment_method ?></td>
                                                <td><?= $product->shipping_method ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
       
    </div>
  

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
