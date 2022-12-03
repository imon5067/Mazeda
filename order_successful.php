<?php
include 'left.php';
function product($id) {
    $select = mysql_query("SELECT * FROM image WHERE role_id = '$id'");
    $fetch = mysql_fetch_array($select);
    return $image = $fetch['image'];
}
?>
<?php echo product($id); ?>
<div class="box3">
    <div class="title" style="color: white;"> SUCCESSFUL ORDER  </div>

    <div class="box4" style="height: 505px; overflow: auto;">Successful All Order<hr> 
        <table class="category-show-tb table">
            <tr>
                <th>Order Id</th>
                <th>Name</th>
                <th>Product</th>
<!--                <th>Mobile </th>-->
                <th>Phone </th>
                <th> Full Address </th>
                <th> Action </th>
            </tr>
            <?php
            include 'db_config.php';
            $today_day = date('Y-m-d');
            $select = mysql_query("SELECT DISTINCT order_date FROM order_detail WHERE plug ='1' && order_cancel ='0' ORDER BY order_date DESC");
//            echo $num = mysql_num_rows($select);
            while ($fetch_order_date = mysql_fetch_array($select)) {
                $date = $fetch_order_date['order_date'];
                ?>
                <tr>
                    <td colspan="8"> <h2><?php echo $date; ?></h2> </td>
                </tr>
                <?php
                $select_by_date = mysql_query("SELECT * FROM order_detail WHERE order_date = '$date' && order_cancel = '0'");
//            echo $num = mysql_num_rows($select);
                while ($fetch_order = mysql_fetch_array($select_by_date)) {
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

                                <a href="../product-view.php?product_id=<?php echo $id; ?>" target="blank">
                                    <img src="<?php echo product($id); ?>" style="width: 40px;height: 40px;border: 1px solid #ddd;">
                                </a>
                                <?php
                            }
//                        echo $product_id;
                            ?></td>
        <!--                        <td><?php echo $fetch_order['mobile']; ?></td>-->
                        <td><?php echo $fetch_order['phone']; ?></td>
                        <td><?php echo $fetch_order['address']; ?></td>
                        <td>
                            <a class="btn btn-primary" style="color: #fff;" href="view_order.php?order_id=<?php echo $fetch_order['order_id']; ?>">view </a>
        <!--                            <a class="btn btn-primary" style="color: #fff;" href="daily_cancel.php?order_successful=<?php echo $fetch_order['order_id']; ?>">Cancel </a>-->
                            <a class="btn btn-primary" style="color: #fff;" href="bill_order.php?bill_information=<?php echo $fetch_order['order_id']; ?>">Invoice </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>