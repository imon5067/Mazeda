<?php
 session_start();
 ob_start();
include_once '../dashboard/db_config.php';
 include_once'./show_data.php';
 $proObj = new Product();

@$user_id = $_SESSION['userLoginId'];

if(isset($_GET['addCardSubmit'])){
$product_id = $_GET['addCardSubmit'];
 if(!isset($_SESSION['userLoginId'])){
 	header("Location:../login-and-register.php");
 }else{
$fetchPrice = $proObj->productDetails($product_id);
$price = $fetchPrice['price'];

$select = mysql_query("SELECT * FROM cart WHERE user_id = '$user_id' && product_id = '$product_id'");
$num_row  = mysql_num_rows($select);
if(!$num_row){
mysql_query("INSERT INTO cart (product_id,user_id,price,quantity) VALUES ('$product_id','$user_id','$price','1')");
}
// else{
// mysql_query("UPDATE cart SET quantity = '$qty' WHERE product_id = '$product_id' && user_id = '$user_id'");
// }
?>
<script type="text/javascript">
window.history.back();
</script>
<?php
}//else end
}//end set button


// product card delete successful
if(isset($_GET['card_delete'])){
	$id = $_GET['card_delete'];
	$delsteFile = mysql_query("DELETE FROM cart WHERE card_id='$id'");
	if($delsteFile){
		?>
	<script type="text/javascript">
	window.history.back();
	</script>
	<?php
		}
}

?>