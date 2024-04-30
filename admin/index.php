<?php include "inculdes/header.php"?>

<body>
    <!-- Side Bar -->
<?php include "inculdes/navigation.php"?>



    <section class="dashboard">
    <div class="page-wrapper">


        <div class="content">
         
            <div class="row">
                <div class="col-12">
                    <h2>Welcome to AgriConnect Admin Dashboard</h2>

                    <p>Managing Freshness and Quality from Farm to Table.</p>
                </div>
            </div>


            <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Dashboard Overview</h4>
                                <p>Welcome, Admin! Here's the latest activity on AgriConnect:</p>
                                 
                            <div class="row">
                                
                                <div class="col-md-3">
                                    <div class="card p-3 mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-basket"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="card-title">Total Orders</h6>
                                                <h3 class="card-value"><?php echo UserOrder::count_all(); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="col-md-3">
                                    <div class="card p-3 mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="card-title">New Reviews</h6>
                                                <h3 class="card-value"><?php echo Comment::count_all(); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-3">
                                    <div class="card p-3 mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="card-title">All Admin Users</h6>
                                                <h3 class="card-value"><?php echo Admin::count_all(); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card p-3 mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="card-title">All Customer Users</h6>
                                                <h3 class="card-value"><?php echo Customer::count_all(); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card p-3 mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-box"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="card-title">Total Products</h6>
                                                <h3 class="card-value"><?php echo Product::count_all(); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div
            ></div>
    </div>
       </div>
                    </div>
                </div>
                
            </div>
           
        </div>
       
    </div>

   </section>


    <!-- ALL JS FILES -->
    <script src="../js/jquery-3.2.1.min./js"></script>
    <script src="../js/popper.min./js"></script>
    <script src="../js/bootstrap.min./js"></script>
    <script src="../js/custom./js"></script>
</body>
</php>