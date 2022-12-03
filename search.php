<?php
include 'db_config.php';
include 'left.php';
$order_id = $_GET['order_id'];
function product($order_id) {
    $select = mysql_query("SELECT * FROM image WHERE role_id = '$order_id'");
    $fetch = mysql_fetch_array($select);
    return $image = $fetch['image'];
}
?>
<div class="box3">
    <div class="title"> Search by order No </div>

    <div class="box4" style="height: 505px; overflow: auto;">
        <form action="" method="get">
            <input type="text" name="order_id">
            <input type="submit"  value="Submit"  style="background: #248AAF; color: whitesmoke;padding: 5px 10px;border:none;">
        </form>
        
        <?php 
        $select = mysql_query("SELECT * FROM order_detail WHERE order_id = '$order_id' && order_cancel='0' ORDER BY order_id DESC");
        $num_row = mysql_num_rows($select);
        if($num_row){
        ?>
        Total Price
        (
        <?php
        $today_day = date('Y-m-d');
        $select1 = mysql_query("SELECT SUM(total_price) as total FROM order_detail WHERE order_id = '$order_id' && order_cancel = '0'");
        $fetch = mysql_fetch_array($select1);
        echo $fetch['total'];
        ?>
        /=)
       <h3 style="float: right; margin-top: 10px;margin-right: 20px;border:1px solid white; background: #0075b0;text-align: center; width: 120px; height: 30px;line-height: 30px;border-radius: 3px;"><a href="" class="print" style="color: white;display: block;" onclick="print()"> Print</a> </h3>
        <hr>
        <table class="category-show-tb table">
            <tr>
                <th>Order  Id</th>
                <th>Name</th>
                <th>Product</th>
                <th>Total Price </th>
                <th>Phone </th>
                <th> Address </th>
                <th class="action"> Action </th>
            </tr>
            <?php
            include 'db_config.php';
           
            
//            echo $num = mysql_num_rows($select);
            while ($fetch_order = mysql_fetch_array($select)) {
                $date = $fetch_order['order_date'];
                    $product_id = $fetch_order['product_id'];
                    ?>
                    
                    <tr>
                        <td><?php echo $fetch_order['order_id']; ?></td>
                        <td><?php echo $fetch_order['first_name'] . ' ' . $fetch_order['last_name']; ?></td>
                        <td><?php
                            $ex = explode('--', $product_id);
                            $count = count($ex) - 1;
                            for ($i = 0; $i < $count; $i++) {
                                $id = $ex["$i"];
                                ?>
                                <img src="<?php echo product($id); ?>" style="width: 80px;height: 80px;">
                                <?php
                            }
//                        echo $product_id;
                            ?></td>
                        <td><?php echo $total_price = $fetch_order['total_price']; ?></td>
                        <td><?php echo $fetch_order['phone']; ?></td>
                        <td><?php echo $fetch_order['address']; ?></td>
                        <td class="action">
                            <a class="btn btn-primary" style="color: #fff;" href="view_order.php?order_id=<?php echo $fetch_order['order_id']; ?>">view </a>
                            <a class="btn btn-primary" style="color: #fff;" href="bill_order.php?bill_information=<?php echo $fetch_order['order_id']; ?>">Invoice </a>
                            <a class="btn btn-primary" style="color: #fff;" href="daily_cancel.php?daily_cancel=<?php echo $fetch_order['order_id']; ?>">Cancel </a>
                        </td>
                    </tr>
                    <?php
                
            }
            ?>
        </table>
        <?php }else{
            echo "<h1 style='text-align:left;color:#aaa;'> Result Not Found </h1>";
        } ?>
        <!--    -------------- table --------------->

    </div>

</div>