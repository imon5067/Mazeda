<?php
include 'left.php';
include 'db_config.php';
if($_GET['cat_id']){
   $cat_id = $_GET['cat_id'];
   $select_category = mysql_query("SELECT * FROM category WHERE category_id='$cat_id'");
}
?>
<div class="box3">
    <div class="title"> Slider  </div>
    
    <div class="box4"> View Slider<hr> 
        <table class="category-show-tb table">
            <tr>
                <th>Slider Id</th>
                <th>Slider Image</th>
                <th> Link </th>
                <th> Edit  </th>
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM slider");
            while ($fetch_category = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $fetch_category['slider_id']; ?></td>
                    <td><img src="<?php echo $fetch_category['slider_image']; ?>" style="max-width: 80px;max-height: 80px;"></td>
                    <td><?php echo $fetch_category['link']; ?></td>
                    <td><a href="edit_slider.php?slider_id=<?php echo $fetch_category['slider_id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>
<!--                    <td><a href="category.php?cat_id=<?php echo $fetch_category['slider_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>-->
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>