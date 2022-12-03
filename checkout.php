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
   <body class="woocommerce-checkout">
      <div id="page" class="hfeed site">
         <?php include_once'header.php';
            if(isset($_POST['OrderProceed_continuse'])){
              $_SESSION['product_id'] = $_POST['all_product'];
              $_SESSION['quantity'] = $_POST['all_quantity'];
              $_SESSION['total_price'] = $_POST['total_price'];
            }
          ?>
         <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb" ><a href="index.php">Home</a>
                     <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Checkout
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
                     <div id="post-9" class="post-9 page type-page status-publish hentry">
                        <div class="entry-content">
                           <div class="woocommerce">
                              <form action="" method="post" class="checkout woocommerce-checkout"  enctype="multipart/form-data">
                                 <div class="col2-set" id="customer_details">
                                    <div class="col-1">
                                       <div class="woocommerce-billing-fields">
                                          <h3>Billing Details</h3>
                                          <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                             <label for="billing_first_name" class="">First Name </label>
                                             <input type="text" class="input-text " name="first_name" id="billing_first_name" placeholder=""  autocomplete="given-name" required=""  />
                                          </p>
                                          <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                             <label for="billing_last_name" class="">Last Name </label>
                                             <input type="text" class="input-text " name="last_name" id="billing_last_name" placeholder=""  autocomplete="family-name"/>
                                          </p>
                                          <div class="clear"></div>
                                          
                                          <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                             <label for="billing_email" class="">Email Address </label>
                                             <input type="email" class="input-text " name="email" id="billing_email" placeholder="" autocomplete="email" required="" />
                                          </p>
                                          <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                             <label for="billing_phone" class="">Phone </label>
                                             <input type="tel" class="input-text " name="mobile" id="billing_phone" placeholder=""  autocomplete="tel" required="" />
                                          </p>
                                          <div class="clear"></div>
                                          <!-- <p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">
                                             <label for="billing_country" class="">Country </label>
                                             <input type="text" value="" placeholder="" id="billing_country" name="billing_phone" class="input-text ">
                                          </p> -->
                                       
                                         <!--  <p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
                                             <input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)"  autocomplete="address-line2" value=""  />
                                          </p> -->
                                          <p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field">
                                             <label for="billing_city" class="">Town / City </label>
                                             <input type="text" class="input-text " name="city" id="billing_city" placeholder=""  autocomplete="address-level2" required="" />
                                          </p>
                                            <div class="clear"></div>
                                          <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                             <label for="billing_address_1" class="">Address </label>
                                             <input type="text" class="input-text " name="address" id="billing_address_1" placeholder="Street address"  autocomplete="address-line1" required=""/>
                                          </p>
                                          <p class="form-row form-row form-row-first address-field validate-required validate-state" id="billing_state_field">
                                             <label for="billing_state" class="">State / Country </label>
                                             <input type="text"  placeholder="State / Country" id="billing_state" name="country" class="input-text" required="">
                                          </p>
                                          <p class="form-row form-row form-row-last address-field validate-required validate-postcode" id="billing_postcode_field">
                                             <label for="billing_postcode" class=""> Postcode / ZIP </label>
                                             <input type="text" class="input-text " name="postcode" id="billing_postcode" placeholder="Postal-code"  autocomplete="postal-code" />
                                          </p>
                                          <div class="clear"></div>
                                         <!--  <p class="form-row form-row-wide create-account">
                                             <input class="input-checkbox" id="createaccount"  type="checkbox" name="createaccount" value="1" />
                                             <label for="createaccount" class="checkbox">Create an account?</label>
                                          </p>
                                          <div class="create-account">
                                             <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                             <p class="form-row form-row validate-required" id="account_password_field">
                                                <label for="account_password" class="">Account password </label>
                                                <input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password"   value=""  />
                                             </p>
                                             <div class="clear"></div>
                                          </div> -->
                                       </div>
                                    </div>
                                  <!--   <div class="col-2">
                                       <div class="woocommerce-shipping-fields">
                                          <h3>Additional Information</h3>
                                          <p class="form-row form-row notes" id="order_comments_field">
                                             <label for="order_comments" class="">Order Notes</label>
                                             <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."    rows="2" cols="5"></textarea>
                                          </p>
                                       </div>
                                    </div> -->
                                  <input type="hidden" name="product_id" value="<?php echo $_SESSION['product_id']; ?>">
                                  <input type="hidden" name="quantity" value="<?php echo $_SESSION['quantity']; ?>">
                                  <input type="hidden" name="total_price" value="<?php echo $_SESSION['total_price']; ?>">

                                 </div>
                                 <h3 id="order_review_heading">Your order</h3>
                                 <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                       <thead>
                                          <tr>
                                             <th class="product-name">Product</th>
                                             <th class="product-total">Total</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                    <?php 
                                    $sl=1;
                                    $selectCard = $card->get_cart_all($userId);
                                    while($fetch_card = mysql_fetch_array($selectCard)){
                                       //single product information
                                       $fetch_product = $product->productDetails($fetch_card['product_id']);
                                        ?>
                                          <tr class="cart_item">
                                             <td class="product-name">
                                                Bacon Burger&nbsp;<strong class="product-quantity">&times; <?php echo $sl; ?></strong>
                                                <!-- <dl class="variation">
                                                   <dt class="variation-Baseprice">Base price:</dt>
                                                   <dd class="variation-Baseprice">
                                                      <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></p>
                                                   </dd>
                                                   <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):
                                                   </dt>
                                                   <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                      <p>29  cm</p>
                                                   </dd>
                                                </dl> -->
                                             </td>
                                             <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"> </span><?php echo $price = $fetch_card['price']; ?> &#2547; </span>
                                             </td>
                                          </tr>
                                          <?php $sl++; } ?>
                                       </tbody>
                                       <tfoot>
                                          <tr class="cart-subtotal">
                                             <th>Subtotal</th>
                                             <td>
                                                <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span><?php echo $totaltk = $card->total_amout_cart($userId); ?> &#2547; </span>
                                             </td>
                                          </tr>
                                          <tr class="order-total">
                                             <th>Total</th>
                                             <td>
                                                <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"> </span> <?php echo $totaltk = $card->total_amout_cart($userId); ?> &#2547; </span></strong>
                                             </td>
                                          </tr>
                                       </tfoot>
                                    </table>
                                    <div id="payment" class="woocommerce-checkout-payment">
                                       <ul class="wc_payment_methods payment_methods methods">
