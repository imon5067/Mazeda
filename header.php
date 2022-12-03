<?php 
session_start();
ob_start();
error_reporting(1);
include_once './dashboard/db_config.php';
include_once './controller/function.php';
include_once './controller/show_data.php';
include_once './controller/login.php';
@$userId = $_SESSION['userLoginId'];
$card = new Cartclass();
$product = new Product();
$login = new UserLogin();

 ?>
 <header id="masthead" class="site-header header-v1" style="background-image: none; ">

		  <img src="assets/images/maz.gif" alt="Smiley face" height="1000" width="500" style="margin-right: 16px;margin-left: 416px;">
            <div class="col-full">
               <a class="skip-link screen-reader-text" href="#site-navigation"> Skip to navigation </a>
               <a class="skip-link screen-reader-text" href="#content"> Skip to content </a>
               <div class="header-wrap">
                  <div class="site-branding">
                     <a href="index.php" class="custom-logo-link" rel="home">
                     <img src="assets/images/Mazeda.png" alt="Smiley face" height="1000" width="500">
                     </a>
                  </div>
                  <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
                     <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span class="close-icon"><i class="po po-close-delete"></i></span><span class="menu-icon"><i class="po po-menu-icon"></i></span><span class=" screen-reader-text">Menu</span></button>
                     <div class="primary-navigation">
                        <ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false">
                         <!--<li class="menu-item"><a href="appetizers.php">Order Online</a></li>-->
                           <!-- <li class="yamm-fw menu-item menu-item-has-children">
                              <a href="about.html">Pages</a>
                              <ul class="sub-menu">
                                 <li class="menu-item">
                                    <div class="yamm-content">
                                       <div class="kc-elm kc-css-4169277 kc_row">
                                          <div class="kc-row-container  kc-container">
                                             <div class="kc-wrap-columns">
                                                <div class="col-sm-3 col-xs-12 col-md-3 col-lg-3">
                                                   <div class="kc-col-container">
                                                      <div class="widget widget_nav_menu kc-elm kc-css-1908114">
                                                         <div class="menu-pages-menu-1-container">
                                                            <ul id="menu-pages-menu-5" class="menu">
                                                               <li class="nav-title menu-item"><a href="#">Home Pages</a></li>
                                                               <li class="nav-title menu-item"><a href="#">User Account</a></li>
                                                               <li class="menu-item"><a href="login-and-register.php">My Account</a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3 col-xs-12 col-md-3 col-lg-3">
                                                   <div class="kc-col-container">
                                                      <div class="widget widget_nav_menu kc-elm kc-css-2420681">
                                                         <div class="menu-pages-menu-2-container">
                                                            <ul id="menu-pages-menu-6" class="menu">
                                                               <li class="nav-title menu-item"><a href="#">Foods</a></li>
                                                               <li class="menu-item"><a href="Appetizers.html">Appetizers</a></li>
                                                               <li class="menu-item"><a href="Soup.html">Soup</a></li>
                                                               <li class="menu-item"><a href="Salad.html">Salad</a></li>
                                                               <li class="menu-item"><a href="family Package.html">Set Menu-A</a></li>
                                                               <li class="menu-item"><a href="family Package.html">Set Menu-B</a></li>
                                                               <li class="menu-item"><a href="family Package.html">Set Menu-C</a></li>
                                                               <li class="menu-item"><a href="family Package.html">Set Menu-D</a></li>
                                                               <li class="menu-item"><a href="family Package.html">Set Menu-E</a></li>
                                                               <li class="menu-item"><a href="family Package.html">Set Menu-F</a></li>
                                                               <li class="menu-item"><a href="family Package.html">Set Menu-G</a></li>
                                                                <li class="menu-item"><a href="family Package.html">Family Pakage</a></li>
                                                               <li class="menu-item"><a href="Chowmein.html">Chowmein</a></li>
                                                               <li class="menu-item"><a href="Italian Pizza.html">Italian-Pizza</a></li>
                                                               <li class="menu-item"><a href="Pasta.html">Pasta</a></li>
                                                               <li class="menu-item"><a href="Steak.html">Steak</a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3 col-xs-12 col-md-3 col-lg-3">
                                                   <div class="kc-col-container">
                                                      <div class="widget widget_nav_menu kc-elm kc-css-3102392">
                                                         <div class="menu-pages-menu-3-container">
                                                            <ul id="menu-pages-menu-7" class="menu">
                                                               <li class="nav-title menu-item"><a href="#">Drinks</a></li>
                                                               <li class="menu-item"><a href="Regular Coffee.html">Regular Coffee</a></li>
                                                               <li class="menu-item"><a href="Coffee Special.html">Coffee Special</a></li>
                                                               <li class="menu-item"><a href="Hot Chocolate.html">Hot chocolate</a></li>
                                                               <li class="menu-item"><a href="ICE Coffee Item.html">ICE Coffee Iteam</a></li>
                                                                <li class="menu-item"><a href="Milky Juice.html">Milky Juice</a></li>
                                                               <li class="menu-item"><a href="Milky juice Special.html">Milky Juice Special</a></li>
                                                                <li class="menu-item"><a href="Fruity Freeze.html">Fruity Freeze</a></li>
                                                               <li class="menu-item"><a href="Chiller.html">Chiller</a></li>
                                                                <li class="menu-item"><a href="Mocktail.html">Mocktail</a></li>
                                                               <li class="menu-item"><a href="Lassi.html">Lassi</a></li>
                                                                <li class="menu-item"><a href="Soda Blast.html">soda Blast</a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3 col-xs-12 col-md-3 col-lg-3">
                                                   <div class="kc-col-container">
                                                      <div class="widget widget_nav_menu kc-elm kc-css-3447423">
                                                         <div class="menu-pages-menu-4-container">
                                                            <ul id="menu-pages-menu-8" class="Menu">

                                                               <li class="nav-title menu-item"><a href="#">Template Pages</a></li>
                                                               <li class="menu-item"><a href="about.html">About Us</a></li>
                                                               <li class="menu-item"><a href="contact.html">Contact</a></li>
                                                            
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </li> -->
                          
                           <li class="menu-item"><a href="store-locator.php">Store Locator</a></li>
                           <?php if(@$_SESSION['userLoginId']!=0){ ?>
                           <li class="menu-item"><a href="logout.php">Logout</a></li>
                           <?php }else{ ?>
                           <li class="menu-item"><a href="login-and-register.php">Login</a></li>
                           <?php } ?>
                        </ul>
                     </div>
                     <div class="handheld-navigation">
                        <span class="phm-close">Close</span>
                        <ul class="menu">
                            <?php 
                        $categoryMenu = $card->CategoryMenu();
                        while($categorymenu = mysql_fetch_array($categoryMenu)){
                         ?>
                        <li class="menu-item"><a href="category.php?CategoryView=<?php echo $categorymenu['category_id']; ?>"><?php echo $categorymenu['category_name']; ?></a></li>
                        <?php } ?>
                          <!--  <li class="menu-item "><a href="category.php"><i class="po po-pizza"></i>Pizza</a></li>
                           <li class="menu-item "><a href="Burger & Sub.html"><i class="po po-burger"></i>Burgers</a></li>
                           <li class="menu-item "><a href="Soup.html"><i class="po po-salads"></i>Salads</a></li>
                           <li class="menu-item "><a href="Pasta.html"><i class="po po-tacos"></i>Pasta</a></li>
                           <li class="menu-item "><a href="Regular Coffee.html"><i class="po po-wraps"></i>Coffee</a></li>
                           <li class="menu-item "><a href="family Package.html"><i class="po po-fries"></i>Family Package</a></li>
                           <li class="menu-item "><a href="Salad.html"><i class="po po-salads"></i>Salads</a></li>
                           <li class="menu-item "><a href="Regular Coffee.html"><i class="po po-drinks"></i>Drinks</a></li> -->
                        </ul>
                     </div>
                  </nav>
                  <!-- #site-navigation -->
                  <!-- --contact query-- -->
                  <?php $contact = $card->get_cotactInfo(); ?>
                  <div class="header-info-wrapper">
                     <div class="header-phone-numbers">
                        <span class="intro-text">Call and Order in</span>
                        <span class="intro-text font color="white"">Shop # 107, Nizam Shanker Plaza 72, Satmosjid Road, Dhaka-1205</span>
                        <span id="city-phone-number-label" class="phone-number"><?//php echo $contact['mobile']; ?> 0183-0020777</span>
					 <span id="city-phone-number-label" class="phone-number"><?//php echo $contact['mobile']; ?> 01756-738383</span>
                     </div>
                     <ul class="site-header-cart-v2 menu">
                        <li class="cart-content ">
                           <a href="cart.php" title="View your shopping cart">
                           <i class="po po-scooter"></i>
                           <span>Go to Your Cart</span>
                           </a>
                           <ul class="sub-menu">
                              <li>
                                 <a href="cart.php" title="View your shopping cart">
                                 <span class="count"> <?php echo $value = $card->total_cart($userId); ?> items </span> <span class="amount"> <?php echo $totaltk = $card->total_amout_cart($userId); ?> &#2547;  </span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="Mazada-secondary-navigation">
                  <nav class="secondary-navigation" aria-label="Secondary Navigation">
                     <ul class="menu">
                        <?php 
                        $categoryMenu = $card->CategoryMenu();
                        while($categorymenu = mysql_fetch_array($categoryMenu)){
                         ?>
                        <li class="menu-item"><a href="category.php?CategoryView=<?php echo $categorymenu['category_id']; ?>"><?php echo $categorymenu['category_name']; ?></a></li>
                     <?php } ?>
                       <!--  <li class="menu-item"><a href="Burger & Sub.html">Burgers</a></li>
                        <li class="menu-item"><a href="Soup.html">Soup</a></li>
                        <li class="menu-item"><a href="Pasta.html">Pasta</a></li>
                        <li class="menu-item"><a href="Regular Coffee.html">Coffee</a></li>
                        <li class="menu-item"><a href="family Package.html">Family Package</a></li>
                        <li class="menu-item"><a href="Salad.html">Salads</a></li>
                        <li class="menu-item"><a href="Regular Coffee.html">Drinks</a></li> -->
                     </ul>
                  </nav>
                  <!-- #secondary-navigation -->
               </div>
            </div>
         </header>