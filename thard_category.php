<?php
include 'left.php';
include 'db_config.php';
if ($_GET['cat_id']) {
    $cat_id = $_GET['cat_id'];
    $select_category = mysql_query("SELECT * FROM category WHERE category_id='$cat_id'");
}
?>
<div class="box3">
    <div class="title"> Category </div>
    <div class="box4"> 
        <form action="" method="post">
            <table class="form-tb">
                <h2>Add Third Category</h2><hr>
                <tr>
                    <td>Category</td>
                    <td>

                        <select name="category" class="select-product form-control" >
                            <option value="">Category</option>
                            <?php
                            include 'db_config.php';
                            $select = mysql_query("SELECT * FROM category");
                            while ($fetch = mysql_fetch_array($select)) {
                                ?>
                                <option value="<?php echo $fetch['category_id']; ?>"><?php echo $fetch['category_name']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Sub Category</td>
                    <td>

                        <select name="sub_category" class="select-product form-control" >
                            <option value="">Sub Category</option>
                            <?php
                            $select = mysql_query("SELECT * FROM  sub_category_table ORDER BY sub_category_id ASC");
                            while ($fetch_sub = mysql_fetch_array($select)) {
                                ?>
                                <option value="<?php echo $fetch_sub['sub_category_id']; ?>"><?php echo $fetch_sub['sub_category_name']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Third Category Name:</td><td><input type="text" name="third_name" class="form-control" placeholde="Third Category Name"></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" name="submit" value="Add" class="btn"></td>
                </tr>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                include 'db_config.php';
                if (isset($_POST['submit'])) {
                    $category_id = $_POST['category'];
                    $third_category = $_POST['third_name'];
                    $sub_category_name = $_POST['sub_category'];

                    $insert = mysql_query("INSERT INTO thard_category (thard_id,category_id,sub_id,thard_name) VALUES ('','$category_id','$sub_category_name','$third_category')");
                    if ($insert) {
                        echo'Inserting successful';
                    } else {
                        echo'Inserting Not Successful';
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
                <td>SL</td>
                <td>Sub Id</td>
                <td>Category Name </td>
                <td>Sub Category Name</td>
                <td>Third Category Name</td>
                <!--<td> Edit  </td>-->
                <td> Delete  </td>
            </tr>
            <?php
            $i = 1;
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM thard_category ORDER BY thard_id DESC");
            while ($fetch_category = mysql_fetch_array($select)) {
                $category_id = $fetch_category['category_id'];
                $category_id2 = $fetch_category['sub_id'];
                
                $select_category1 = mysql_query("SELECT * FROM category WHERE category_id = '$category_id'");
                $fetch_category1 = mysql_fetch_array($select_category1);
                $cat_name = $fetch_category1['category_name'];
                
                $select_category2 = mysql_query("SELECT * FROM sub_category_table WHERE sub_category_id = '$category_id2'");
                $fetch_category2 = mysql_fetch_array($select_category2);
                $cat_name2 = $fetch_category2['sub_category_name'];
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $fetch_category['sub_category_id']; ?></td>
                    <td><?php echo $cat_name; ?></td>
                    <td><?php echo $cat_name2; ?></td>
                    <td><?php echo $fetch_category['thard_name']; ?></td>
                    <!--<td><a href="sub_category.php?cat_id=<?php echo $fetch_category['sub_category_id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>-->
                    <td><a href="thard_category.php?sub_category_delete=<?php echo $fetch_category['thard_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>


<?php
if (isset($_GET['sub_category_delete'])) {
    $delete_id = $_GET['sub_category_delete'];
    $delete_info = mysql_query("DELETE FROM thard_category WHERE thard_id ='$delete_id'");
    if ($delete_info) {
        ?> 
        <script type="text/javascript">
            alert("Delete Third category Successful");
            window.location.replace("thard_category.php");

        </script>
    <?php } else {
        ?> 
        <script type="text/javascript">
            alert(" Delete Sub category  Not Successful");
            window.location.replace("thard_category.php");

        </script>
        <?php
    }
}
?>