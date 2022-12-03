<?php
include 'left.php';
include 'db_config.php';
?>
<div class="box3">
    <div class="title"> PRODUCT STOCK INFORMATION </div>

    <div class="box4">  Product list <hr> 
        <table class="category-show-tb table">
            <tr>

                <th> Product ID  </</th>
                <th> Product name </th>
                <th> Image </th>
             
            
               


            </tr>
            <?php
            include 'db_config.php';
            $order_tb = mysql_query("SELECT * FROM order_detail");
            while ($fetch_order = mysql_fetch_array($order_tb)) {
                $product_id = $fetch_order['product_id'];
                $quantity_id = $fetch_order['quantity'];
            }
            $product_info = mysql_query("SELECT * FROM product ORDER BY product_id DESC");
            while ($fetch_product = mysql_fetch_array($product_info)) {
                $id_proudct = $fetch_product['product_id'];
                $unik_price = $fetch_product['price'];

                $select_image = mysql_query("SELECT * FROM image WHERE role_id ='$id_proudct'");
                $fetch_image = mysql_fetch_array($select_image);
                ?>
                <tr>
                    <td> <?php echo $fetch_product['product_id']; ?></td>
                    <td> <?php echo $two = $fetch_product['product_name']; ?> </td>
                    <td><img src="<?php echo $fetch_image['image']; ?>" style="width:70px;height: 80px;"> </td>
                    
                   
                   

                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>

