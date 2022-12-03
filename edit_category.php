<?php
include 'left.php';
include 'db_config.php';
if($_GET['cat_id']){
   $cat_id = $_GET['cat_id'];
   $select_category = mysql_query("SELECT * FROM category WHERE category_id='$cat_id'");
}
?>
<div class="box3">
    <div class="title"> Category </div>
    <div class="box4"> 
        <form action="" method="post">
            <table class="form-tb">
                <h2>Add Category</h2><hr>
                <tr>
                    <td>Category Name:</td><td><input type="text" name="category" value="<?php echo $category; ?>" placeholder="Category Name"></td>

                </tr>
                <tr>
                    <td></td> <td><input type="submit" name="submit" class="btn" value="submit"></td>
                </tr>
            
        </form>
        <tr>
            <td colspan="2"> 
            <?php
            if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    if (empty($category)) {
        echo "Please fillup this text";
    } else {
        $select_category = mysql_query("SELECT * FROM category WHERE category_name='$category'");
        $number = mysql_num_rows($select_category);
        if ($number > 0) {
            echo "Allready Exit It";
        } else {
            $insert = mysql_query("INSERT INTO category (category_id,category_name) VALUES ('','$category')");
            if ($insert) {
                echo "<font color='green'>Category Add Successfull</font>";
            } else {
                echo"<font color='red'>Category is Not Sending </font>";
            }
        }
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
                <td> Delete  </td>
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM category");
            while ($fetch_category = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $fetch_category['category_id']; ?></td>
                    <td><?php echo $fetch_category['category_name']; ?></td>
                    <td><a href="category.php?cat_id=<?php echo $fetch_category['category_id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>
                    <td><a href="category.php?cat_id=<?php echo $fetch_category['category_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>

