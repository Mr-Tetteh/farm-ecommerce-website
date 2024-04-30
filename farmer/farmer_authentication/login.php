<?php include "../../admin/inculdes/init.php"?>
 <?php ob_start() ?>
<?php


    global $session;
    if (isset($_POST['submit'])) {

        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if($farmer = farmer::verify_farmer($email, $password)) {
            $session->login($farmer);
            redirect('../farmer_product_Mgt.php');
        } else {
            $message = 'Your records does not match our records';
        }

    }else{
        $message='';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriConnect farmer Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #0A0A0A;
            color: #FFFFFF;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #12232E;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #17A2B8;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #17A2B8;
        }

        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #294C60;
            border-radius: 4px;
            background-color: #1C2833;
            color: #FFFFFF;
        }

        .form-actions {
            text-align: center;
            padding-top: 20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #28A745;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #218838;
        }

        .links a {
            color: #17A2B8;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>AgriConnect farmer Login</h1>
    <h3><?php echo $message ?></h3>
    <form id="login-form" action="#" method="post">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">

            <a href="register_admin.php">Don't have an account? Sign up </a>
        </div>
        
        <div class="form-actions">
            <input type="submit" name="submit"  value="Sign in" class="form-control btn btn-primary">

        </div>

    </form>
</div>
</body>
</html>

