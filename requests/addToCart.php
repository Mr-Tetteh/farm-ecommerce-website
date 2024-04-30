<?php include "../admin/inculdes/init.php" ?>
<?php include "../view/protect_route_customer.php" ?>
<?php ob_start(); ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve values from the AJAX request
    $user_id = $_POST['user_id'];
    $prd_id = $_POST['product_id'];
    $prd_name = $_POST['product_name'];
    $prd_des= $_POST['product_description'];
    $price = $_POST['product_price'];
    $prd_img = $_POST['product_image'];
    $prd_grand_total = $_POST['product_grand_total'];
}

global $database;

$sql = "INSERT INTO cart (product_name, user_id, product_price, grand_total,product_discription, qty, image ,product_id) ";
$sql .= " VALUES ('{$prd_name}', $user_id, $price, $prd_grand_total, '{$prd_des}', 1,'{$prd_img}', $prd_id) ";

$result_set = $database->query($sql);

if($result_set){
    echo json_encode(["message" => "successfully added"]);
} else {
    echo json_encode(["message" => "failed to add"]);
}