<?php
include 'left.php';
include 'db_config.php';
?>
<div class="box3">
    <div class="title"> CHANGE PROFILE </div>
    <div class="box4"> 
        <form action="" method="post">
            <h2> View Profile Information </h2>
            <table class="brand table">
                <?php
                $admin_id = $_SESSION['kids_admin_id'];
                $select_mar = mysql_query("SELECT * FROM admin WHERE admin_id ='$admin_id'");
                $fetch = mysql_fetch_array($select_mar);
                ?>


                <tr>
                    <td>Shop Name  :</td> <td><input type="text" name="shop_name" placeholder="Shop Name" value="<?php echo $fetch['shop_name']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Contact Person :</td> <td><input type="text" name="contact_person" placeholder="Contact Person" value="<?php echo $fetch['contact_person']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Mobile :</td> <td><input type="text" name="Mobile" placeholder="Mobile" value="<?php echo $fetch['mobile']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email:</td> <td><input type="email" name="email" placeholder="Email" value="<?php echo $fetch['email']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>User Name  :</td> <td><input type="text" name="user_name" placeholder="User Name " value="<?php echo $fetch['admin_name']; ?>" class="form-control" ></td>
                </tr>
                <tr>
                    <td>Password :</td> <td><input type="password" name="password" placeholder="Password" value="<?php echo $fetch['password']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td> Address :</td> <td> <textarea name="Address" placeholder="Address" value="<?php echo $fetch['address']; ?>" class="form-control"><?php echo $fetch['address']; ?> </textarea></td>
                </tr>
                



                <tr>
                    <td></td>
                    <td><input type="submit" name="change_password" class="btn btn-primary pull-left" value="Change"></td>
                </tr>

            </table>

        </form>

        </table>
    </div>

</div>

<?php
if (isset($_POST['change_password'])) {
    $shop_name = $_POST['shop_name'];
    $contact_person = $_POST['contact_person'];
    $Mobile = $_POST['Mobile'];
    $email = $_POST['email'];

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $Address = $_POST['Address'];
    
   

    $update = mysql_query("UPDATE admin SET admin_name='$user_name', password='$password', shop_name='$shop_name', contact_person='$contact_person',mobile='$Mobile',email='$email',address='$Address' WHERE admin_id ='$admin_id'");
    if ($update) {
        ?>
        <script type="text/javascript">
            alert("Password Change Confirm");
            window.location.replace('marcentaige_profile_cahange.php');
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Password Not Change ");
            window.location.replace('marcentaige_profile_cahange.php');
        </script>
        <?php
    }
}
?>