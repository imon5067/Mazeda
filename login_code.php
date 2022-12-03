<?php
session_start();
//echo 'feni';
include 'db_config.php';
//print_r($_POST);
if($_POST['submit'] == 'admin') {
   $admin = $_POST['user_name'];
  
    $password = $_POST['password'];
    $select = mysql_query("SELECT * FROM admin WHERE admin_name='$admin' && password='$password'");
    $num = mysql_num_rows($select);
    $row = mysql_fetch_array($select);
    if ($num == 1) {
        $_SESSION['kids_admin_id'] = $row['admin_id'];
        header("location:index.php");
//        echo 'login';
    } else {
        header("Location:login.php");
//        echo 'no1';
    }
}
else {
    $admin = $_POST['user_name'];
    $password = $_POST['password'];
    $select = mysql_query("SELECT * FROM admin WHERE admin_name='$admin' && password='$password' && aprove='1'");
    $num = mysql_num_rows($select);
    $row = mysql_fetch_array($select);
    if ($num == 1) {
        $_SESSION['kids_admin_id'] = $row['admin_id'];
//        echo 'login';
        header("location:index.php");
    } else {
        header("Location:../marcentaiger.php");
//        echo 'no3';
    }
}
?>