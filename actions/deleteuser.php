<?php
session_start();
include "../classes/general_class.php";

// Check if user ID is provided in the URL
if (isset($_GET['customer_name'])) {
    // Get the user ID from the URL
    $customer_name = $_GET['customer_name'];

    // Create an instance of the general_class
    $generalClass = new general_class();

    // Attempt to delete the user
    $deleted = $generalClass->deleteUser($customer_name);

    // Check if user deletion was successful
    if ($deleted) {
        // User deletion successful
        $message = "User deleted Successfully";
        $color = "green";
    } else {
        // Failed to delete user, redirect to some page or display an error message
        $message = "Failed to delete user";
        $color = "red";
    }
} else {
    // If user ID is not provided in the URL, redirect to some error page
    header("Location: error_page.php");
    exit();
}
