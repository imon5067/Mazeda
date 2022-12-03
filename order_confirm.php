<?php

include 'db_config.php';
$order_id = $_GET['order_id'];
$product_id = $_GET['pro_id'];
$user_infor = $_GET['user_info'];
$insert = mysql_query("INSERT INTO order_compare (order_id,product_id,user_id) VALUES('$order_id','$product_id','$user_infor')");

$infor = mysql_query("SELECT * FROM user_info WHERE user_id ='$user_infor'");
$fetch_infor = mysql_fetch_array($infor);
$user = $fetch_infor['user_name'];
$user_password = $fetch_infor['password'];

$to = $fetch_infor['email'];
$subject = "$user.প্রোডাক্ট কনফার্ম  করা হয়েছে।";
$txt = "নিদিষ্টি সময়ে এর মধ্যে আপনার প্রোডাক্ট পেীছানো হবে । আপনার মঙ্গলকামনা করি....... bikroymela.com ";
$headers = "From: bikorymela.com" . "\r\n" .
        "CC:$to";

mail($to, $subject, $txt, $headers);

header("Location:view_order.php?order_id=$order_id");
?>
