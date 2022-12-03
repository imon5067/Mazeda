<?php
include 'left.php';
include 'db_config.php';
$receive = $_GET['cat_id'];
$select_category = mysql_query("SELECT * FROM left_offer WHERE id = '$receive'");
$fetch_name = mysql_fetch_array($select_category);
?>
<div class="box3">
    <div class="title"> Left Offer </div>
    <div class="box4"> 
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form-tb table">
                <h2>Offer Image</h2><hr>

                <tr>
                    <td> Image </td>
                    <td> <input type="file" name="cat_image"> </td><img src="<?php echo $fetch_name['image']; ?>" width="60" height="70">
                </tr>
                <tr>
                    <td> Link </td>
                    <td> <input class="form-control" type="text" name="link" value="<?php echo $fetch_name['link']; ?>">
                    -- category_product.php?category_id=1<br>--sub_category_product.php?sub_category_id=1<br>--product_view.php?product_id=59<br><br>
                    </td>
                </tr>

                <?php
                if ($receive != 0) {
                    ?>
                    <tr>
                        <td></td> <td><input type="submit" name="update" class="btn" value="Update"></td>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <td></td> <td><input type="submit" name="submit" class="btn" value="submit"></td>
                    </tr>

                <?php } ?>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                if (isset($_POST['submit'])) {
                    $category_id = $_POST['category_id'];
                    $link = $_POST['link'];
                    //        check image choice 
                    if (!$_FILES['cat_image']['error']) {
                        $photo_name = $_FILES['cat_image']['name'];
                        $dir = "offer_image";
                        copy($_FILES['cat_image']['tmp_name'], "$dir/$photo_name");
                        $photo = "$dir/$photo_name";
//            print_r($_FILES);
//                        $update = mysql_query("UPDATE category_image SET cat_image = '$photo' WHERE cat_id = '$category_id' ");
                    }
                    $update = mysql_query("INSERT INTO left_offer VALUES ('','$link','$photo')");

                    if ($update) {
                        ?>
                        <script>

                            alert("Successful!");
                            window.location.replace("left_offer.php");

                        </script>

                        <?php
                    } else {
                        ?>
                        <script>
                            alert(" Not Successful!");
                            window.location.replace("left_offer.php");
                        </script>

                        <?php
                    }
                }
                ?>
                <!---------------------update-condeing ---------------------------------------->


                <?php
                if (isset($_POST['update'])) {
                    $category_id = $_POST['category_id'];
                    $link = $_POST['link'];
                    $query = "UPDATE left_offer SET link = '$link' ";
                    //        check image choice 
                    if (!$_FILES['cat_image']['error']) {
                        $photo_name = $_FILES['cat_image']['name'];
                        $dir = "offer_image";
                        copy($_FILES['cat_image']['tmp_name'], "$dir/$photo_name");
                        $photo = "$dir/$photo_name";
//            print_r($_FILES);
                        $query .= ",image = '$photo' ";
                    }
                    $query .= " WHERE id = '$receive' ";
                    $update = mysql_query($query);
                    if ($update) {
                        ?>
                        <script>

                            alert("Successful!");
                            window.location.replace("left_offer.php");

                        </script>

                        <?php
                    } else {
                        ?>
                        <script>
                            alert(" Not Successful!");
                            window.location.replace("left_offer.php");
                        </script>

                        <?php
                    }
                }
                ?>
            </td>
        </tr>
        </table>
    </div>
    <div class="box4"> View Offer Image <hr>
        <table class="category-show-tb table">
            <tr>
                <th>Category Id</th>
                <!--<th>Category Name</th>-->
                <th>Category Image</th>
                <th> Link </th>
                <td> Edit  </td>
                <td> Delete  </td>
            </tr>
            <?php
            include 'db_config.php';
            $a = 1;
            $select = mysql_query("SELECT * FROM left_offer ORDER BY id DESC");
            while ($fetch_category = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo$a++; ?></td>
                    <!--<td><?php // echo cat_name($fetch_category['cat_id']);      ?></td>-->
                    <td><img src="<?php echo $fetch_category['image']; ?>" style="width: 100px;height: 130px;"></td>
                    <td><?php echo $fetch_category['link']; ?></td>
                    <td><a href="left_offer.php?cat_id=<?php echo $fetch_category['id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>
                    <td><a href="left_offer.php?delete_offer=<?php echo $fetch_category['id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>

<?php
if (isset($_GET['delete_offer'])) {
    $delete = $_GET['delete_offer'];
    $offer_delete = mysql_query("DELETE  FROM left_offer WHERE id = '$delete'");
    if ($delete) {
        ?>
        <script>

            alert("Delete Successful!");
            window.location.replace("left_offer.php");

        </script>

        <?php
    } else {
        ?>
        <script>
            alert("Delete Not Successful!");
            window.location.replace("left_offer.php");
        </script>

        <?php
    }
}
?>



