<?php include "../view/header.php"?>
<?php include "../view/protect_route_customer.php" ?>

<?php

if(empty($_GET['id'])){
    redirect('../index.php');
}

if (isset($_GET['id'])){
    global $database;
    $id = $_GET['id'];
    $sql = "DELETE FROM cart WHERE id = $id ";
    $result = $database->query($sql);

    redirect('../view/cart.php');

}