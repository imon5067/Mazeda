<?php
include 'left.php';
include 'db_config.php';

?>
<?php
//----------------------------registration conform-coding----------------------------------------
if (isset($_POST['category_update'])) {
  $category = $_POST['category'];
  $category_id = $_POST['category_id'];
    $category_update = mysql_query("UPDATE category SET category_name='$category' WHERE category_id='$category_id'");
    if ($category_update) {
        ?> 
        <script type="text/javascript">
            alert("Update Successful");
            window.location.replace("category.php");
        </script>
    <?php } else {
        ?> 
        <script type="text/javascript">
            alert(" Update Not Successful");
            window.location.replace("category.php");
        </script>
        <?php
    }
}

//----------------------Category delete-system----------------------------------
if (isset($_GET['category_delete_id'])) {
    $id = $_GET['category_delete_id'];
    $delete_info = mysql_query("DELETE FROM category WHERE category_id ='$id'");
    if ($delete_info) {
        ?> 
        <script type="text/javascript">
            alert("Delete Successful");
            window.location.replace("category.php");

        </script>
    <?php } else {
        ?> 
        <script type="text/javascript">
            alert(" Delete Not Successful");
            window.location.replace("category.php");

        </script>
        <?php
    }
}
///for edit ----
if (@$_GET['cat_edit_id']) {
    $cat_id = $_GET['cat_edit_id'];
    $select_category = mysql_query("SELECT * FROM category WHERE category_id='$cat_id'");
    $fetch_cat = mysql_fetch_array($select_category);
}

?>
<div class="box3">
    <div class="title"> CATEGORY </div>
    <div class="box4"> 
        <form action="" method="post">
            <table class="table form-tb table">
                <h2>Add Category</h2><hr>
                <tr>
                    <td>Category Name: </td>
                    <td><input type="text" name="category" class="form-control" value="<?php echo $fetch_cat['category_name']; ?>" placeholder="Category Name">
                    </td>

                </tr>
               <?php 
                if(@$cat_id > 0){
               ?>
                <tr>
                    <td></td> <td><input type="submit" name="category_update" class="btn btn-success" value="Update"></td>
                    <input type="hidden" name="category_id" value="<?php echo $fetch_cat['category_id']; ?>">
                </tr>
                <?php } else {?>
                <tr>
                    <td></td> <td><input type="submit" name="submit" class="btn btn-primary pull-left" value="Submit"></td>
                </tr>
                <?php } ?>

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
        <table class="category-show-tb table">
            <tr>
                <th>Category Id</th>
                <th>Category Name</th>
                <th> Edit  </th>
                <th> Delete  </th>
            </tr>
            <?php
           $s=1;
            $select = mysql_query("SELECT * FROM category ORDER BY category_id ASC");
            while ($fetch_category = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $s++; ?></td>
                    <td><?php echo $fetch_category['category_name']; ?></td>
                    <td><a href="category.php?cat_edit_id=<?php echo $fetch_category['category_id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>
                    <td><a href="category.php?category_delete_id=<?php echo $fetch_category['category_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>



