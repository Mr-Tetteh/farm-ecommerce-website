<?php

if (!$session->is_signed_in()) {
    redirect("./login.php");
}
?>