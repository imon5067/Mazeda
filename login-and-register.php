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
   <body class="woocommerce-account">
      <div id="page" class="hfeed site">
         <?php include_once'header.php'; ?>
         <div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb" ><a href="index.php">Home</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>My Account</nav>
               </div>
               <!-- .woocommerce-breadcrumb -->
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                     <div id="post-10" class="post-10 page type-page status-publish hentry">
                        <div class="entry-content">
                           <div class="woocommerce">
                              <div class="customer-login-form">
                                 <span class="or-text">or</span>
                                 <div class="u-columns col2-set" id="customer_login">
                                    <div class="u-column1 col-1">
                                       <h2>Login</h2>
                                       <form  class="login" action="" method="post">
                                          <p class="before-login-text">Welcome back! Sign in to your account</p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="username">Username or email address <span class="required">*</span></label>
                                             <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" required="" />
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="password">Password <span class="required">*</span></label>
                                             <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" required="" />
                                          </p>
                                          <p class="form-row">
                                             <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="02aaeb6b10" />
                                             <input type="hidden" name="_wp_http_referer" value="/pizzaro/my-account/" />
                                             <input type="submit" class="woocommerce-Button button" name="login_user" value="Login" />
                                             <label for="rememberme" class="inline">
                                             <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me
                                             </label>
                                          </p>
                                          <p class="woocommerce-LostPassword lost_password">
                                             <a href="#">Lost your password?</a>
                                          </p>
                                       </form>
                                       <?php 
                                       if(isset($_POST['login_user'])){
                                          $email = $_POST['username'];
                                          $password = $_POST['password'];
                                          $checking = $login->CustomerLogin($email,$password);//login user method
                                          if($checking){ ?>
                                          <div class="alert alert-danger">
                                          <?php echo $checking; ?>
                                          </div>
                                           <?php }
                                          }
                                        ?>
                                    </div>
                                    <div class="u-column2 col-2">
                                       <h2>Register</h2>
                                       <form  action="" method="post" class="register">
                                          <p class="before-register-text">Create your very own account</p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_name">Name <span class="required">*</span></label>
                                             <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_name" required="" />
                                          </p>
                                           <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_number">Mobile<span class="required">*</span></label>
                                             <input type="number" class="woocommerce-Input woocommerce-Input--text input-text" name="mobile" id="reg_number" required="" />
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_email">Email address <span class="required">*</span></label>
                                             <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" required="" />
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_password">Password <span class="required">*</span></label>
                                             <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" required="" />
                                          </p>
                                          <!-- Spam Trap -->
                                          <div style="left: -999em; position: absolute;">
                                             <label for="trap">Anti-spam</label>
                                             <input type="text" name="email_2" id="trap" tabindex="-1" />
                                          </div>
                                          <p class="woocomerce-FormRow form-row">
                                             <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="1fe13dcb6d" />
                                             <input type="hidden" name="_wp_http_referer" value="/pizzaro/my-account/" />
                                             <input type="submit" class="woocommerce-Button button" name="User_register" value="Register" />
                                          </p>
                                          
                                       </form>
                                       <?php 
                                       if(isset($_POST['User_register'])){
                                          $name = $_POST['username'];
                                          $mobile = $_POST['mobile'];
                                          $email = $_POST['email'];
                                          $password = $_POST['password'];
                                          $register = $login->UserRegistration($name,$mobile,$email,$password);

                                          if($register){ ?>
                                             <div class="alert alert-success">
                                             <?php echo $register; ?>
                                             </div>
                                       <?php   }
                                       }

                                        ?>
                                       <div class="register-benefits">
                                             <h3>Sign up today and you will be able to :</h3>
                                             <ul>
                                                <li>Speed your way through checkout</li>
                                                <li>Track your orders easily</li>
                                                <li>Keep a record of all your purchases</li>
                                             </ul>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.customer-login-form -->
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
         <div class="footer-v1-static-content">
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
         </div>
    <?php include_once'footer.php'; ?>