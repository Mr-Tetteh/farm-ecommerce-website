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
                 Order Management Section
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Orders</h4>
                                <Order List Table
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer First name</th>
                                                <th>Customer Last name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Zip</th>
                                                <th>Same Shipping Address</th>
                                                <th>Payment Method</th>
                                                <th>Shipping method</th>
                                            </tr>
                                        </thead>
                                        <?php $payments=  Payment::find_all();
                                        foreach ($payments as $payment) : ?>

                                       <tr>
                                           <td><?php echo $payment->id?></td>
                                           <td><?php echo $payment->firstname?></td>
                                           <td><?php echo $payment->lastname?></td>
                                           <td><?php echo $payment->email?></td>
                                           <td><?php echo $payment->address?></td>
                                           <td><?php echo $payment->country?></td>
                                           <td><?php echo $payment->city?></td>
                                           <td><?php echo $payment->zip?></td>
                                           <td><?php echo $payment->shipping_address?></td>
                                           <td><?php echo $payment->payment_method?></td>
                                           <td><?php echo $payment->shipping_method?></td>

                                       </tr>
                                        <?php endforeach;  ?>

                                    </table>
                                </div>

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
