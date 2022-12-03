<?php
include 'left.php';
include 'db_config.php';
if ($_GET['cat_id']) {
    $cat_id = $_GET['cat_id'];
    $select_category = mysql_query("SELECT * FROM category WHERE category_id='$cat_id'");
}
?>
<div class="box3">
    <div class="title"> Create  Merchant </div>
    <div class="box4"> 
        <form action="" method="post">
            <table class="form-tb table" >
                <h2> Add  Merchant </h2><hr>
                <tr>
                    <td> Shop Name :</td><td><input type="text" name="shop_name" value="<?php echo $website; ?>" placeholder="Shop Name"></td>

                </tr>
                <tr>
                    <td>Contact Person : </td><td><input type="text" name="contact_person" value="<?php echo $email; ?>" placeholder="Contact Person"></td>

                </tr>
                <tr>
                    <td>Mobile : </td><td><input type="text" name="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile"></td>

                </tr>
                <tr>
                    <td> Email : </td><td><input type="text" name="email" value="<?php echo $mobile; ?>" placeholder="Email"></td>

                </tr>
                <tr>
                    <td> User Name : </td><td><input type="text" name="user_name" value="<?php echo $address; ?>" placeholder="User Name"></td>

                </tr>
                <tr>
                    <td> Password : </td><td><input type="text" name="password" value="<?php echo $address; ?>" placeholder="Password"></td>

                </tr>
                <tr>
                    <td> Address : </td><td><input type="text" name="address" value="<?php echo $address; ?>" placeholder="Address"></td>

                </tr>
                <tr>
                    <td> Shop Logo : </td><td><input type="file" name="image"></td>

                </tr>
                <tr>
                    <td> NID Copy : </td><td><input type="file" name="nid_cart"></td>

                </tr>
                <tr>
                    <td></td> <td><input type="submit" name="create_account" class="btn" value="submit"></td>
                </tr>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
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
                        copy($_FILES['image']['tmp_name'], "$dir/$name");
                    } else {
                        $image = 0;
                    }
                    if (!$_FILES['nid_cart']['error']) {
                        $name = $_FILES['nid_cart']['name'];
                        $dir = 'img';
                        $image_nid = "$dir/$name";
                        copy($_FILES['nid_cart']['tmp_name'], "$dir/$name");
                    } else {
                        $image_nid = 0;
                    }
                    $record = mysql_query("SELECT * FROM admin WHERE admin_name='$user_name' && shop_name='$shop_name' && email='$email' && mobile='$mobile'");
                    $row = mysql_num_rows($record);
                    if ($row == 1) {
                        echo "<script type='text/javascript'>window.location.replace('create_marcen.php');alert('Sorry All ready Exit');</script>";
                    }
                    $insert = mysql_query("INSERT INTO admin 
                    (admin_name,password,shop_name,contact_person,mobile,email,address,logo,`NID`,`type`,`aprove`)
                    VALUES('$user_name','$password','$shop_name','$contact_person','$mobile','$email','$address','$image','$image_nid','1','0')");
                    if ($insert) {
                        echo "<script type='text/javascript'>window.location.replace('create_marcen.php');alert('Regsitraiton successfull');</script>";
                    } else {
                        echo "<script type='text/javascript'>window.location.replace('create_marcen.php');alert('Regsitraiton  Not successfull');</script>";
                    }
                }
                ?>

            </td>
        </tr>
        </table>
    </div>
<!--    <<div class="add-category-show-output">
        <h2>Category Add Output</h2>
        <table class="category-show-tb table" border="1">
            <tr>
                <td>Id</td>
                <td>Web site</td>
                <td>Email</td>
                <td>Mobile</td>
                <td>Tel</td>
                <td>Address</td>
            </tr>
<?php
include 'db_config.php';
$select = mysql_query("SELECT * FROM contact");
while ($fetch_category = mysql_fetch_array($select)) {
    ?>
                    <tr>
                        <td><?php echo $fetch_category['id']; ?></td>
                        <td><?php echo $fetch_category['website']; ?></td>
                        <td><?php echo $fetch_category['email']; ?></td>
                        <td><?php echo $fetch_category['mobile']; ?></td>
                        <td><?php echo $fetch_category['tel']; ?></td>
                        <td><?php echo $fetch_category['address']; ?></td>
                    </tr>
<?php } ?>
        </table>-->


</div>

</div>



