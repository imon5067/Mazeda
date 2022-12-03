<?php
session_start();
include 'db_config.php';
if (isset($_SESSION['kids_admin_id'])) {
    
} else {
    header("Location:login.php");
}
?>
<html>
    <head>
        <title>Mother's lap Admin panel</title>
        <link href="css/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

        <!--        ------------------ editor ---------------->

        <link rel="stylesheet" href="editor/tinyeditor.css">

        <script src="editor/tiny.editor.packed.js"></script>


        <!--        ------------------ editor ---------------->

    </head>
    <body>
        <div class="contain">
            <div class="left_contain">
                <p>Mother's Lap</p>
                <ul>
                    <li> <i class="fa fa-tachometer"></i><a href="index.php">Dashboard</a></li>
                    <li><i class="fa fa-envelope"></i><a href="product1.php"> Product </a></li>
                    <li><i class="fa fa-bar-chart"></i><a href="category.php">Category</a></li>
                    <li><i class="fa fa-bar-chart"></i><a href="category_image.php">Category Image</a></li>
                    <li><i class="fa fa-tasks"></i><a href="brand.php">Brand</a></li>
                    <li><i class="fa fa-envelope"></i><a href="home_product.php"> Home Product </a></li>
                    <li><i class="fa fa-area-chart"></i><a href="slider.php">Slider</a></li>
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
                        <div class="col-md-9" style="margin-top: 10px;">
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
                        <p class="text-center"><a href="logout.php">Logout </a></p>
                    </div>




                </div>