<?php include "./inculdes/farmer_header.php" ?>
<?php

if (isset($_GET['id'])){

  $farmer =   Farmer::find_by_id($_GET['id']);

}
//else{
//    redirect("famer_product_Mgt.php");
//}
if (isset($_POST['submit'])) {

    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];

    if ($password === $confirm){

        if (isset($_POST['submit'])){
            $farmer->farmer_firstname= $_POST['first_name'];
            $farmer->farmer_lastname = $_POST['lastname'];
            $farmer->username = $_POST['username'];
            $farmer->farmer_email = $_POST['email'];
            $farmer->password  =  password_hash($_POST['password'], PASSWORD_BCRYPT, array('cost' => 12)  );
            $farmer->contact = $_POST['contact'];

            $farmer->update();

            redirect("farmer_product_Mgt.php");

        }
    }else{
        $message = "Password Do not match";
    }

}else{
    $message = "";
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
                <h2>Profile</h2>
                <p>Here you can edit your profile!</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product Management</h4>
                            <h4 class="card-title text-danger text-center"><?php echo  $message; ?></h4>
                            <div class="table-responsive">


                                <div class="card">

                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label for="product-cat">First Name:</label>
                                                <input type="text" class="form-control" id="product-cat"
                                                       name="first_name" placeholder="Enter First Name" value="<?php echo $farmer->farmer_firstname ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="product-title">Last Name:</label>
                                                <input type="text" class="form-control" id="product-title"
                                                       name="lastname" placeholder="Last Name" value="<?php echo $farmer->farmer_lastname ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="product-title">Username:</label>
                                                <input type="text" class="form-control" id="product-title"
                                                       name="username" placeholder="Last Name" value="<?php echo $farmer->username ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="product-title">Email :</label>
                                                <input type="email" class="form-control" id="product-title"
                                                       name="email" placeholder="Enter Your Email" value="<?php echo $farmer->farmer_email?>" >
                                            </div>


                                            <div class="form-group">
                                                <label for="product-desc">Contact:</label>
                                                <input class="form-control" id="contact" name="contact" placeholder="Enter Contact"   value="<?php echo $farmer->contact ?>" >
                                            </div>

                                            <div class="form-group">
                                                <label for="product-keywords">Password:</label>
                                                <input type="password" class="form-control" id="password"
                                                       name="password" placeholder="leave password empty to keep old password">
                                            </div>
                                            <div class="form-group">
                                                <label for="product-keywords">Confirm New Password:</label>
                                                <input type="password" class="form-control" id="password"
                                                       name="confirm_password" placeholder="leave password empty to keep old password">
                                            </div>
                                            <input type="submit" name="submit" value="Update Profile"
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
