<?php include "../admin/inculdes/init.php" ?>
<?php include "../view/protect_route_customer.php" ?>
<?php ob_start(); ?>
<?php

global $database;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if(isset($_POST['update_qty'], $_POST['crt_id'], $_POST['prd_id'], $_POST['qty'], $_POST['grand_total'] ));
    {
        $cart_id     = $database->escape_string($_POST['crt_id']);
        $product_id  = $database->escape_string($_POST['prd_id']);
        $product_qty = $database->escape_string($_POST['qty']);
        $grand_total = $database->escape_string($_POST['grand_total']);

        $sql = "UPDATE cart SET qty = '$product_qty', grand_total = '$grand_total' WHERE id = '$cart_id' AND product_id = '$product_id'";
        $update = $database->query($sql);

       /* if($update)
            echo json_encode(['message' => 'Record saved successfully']);
        else
            echo json_encode(['message' => 'Record not saved']);*/

    }
}