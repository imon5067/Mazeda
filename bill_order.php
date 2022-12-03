<?php
session_start();
include 'db_config.php';
include 'left.php';
$receive = $_GET['bill_information'];
$select_pro = mysql_query("SELECT * FROM order_detail WHERE order_id = '$receive'");
$fetch_order = mysql_fetch_array($select_pro);
?>
<div class="box3">
    <div class="title" style="color:white;"> Invoice <h3 style="float: right; margin-top: 10px;margin-right: 20px;border:1px solid white; background: #0075b0;text-align: center; width: 120px; height: 30px;line-height: 30px;border-radius: 3px;"><a href="" class="print" style="color: white;display: block;" onclick="print()"> Print</a> </h3> </div>

    <div class="box4" style="min-height: 505px;overflow: hidden;">
        <table class="" style="border: none;width: 100%;">
            <tr style="border: none;">
                <td style="border: none;"> 
                    <center><img src="../assets/images/Mazeda.png" style="width:200px;"> 
                        <?php // echo "<font style='float:right;font-size:15px;'>".date('d-M-Y')."</font>" ?></center>
                </td>
            </tr>
            <tr>
                <td> <center>Mobile: 01812 45 43 58, Website : www.mazeda.com </center> </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
        </table>
        <table class="table" style="font-size: 18px;width:150%">
            <tr>
                <td> Order No - <?php echo $receive; ?> </td>
                <td> Order Date - <?php echo $fetch_order['order_date']; ?> </td>
                <td> Payment - Cash on Delivery </td>
            </tr>
            <tr style="border: none;">
                <td style="border: none;"> Customer Name : <?php echo $fetch_order['first_name']; ?> <?php echo $fetch_order['last_name']; ?></td>


                <td style="border: none;"> Mobile : <?php echo $fetch_order['mobile']; ?></td>

                <td style="border: none;"> Email : <?php echo $fetch_order['email']; ?>  </td>
            </tr>
            <tr style="border: none;">
                <td style="border: none;" colspan="3"> Full Address :<?php echo $fetch_order['address']; ?></td>

            </tr>

        </table>

        <table class="table category-show-tb"  style="font-size: 18px;">
            <tr>
                <th> Product Id </th>
                <th> Image </th>
                <th> Product Name </th>
                <th> Quantity </th>
                <th> Price </th>
            </tr>
            <?php
            include 'db_config.php';

//            custom function 
            function product($id) {
                $select = mysql_query("SELECT * FROM image WHERE role_id = '$id'");
                $fetch = mysql_fetch_array($select);
                return $image = $fetch['image'];
            }

            $product_id = $fetch_order['product_id'];
            $quantity = $fetch_order['quantity'];
            $explode = explode("--", $product_id);
            $explode1 = explode("--", $quantity);
            $total_product = count($explode) - 1;
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
                    <td><img src="<?php echo product($fetch_product['product_id']); ?>" style="width: 50px;height: 50px;"></td>
                    <td><?php echo $fetch_product['product_name']; ?></td>
                    <td><?php echo $explode1["$i"]; ?></td>
                    <td><?php echo $fetch_product['price'] * $explode1["$i"]; ?></td>
                </tr>

            <?php } ?>
        </table>
        <table class="" style="float: right;width: 220px;">
            <tr>
                <td>  Sub Total =   </td>
                <td> <?php
                    $total = $fetch_order['total_price'];
                    $d_cost = $fetch_order['delivery_cost'];
                    echo $total - $d_cost;
                    ?>/= </td>
            </tr>
<!--            <tr>
                <td>  Delivery Cost =   </td>
                <td> <?php echo $fetch_order['delivery_cost']; ?>/= </td>
            </tr>-->
<!--            <tr>
                <td>---------------------</td>
                <td>------------</td>
            </tr>
            <tr>
                <td> Grand Total = </td>
                <td> <?php echo $fetch_order['total_price']; ?>/= </td>
            </tr>-->

        </table>
        <table style="float: right;margin-top: 50px;width:100%;margin-bottom: 40px;">
            <tr>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---------------------------- </td>
                <td> <center>----------------------</center> </td>
            </tr>
            <tr>
                <td> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Customer Signature  </td>
                <td> <center> mazeda </center> </td>
            </tr>
        </table>
        <!--    -------------- table --------------->

    </div>

    <?php
//    echo $total_product;
    if ($total_product <= 3) {
        ?>

        <div class="box4" style="min-height: 505px;overflow: hidden;margin-top: 20px;">
            <table class="" style="border: none;width: 100%;">
                <tr style="border: none;">
                    <td style="border: none;">
                        <center><img src="../assets/images/Mazeda.png" style="width:200px;">  
                            <?php // echo "<font style='float:right;font-size:15px;'>".date('d-M-Y')."</font>" ?></center>
                    </td>
                </tr>
                <tr>
                    <td> <center>Mobile: 01812 45 43 58, Website : www.mazeda.com </center> </td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
            </table>
            <table class="table" style="font-size: 18px;width:150%">
                <tr>
                    <td> Order No - <?php echo $receive; ?> </td>
                    <td> Order Date - <?php echo $fetch_order['order_date']; ?> </td>
                    <td> Payment - Cash on Delivery </td>
                </tr>
                <tr style="border: none;">
                    <td style="border: none;"> Customer Name : <?php echo $fetch_order['first_name']; ?> <?php echo $fetch_order['last_name']; ?></td>


                    <td style="border: none;"> Mobile : <?php echo $fetch_order['mobile']; ?></td>

                    <td style="border: none;"> Email : <?php echo $fetch_order['email']; ?>  </td>
                </tr>
                <tr style="border: none;">
                    <td style="border: none;" colspan="3"> Full Address :<?php echo $fetch_order['address']; ?></td>

                </tr>

            </table>

            <table class="table category-show-tb"  style="font-size: 18px;">
                <tr>
                    <th> Product Id </th>
                    <th> Image </th>
                    <th> Product Name </th>
                    <th> Quantity </th>
                    <th> Price </th>
                </tr>
                <?php
//            include 'db_config.php';
//            custom function 
//            function product($id) {
//    $select = mysql_query("SELECT * FROM image WHERE role_id = '$id'");
//    $fetch = mysql_fetch_array($select);
//    return $image = $fetch['image'];
//    
//}

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
                        <td><img src="<?php echo product($fetch_product['product_id']); ?>" style="width: 50px;height: 50px;"></td>
                        <td><?php echo $fetch_product['product_name']; ?></td>
                        <td><?php echo $explode1["$i"]; ?></td>
                        <td><?php echo $fetch_product['price'] * $explode1["$i"]; ?></td>
                    </tr>
                <?php } ?>
            </table>
            <table class="" style="float: right;width: 220px;">
                <tr>
                    <td>  Sub Total =   </td>
                    <td> <?php
                        $total = $fetch_order['total_price'];
                        $d_cost = $fetch_order['delivery_cost'];
                        echo $total - $d_cost;
                        ?>/= </td>
                </tr>

            </table>
            <table style="float: right;margin-top: 50px;width:100%;">
                <tr>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---------------------------- </td>
                    <td> <center>----------------------</center> </td>
                </tr>
                <tr>
                    <td> 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Customer Signature  </td>
                    <td> <center> mazeda  </center> </td>
                </tr>
            </table>
            <!--    -------------- table --------------->

        </div>
    <?php } ?>

</div>