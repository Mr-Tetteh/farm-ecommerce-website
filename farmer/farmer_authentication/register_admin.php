<?php include "../../admin/inculdes/init.php"?>


<?php
//session_start(); // start the session

//require __DIR__."../actions/farmers/farmers__register_actions.php";

$message = ""; 

if (isset($_POST['submit'])) {
    $password = $_POST['farmer_password'];
    $confirm  = $_POST['farmer_confirm-password'];
    $passwordStrength = checkPasswordStrength($password);

    if ($password !== $confirm) {
        $message = "Passwords do not match.";
    } elseif ($passwordStrength < 3) {
        $message = "Password is not strong enough.";
    } else {
        $farmer = new Farmer();
        $farmer->farmer_firstname= $_POST['farmer_first_name'];
        $farmer->farmer_lastname = $_POST['farmer_last_name'];
        $farmer->username = $_POST['farmer_username'];
        $farmer->farmer_email = $_POST['farmer_email'];
        $farmer->password  = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        $farmer->contact = $_POST['contact'];

        $farmer->create();
        redirect("./login.php");
    }
}

function checkPasswordStrength($password) {
    $strength = 0;
    if (strlen($password) >= 8) $strength++;
    if (preg_match("/[0-9]+/", $password)) $strength++;
    if (preg_match("/[a-z]+/", $password)) $strength++;
    if (preg_match("/[A-Z]+/", $password)) $strength++;
    if (preg_match("/\W+/", $password)) $strength++; 
    return $strength;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriConnect farmer Portal</title>
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
    <h1>AgriConnect Farmer Portal Sign Up  Form</h1>
    <?php echo $message; ?>
    <form id="registration-form" action="" method="post">
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="farmer_first_name" required>
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="farmer_last_name" required>
        </div>
        <div class="form-group">
            <label for="last-name">Username</label>
            <input type="text" id="last-name" name="farmer_username" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="farmer_email" required>
        </div>
        <div class="form-group">
            <label for="contact-number">Contact Number</label>
            <input type="tel" id="contact-number" name="contact" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="farmer_password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="farmer_confirm-password" required>
        </div>
        <div class="form-actions">
            <input type="submit" name="submit"  value="Create Account " class="form-control btn btn-primary">
        </div>
        <div class="links">
<!--            <a href="../index.php">Back to Home</a>-->
        </div>
    </form>
</div>
</body>
</html>

