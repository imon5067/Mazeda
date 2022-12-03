<?php
class Product
{
  public function slideView(){
   return $select = mysql_query("SELECT * FROM slider ORDER BY slider_id ASC LIMIT 5");
}
// Category proedut  view method 
  public function CategoryProduct($catId){
   return $select = mysql_query("SELECT * FROM product WHERE category_id='$catId' ORDER BY product_id DESC");
}

// Category proedut  view method 
  public function homeCategoryProduct($catId,$limit){
   return $select = mysql_query("SELECT * FROM product WHERE category_id='$catId' ORDER BY product_id DESC LIMIT $limit");
}

// Sub Category proedut  view method 
  public function SubCategoryProduct($subCatId){
   return $select = mysql_query("SELECT * FROM product WHERE sub_category_id='$subCatId' ORDER BY product_id DESC");
}

// single proedut image view method 
  public function ProductImage($productid){
        $select = mysql_query("SELECT * FROM image WHERE role_id='$productid' ORDER BY image_id DESC");
        $fetch = mysql_fetch_array($select);
        return $fetch['image'];
}

//  all proedut image view method 
  public function multi_ProductImage($productid){
        $select = mysql_query("SELECT * FROM image WHERE role_id='$productid' ORDER BY image_id DESC");
        return $fetch = mysql_fetch_array($select);
   
}

//  proedut Details information view method 
  public function productDetails($productid){
        $select = mysql_query("SELECT * FROM product WHERE product_id='$productid'");
        return $fetch = mysql_fetch_array($select);
   
}

// Advertisement method all --//

    //  Advertisement home offer one view method 
  public function AdvertisementHomeOne($page,$position){
        $select = mysql_query("SELECT * FROM home_offer WHERE page='$page' && position='$position' ORDER BY id DESC LIMIT 1");
        $fetch = mysql_fetch_array($select);
        return $fetch['image'];
   }




   
}


?>