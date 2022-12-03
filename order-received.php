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
   <body class="woocommerce-page woocommerce-order-received woocommerce-checkout">
      <div id="page" class="hfeed site">
        <?php include_once'header.php'; 
          if(!isset($userId)){
            header("Location:index.php");
          }
        ?>
         <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb">
                     <a href="index.php">Home</a>
                     <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                     <a href="checkout.php">Checkout</a>
                     <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Order Received
                  </nav>
               </div>
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
                     <div id="post-9" class="post-9 page type-page status-publish hentry">
                        <header class="entry-header">
                           <h1 class="entry-title">Order Received</h1>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                           <div class="woocommerce">
                              <p class="woocommerce-thankyou-order-received">Thank you. Your order has been received.</p>
                              <?php 
                                 $customerOrder = $card->customerOrderview($userId);
                               ?>
                              <ul class="woocommerce-thankyou-order-details order_details">
                                 <li class="order">Order Number:<strong><?php echo $customerOrder['order_id']; ?></strong></li>
                                 <li class="date">Date:<strong><?php echo date("d-M-Y", strtotime($customerOrder['order_date'])); ?></strong></li>
                                 <li class="total">Total:<strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?php echo $customerOrder['total_price']; ?></span></strong></li>
                                 <!-- <li class="method">Payment Method:<strong>Direct Bank Transfer</strong></li> -->
                              </ul>
                              <div class="clear"></div>
                              <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                              <h2>Order Details</h2>

                              <table class="shop_table order_details">
                                 <thead>
                                    <tr>
                                       <th class="product-name">Product</th>
                                       <th class="product-total">Total</th>
                                    </tr>
                                 </thead>

                              
                          
                                 <tbody>
                                    <tr class="order_item">
                                       <td class="product-thumbnail">
                                     <?php
                                       $ex = explode('--', $customerOrder['product_id']);
                                       $count = count($ex) - 1;
                                       for ($i = 0; $i < $count; $i++) {
                                       $id = $ex["$i"];
                                       ?>
                                     <img src="dashboard/<?php echo $product->ProductImage($id); ?>" style="height: 60px;width:50px; float: left; padding: 5px;"/>
                                     <?php }  ?>
                                          </td>
                                       
                                       <td class="product-total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"> &#2547; </span><?php echo $customerOrder['total_price']; ?>   </span>  </td>
                                    </tr>
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th scope="row">Subtotal:</th>
                                       <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"> &#2547; </span><?php echo $customerOrder['total_price']; ?> </td>
                                    </tr>
                                   <!--  <tr>
                                       <th scope="row">Payment Method:</th>
                                       <td>Direct Bank Transfer</td>
                                    </tr> -->
                                    <tr>
                                       <th scope="row">Total:</th>
                                       <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"> &#2547; </span><?php echo $customerOrder['total_price']; ?> </span> </td>
                                    </tr>
                                 </tfoot>
                              </table>
                              <header>
                                 <h2>Customer Details</h2>
                              </header>
                              <table class="shop_table customer_details">
                                 <tbody>
                                    <tr>
                                       <th>Name :</th>
                                       <td>  </span><?php echo $customerOrder['first_name']; ?> </td>
                                    </tr>
                                    <tr>
                                       <th>Email:</th>
                                       <td>  </span><?php echo $customerOrder['email']; ?> </td>
                                    </tr>
                                    <tr>
                                       <th>Telephone:</th>
                                       <td><?php echo $customerOrder['mobile']; ?></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <header class="title">
                                 <h3>Address</h3>
                              </header>
                              <address><?php echo $customerOrder['address']; ?></address>
                           </div>
                        </div>
                        <!-- .entry-content -->
                     </div>
                     <!-- #post-## -->
                  </main>
                  <!-- #main -->
               </div>
            </div>
            <!-- .col-full -->
         </div>
         <!-- #content -->
         
         <?php include_once 'footer.php'; ?>