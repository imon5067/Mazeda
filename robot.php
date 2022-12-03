<?php

session_start();
include '../admin/db_config.php';
include '../model/class.Product.inc';
include '../model/class.Database.inc';


//========================== for signup ====================

if (isset($_POST['signup'])) {

    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $sex = $_POST['sex'];
    $dateOfBirth = $_POST['day'] . '-' . $_POST['month'] . '-' . $_POST['year'];

    $signup_validation = new User(array(
        'firstName' => $first_name,
        'email' => $email,
        'phone' => $phone
    ));

    if (empty($first_name) or empty($email) or empty($password) or empty($phone)) {
        $_SESSION['message'] = "All Fild Is Required";
        header("Location:../signup.php");
    }
//        elseif () {
//        $_SESSION['message'] = "All Fild Is Required";
//        header ("Location:../signup.php");
//    } 
    else {
        $user_class = new User(array(
            'firstName' => $first_name,
            'lastName' => $last_name,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'sex' => $sex,
            'DOB' => $dateOfBirth
        ));
        if ($user_class->signup()) {
            $_SESSION['message'] = "User Registration Successfull";
            header("Location:../view/login_home.php");
        } else {
            $_SESSION['error'] = "User Registration Not Successfull";
            header("Location:../signup.php");
        }
    }
}

//========================== for Login ====================

if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    /*
     * Select user are registered
     */
    $logcheck = new Product(array('userName' => $user_name, 'password' => $password));
    if ($logcheck->login() >= 1) {
        $_SESSION['user_id'] = $logcheck->login();
        $_SESSION['message'] = 'Login';
        header("Location:../index.php");
    } else {
        $_SESSION['login_error'] = 1;
        header("Location:../login.php");
    }
}


//========================== for cart ====================

