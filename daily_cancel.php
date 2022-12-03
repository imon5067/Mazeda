<?php

include './db_config.php';
if (isset($_GET['daily_cancel'])) {
    $receive = $_GET['daily_cancel'];
    $update_daily = mysql_query("UPDATE order_detail SET plug ='1',order_cancel='1' WHERE order_id='$receive'");
    if ($update_daily) {
        ?>
        <script type="text/javascript">
            alert("Cancel Confirm")
            window.location.replace('daily_order.php');
        </script>
        <?php

    }
    
}
///////////-----------------------pending--------------------------

if(isset($_GET['pending_id'])){
    $receive = $_GET['pending_id'];
    $update = mysql_query("UPDATE order_detail SET plug ='1',order_cancel='1' WHERE order_id='$receive'");
    if($update){
        ?>
        <script type="text/javascript">
            alert("Cancel Confirm")
            window.location.replace('pending_order.php');
        </script>
        <?php
    }
}

////-------------Order-successful----------------------
if(isset($_GET['order_successful'])){
   $receive = $_GET['order_successful'];  
   $update = mysql_query("UPDATE order_detail SET plug ='1',order_cancel='1' WHERE order_id='$receive'");
   if($update){
        ?>
        <script type="text/javascript">
            alert("Cancel Confirm")
            window.location.replace('order_successful.php');
        </script>
        <?php
    }
}
?>