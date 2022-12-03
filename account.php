<?php
include 'left.php';
include 'db_config.php';
?>
<div class="box3">
    <div class="title"> Account Information </div>

    <div class="box4"> Balance View  <hr> 
        <table class="category-show-tb table">
            <tr>

                <th>Total Product Buy / মোট প্রোডাক্ট  ক্রয় মূল্য  </</th>
                <th>Total Product Sell / মোট প্রোডাক্ট  বিক্রয় মূল্য  </</th>
                <th> Product Conform Sell / মোট সফল  বিক্রয় মূল্য</th>


            </tr>
            <?php
            include 'db_config.php';

            $count_buy = mysql_query("SELECT SUM(buy_price) AS buy_price FROM product");
            $fetch_buy = mysql_fetch_array($count_buy);

            $count_buyt = mysql_query("SELECT SUM(price) AS price FROM product");
            $fetch_buytff = mysql_fetch_array($count_buyt);

            $count_sell = mysql_query("SELECT SUM(total_price) AS total_price FROM order_detail");
            $fetch_sell = mysql_fetch_array($count_sell);
            ?>
            <tr>
                <td> = <?php echo $one = $fetch_buy['buy_price']; ?> টাকা</td>
                <td> = <?php echo $two = $fetch_buytff['price']; ?> টাকা </td>
                <td> = <?php echo $three = $fetch_sell['total_price']; ?> টাকা </td>

            </tr>

        </table>
        <div class="box">
            <form action="" method="post">
                <table class="table" style="border:none;">
                    <tr>
                        <td>Search :</td>
                        <td colspan="3">
                            <select name="month" style="width:150px;height: 35px; paddin:5px;"> 
                                <option>Month</option>
                                <option value="01">January</option>                             
                                <option value="02">February</option>                             
                                <option value="03">March</option>                             
                                <option value="04">April</option>                             
                                <option value="05">May</option>                             
                                <option value="06">June</option>                             
                                <option value="07">July</option>                             
                                <option value="08">August</option>                             
                                <option value="09">September</option>                             
                                <option value="10">October</option>                             
                                <option value="11">November</option>                             
                                <option value="12">December</option>                             
                            </select>
                            <select name="year" style="width:150px;height: 35px; paddin:5px;"> 
                                <option value="">Year</option>
                                <?php
                                $year = date("Y");
                                for ($i = 2014; $i <= $year; $i++) {
                                    ?>
                                    <option><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <input type="submit" class="btn" name="month_search" value="Search">
                        </td>

                    </tr>

                </table>
            </form>
            <?php
            if (isset($_POST['month_search'])) {
                $month = $_POST['month'];
                $year = $_POST['year'];
                $date = "$year-$month";
            }
            ?>

            <table class="category-show-tb table">
                <tr>
                    <?php
                    $check_accout = mysql_query("SELECT * FROM order_detail WHERE order_date LIKE '%$date%'");
                    while ($fetch_view = mysql_fetch_array($check_accout)) {
                        $product_id = $fetch_view['product_id'];
                    }


                    $count_buyt2 = mysql_query("SELECT SUM(price) AS price FROM product");
                    $fetch_buytff2 = mysql_fetch_array($count_buyt2);

                    $count_sell3 = mysql_query("SELECT SUM(total_price) AS total_price FROM order_detail WHERE order_date LIKE '%$date%'");
                    $fetch_sell3 = mysql_fetch_array($count_sell3);

                    $id_product = explode('--', $product_id);
                    $couning = count($id_product) - 1;

                    $sum = 0;
                    for ($c = 0; $c <= $couning; $c++) {
                        $solid_id = $id_product["$c"];
                        $product_buy2 = mysql_query("SELECT * FROM product WHERE product_id ='$solid_id'");

                        $fetch_buy1 = mysql_fetch_array($product_buy2);
                        $sum = $sum + $fetch_buy1['price'];
                    }
                    ?>

                    <td>প্রোডাক্ট ক্রয় মূল : <?php echo $buy = $sum; ?></td>
                    <td>প্রোডাক্ট বিক্রয় মূল্য : <?php echo $sell = $fetch_sell3['total_price']; ?></td>
                    <?php if($sell > $buy){?>
                    <td><font color="green"> নিড লাভ  : <?php echo $need_lab = $sell - $buy; ?> </font></td>
                    <?php } else{?>
                    <td><font color="red"> নিড লছ  : <?php echo $need_lab = $sell - $buy; ?></font></td>
                    <?php } ?>
                </tr>
            </table>
        </div>


        <!--    -------------- table --------------->
        <div class="box4"> Balance View  <hr> 
            <table class="category-show-tb table">
                <tr>

                    <th> Product ID  </</th>
                    <th> Product name </th>
                    <th> Image </th>
                    <th>Quantity Product </th>
                    <th>Price </th>
                    <th>Total price</th>



                </tr>
                <?php
                $check_info = mysql_query("SELECT * FROM order_detail WHERE order_date LIKE '%$date%'");
                $number_row = mysql_num_rows($check_info);
                while ($fetch_check = mysql_fetch_array($check_info)) {
                    $product_id = $fetch_check['product_id'];

                    $product_info = mysql_query("SELECT * FROM product WHERE product_id = '$product_id' ORDER BY product_id DESC");
//                while ($fetch_product = mysql_fetch_array($product_info)) {
                    $fetch_product = mysql_fetch_array($product_info);
                    $id_proudct = $fetch_product['product_id'];
                    $unik_price = $fetch_product['price'];

                    $select_image = mysql_query("SELECT * FROM image WHERE role_id ='$id_proudct'");
                    $fetch_image = mysql_fetch_array($select_image);
                    ?>
                    <tr>
                        <td> <?php echo $fetch_product['product_id']; ?></td>
                        <td> <?php echo $two = $fetch_product['product_name']; ?> </td>
                        <td><img src="<?php echo $fetch_image['image']; ?>" style="width:70px;height: 80px;"> </td>
                        <td><?php echo $quan = $fetch_product['quantity']; ?> </td>
                        <td><?php echo $fetch_product['price']; ?> </td>
                        <td><?php echo $price_tk = $unik_price * $quan; ?> </td>


                    </tr>
                <?php } ?>
            </table>
            <!--    -------------- table --------------->

        </div>





    </div>


</div>

