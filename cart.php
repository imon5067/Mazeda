<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Mazeda</title>
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
   <body class="woocommerce-cart">
      <div id="page" class="hfeed site">
         <?php 
         include_once'header.php'; 
          if(!isset($_SESSION['userLoginId'])){
               header("Location:login-and-register.php");
            }  
         ?>
         <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb" >
                     <a href="index.php">Home</a>
                     <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Cart
                  </nav>
               </div>
               <!-- .woocommerce-breadcrumb -->
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                     <div class="pizzaro-order-steps">
                        <ul>
                           <li class="cart">
                              <span class="step">1</span>Shopping Cart
                           </li>
                           <li class="checkout">
                              <span class="step">2</span>Checkout
                           </li>
                           <li class="complete">
                              <span class="step">3</span>Order Complete
                           </li>
                        </ul>
                     </div>
                     <div id="post-8" class="post-8 page type-page status-publish hentry">
                        <div class="entry-content">
                           <div class="woocommerce">
                              <form action="checkout.php" method="post">
                                 <table class="shop_table shop_table_responsive cart" >
                                    <thead>
                                       <tr>
                                          <th class="product-remove">&nbsp;</th>
                                          <th class="product-thumbnail">&nbsp;</th>
                                          <th class="product-name">Product</th>
                                          <th class="product-price">Price</th>
                                          <th class="product-quantity">Quantity</th>
                                          <th class="product-subtotal">Total</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                          $selectCard = $card->get_cart_all($userId);
                                          while($fetch_card = mysql_fetch_array($selectCard)){
                                             //single product information
                                             $fetch_product = $product->productDetails($fetch_card['product_id']);

                                          $product_id = $fetch_card['product_id'];
                                          $qnty = $fetch_card['quantity'];

                                          $all_product .= $product_id . '--';
                                          $quantity .= $qnty . '--';
                                        ?>
                                       <tr class="cart_item">
                                          <td class="product-remove">
                                             <a href="./controller/card.php?card_delete=<?php echo $fetch_card['card_id'] ?>" class="remove" >&times;</a>
                                          </td>
                                          <td class="product-thumbnail">
                                             <a href="single-product.php?Product=<?php echo $fetch_card['product_id']; ?>">
                                             <img width="180" height="180" src="dashboard/<?php echo $product->ProductImage($fetch_card['product_id']); ?>" alt="" />
                                             </a>
                                          </td>
                                          <td class="product-name" data-title="Product">
                                             <a href="single-product.php?Product=<?php echo $fetch_card['product_id']; ?>"><?php echo $fetch_product['product_name']; ?></a>
                                             <dl class="variation">
                                                <dt class="variation-Baseprice"> Barcode: <?php echo $fetch_product['color']; ?></dt>
                                             </dl>
                                          </td>
                                          <td class="product-price" data-title="Price">
                                             <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span> <?php echo $price = $fetch_card['price']; ?> &#2547; </span>
                                          </td>
                                          <td class="product-quantity" data-title="Quantity">
                                             <div class="qty-btn">
                                                <label>Quantity</label>
                                                <!-- <div class="quantity">
                                                   <input type="number" value="1" title="Qty" class="input-text qty text"/>
                                                </div> -->
                                                <?php echo $quantity = $fetch_card['quantity']; ?>
                                             </div>
                                          </td>
                                          <td class="product-subtotal" data-title="Total">
                                             <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?php echo $total = $price*$quantity; ?> &#2547; </span>
                                          </td>
                                       </tr>

                                    <?php } ?>
                                      
                                       <tr>
                                          <td colspan="6" class="actions">
                                            <!--  <div class="coupon">
                                                <label for="coupon_code">Coupon:</label>
                                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                                                <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
                                             </div> -->
                                             <!-- <input type="submit" class="button" name="update_cart" value="Update Cart" /> -->
                                             <input type="hidden" id="_wpnonce" name="all_product" value="<?php echo$all_product ?>" />
                                             <input type="hidden" name="all_quantity" value="<?php echo$quantity ?>" />
                                             <input type="hidden" name="total_price" value="<?php echo $card->total_amout_cart($userId);?>" />

                                             <div class="wc-proceed-to-checkout">
                                                <button class="checkout-button button alt wc-forward" name="OrderProceed_continuse">Proceed to Checkout</button>
                                                <!-- <a href="checkout.php" class="checkout-button button alt wc-forward"></a> -->
                                             </div>
                                             
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </form>
                              
                              <div class="cart-collaterals">
                                 <div class="cart_totals ">
                                    <h2>Cart Totals</h2>
                                    <table  class="shop_table shop_table_responsive">
                                       <tr class="cart-subtotal">
                                          <th>Subtotal</th>
                                          <td data-title="Subtotal">
                                             <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span> <?php echo $totaltk = $card->total_amout_cart($userId); ?> &#2547;   </span>
                                          </td>
                                       </tr>
                                       <tr class="order-total">
                                          <th>Total</th>
                                          <td data-title="Total">
                                             <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"> </span><?php echo $totaltk = $card->total_amout_cart($userId); ?> &#2547;  </span></strong>
                                          </td>
                                       </tr>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                       <a href="checkout.html" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- .entry-content -->
                    </main><!-- #main -->
               </div>
               <!-- #post-## -->
            </div>
            <!-- #primary -->
         </div>
         <!-- .col-full -->
      </div>
     
     <?php include_once'footer.php';?>