<?php
session_start();
include 'db_config.php';
@mysql_query("UPDATE order_detail SET plug = '1' ");
include 'left.php';

function product($id){
                           $select = mysql_query("SELECT * FROM image WHERE role_id = '$id'");
                       $fetch =  mysql_fetch_array($select);
                       return $image = $fetch['image'];
}
?>
<div class="box3">
    <div class="title"> Orders </div>
    
    <div class="box4" style="height: 505px; overflow: auto;"> All Order<hr> 
        <table class="category-show-tb table">
            <tr>
                <th>Order  Id</th>
                <th>Name</th>
                <th>Product</th>
                <th>Mobile </th>
                <th>Phone </th>
                <th> Address </th>
                <th> Action </th>
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM order_detail ORDER BY order_id DESC");
//            echo $num = mysql_num_rows($select);
            while ($fetch_order = mysql_fetch_array($select)) {
                $date = $fetch_order['order_date'];
                $select_by_date = mysql_query("SELECT * FROM order_detail WHERE order_date = '$date' ");
                while($fetch_order = mysql_fetch_array($select_by_date)){
                     $product_id = $fetch_order['product_id'];
                ?>
            <tr>
                <td colspan="8"> <h5><?php echo $date; ?></h5> </td>
            </tr>
                <tr>
                    <td><?php echo $fetch_order['order_id']; ?></td>
                    <td><?php echo $fetch_order['first_name'].' '.$fetch_order['last_name']; ?></td>
                    <td><?php 
                    $ex = explode('--',$product_id);
                    $count = count($ex)-1;
                    for ($i = 0;$i<$count;$i++){
                        $id = $ex["$i"];
                        
                       ?>
                        <img src="<?php echo product($id); ?>" style="width: 80px;height: 80px;">
                        <?php
                    }
//                        echo $product_id;
                    ?></td>
                    <td><?php echo $fetch_order['mobile']; ?></td>
                    <td><?php echo $fetch_order['phone']; ?></td>
                    <td><?php echo $fetch_order['address'].' '.$fetch_order['address']; ?></td>
                    <td>
                        <a class="btn btn-primary" style="color: #fff;" href="view_order.php?order_id=<?php echo $fetch_order['order_id']; ?>">view </a>
                    </td>
                </tr>
            <?php 
                }
            } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>