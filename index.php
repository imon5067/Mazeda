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

      <?php include_once'header.php'; ?>
      
         <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div id="primary" class="content-area">
                  <main id="main" class="site-main">
                     <div class="home-v1-slider" >
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <?php 
                           $id=1;
                           $slide = $product->slideView();
                           while($fetchslide = mysql_fetch_array($slide)){
                         ?>
                           <div class="item slider-<?php echo $id;?>" style="background-image: url(dashboard/<?php echo $fetchslide['slider_image']; ?>);">
                              <div class="caption fadeIn">
                                <!--  <div class="pre-title">
                                    <div class="border front"></div>
                                    <div class="lable">New!</div>
                                    <div class="pre-title-value">LIMITED TIME OFFER</div>
                                    <div class="border back"></div>
                                 </div> -->
                               <!--   <div class="title">SUPREME BBQ</div>
                                 <div class="sub-title">CHICKEN</div> -->
                                 <!-- <div class="bottom-caption">Bacon  -  Grilled Onions  -  Potatos  -  Mozarella  -  BBQ Sauce</div> -->
                              </div>
                           </div>
                        <?php $id++; } ?>
                          
                          <!--  <div class="item slider-2" style="background-image: url(assets/images/slider/homepage-slider-2.jpg);">
                              <div class="caption fadeIn">
                                 <div class="price-tag">
                                    <div class="border front"> </div>
                                    <div class="price-tag-value">
                                       <div class="price"><span class="symbol"></span><span class="slider-amount"><br><span class="price-only"></span></span> </div>
                                    </div>
                                    <div class="border back"> </div>
                                 </div>
                                 <div class="title">ORYGINAL ITALY</div>
                                 <div class="sub-title">PIZZA LOVERS SET</div>
                              </div>
                           </div>
                           <div class="item slider-3" style="background-image: url(assets/images/slider/pizza-slider.jpg);">
                              <div class="caption fadeIn">
                                 <div class="pre-title">DISCOVER WHAT'S NEW</div>
                                 <div class="title"><span>and</span>order<span>with<br>visa</span>online</div>
                              </div>
                           </div>
                          
                           <div class="item slider-4" style="background-image: url(assets/images/slider/homepage-slider-4.jpg);">
                              <div class="caption fadeIn">
                                 <div class="pre-title">EXCLUSIVE OFFER</div>
                                 <div class="title"><span>VEGGIE FUN</span><br>DELICIOUS SUMMER!</div>
                              </div>
                              
                           </div> -->
                          
                        </div>
                        
                     </div>
                  <!-- advertisement home page container start-->
                     <div class="tiles">
                        <div class="row">
                           <div class="col-xs-12 col-sm-6">
                              <div class="banner top-left" >
                                 <a href="#">
                                    <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( dashboard/<?php echo $product->AdvertisementHomeOne('home',1); ?>); height: 442px;">
                                       <div class="caption">
                                          <h3 class="title">MAZEDA</h3>
                                          <h4 class="subtitle">CAFE & RESTAURANT</h4>
                                        <!--  <span class="button">HOT &amp; SPICY</span>-->
                                          <span class="condition"><em></em></span>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-6">
                              <div class="banners">
                                 <div class="row">
                                    <div class="banner col-sm-6 top-right" >
                                       <a href="#">
                                          <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( dashboard/<?php echo $product->AdvertisementHomeOne('home',2); ?>); height: 210px;">
                                             <div class="caption">
                                                <h3 class="title"></h3>
                                                <h4 class="subtitle"></h4>
                                                <div class="description"></div>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="banner col-sm-6 top-right" >
                                       <a href="#">
                                          <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( dashboard/<?php echo $product->AdvertisementHomeOne('home',3); ?>); height: 210px;">
                                             <div class="caption">
                                                <h3 class="title"></h3>
                                                <h4 class="subtitle"></h4>
                                                <span class="condition"><em></em></span>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="banner center" >
                                 <a href="#">
                                    <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url( dashboard/<?php echo $product->AdvertisementHomeOne('home',4); ?>); height: 210px;">
                                      <!--  <div class="caption">
                                          <h3 class="title"><span>ORDER</span> ONLINE</h3>
                                       </div> -->
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- advertisement home page container -->
                     <div class="section-tabs">
                        <ul class="nav nav-tabs pizzaro-nav-tabs" >
                           <?php 
                           $id=1;
                           $midCategory = $card->CategoryMid(4);
                                while($minfetch_cat = mysql_fetch_array($midCategory)){
                            ?>
                           <li class="nav-item">
                              <a href="#h1-tab-products-<?php echo $id; ?>" data-toggle="tab"><?php echo $minfetch_cat['category_name']; ?></a>
                           </li>
                        <?php $id++; } ?>
                          <!--  <li class="nav-item">
                              <a href="#h1-tab-products-2"  data-toggle="tab">Soup</a>
                           </li>
                           <li class="nav-item">
                              <a href="#h1-tab-products-3" data-toggle="tab">Family Pakage</a>
                           </li>
                            <li class="nav-item ">
                              <a href="#h1-tab-products-4" data-toggle="tab">Chowmein</a>
                           </li>
                            <li class="nav-item">
                              <a href="#h1-tab-products-5" data-toggle="tab">Ittalian Pizza</a>
                           </li>
                            <li class="nav-item">
                              <a href="#h1-tab-products-6" data-toggle="tab">Pasta</a>
                           </li> -->
                        </ul>
                        <div class="tab-content">
                            <?php 
                            $a=1;
                            $slid=1;
                             $midSelectCategory = $card->CategoryMid(4);
                                while($minfetch_category = mysql_fetch_array($midSelectCategory)){
                                  $mincatId = $minfetch_category['category_id']; 
                            ?>
                           <div class="tab-pane <?php if($a==1){echo 'active';} ?>" id="h1-tab-products-<?php echo $slid;?>">
                              <div class="section-products">
                                 <div class="woocommerce columns-3">
                                    <div class="columns-3">
                                       <ul class="products">
                                          <?php 
                                      
                                           $s=1;
                                           $HomeCateProduct = $product->homeCategoryProduct($mincatId,3);
                                           while($fetchProduct = mysql_fetch_array($HomeCateProduct)){
                                           ?>
                                          <li class="product">        
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
                                                        <!--  <div itemprop="description">
                                                             <p style="max-height: none;">Order great tasting fried chicken, Burgers & family meals online with<br> Mazeda Delivery </p>
                                                         </div> -->
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>PRICE</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">
                                                               <div class="ywapo_input_container ywapo_input_container_radio">
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">TK</span> <?php echo $fetchProduct['price']; ?></span></span>
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
                                          <!-- /.products -->
                                          <?php  } ?>
                                         
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php $slid++; $a++; } ?>
                           <!-- /.panel -->
                        </div>
                     </div>
                     <div class="stretch-full-width section-products-sale-event"  style="background-size: cover; background-position: center center; background-image: url( dashboard/<?php echo $product->AdvertisementHomeOne('home',5); ?>); height: 468px;">
                        <!-- <div class="sale-event-content">
                           <h3 class="pre-title"><span></span></h3>
                           <h2 class="section-title"></h2>
                           <div class="sale-event-products">
                              <div class="products-price">
                              <span class="price"><span class="currency"> ;</span><span class="decimals"></span><span class="price-info"></span></span>
                              </div>
                              <ul class="products-info">
                                 <li>
                                    <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                       <h3></h3>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                       <h3></h3>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                       <h3></h3>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <a href="single-product-v1.html" class="button">Order Now</a>
                        </div> -->
                     </div>
                     <?php 
                        $bottomCategory = $card->CategoryRandomly(1);
                        while($fetch_cat = mysql_fetch_array($bottomCategory)){
                        $mincatId = $fetch_cat['category_id'];

                      ?>
                     <div class="section-products">
                        <h2 class="section-title"><b><?php echo $fetch_cat['category_name']; ?></b></h2>
                        <div class="columns-4">
                           <ul class="products">
                              <?php
                                 $bottomProduct = $product->homeCategoryProduct($mincatId,4);
                                 while($fetchProduct = mysql_fetch_array($bottomProduct)){
                                           ?>
                                          <li class="product">        
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
                                                        <!--  <div itemprop="description">
                                                             <p style="max-height: none;">Order great tasting fried chicken, Burgers & family meals online with<br> Mazeda Delivery </p>
                                                         </div> -->
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>PRICE</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">
                                                               <div class="ywapo_input_container ywapo_input_container_radio">
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">TK</span> <?php echo $fetchProduct['price']; ?></span></span>
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
                                          <!-- /.products -->
                                          <?php  } ?>
                                         
                              <!-- /.products -->
                           </ul>
                        </div>
                     </div>
                  <?php } ?>



                     <div class="features-list" >
                        <div class="row">
                           <div class="feature col-xs-12 col-sm-3">
                              <div class="feature-icon"><i class="po po-best-quality"></i></div>
                              <div class="feature-label">
                                 <h4>Best Quality</h4>
                                 <p>Praesent pulvinar neque pellentesque mattis pretium.</p>
                              </div>
                           </div>
                           <div class="feature col-xs-12 col-sm-3">
                              <div class="feature-icon"><i class="po po-on-time"></i></div>
                              <div class="feature-label">
                                 <h4>On Time</h4>
                                 <p>Praesent pulvinar neque pellentesque mattis pretium.</p>
                              </div>
                           </div>
                           <div class="feature col-xs-12 col-sm-3">
                              <div class="feature-icon"><i class="po po-master-chef"></i></div>
                              <div class="feature-label">
                                 <h4>MasterChefs</h4>
                                 <p>Praesent pulvinar neque pellentesque mattis pretium.</p>
                              </div>
                           </div>
                           <div class="feature col-xs-12 col-sm-3">
                              <div class="feature-icon"><i class="po po-ready-delivery"></i></div>
                              <div class="feature-label">
                                 <h4>Taste Food</h4>
                                 <p>Praesent pulvinar neque pellentesque mattis pretium.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>
         <!-- #content -->
         <!-- <div class="footer-v1-static-content">
            <div class="kc-css-994088 kc_row">
               <div class="kc-row-container  kc-container">
                  <div class="kc-wrap-columns">
                     <div class="kc-css-194963 kc_col-sm-12 kc_column kc_col-sm-12">
                        <div class="stretch-full-width kc-col-container">
                           <div class="kc-css-126640 kc_shortcode kc_wrap_instagram  kc_ins_col_6">
                              <ul class="row">
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="#" target="_blank"><img alt="" src="assets/images/footer/1.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="#" target="_blank"><img alt="" src="assets/images/footer/2.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="#" target="_blank"><img alt="" src="assets/images/footer/3.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="#" target="_blank"><img alt="" src="assets/images/footer/4.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="#" target="_blank"><img alt="" src="assets/images/footer/5.jpg"></a></li>
                                  <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="#" target="_blank"><img alt="" src="assets/images/footer/6.jpg"></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->

<?php include_once'footer.php'; ?>