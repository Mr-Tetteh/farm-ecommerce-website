<?php include "../../admin/inculdes/init.php"?>
<?php

global $session;

$session->logout();

redirect("./login.php");



?>