if (isset($_POST['buy'])) {

    if (isset($_SESSION['user_id'])) {
        $price1 = $_POST['price'];
        $product_id = $_POST['product_id'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $quantity = $_POST['quantity'];

        $d_cost = $_POST['d_cost'];

        $dhaka_cost = $_POST['dhaka_cost'];
        $out_dhaka_cost = $_POST['out_dhaka_cost'];
        $price = $price1 * $quantity + $d_cost;
        $add_cart = new Product(array(
            'price' => $price,
            'dhakaCost' => $dhaka_cost,
            'outDhakaCost' => $out_dhaka_cost,
            'size' => $size,
            'color' => $color,
            'quantity' => $quantity,
            'product_id' => $product_id,
            'userId' => $_SESSION['user_id']
        ));
        if ($add_cart->addCart()) {
            header("Location:../order.php");
        } else {
            header("Location:../order.php");
        }
    } else {
        header("Location:../login.php");
    }
}
//========================== for cart ====================

if (isset($_POST['cart'])) {
    //    if (isset($_SESSION['user_id'])) {

    $price1 = $_POST['price'];
    $product_id = $_POST['product_id'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $quantity = $_POST['quantity'];
    $d_cost = $_POST['d_cost'];
    $price = $price1 * $quantity + $d_cost;
    $add_cart = new Product(array(
        'price' => $price,
        'size' => $size,
        'color' => $color,
        'quantity' => $quantity,
        'product_id' => $product_id,
        'userId' => $_SESSION['user_id']
    ));
    if ($add_cart->addCart()) {
        header("Location:../product-view.php?product_id=$product_id");
    }
}


//========================== for order submit ====================

if (isset($_POST['order_submit'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $post_code = $_POST['post_code'];
    $phone = $_POST['phone'];
    $mobile = $_POST['mobile'];
    $all_product_id = $_POST['all_product'];
    $quantity = $_POST['quantity'];
    $total_price = $_POST['total_price'];
    $delivery_cost = $_POST['delivery_cost1'];
    $order_date = date('Y-m-d');


    /*
     * Select user are registered
     */
    $order_submit = new Product(array(
        'firstName' => $f_name,
        'lastName' => $l_name,
        'email' => $email,
        'phone' => $phone,
        'mobile' => $mobile,
        'address' => $address,
        'city' => $city,
        'postCode' => $post_code,
        'totalPrice' => $total_price,
        'deliveryCost' => $delivery_cost,
        'allProductId' => $all_product_id,
        'quantity' => $quantity,
        'orderDate' => $order_date,
        'userId' => $_SESSION['bikroy_user_id']
    ));
    //    echo '<tt><pre>' . var_export($admin_information_insert, TRUE) . '</pre></tt>';
    if ($order_submit->order_submit()) {
        $order_submit->deleteCart($_SESSION['user_id']);
        header("Location:../order_complete.php");
    } else {
        echo 'not';
    }
}

// for 

if (isset($_POST['registration'])) {

    include '../admin/db_config.php';

    $user_name = $_POST['f_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['date'];
    $date_of_birth = $year . '/' . $month . '/' . $day;
    $address = $_POST['address'];

    $type = 'user';

    /*
     * check input filed empty 
     */


    /*
     * insert user Information
     */
    $insert = mysql_query("INSERT INTO user_info (user_name,password) VALUES ('$email','$password')");

    if ($insert) {

        /*
         * Select user Id 
         * for use other table
         */
        $select_user_id = mysql_query("SELECT * FROM user_info ORDER BY user_id DESC");
        $fetch_user_id = mysql_fetch_array($select_user_id);
        $user_id = $fetch_user_id['user_id'];

        /*
         * Insert profile image
         * there role id mean's user id
         */
        mysql_query("INSERT INTO image (image_type,role_id,image) VALUES('$type','$user_id','$photo')");

        /*
         * Select  image id
         */
        $select_image = mysql_query("SELECT * FROM image ORDER BY image_id DESC");
        $fetch_image_id = mysql_fetch_array($select_image);
        $image_id = $fetch_image_id['image_id'];

        /*
         * Insert user address
         * there person id mean's user id
         * there person type mean's user 
         */
        mysql_query("INSERT INTO address (profile_id,address,person_type) VALUES('$user_id','$address','$type')");

        /*
         * Select  address id
         */
        $select_address = mysql_query("SELECT * FROM address ORDER BY add_id DESC");
        $fetch_address_id = mysql_fetch_array($select_address);
        $address_id = $fetch_address_id['add_id'];

        /*
         * insert user profile
         * there profile_person mean's user id
         */
        mysql_query("INSERT INTO profile(first_name,email,phone,date_of_birth,profile_person,address,image) VALUES
                    ('$user_name','$email','$phone','$date_of_birth','$user_id','$address_id','$image_id')");


//                    echo'Information Inserting successfull';
        header("Location:../login.php");
    } else {
        echo'Information Not Inserting';
//                    header("Location:../signup.php");
    }
}
//--------------------------marcentaijeation ---information-----------------------
if (isset($_POST['create_account'])) {
    $shop_name = $_POST['shop_name'];
    $contact_person = $_POST['contact_person'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    if (!$_FILES['image']['error']) {
        $name = $_FILES['image']['name'];
        $dir = 'img';
        $image = "$dir/$name";
        copy($_FILES['image']['tmp_name'], "../$dir/$name");
    } else {
        $image = 0;
    }
    if (!$_FILES['nid_cart']['error']) {
        $name = $_FILES['nid_cart']['name'];
        $dir = 'img';
        $image_nid = "$dir/$name";
        copy($_FILES['nid_cart']['tmp_name'], "../$dir/$name");
    } else {
        $image_nid = 0;
    }
    $record = mysql_query("SELECT * FROM admin WHERE admin_name='$user_name' && shop_name='$shop_name' && email='$email' && mobile='$mobile'");
    $row = mysql_num_rows($record);
    if ($row == 1) {
        echo "<script type='text/javascript'>window.location.replace('../marcentaiger.php');alert('Sorry All ready Exit');</script>";
    }
    $insert = mysql_query("INSERT INTO admin 
                    (admin_name,password,shop_name,contact_person,mobile,email,address,logo,`NID`,`type`,`aprove`)
                    VALUES('$user_name','$password','$shop_name','$contact_person','$mobile','$email','$address','$image','$image_nid','1','0')");
    if ($insert) {
        echo "<script type='text/javascript'>window.location.replace('../marcentaiger.php');alert('Regsitraiton successfull');</script>";
    } else {
        echo "<script type='text/javascript'>window.location.replace('../marcentaiger.php');alert('Regsitraiton  Not successfull');</script>";
    }
}


///-----------------------------User Registration-----------------------------



if (isset($_POST['User_registration'])) {
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $district = $_POST['district'];
    $address = $_POST['address'];

    if (!$_FILES['image']['error']) {
        $name = $_FILES['image']['name'];
        $dir = 'img';
        $image = "$dir/$name";
        copy($_FILES['image']['tmp_name'], "../$dir/$name");
    } else {
        $image = 0;
    }
    $select_reg = mysql_query("SELECT * FROM user_info WHERE user_name='$user_name' && email ='$email' && phone='$mobile' && district ='$district'");
    $num_row = mysql_num_rows($select_reg);
    if ($num_row > 0) {
        echo "<script type='text/javascript'>window.location.replace('../user_registration.php');alert('Already Exit');</script>";
    }


    $insert = mysql_query("INSERT INTO user_info 
                    (user_name,password,email,phone,district,address,image)
                    VALUES('$user_name','$password','$email','$mobile','$district','$address','$image')");
    $infor = mysql_query("SELECT * FROM user_info ORDER BY user_id DESC LIMIT 1");
    $fetch_infor = mysql_fetch_array($infor);
    $user = $fetch_infor['user_name'];
    $user_password = $fetch_infor['password'];

    $to = $fetch_infor['email'];
    $subject = "$user.আপনি সফলভাবে রেজিস্ট্রেশন সম্পন্ন করেছেন।";
    $txt = "অনুগ্রহপূর্বক নিচের তথ্যগুলো সঠিকভাবে সংরক্ষন করুনঃ
ইউজার নাম : $user
পাসওয়ার্ডঃ : $user_password
";
    $headers = "From: bikorymela.com" . "\r\n" .
            "CC:$to";

    mail($to, $subject, $txt, $headers);


    if ($insert) {
        echo "<script type='text/javascript'>window.location.replace('../user_registration.php');alert('Regsitraiton successfull');</script>";
    } else {
        echo "<script type='text/javascript'>window.location.replace('../user_registration.php');alert('Regsitraiton  Not successfull');</script>";
    }
}
?>