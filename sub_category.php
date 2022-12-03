<?php
include 'left.php';
include 'db_config.php';
if ($_GET['cat_id']) {
    $cat_id = $_GET['cat_id'];
    $select_category = mysql_query("SELECT * FROM category WHERE category_id='$cat_id'");
}
?>
<div class="box3">
    <div class="title">SUB CATEGORY </div>
    <div class="box4"> 
        <form action="" method="post">
            <table class="table table-responsive">
                <h2>Add Sub Category</h2><hr>
                <tr>
                    <td>Category :</td>
                    <td>

                        <select name="category" class="form-control" >
                            <option value="">Category</option>
                            <?php
                             $select = mysql_query("SELECT * FROM category");
                            while ($fetch = mysql_fetch_array($select)) {
                                ?>
                                <option value="<?php echo $fetch['category_id']; ?>"><?php echo $fetch['category_name']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Sub Category Name :</td><td><input type="text" class="form-control" name="sub_name" placeholde="Sub Category Name"></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" name="Submitca" value="Submit" class="btn btn-primary pull-left"></td>
                </tr>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                include 'db_config.php';
                if (isset($_POST['Submitca'])) {
                    $category_id = $_POST['category'];
//                 $category_id = 12;
                    $sub_category_name = $_POST['sub_name'];
                    if (empty($category_id) or empty($sub_category_name)) {
                        echo "Place fillup this";
                    } else {
                        $select = mysql_query("SELECT * FROM sub_category_table WHERE category_id='$category_id' && sub_category_name='$sub_category_name'");
                        $number = mysql_num_rows($select);
                        if ($number > 0) {
                            echo "Allready Exit IT";
                        } else {
                            $insert = mysql_query("INSERT INTO sub_category_table (sub_category_id,category_id,sub_category_name) VALUES ('','$category_id','$sub_category_name')");
                            if ($insert) {
                                echo'Inserting successful';
                            } else {
                                echo'Inserting Not Successful';
                            }
                        }
                    }
                }
                ?>
            </td>
        </tr>
        </table>
    </div>
    <div class="box4"> View Sub Category<hr>
        <table class="category-show-tb table">
            <tr>
                <td>SL</td>
                <!-- <td>Sub Id</td> -->
                <td>Category Name </td>
                <td>Sub Category Name</td>
                <!--<td> Edit  </td>-->
                <td> Delete  </td>
            </tr>
            <?php
            $i = 1;
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM sub_category_table ORDER BY sub_category_id DESC");
            while ($fetch_category = mysql_fetch_array($select)) {
                $category_id = $fetch_category['category_id'];
                $select_category1 = mysql_query("SELECT * FROM category WHERE category_id = '$category_id'");
                $fetch_category1 = mysql_fetch_array($select_category1);
                $cat_name = $fetch_category1['category_name'];
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <!-- <td><?php echo $fetch_category['sub_category_id']; ?></td> -->
                    <td><?php echo $cat_name; ?></td>
                    <td><?php echo $fetch_category['sub_category_name']; ?></td>
                    <!--<td><a href="sub_category.php?cat_id=<?php echo $fetch_category['sub_category_id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>-->
                    <td><a href="sub_category.php?sub_category_delete=<?php echo $fetch_category['sub_category_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>


<?php
if (isset($_GET['sub_category_delete'])) {
    $delete_id = $_GET['sub_category_delete'];
    $delete_info = mysql_query("DELETE FROM sub_category_table WHERE sub_category_id ='$delete_id'");
    if ($delete_info) {
        ?> 
        <script type="text/javascript">
            alert("Delete Sub category Successful");
            window.location.replace("sub_category.php");

        </script>
    <?php } else {
        ?> 
        <script type="text/javascript">
            alert(" Delete Sub category  Not Successful");
            window.location.replace("sub_category.php");

        </script>
        <?php
    }
}
?>