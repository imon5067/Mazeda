<?php
/**
 * 
 */
class Cartclass
{
    // Category Menu method ASC
  public function CategoryMenu(){
   return $select = mysql_query("SELECT * FROM category ORDER BY category_id ASC LIMIT 8");
    
} 

  // Category Menu method DESC
  public function CategoryMid($limit){
   return $select = mysql_query("SELECT * FROM category ORDER BY category_id ASC LIMIT $limit");
    
}   
 // Category Menu method DESC
  public function CategoryRandomly($limit){
   return $select = mysql_query("SELECT * FROM category ORDER BY RAND()  LIMIT $limit");
    
}  

 public function SingleCategoryview($id){
    $select = mysql_query("SELECT * FROM category WHERE category_id ='$id'");
    $fetch = mysql_fetch_array($select);
    return $fetch['category_name'];
    
}  
// sub category view method 
  public function subCategoryView($catId){
   return $select = mysql_query("SELECT * FROM sub_category_table WHERE category_id ='$catId'");
    
}  
  public function SingleSubCategoryView($catId){
    $select = mysql_query("SELECT * FROM sub_category_table WHERE sub_category_id ='$catId'");
       $fetch = mysql_fetch_array($select);
    return $fetch['sub_category_name'];
    
}  


 public function product_info($product_id,$type){
    $select = mysql_query("select * from product where product_id = '$product_id'");
    $fetch = mysql_fetch_array($select);
    return $fetch["$type"];
}


// product Card and order method 
public function productCardOrder($product_id,$quantity,$price,$user_id){

if(!isset($_SESSION['userLoginId'])){
header("Location:./login-and-register.php");
}else{

$select = mysql_query("SELECT * FROM cart WHERE user_id = '$user_id' && product_id = '$product_id'");
$num_row  = mysql_num_rows($select);
if(!$num_row){
$cart = mysql_query("INSERT INTO cart (product_id,user_id,price,quantity) VALUES ('$product_id','$user_id','$price','$quantity')");
}
if($cart){
    header("Location:cart.php");
}

?>
<!-- <script type="text/javascript">
window.history.back();
</script> -->
<?php
}//else end


}//end method


public function total_cart($user_id){
    // $user_id = session_id();
    $select = mysql_query("SELECT * FROM cart WHERE user_id = '$user_id'");
    $fetch = mysql_fetch_array($select);
    $num = mysql_num_rows($select);
    // if($type){
    //     return $fetch["$type"];
    // }
    return $num;
}

public function total_amout_cart($user_id){
    // $user_id = session_id();
    $total=0;
    $select = mysql_query("SELECT * FROM cart WHERE user_id = '$user_id'");
    while($fetch = mysql_fetch_array($select)){
        
       $price = $fetch['price'] ;
       $quantity = $fetch['quantity'];
       
       $total += $price * $quantity;
       
    }
    return $total;
}

public function get_cart_all($userid){
    return $select = mysql_query("SELECT * FROM cart  WHERE user_id = '$userid' ORDER BY card_id DESC");
}

// Customer Order conform system 
    public function productOrder($first_name,$last_name,$email,$mobile,$city,$address,$country,$postcode,$product_id,$quantity,$total_price,$orderdate,$userId){

        $orderInsert = mysql_query("INSERT INTO order_detail (product_id,order_date,first_name,last_name,email,mobile,address,country,city,post_code,total_price,quantity,user_id,plug,order_cancel) VALUES ('$product_id','$orderdate','$first_name','$last_name','$email','$mobile','$address','$country','$city','$postcode','$total_price','$quantity','$userId','1','0')");
        // Cart table data delete 
        $deletetable = mysql_query("DELETE FROM cart WHERE user_id='$userId'");

        if($orderInsert){
            return "Thank you. Your order has been received !";
        }else{
            return "Thanks you order fails !";
        }

    }


//product image show 
public function product_image($product_id){
    $select = mysql_query("select * from image WHERE role_id = '$product_id'");
    $fetch = mysql_fetch_array($select);
    return $fetch['image'];
}


//---Contact method information 
public function get_cotactInfo(){
    $select = mysql_query("SELECT * FROM contact ORDER BY id DESC");
    return $fetch = mysql_fetch_array($select);
  
} 

// Customer Order view method 
 public function customerOrderview($userId){
      $select = mysql_query("SELECT * FROM order_detail WHERE user_id='$userId' ORDER BY order_id DESC LIMIT 1");
      return $fetch = mysql_fetch_array($select);
 }

// user personal information method 
   public function customerProfile($userId){
        $select = mysql_query("SELECT * FROM user_info WHERE user_id='$userId'");
        return $fetch = mysql_fetch_array($select);
   }


   
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
