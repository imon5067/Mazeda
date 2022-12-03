<?php
include 'left.php';
?>
<div class="box3">
    <div class="title"> BRAND INFORMATION </div>
    <div class="box4"> 
        <form action="" method="post"  enctype="multipart/form-data">
            <h2>Add Brand </h2>
            <table class="brand table">
                <tr>
                    <td>Brand Name:</td> <td><input type="text" name="brand" class="form-control" placeholder="Brand Name" ></td>
                </tr>
                <tr>
                    <td>Brand logo:</td> <td><input type="file" name="logo"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" class="btn" value="Submit"></td>
                </tr>
            </table>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                include 'db_config.php';
                if (isset($_POST['submit'])) {
                    $brand = $_POST['brand'];
                    if (!$_FILES['logo']['error']) {
                        $photo_name = $_FILES['logo']['name'];
                        $dir = "image";
                        copy($_FILES['logo']['tmp_name'], "$dir/$photo_name");
                        $photo = "$dir/$photo_name";
                    }

                    $inser_brand = mysql_query("INSERT INTO brand (brand_id,brand_name,image) VALUES ('','$brand','$photo')");
                    if ($inser_brand) {
                        echo "<font color='green'>Category Add Successfull</font>";
                    } else {
                        echo"<font color='red'>Category is Not Sending </font>";
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
                <th>Brand Name</th>
                <th>Logo</th>
                <th>Edit</th>
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
                        <td><a href="brand.php?brand_delete=<?php echo $fetch_brand['brand_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>

                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>
<?php 
 if(isset($_GET['brand_delete'])){
     
     $brand_id = $_GET['brand_delete'];
     $brand_delete = mysql_query("DELETE FROM brand WHERE brand_id ='$brand_id'");
     @header("Location:brand.php");
 }

?>