<?php  include "../inculdes/init.php"?>
<?php

    if (empty($_GET['id'])){
        redirect("../Category_Mgt.php");
    }

    $Product = Product::find_by_id($_GET['id']);
    if ($Product){
        $Product->delete();
        redirect("../Category_Mgt.php");
    }else{
        redirect('../Category_Mgt.php');


}