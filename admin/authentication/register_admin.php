<?php require_once "../inculdes/header.php"; ?>


<?php
//session_start(); // start the session

//require __DIR__."../actions/admins/admins__register_actions.php";

if (isset($_POST['submit'])) {
    $password = $_POST['admin_password'];
    $confirm  = $_POST['admin_confirm-password'];

    if ($password === $confirm){
        $admin = new Admin();

        if (isset($_POST['submit'])){
            $admin->user_firstname = $_POST['admin_first_name'];
            $admin->user_lastname = $_POST['admin_last_name'];
            $admin->username = $_POST['admin_username'];
            $admin->email = $_POST['admin_email'];
            $admin->admin_password =  password_hash($_POST['admin_password'], PASSWORD_BCRYPT, array('cost' => 12)  );
//            $admin->password = $_POST['admin_password'];
            $admin->contact = $_POST['admin_contact'];

            $admin->create();

            redirect("login.php");

        }
    }else{
        $message = "Password Do not match";
    }

}else{
    $message = "";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriConnect Admin Portal</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #0d1117;
            color: #c9d1d9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #161b22;
            border-radius: 6px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #58a6ff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #30363d;
            border-radius: 6px;
            background-color: #0d1117;
            color: #c9d1d9;
        }

        .form-actions {
            text-align: center;
            padding-top: 20px;
        }

        button {
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            background-color: #238636;
            color: white;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #2ea043;
        }

        .links {
            margin-top: 20px;
            text-align: center;
        }

        .links a {
            color: #58a6ff;
            text-decoration: none;
            margin-right: 10px;
        }

        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>AgriConnect Admin Portal</h1>
    <?php echo $message; ?>
    <form id="registration-form" action="" method="post">
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="admin_first_name" required>
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="admin_last_name" required>
        </div>
        <div class="form-group">
            <label for="last-name">Username</label>
            <input type="text" id="last-name" name="admin_username" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="admin_email" required>
        </div>
        <div class="form-group">
            <label for="contact-number">Contact Number</label>
            <input type="tel" id="contact-number" name="admin_contact" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="admin_password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="admin_confirm-password" required>
        </div>
        <div class="form-actions">
            <input type="submit" name="submit"  value="Create Account " class="form-control btn btn-primary">
        </div>
        <div class="links">
            <a href="../index.php">Back to Home</a>
        </div>
    </form>
</div>
</body>
</html>

