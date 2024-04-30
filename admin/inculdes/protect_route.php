<?php include "init.php"?>
<?php

global $session;

if (!$session->is_signed_in()) {
    redirect("./authentication/login.php");
}
?>