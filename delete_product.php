<?php
session_start();
include 'db_config.php';
$pro_id = $_GET['pro_id'];
$delete = mysql_query("DELETE FROM product WHERE product_id = '$pro_id'");
if($delete){
//    $_SESSION['message_delete'] = 'Delete Successfull';
    header("Location:product1.php");
}else{
//    $_SESSION['message_delete'] = 'Delete Not Successfull';
    header("Location:product1.php");
}

?>