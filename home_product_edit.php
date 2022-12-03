<?php
include 'left.php';
include 'db_config.php';

$cat_id = $_GET['cat_id'];
$select = mysql_query("SELECT * FROM home_product WHERE category = '$cat_id'");
$fetch_home_category = mysql_fetch_array($select);

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
                        <input type="text" name="category_id" value="<?php echo $cat_id; ?>" readonly>
                           
                        
                    </td>

                </tr>
                <tr>
                    <td> Product Id </td>
                    <td> <textarea name="product_id"><?php echo $fetch_home_category['product_id'] ?></textarea> </td>
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
    
    $update = mysql_query("UPDATE home_product SET product_id = '$product_id' WHERE category = '$category_id'");
    
        if($update){
            echo "Home Product Update Successfull";
        }else{
            echo "Home Product Update Not Successfull";
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
                <td>Category Id</td>
<!--                <td>Category Name</td>-->
                <td>Product Id</td>
<!--                <td> Edit  </td>-->
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



