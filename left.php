<?php
@session_start();
error_reporting(0);
include 'db_config.php';
if (isset($_SESSION['kids_admin_id'])) {   
} else {
    header("Location:login.php");
}
?>
<html>
    <head>
        <title> Mazeda.com </title>
           <meta charset="UTF-8">
        <link href="css/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="message/docs.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="message/sweetalert.js"></script>
        <script src="message/sweetalert.min.js"></script>
        
             <link rel="shortcut icon" href="../assets/images/Mazeda.png">
        

        <!--        ------------------ editor ---------------->

        <link rel="stylesheet" href="editor/tinyeditor.css">

        <script src="editor/tiny.editor.packed.js"></script>


        <!--        ------------------ editor ---------------->

        <script>
            function myFunction() {
                window.print();
            }
        </script>
        <style type="text/css" media="print">
            @media print
            {    
                .header, .left_contain, .title, .print, .action, .btn
                {
                    display: none !important;
                }
                @page {
                    size: auto;   /* auto is the initial value */
                    margin: 0px auto;  /* this affects the margin in the printer settings */
                }
            }
        </style>
    </head>
    <body>
        <div class="contain">
            <div class="left_contain">
                <p>  Mazeda  </p>
                <ul>
                    <li> <i class="fa fa-tachometer"></i><a href="index.php"> Dashboard </a></li>
                    <?php 
                    if($_SESSION['kids_admin_id'] == 1){
                    ?>
                     <li><i class="fa fa-area-chart"></i><a href="slider.php">Slider</a></li>
                    <li><i class="fa fa-bar-chart"></i><a href="category.php">Category</a></li>
                    <!--<li><i class="fa fa-bar-chart"></i><a href="category_image.php">Category Image</a></li>-->
                    <li><i class="fa fa-bar-chart"></i><a href="sub_category.php"> Sub Category</a></li>
                <!-- <li><i class="fa fa-bar-chart"></i><a href="thard_category.php"> Thard Category</a></li> -->
                <!-- <li><i class="fa fa-bar-chart"></i><a href="left_offer.php">Right Offer</a></li> -->
                <!-- <li><i class="fa fa-bar-chart"></i><a href="today_offer.php">Today & new Offer</a></li>-->
                <li><i class="fa fa-bar-chart"></i><a href="all_home_offer.php">Home Offer</a></li>
                <!--<li><i class="fa fa-envelope"></i><a href="home_product.php"> Home Product </a></li>-->
                <!--<li><i class="fa fa-area-chart"></i><a href="cost_add.php">Cost add</a></li>-->
                <!--<li><i class="fa fa-area-chart"></i><a href="customar_list.php">User List</a></li>
                <li><i class="fa fa-area-chart"></i><a href="create_marcen.php"> Create Merchant </a></li>
                <li><i class="fa fa-area-chart"></i><a href="marcentaiger_reg.php"> Merchant List</a></li>
                <li><i class="fa fa-area-chart"></i><a href="marcentaiger_conform.php"> Merchant Conform</a></li> -->
                    
                   <?php } ?>
                   
                    <li><i class="fa fa-envelope"></i><a href="product1.php">Add Product </a></li>
                    <!-- <li><i class="fa fa-tasks"></i><a href="brand.php">Brand</a></li> -->
                    <!-- <li><i class="fa fa-tasks"></i><a href="account.php">Account</a></li> -->
                    <li><i class="fa fa-tasks"></i><a href="stock_product.php">Product List</a></li>
                    <li><i class="fa fa-area-chart"></i><a href="add_contact.php"> Add Contact </a></li>
                    <li><i class="fa fa-area-chart"></i><a href="contact_mail.php"> Contact Mail </a></li>
                     <li><i class="fa fa-area-chart"></i><a href="change_password.php">Change Password</a></li>
                    <li><i class="fa fa-area-chart"></i><a href="search.php">Search by order no</a></li>
                    <li>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default" style="background: transparent;border:none;">
                                <div class="panel-heading" role="tab" id="headingOne"style="background: #34323A;">
                                    <h4 class="panel-title" >
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin-left: -12px;">
                                            <i class="fa fa-chain-broken" style="text-align: left;"></i> &nbsp;&nbsp;&nbsp; Orders
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">


                                        <i class="fa fa-chain-broken"></i><a href="daily_order.php">Daily Orders</a><br>
                                        <i class="fa fa-chain-broken"></i><a href="pending_order.php">Pending Orders</a><br>
                                        <i class="fa fa-chain-broken"></i><a href="order_successful.php">Order Successful</a>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>

            </div>
            <div class="right_contain">
                <div class="header">
                    <form action="order_search.php" method="post">
                        <div class="col-md-8" style="margin-top: 10px;">
                            <div class="col-md-2 padding-left">
                                <input type="date" name="date_from">
                            </div>
                            <div class="col-md-1 padding-left">

                            </div>
                            <div class="col-md-3 padding">
                                <input type="date" name="date_to">
                            </div>

                            <div class="col-md-2">
                                <button type="submit" name="submit" class="form-control" style="background: #248AAF; color: whitesmoke;"> Submit</button>
                            </div>
                        </div>
                    </form>

                    <div class="col-md-2 notification">

                        <ul class="list-unstyled notification_menu">
                            <li><a href="daily_order.php"><i class="fa fa-bell"></i>
                                    <?php
                                    $select = mysql_query("SELECT * FROM order_detail WHERE plug = '0'");
                                    if ($num = mysql_num_rows($select)) {
                                        ?>
                                        (<?php echo $num; ?>)
                                    <?php } ?>
                                </a></li>                            
                        </ul>

                    </div>
                    <div class="profile col-md-1">
                        <p class="text-center"><a href="marcentaige_profile_cahange.php">Profile </a></p>
                    </div>
                    <div class="profile col-md-1">
                        <p class="text-center"><a href="logout.php">Logout </a></p>
                        
                    </div>




                </div>