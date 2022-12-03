<?php
include 'left.php';
include 'db_config.php';
?>
<div class="box3">
    <div class="title"> COST </div>
    <div class="box4"> 
        <form action="" method="post">
            <h2>Add Cost </h2>
            <table class="brand table">
                <?php
                $receive = $_GET['cost_edit'];
                $delete = $_GET['cost_delete'];
                $select_cost = mysql_query("SELECT * FROM cost WHERE id = '$receive'");
                $fetch_cost = mysql_fetch_array($select_cost);
                ?>

                <tr>
                    <td>Cost Location :</td> <td><input type="text" name="location" placeholder="Brand Name" value="<?php echo $fetch_cost['location']; ?>"></td>
                </tr>
                <tr>
                <input type="hidden" name="cost_id" value="<?php echo $fetch_cost['id']; ?>">
                <td>Cost Taka :</td> <td><input type="text" name="taka" placeholder="Cost Taka" value="<?php echo $fetch_cost['tk']; ?>"></td>
                </tr>
                <?php if ($receive > 0) { ?>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="cost_update" class="btn" value="Update"></td>
                    </tr>

                <?php } else {
                    ?>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="cost_submit" class="btn" value="Submit"></td>
                    </tr>
                <?php } ?>
            </table>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                include 'db_config.php';
                if (isset($_POST['cost_submit'])) {
                    $brand = $_POST['location'];
                    $cost_tk = $_POST['taka'];

                    $select_brand = mysql_query("SELECT * FROM cost WHERE location='$brand' && tk ='taka'");
                    $number = mysql_num_rows($select_brand);
                    if ($number > 0) {
                        echo "Allready Exit It";
                    } else {
                        $inser_brand = mysql_query("INSERT INTO cost (id,location,tk) VALUES ('','$brand','$cost_tk')");
                        if ($inser_brand) {
                            echo "<font color='green'>Cost Add Successfull</font>";
                        } else {
                            echo"<font color='red'>cost is Not Sending </font>";
                        }
                    }
                }

//----------------------------Update-cost-------------------------------//
                if (isset($_POST['cost_update'])) {
                    $brand = $_POST['location'];
                    $cost_tk = $_POST['taka'];
                    $cost_id = $_POST['cost_id'];
                    $update_cost = mysql_query("UPDATE cost SET location ='$brand', tk='$cost_tk' WHERE id = '$cost_id'");
                    if($update_cost){
                    echo "<font color='green'>Cost Update Successfull</font>";
                } else {
                    echo"<font color='red'>Cost Update Not Sending </font>";
                }
                }

///-----------------------Delete cost----------------------------------
                if (isset($_GET['cost_delete'])) {
                    $cost_delete = $_GET['cost_delete'];
                    $delete = mysql_query("DELETE FROM cost WHERE id = '$cost_delete'");
                    if ($delete) {
                        echo "<font color='green'>Cost Delete Successfull</font>";
                    } else {
                        echo"<font color='red'>Cost Delete Not Sending </font>";
                    }
                }
                ?>
            </td>
        </tr>
        </table>
    </div>
    <div class="box4"> View Brand <hr> 
        <table class="category-show-tb table">
            <tr>
                <th>Brand Id</th>
                <th>Location name</th>
                <th>Taka</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM cost");
            while ($fetch_brand = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $fetch_brand['id']; ?></td>
                    <td><?php echo $fetch_brand['location']; ?></td>
                    <td><?php echo $fetch_brand['tk']; ?></td>
                    <td><a href="cost_add.php?cost_edit=<?php echo $fetch_brand['id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>
                    <td><a href="cost_add.php?cost_delete=<?php echo $fetch_brand['id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>

                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>