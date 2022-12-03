<?php
include 'left.php';
include 'db_config.php';
?>
<div class="box3">
    <div class="title"> Today Offer & Event Offer </div>
    <div class="box4"> 
        <form action="" method="post">
            <h2>Today offer  </h2>
            <table class="brand table">
                <tr>
                    <td>Today offer  :</td> <td><input type="text" name="brand" placeholder="Today offer"></td>
                </tr>
                <tr>
                    <td>New Offer  :</td> <td><input type="text" name="new_offer" placeholder="New offer"></td>
                </tr>
                <tr>
                    <td>New Offer Discount :</td> <td><input type="text" name="discount" placeholder="Today Discount"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" class="btn" value="Submit"></td>
                </tr>
            </table>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                include 'db_config.php';
                if (isset($_POST['submit'])) {
                    $brand = $_POST['brand'];
                    $new_offer = $_POST['new_offer'];
                    $discount = $_POST['discount'];

                    $inser_offer = mysql_query("INSERT INTO today_offer VALUES ('','$brand','$new_offer','$discount')");
                    if ($inser_offer) {
                        ?>
                        <script>
                            alert("Successful!");
                            window.location.replace("today_offer.php");

                        </script>

                        <?php
                    } else {
                        ?>
                        <script>
                            alert(" Not Successful!");
                            window.location.replace("today_offer.php");
                        </script>

                        <?php
                    }
                }
                ?>
            </td>
        </tr>
        </table>
    </div>
    <div class="box4"> View Today Offer <hr> 
        <table class="category-show-tb table">
            <tr>
                <th>SL</th>
                <th>Today</th>
                <th>New Offer</th>
                <th>Discount</th>
                <th>Delete</th>
            </tr>
            <?php
            include 'db_config.php';
            $a = 1;
            $select = mysql_query("SELECT * FROM today_offer");
            while ($fetch_brand = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $a++; ?></td>
                    <td><?php echo $fetch_brand['today']; ?></td>
                    <td><?php echo $fetch_brand['new']; ?></td>
                    <td><?php echo $fetch_brand['decount']; ?></td>
                    <!--<td><a href="today_offer.php.php?brand_id=<?php echo $fetch_brand['id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>-->
                    <td><a href="today_offer.php?today_offer=<?php echo $fetch_brand['id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>

                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>

<?php
if (isset($_GET['today_offer'])) {
    $id = $_GET['today_offer'];
    $delete_today =  mysql_query("DELETE  FROM today_offer WHERE id = '$id'");
    if ($delete_today) {
        ?>
        <script>
            alert("Delete Successful!");
            window.location.replace("today_offer.php");

        </script>

        <?php
    } else {
        ?>
        <script>
            alert("Delete Not Successful!");
            window.location.replace("today_offer.php");
        </script>

        <?php
    }
}
?>