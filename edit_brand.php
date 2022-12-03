<?php
include 'left.php';
include 'db_config.php';
if ($_GET['brand_id']) {
    $brand_id = $_GET['brand_id'];
    $select_brand = mysql_query("SELECT * FROM brand WHERE brand_id='$brand_id'");
    $fetch_brand = mysql_fetch_array($select_brand);
}
?>
<div class="box3">
    <div class="title"> Brand </div>
    <div class="box4"> 
        <form action="" method="post"  enctype="multipart/form-data">
            <table class="form-tb">
                <h2>Edit  Brand</h2><hr>
                <tr>
                    <td>Brand Name:</td><td><input type="text" name="brand_name" value="<?php echo $fetch_brand['brand_name']; ?>" placeholder="Category Name"></td>
                    <td><img src="<?php echo $fetch_brand['image']; ?>" style="width:60px;height: 80px; "></td>

                </tr>
                <tr>
                    <td>Brand logo:</td> <td><input type="file" name="logo"></td>
                </tr>
                <tr>
                    <td></td> <td><input type="submit" name="submit" class="btn" value="submit"></td>
                </tr>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                if (isset($_POST['submit'])) {
                    $brand_name = $_POST['brand_name'];
                    if (!$_FILES['logo']['error']) {
                        $photo_name = $_FILES['logo']['name'];
                        $dir = "image";
                        copy($_FILES['logo']['tmp_name'], "$dir/$photo_name");
                        $photo = "$dir/$photo_name";
                        $update = mysql_query("UPDATE brand SET brand_name = '$brand_name',image='$photo' WHERE brand_id = '$brand_id'");
                    }

                    $update = mysql_query("UPDATE brand SET brand_name = '$brand_name' WHERE brand_id = '$brand_id'");
                    if ($update) {
                        echo "<font color='green'>Category Update Successfull</font>";
                        
                    } else {
                        echo"<font color='red'>Category is Not Update </font>";
                    }
                }
                ?>
            </td>
        </tr>
        </table>
    </div>
    <div class="box4"> View Category<hr>
        <table class="category-show-tb">
            <tr>
                <td>Category Id</td>
                <td>Category Name</td>
                <td> Edit  </td>
<!--                <td> Delete  </td>-->
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM brand");
            while ($fetch_brand = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $fetch_brand['brand_id']; ?></td>
                    <td><?php echo $fetch_brand['brand_name']; ?></td>
                    <td><img src="<?php echo $fetch_brand['image']; ?>" style="width: 80px;height: 100px;"></td>
                    <td><a href="edit_brand.php?brand_id=<?php echo $fetch_brand['brand_id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>
    

                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>

