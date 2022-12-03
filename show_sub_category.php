<?php 
include 'db_config.php';
$cat_id = $_GET['cat_id'];
$select_sub_category = mysql_query("SELECT * FROM sub_category_table WHERE category_id = '$cat_id'");
while($fetch_sub_category = mysql_fetch_array($select_sub_category)){
?>
<option value="<?php echo $fetch_sub_category['sub_category_id'] ?>"><?php echo $fetch_sub_category['sub_category_name'] ?> </option>
<?php } ?>