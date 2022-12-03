<?php
include 'left.php';
include 'db_config.php';
if ($_GET['cat_id']) {
    $cat_id = $_GET['cat_id'];
    $select_category = mysql_query("SELECT * FROM category WHERE category_id='$cat_id'");
}
?>
<div class="box3">
    <div class="title"> CONTACT INFORMATION  </div>
    <div class="box4"> 
        <form action="" method="post">
            <table class="form-tb table">
                <h2>Add Contact</h2><hr>
                <tr>
                    <td> Website :</td><td><input type="text" name="website" value="<?php echo $website; ?>" placeholder="Website " class="form-control"></td>

                </tr>
                <tr>
                    <td>Email : </td><td><input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email" class="form-control"></td>

                </tr>
                <tr>
                    <td>Mobile : </td><td><input type="text" name="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile" class="form-control"></td>

                </tr>
                <tr>
                    <td>Tele phone : </td><td><input type="text" name="phone" value="<?php echo $mobile; ?>" placeholder="Phone" class="form-control"></td>

                </tr>
                <tr>
                    <td>Address : </td><td><input type="text" name="address" value="<?php echo $address; ?>" placeholder="Address" class="form-control"></td>

                </tr>
                <tr>
                    <td></td> <td><input type="submit" name="submit" class="btn btn-primary pull-left" value="Submit"></td>
                </tr>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                if (isset($_POST['submit'])) {
                    $website = $_POST['website'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];

                    $insert = mysql_query("INSERT INTO contact (website,email,mobile,phone,tel,address) VALUES ('$website','$email','$mobile','','$phone','$address')");
                    if ($insert) {
                        echo "<font color='green'>Contact Add Successfull</font>";
                    } else {
                        echo"<font color='red'>Contact is Not Sending </font>";
                    }
                }
                ?>

            </td>
        </tr>
        </table>
    </div>
    <div class="box4 add-category-show-output">
        <h2>All information Show </h2>
        <table class="category-show-tb table">
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
        </table>


    </div>

</div>



