<?php
include 'left.php';
@mysql_query("UPDATE order_detail SET plug = '1'");
$order_id = $_GET['order_id'];
?>
<div class="box3">
    <div class="title"> ORDER INFORMATION VIEW </div>

    <div class="box4"> VIEW ORDER

        <hr> 



        <table class="table category-show-tb">
            <tr>
                <th>Order  Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile </th>

                <th> Address </th>
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM order_detail where order_id = '$order_id'");
            while ($fetch_order = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $fetch_order['order_id']; ?></td>
                    <td><?php echo $fetch_order['first_name'] . ' ' . $fetch_order['last_name']; ?></td>
                    <td><?php echo $fetch_order['email']; ?></td>
                    <td><?php echo $fetch_order['mobile']; ?></td>

                    <td><?php echo $fetch_order['address'] . ' ' . $fetch_order['address']; ?></td>
                </tr>
            <?php } ?>
        </table>
        <table class="table category-show-tb">
            <tr>
                <th>Product  Id</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity </th>
                <th>Confirm </</th>
            </tr>
            <?php
            include 'db_config.php';

//            custom function 
            function product($id) {
                $select = mysql_query("SELECT * FROM image WHERE role_id = '$id'");
                $fetch = mysql_fetch_array($select);
                return $image = $fetch['image'];
            }

            $select = mysql_query("SELECT * FROM order_detail WHERE order_id = '$order_id'");
            $fetch_order = mysql_fetch_array($select);
            $product_id = $fetch_order['product_id'];
            $quantity = $fetch_order['quantity'];
            $explode = explode("--", $product_id);
            $explode1 = explode("--", $quantity);
            for ($i = 0; $i < count($explode) - 1; $i++) {
                $product_id = $explode["$i"];
                $select_pro = mysql_query("SELECT * FROM product WHERE product_id = '$product_id'");
                $fetch_product = mysql_fetch_array($select_pro);
//                --------- have order complete
                $select_oc = mysql_query("SELECT * FROM order_compare WHERE order_id  = '$order_id' && product_id = '$product_id'");
                $num_row = mysql_num_rows($select_oc);
                ?>
                <tr>
                    <td><?php echo $fetch_product['product_id']; ?></td>
                    <td><img src="<?php echo product($fetch_product['product_id']); ?>" style="width: 80px;height: 80px;"></td>
                    <td><?php echo $fetch_product['product_name']; ?></td>
                    <td><?php echo $fetch_product['price']; ?></td>
                    <td><?php echo $explode1["$i"]; ?></td>
                    <td>
                        <?php
                        if (!$num_row) {
                            ?>
                            <a href="order_confirm.php?order_id=<?php echo $fetch_order['order_id'].'&pro_id='.$fetch_product['product_id'].'&user_info='.$fetch_order['user_id']; ?>" class="btn1" style="color: white;" >Confirm </a>
                            <?php
                        } else {
                            ?>
                            <a href="#" class="btn1" style="color: white;background: #ddd" > Confirm </a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>