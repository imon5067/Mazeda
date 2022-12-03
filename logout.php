<?php
session_start();
session_destroy();
$marchent_id = $_SESSION['kids_admin_id'];
if($marchent_id == 1){
header("Location:index.php");
}else{
    header("Location:../marcentaiger.php");
}
?>
