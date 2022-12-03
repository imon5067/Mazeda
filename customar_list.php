<?php
include 'left.php';
include 'db_config.php';
?>
<div class="box3">
    <div class="title"> Customer View Registration  </div>
    
    <div class="box4"> View New Customer  <hr> 
        <table class="category-show-tb table">
            <tr>
                <th> SI</th>
                <th>Customer</th>
                <th>Phone</th>
                <th> Email </th>
                <th>Address</th>
                <th>District</th>
                <th>Photo</th>
              
<!--                <th>Delete</th>-->
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM user_info ORDER BY user_id DESC");
            $i = 1;
            while ($fetch_brand = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $fetch_brand['user_name']; ?></td>
                    <td><?php echo $fetch_brand['phone']; ?></td>
                    <td><?php echo $fetch_brand['email']; ?></td>
                    <td><?php echo $fetch_brand['address']; ?></td>
                    <td><?php echo $fetch_brand['district']; ?></td>
                    <td><img src="../<?php echo $fetch_brand['image']; ?>" style="width: 70px;height: 80px;"></td>
                    <!--<td><a href="delete.php?reg_conform=<?php echo $fetch_brand['mar_id'];?>"><img src="icon/confor.png" width="40" height="50"></a></td>-->
                    <!--<td><a href="delete.php?delete_info=<?php echo $fetch_brand['mar_id'];?>"><img src="icon/delete.png" width="40" height="50"></a></td>-->
                    
                </tr>
            <?php $i++; } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>