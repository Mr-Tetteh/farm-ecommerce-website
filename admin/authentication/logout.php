<?php require_once "../inculdes/header.php" ?>
<?php

global $session;

$session->logout();

redirect("./login.php");



?>