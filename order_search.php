<?php
include 'left.php';
include 'db_config.php';

function product($id) {
    $select = mysql_query("SELECT * FROM image WHERE role_id = '$id'");
    $fetch = mysql_fetch_array($select);
    return $image = $fetch['image'];
}
?>
<div class="box3">
    <div class="title"> ORDER SEARCH INFORMATION</div>

    <div class="box4" style="height: 505px; overflow: auto;"> Order Search <hr> 
        <table class="category-show-tb table">
            <tr>
                <th>Order  Id</th>
                <th>Name</th>
                <th>Product</th>
                <th>Total Price </th>
                <th>Phone </th>
                <th> Address </th>
                <th> Action </th>
            </tr>
            <?php
            $date1 = $_POST['date_from'];
            substr($date1, 0,7);
            $date2 = $_POST['date_to'];
            $select = mysql_query("SELECT * FROM order_detail WHERE order_date BETWEEN  '$date1' AND '$date2' ");
            while ($fetch_order = mysql_fetch_array($select)) {
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
                    <td><?php echo $fetch_order['total_price']; ?></td>
                    <td><?php echo $fetch_order['phone']; ?></td>
                    <td><?php echo $fetch_order['address']; ?></td>
                    <td>
                        <a class="btn btn-primary" style="color: #fff;" href="view_order.php?order_id=<?php echo $fetch_order['order_id']; ?>">view </a>
    <!--                            <a class="btn btn-primary" style="color: #fff;" href="daily_cancel.php?daily_cancel=<?php echo $fetch_order['order_id']; ?>">Cancel </a>-->
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>