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
    <div class="title"> Home Product</div>
    <div class="box4"> 
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form-tb table">
                <h2>Add Home Product</h2><hr>
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
                    <td> Product Id </td>
                    <td> <textarea name="product_id"></textarea> </td>
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
    $product_id = $_POST['product_id'];
    $insert = mysql_query("INSERT INTO home_product (category,product_id) VALUES('$category_id','$product_id')");
        
        if($insert){
            echo "Home Product Upload Successfull";
        }else{
            echo "Home Product Upload Not Successfull";
        }
}
            ?>
            </td>
        </tr>
</table>
    </div>
    <div class="box4"> View Home Product <hr>
        <table class="category-show-tb table">
            <tr>
                <th>Category </th>
<!--                <td>Category Name</td>-->
                <th>Product Id</th>
                <th> Edit  </th>
<!--                <td> Delete  </td>-->
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM home_product");
            while ($fetch_category = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo cat_name($fetch_category['category']); ?></td>
                    <td><?php echo $fetch_category['product_id']; ?></td>
<!--                    <td><img src="<?php echo $fetch_category['cat_image']; ?>" style="width: 100px;height: 130px;"></td>-->
                    <td><a href="home_product_edit.php?cat_id=<?php echo $fetch_category['category']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>
<!--                    <td><a href="category.php?cat_id=<?php echo $fetch_category['category_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>-->
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>



