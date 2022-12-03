<?php
include 'left.php';
include 'db_config.php';

   $select_category = mysql_query("SELECT * FROM category");
   function cat_name($cat_id){
       $select_name = mysql_query("SELECT * FROM category WHERE category_id='$cat_id'");
       $fetch_name = mysql_fetch_array($select_name);
       return $fetch_name['category_name'];
   }
?>
<div class="box3">
    <div class="title"> Category  Image</div>
    <div class="box4"> 
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form-tb table">
                <h2>Add Category Image</h2><hr>
                <tr>
                    <td>Select Category :</td><td>
                        <select name="category_id">
                            <?php
                            while ($fetch_category = mysql_fetch_array($select_category)){
                            ?>
                            <option value="<?php echo $fetch_category['category_id']; ?>"> <?php echo $fetch_category['category_name']; ?> </option>
                            <?php }?>
                        </select>
                        
                    </td>

                </tr>
                <tr>
                    <td> Image </td>
                    <td> <input type="file" name="cat_image"> </td>
                </tr>
                <tr>
                    <td></td> <td><input type="submit" name="submit" class="btn" value="submit"></td>
                </tr>
            
        </form>
        <tr>
            <td colspan="2"> 
            <?php
            if (isset($_POST['submit'])) {
    $category_id = $_POST['category_id'];
    //        check image choice 
        if (!$_FILES['cat_image']['error']) {
            $photo_name = $_FILES['cat_image']['name'];
            $dir = "image/category_image";
            copy($_FILES['cat_image']['tmp_name'], "$dir/$photo_name");
            $photo = "$dir/$photo_name";
//            print_r($_FILES);
            $update = mysql_query("UPDATE category_image SET cat_image = '$photo' WHERE cat_id = '$category_id' ");
        } 
        
        if($update){
            echo "Category Image Upload Successfull";
        }else{
            echo "Category Image Upload Not Successfull";
        }
}
            ?>
            </td>
        </tr>
</table>
    </div>
    <div class="box4"> View Category Image <hr>
        <table class="category-show-tb table">
            <tr>
                <th>Category Id</th>
                <th>Category Name</th>
                <th>Category Image</th>
<!--                <td> Edit  </td>-->
<!--                <td> Delete  </td>-->
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM category_image");
            while ($fetch_category = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $fetch_category['cat_image_id']; ?></td>
                    <td><?php echo cat_name($fetch_category['cat_id']); ?></td>
                    <td><img src="<?php echo $fetch_category['cat_image']; ?>" style="width: 100px;height: 130px;"></td>
<!--                    <td><a href="category.php?cat_id=<?php echo $fetch_category['category_id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>-->
<!--                    <td><a href="category.php?cat_id=<?php echo $fetch_category['category_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>-->
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>



