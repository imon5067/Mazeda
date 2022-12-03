<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
   

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>MAZEDA</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-pizzaro.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css" media="all" />
      <!-- Demo Purpose Only. Should be removed in production -->
      <link rel="stylesheet" href="assets/css/config.css">
      <link href="assets/css/colors/green.css" rel="alternate stylesheet" title="Green color">
      <link href="assets/css/colors/pink.css" rel="alternate stylesheet" title="Pink color">
      <link href="assets/css/colors/blue.css" rel="alternate stylesheet" title="Blue color">
      <link href="assets/css/colors/red.css" rel="alternate stylesheet" title="Red color">
      <link href="assets/css/colors/orange.css" rel="alternate stylesheet" title="Orange color">
      <link href="assets/css/colors/gold.css" rel="alternate stylesheet" title="Gold color">
      <link href="assets/css/colors/navy.css" rel="alternate stylesheet" title="Navy color">
      <link href="assets/css/colors/flat-blue.css" rel="alternate stylesheet" title="Flat Blue color">
      <!-- Demo Purpose Only. Should be removed in production : END -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
      <link rel="shortcut icon" href="assets/images/Mazeda.png">
   </head>
   <body class="single-product style-1 woocommerce">
      <div id="page" class="hfeed site">
        <?php 
        include_once'header.php'; 
        $productId = $_GET['Product'];
        $productInfo = $product->productDetails($productId);
        ?>
         <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                     <a href="index.php">Home</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                     <a href="category.php?CategoryView=<?php echo $productInfo['category_id']; ?>"><?php echo $card->SingleCategoryview($productInfo['category_id']) ?></a>
                     <span class="delimiter"><i class="po po-arrow-right-slider"></i></span><?php echo $card->SingleSubCategoryView($productInfo['sub_category_id']) ?>
                  </nav>
               </div>
               <!-- /.woocommerce-breadcrumb -->
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                     <div itemscope itemtype="http://schema.org/Product" id="product-50" class="post-50 product type-product status-publish has-post-thumbnail product_cat-pizza pa_food-type-veg first instock shipping-taxable purchasable product-type-simple addon-product">
                        <div class="single-product-wrapper">
                           <div class="product-images-wrapper">
                              <?php 
                                $photo = $product->multi_ProductImage($productId);
                               ?>
                              <div class="images">
                                 <a href="dashboard/<?php echo $photo['image']; ?>" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                 <img width="600" height="600" src="dashboard/<?php echo $photo['image']; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" />
                                 </a>
                                 <div class="thumbnails columns-4">
                                    <a href="dashboard/<?php echo $photo['image2'];?>" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
                                    <img width="180" height="180" src="dashboard/<?php echo $photo['image2'];?>" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" />
                                    </a>

                                    <a href="dashboard/<?php echo $photo['image3'];?>" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                    <img width="180" height="180" src="dashboard/<?php echo $photo['image3'];?>" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""/>
                                    </a>

                                     <a href="dashboard/<?php echo $photo['image4'];?>" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                    <img width="180" height="180" src="dashboard/<?php echo $photo['image4'];?>" class="attachment-shop_thumbnail size-shop_thumbnail" alt=""/>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <!-- /.product-images-wrapper -->                        <!-- /.product-images-wrapper -->
                           <div class="summary entry-summary">
                              <h1 itemprop="name" class="product_title entry-title"><?php echo $productInfo['product_name'] ?> <span class="food-type-icon"><i class="po po-veggie-icon"></i></span></h1>
                              <div itemprop="description">
                                 <p><?php echo $productInfo['pro_short_description'] ?> </p>
                              </div>
                              <!-- AddToAny BEGIN -->
                          	<!-- <div class="social-share-btn a2a_kit a2a_kit_size_32 a2a_default_style">
                          		<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                          		<a class="a2a_button_facebook"></a>
                          		<a class="a2a_button_twitter"></a>
                          		<a class="a2a_button_google_plus"></a>
                          		<a class="a2a_button_pinterest"></a>
                          	</div> -->
                          	<!-- AddToAny END -->
                              <form action="" method="post" class="cart"  enctype='multipart/form-data'>
                                 <!-- <div  class="yith_wapo_groups_container">
                                    <h2 class="group-name">Crust &amp; Size</h2>
                                    <div class="yith_wapo_groups_container_wrap">
                                       <div id="ywapo_value_2" class="ywapo_group_container ywapo_group_container_checkbox form-row form-row-wide " data-requested="0" data-type="checkbox" data-id="2" data-condition="">
                                          <h3><span>Select Crust</span></h3>
                                          <div class="ywapo_input_container ywapo_input_container_checkbox">
                                             <input data-typeid="2" data-price="0" data-pricetype="fixed" data-index="0" type="checkbox" name="ywapo_checkbox_2[0]" value="ywapo_value_2"  checked class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Original Crust</span></label>
                                          </div>
                                          <div class="ywapo_input_container ywapo_input_container_checkbox">
                                             <input data-typeid="2" data-price="1.2" data-pricetype="fixed" data-index="1" type="checkbox" name="ywapo_checkbox_2[1]" value="ywapo_value_2"   class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Thick Crust</span></label>
                                             <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>1.20</span></span>
                                          </div>
                                          <div class="ywapo_input_container ywapo_input_container_checkbox">
                                             <input data-typeid="2" data-price="0" data-pricetype="fixed" data-index="2" type="checkbox" name="ywapo_checkbox_2[2]" value="ywapo_value_2"   class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Thin Crust without sause</span></label>
                                          </div>
                                          <div class="ywapo_input_container ywapo_input_container_checkbox">
                                             <input data-typeid="2" data-price="2.1" data-pricetype="fixed" data-index="3" type="checkbox" name="ywapo_checkbox_2[3]" value="ywapo_value_2"   class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Double Crust</span></label>
                                             <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>2.10</span></span>
                                          </div>
                                       </div>
                                       <div id="ywapo_value_3" class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="3" data-condition="">
                                          <h3><span>Select Size</span></h3>
                                          <div class="ywapo_input_container ywapo_input_container_radio">
                                             <input data-typeid="3" data-price="19.9" data-pricetype="fixed" data-index="0" type="radio" name="ywapo_radio_3[]" value="0" required checked class="ywapo_input ywapo_input_radio ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after">
                                             <span class="ywapo_option_label ywapo_label_position_after">22  cm</span>

                                             </label>
                                             <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>19.90</span></span>
                                          </div>
                                          <div class="ywapo_input_container ywapo_input_container_radio">
                                             <input data-typeid="3" data-price="25.9" data-pricetype="fixed" data-index="1" type="radio" name="ywapo_radio_3[]" value="1" required  class="ywapo_input ywapo_input_radio ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after">
                                             <span class="ywapo_option_label ywapo_label_position_after">29  cm</span>

                                             </label>
                                             <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span></span>
                                          </div>
                                          <div class="ywapo_input_container ywapo_input_container_radio">
                                             <input data-typeid="3" data-price="32.9" data-pricetype="fixed" data-index="2" type="radio" name="ywapo_radio_3[]" value="2" required  class="ywapo_input ywapo_input_radio ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after">
                                             <span class="ywapo_option_label ywapo_label_position_after">35  cm</span>

                                             </label>
                                             <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>32.90</span></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="yith_wapo_group_total" data-product-price="0">
                                       <div class="yith_wapo_group_final_total">
                                          <span class="price amount"></span>
                                       </div>
                                    </div>
                                 </div> -->

                                  <h4><span>Price : <?php echo $productInfo['price'] ?> </span></h4>

                                 <div class="qty-btn">
                                    <label>Quantity</label>
                                    <div class="quantity">
                                       <input type="hidden" name="product_id" value="<?php echo $productInfo['product_id'] ?>"/>
                                       <input type="hidden" name="price" value="<?php echo $productInfo['price'] ?>"/>
                                       <input type="number" name="quantity" value="1" title="Qty" class="input-text qty text" />
                                    </div>
                                 </div>
                                 <!-- <input type="hidden" name="add-to-cart" value="50" /> -->
                                 <button type="submit" class="single_add_to_cart_button button alt" name="OrderaddCardSubmit">Order</button>
                              </form>
                              <?php 
                                if(isset($_POST['OrderaddCardSubmit'])){
                                    $product_id = $_POST['product_id'];
                                    $price = $_POST['price'];
                                    $quantity = $_POST['quantity'];
                                    $user_id = $_SESSION['userLoginId'];
                                    $cartOrder = $card->productCardOrder($product_id,$quantity,$price,$user_id);//product card and order method 
                                }

                               ?>

                               <div itemprop="description">
                                 <h5>Description</h5>
                                 <p><?php echo $productInfo['pro_long_description'] ?> </p>
                              </div>
                           </div>
                           <!-- .summary -->
                        </div>
                        <!-- /.single-product-wrapper -->
               
                       
                     </div>
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>
         <!-- #content -->
         <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">
               <div class="pizzaro-sorting">
                  <h2 class="text-center"> Semiler Product </h2><hr>
               </div>
               <div id="primary" class="content-area">
                  <main id="main" class="site-main">
                     <div class="columns-4">
                        <ul class="products">
                            <?php 
                            $s=1;
                            $CatProduct = $product->CategoryProduct($productInfo['category_id']);
                            while($fetchProduct = mysql_fetch_array($CatProduct)){

                            ?>
                           <li class="product <?php if($s==1){echo 'first';} ?>">
                              <div class="product-outer">
                                 <div class="product-inner">
                                    <div class="product-image-wrapper">
                                       <a href="single-product.php?Product=<?php echo $fetchProduct['product_id']; ?>" class="woocommerce-LoopProduct-link">
                                       <img src="dashboard/<?php echo $product->ProductImage($fetchProduct['product_id']); ?>" class="img-responsive" alt="dashboard/<?php echo $product->ProductImage($fetchProduct['product_id']); ?>" style="height:250px;">
                                       </a>
                                    </div>
                                    <div class="product-content-wrapper">
                                       <a href="" class="woocommerce-LoopProduct-link">
                                          <h3><?php echo $fetchProduct['product_name']; ?></h3>
                                          <!-- <div itemprop="description">
                                             <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                          </div> -->
                                          <div  class="yith_wapo_groups_container">
                                             <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                <h3><span>Price</span></h3>
                                                <div class="ywapo_input_container ywapo_input_container_radio">
                                                 <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Tk </span> <?php echo $fetchProduct['price']; ?></span></span>
                                                </div>
                                             
                                             </div>
                                          </div>
                                       </a>
                                       <div class="hover-area">
                                          <a rel="nofollow" href="./controller/card.php?addCardSubmit=<?php echo $fetchProduct['product_id']; ?>" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">ADD TO CARD</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.product-outer -->
                           </li>
                        <?php $s++; } ?>
                         
                        </ul>
                     </div>
                     <!-- <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                           <li><span class="page-numbers current">1</span></li>
                           <li><a class="page-numbers" href="#">2</a></li>
                           <li><a class="page-numbers" href="#">3</a></li>
                           <li><a class="next page-numbers" href="#">Next Page &nbsp;&nbsp;&nbsp;→</a></li>
                        </ul>
                     </nav> -->
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>
         <?php include_once'footer.php'; ?>