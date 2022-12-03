<?php
include 'left.php';
include 'db_config.php';
?>
<div class="box3">
    <div class="title"> New Merchant Registration Show </div>

    <div class="box4"> View New Merchant  <hr> 
        <table class="category-show-tb table">
            <tr>
                <th> SI</th>
                <th>Shop Name</th>
                <th>Contact Person</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Password</th>
                <th>Logo</th>
                <th>NID</th>

                <th> Active </th>
                <th> Delete </th>
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM admin where type = '1' && aprove='0' order by admin_id DESC");
            $i = 1;
            while ($fetch_brand = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $fetch_brand['shop_name']; ?></td>
                    <td><?php echo $fetch_brand['contact_person']; ?></td>
                    <td><?php echo $fetch_brand['mobile']; ?></td>
                    <td><?php echo $fetch_brand['address']; ?></td>
                    <td><?php echo $fetch_brand['password']; ?></td>
                    <td><img src="../<?php echo $fetch_brand['logo']; ?>" style="width: 50px;height: 50px;"></td>
                    <td><img src="../<?php echo $fetch_brand['NID']; ?>" style="width: 50px;height: 50px;"></td>
                    <td><a href="delete.php?reg_conform=<?php echo $fetch_brand['admin_id']; ?>"><img src="icon/confor.png" width="40" height="50"></a></td>
                    <td><a href="delete.php?delete_info=<?php echo $fetch_brand['admin_id']; ?>"><img src="icon/delete.png" width="40" height="50"></a></td>

                </tr>
                <?php $i++;
            } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>