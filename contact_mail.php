<?php
include 'left.php';
include 'db_config.php';
?>
<div class="box3">
    <div class="title"> Contact Mail </div>
    
    <div class="box4"> View Contact Mail <hr> 
        <table class="category-show-tb table">
            <tr>
                <th> SI</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM contact_mail order by id desc");
            $i = 1;
            while ($fetch_brand = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $fetch_brand['name']; ?></td>
                    <td><?php echo $fetch_brand['phone']; ?></td>
                    <td><?php echo $fetch_brand['email']; ?></td>
                    <td><?php echo $fetch_brand['message']; ?></td>
                    <td><?php echo substr($fetch_brand['date'],0,10); ?></td>
                    
                </tr>
            <?php $i++; } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>