<!--                                          <li class="wc_payment_method payment_method_bacs">
                                             <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"  checked='checked' data-order_button_text="" />
                                             <label for="payment_method_bacs">Direct Bank Transfer</label>
                                             <div class="payment_box payment_method_bacs" >
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won&#8217;t be shipped until the funds have cleared in our account.</p>
                                             </div>
                                          </li>
                                          <li class="wc_payment_method payment_method_cheque">
                                             <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque"  data-order_button_text="" />
                                             <label for="payment_method_cheque">Check Payments  </label>
                                             <div class="payment_box payment_method_cheque" style="display:none;">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                             </div>
                                          </li>-->
                                          <li class="wc_payment_method payment_method_cod">
                                             <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  data-order_button_text="" />
                                             <label for="payment_method_cod">Cash on Delivery   </label>
                                             <div class="payment_box payment_method_cod" style="display:none;">
                                                <p>Pay with cash upon delivery.</p>
                                             </div>
                                          </li>
                                          <li class="wc_payment_method payment_method_paypal">
                                             <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal"  data-order_button_text="Proceed to PayPal" />
                                          <!--    <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="../../www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"/>
                                             <a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/us/webapps/mpp/paypal-popup"   >What is PayPal?</a>  </label> -->
                                             <div class="payment_box payment_method_paypal" style="display:none;">
                                                <p>Pay via PayPal; you can pay with your credit card if you don&#8217;t have a PayPal account.</p>
                                             </div>
                                          </li>
                                       </ul>
                                       <div class="form-row place-order">
                                          <noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.<br/>
                                             <input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" />
                                          </noscript>
                                          <p class="form-row terms wc-terms-and-conditions">
                                             <input type="checkbox" class="input-checkbox" name="terms"  id="terms" />
                                             <label for="terms" class="checkbox">I&rsquo;ve read and accept the <a href="" target="_blank">terms &amp; conditions</a> <span class="required">*</span></label>
                                             <input type="hidden" name="terms-field" value="1" />
                                          </p>

                                          <button class="button alt" style="text-align: center;" name="OrderConform_process">Place order</button>
                                         <!--  <a class="button alt" href="order-received.php" style="text-align: center;">Place order</a> -->
                                       </div>
                                    </div>
                                 </div>
                              </form>

                              <?php 
                                if(isset($_POST['OrderConform_process'])){
                                  $first_name = $_POST['first_name'];
                                  $last_name = $_POST['last_name'];
                                  $email = $_POST['email'];
                                  $mobile = $_POST['mobile'];
                                  $city = $_POST['city'];
                                  $address = $_POST['address'];
                                  $country = $_POST['country'];
                                  $postcode = $_POST['postcode'];

                                  $product_id = $_POST['product_id'];
                                  $quantity = $_POST['quantity'];
                                  $total_price = $_POST['total_price'];
                                  $orderdate = date('Y-m-d');

                                  $order = $card->productOrder($first_name,$last_name,$email,$mobile,$city,$address,$country,$postcode,$product_id,$quantity,$total_price,$orderdate,$userId);
                                  if($order){ header("Location:order-received.php");} 

                                }

                               ?>
                           </div>
                        </div>
                        <!-- .entry-content -->
                     </div>
                     <!-- #post-## -->
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>
         <!-- #content -->
         
        <?php include_once'footer.php'; ?>