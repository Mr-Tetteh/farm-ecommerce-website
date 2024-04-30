<?php require_once "../view/header.php" ?>
<?php include "../view/protect_route_customer.php" ?>


<?php

    global $session;

    $session->logout();
    redirect("login.php");

?>