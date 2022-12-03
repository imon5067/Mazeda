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
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
      <link rel="shortcut icon" href="assets/images/Mazeda.png">
   </head>
   <body class="page-template-template-homepage-v1 home-v1">
      <div id="page" class="hfeed site">
      	
<?php
 include_once'header.php'; 
 $category_id = $_GET['CategoryView'];
 ?>
	<div id="content" class="site-content" tabindex="-1"><br>
            <div class="col-full">
               <div class="pizzaro-sorting">
                  <div class="food-type-filter">
                     <!-- <div class="clear-food-type-filter chosen"><a href="#">SOUP</a>
                     </div> -->
                     <div class="widget woocommerce widget_layered_nav">
                        <ul>
                           <?php 
                              $selectsub = $card->subCategoryView($category_id);
                              while($fetch_sub = mysql_fetch_array($selectsub)){
                            ?>
                           <li class="wc-layered-nav-term "><a href="subCategory.php?SubCategory=<?php echo $fetch_sub['sub_category_id']; ?>"><?php echo $fetch_sub['sub_category_name']; ?></a> <span class="food-type-icon"><i class="fa fa-cutlery"></i></span></li>
                        <?php } ?>
                        <!--    <li class="wc-layered-nav-term "><a href="#">Spicy</a> <span class="food-type-icon"><i class="fa fa-fire"></i></span></li>
                           <li class="wc-layered-nav-term "><a href="#">Veg</a> <span class="food-type-icon"><i class="po po-veggie-icon"></i></span></li> -->
                        </ul>
                     </div>
                   <!--  <div class="create-your-own"><a href="single-product-v3.html">Create your own</a></div>-->
                  </div>
               </div>
               <div id="primary" class="content-area">
                  <main id="main" class="site-main">
                     <div class="columns-4">
                        <ul class="products">
                            <?php 
                            $s=1;
                            $CatProduct = $product->CategoryProduct($category_id);
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
                                       <a href="single-product.php?Product=<?php echo $fetchProduct['product_id']; ?>" class="woocommerce-LoopProduct-link">
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
                     <nav class="woocommerce-pagination">
                        <ul class="page-numbers">
                           <li><span class="page-numbers current">1</span></li>
                           <li><a class="page-numbers" href="#">2</a></li>
                           <li><a class="page-numbers" href="#">3</a></li>
                           <li><a class="next page-numbers" href="#">Next Page &nbsp;&nbsp;&nbsp;→</a></li>
                        </ul>
                     </nav>
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>
         <!-- <div class="footer-v1-static-content">
            <div class="kc-css-994088 kc_row">
               <div class="kc-row-container  kc-container">
                  <div class="kc-wrap-columns">
                     <div class="kc-css-194963 kc_col-sm-12 kc_column kc_col-sm-12">
                        <div class="stretch-full-width kc-col-container">
                           <div class="kc-css-126640 kc_shortcode kc_wrap_instagram  kc_ins_col_6">
                              <ul class="row">
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gyf2hTkr/" target="_blank"><img alt="" src="assets/images/footer/1.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gtf1BCmM/" target="_blank"><img alt="" src="assets/images/footer/2.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GnvhBqNt/" target="_blank"><img alt="" src="assets/images/footer/3.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GhsuhQE4/" target="_blank"><img alt="" src="assets/images/footer/4.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F_ZbBuxI/" target="_blank"><img alt="" src="assets/images/footer/5.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F8fLhgkp/" target="_blank"><img alt="" src="assets/images/footer/6.jpg"></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
<?php include_once'footer.php'; ?>