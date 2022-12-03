<?php
include 'left.php';
include 'db_config.php';
?>
<div class="box3">
    <div class="title"> Change Password </div>
    <div class="box4"> 
        <form action="" method="post">
            <h2>Add password </h2>
            <table class="brand table">
                <?php
                $admin_id = $_SESSION['kids_admin_id'];
                ?>


                <tr>
                    <td>Old Password :</td> <td><input type="password" name="old_password" placeholder="Old Password" class="form-control"></td>
                </tr>

                <td>New Password :</td> <td><input type="password" name="new_password" placeholder="New Password " class="form-control"></td>
                </tr>



                <tr>
                    <td></td>
                    <td><input type="submit" name="change_password" class="btn btn-primary" value="Change"></td>
                </tr>

            </table>

        </form>

        </table>
    </div>

</div>

<?php
if (isset($_POST['change_password'])) {
    $old = $_POST['old_password'];
    $new = $_POST['new_password'];
    $select_admin = mysql_query("SELECT * FROM admin WHERE password = '$old' && admin_id = '$admin_id'");
    $have_record = mysql_num_rows($select_admin);
    if ($have_record == 1) {
        $update = mysql_query("UPDATE admin SET password ='$new' WHERE admin_id ='$admin_id'");
        ?>
        <script type="text/javascript">
            alert("Password Change Confirm");
            window.location.replace('change_password.php');
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Password Not Change ");
            window.location.replace('change_password.php');
        </script>
        <?php
    }
    }

?>