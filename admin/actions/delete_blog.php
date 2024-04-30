<?php include "../inculdes/init.php" ?>
<?php

if(empty($_GET['id'])){
    redirect('index.php');
}

if (isset($_GET['id'])){
    global $database;
    $id = $_GET['id'];
    $sql = "DELETE FROM blog_post WHERE id = $id ";
    $result = $database->query($sql);

    redirect('../view_all_blogs.php');

}
?>
