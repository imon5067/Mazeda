<?php

include './db_config.php';

if (isset($_GET['delete_info'])) {
    $id = $_GET['delete_info'];
    $delete_info = mysql_query("DELETE FROM admin WHERE admin_id ='$id'");
    if ($delete_info) {
        ?> 
        <script type="text/javascript">
            alert("Delete Successful");
            window.location.replace("marcentaiger_reg.php");

        </script>
    <?php } else {
        ?> 
        <script type="text/javascript">
            alert("Delete Not Successful");
            window.location.replace("marcentaiger_reg.php");

        </script>
        <?php

    }
}

//----------------------------registration conform-coding----------------------------------------
if (isset($_GET['reg_conform'])) {
    $id = $_GET['reg_conform'];
    $delete_info = mysql_query("UPDATE  admin SET aprove='1' WHERE admin_id ='$id'");

    $infor = mysql_query("SELECT * FROM admin WHERE admin_id ='$id'");
    $fetch_infor = mysql_fetch_array($infor);
    $user = $fetch_infor['admin_name'];
    $user_password = $fetch_infor['password'];

    $to = $fetch_infor['email'];
    $subject = "$user.আপনি সফলভাবে রেজিস্ট্রেশন সম্পন্ন করেছেন।";
    $txt = "প্রিয় মার্চেন্ট,$user
 
আপনি সফলভাবে রেজিস্ট্রেশন সম্পন্ন করেছেন।
 
অনুগ্রহপূর্বক নিচের তথ্যগুলো সঠিকভাবে সংরক্ষন করুনঃ
মার্চেন্ট নাম : $user
ইউজার নেমঃ : $user
পাসওয়ার্ডঃ : $user_password
আমাদের বিজনেস ডেভেলপমেন্ট প্রতিনিধি শীঘ্রই আপনার সাথে যোগাযোগ করবেন ।
 
লিঙ্কঃ মার্চেন্ট কর্নার
আমাদের নির্ধারিত মার্চেন্ট কর্নার এর মাধ্যমে আপনার পন্যের অফার আপনি সহজেই আপলোড করতে
পারেন। আমরা আপনার অফারগুলো পেলে রিভিউ করে দ্রুত লাইভ করে দেবো। এছাড়াও আপনার অফার সম্পর্কিত যেকোনো সহায়তা
ও তথ্যের জন্য আমাদের বিজনেস ডেভেলপমেন্ট বিভাগের সাথে যোগাযোগ করতে পারেন- ইমেল করতে পারেন–
bikroymela@gmail.com এই একাউন্টে।";

    $headers = "From: bikorymela.com" . "\r\n" .
            "CC:$to";

    mail($to, $subject, $txt, $headers);



    if ($delete_info) {
        ?> 
        <script type="text/javascript">
            alert("Conform");
            window.location.replace("marcentaiger_reg.php");

        </script>
    <?php } else {
        ?> 
        <script type="text/javascript">
            alert(" Not Conform");
            window.location.replace("marcentaiger_reg.php");

        </script>
        <?php

    }
}
//----------------------------registration Un conform-coding----------------------------------------
if (isset($_GET['reg_unconform'])) {
    $id = $_GET['reg_unconform'];
    $delete_info = mysql_query("UPDATE  admin SET aprove='0' WHERE admin_id ='$id'");
    if ($delete_info) {
        ?> 
        <script type="text/javascript">
            alert("Conform");
            window.location.replace("marcentaiger_reg.php");

        </script>
    <?php } else {
        ?> 
        <script type="text/javascript">
            alert(" Not Conform");
            window.location.replace("marcentaiger_reg.php");

        </script>
        <?php

    }
}
?>