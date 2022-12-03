<?php
include 'left.php';
$select_category = mysql_query("SELECT * FROM category");

function cat_name($cat_id) {
    $select_name = mysql_query("SELECT * FROM category WHERE category_id='$cat_id'");
    $fetch_name = mysql_fetch_array($select_name);
    return $fetch_name['category_name'];
}
?>
<div class="box3">
    <div class="title"> HOME ADVERTISEMENT</div>
    <div class="box4"> 
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form-tb table">
                <h2>Advertisement Home Offer</h2><hr>
                <tr>
                    <td>Select Page:</td><td>
                        <select class="form-control" name="page" required="">
                            <option value="">Select Page</option>
                            <option value="home">Home</option>
                            <option value="other">Other</option>
                        </select>

                    </td>

                </tr>
                <tr>
                    <td>Select Position :</td><td>
                        <select class="form-control" name="position" required="">
                            <option value="">Select position</option>
                            <option value="1">Home Left</option>
                            <option value="2">Home mid one</option>
                            <option value="3">Home mid two</option>
                            <option value="4">Home mid three</option>
                            <option value="5">Home bottom one</option>
                            <!-- <option value="home bottom two">Home bottom two</option> -->
                        </select>

                    </td>

                </tr>
                <tr>
                    <td>Url Link  </td>
                    <td> <input type="text" name="link" class="form-control" placeholder="Url link">
                   <!--  -- category_product.php?category_id=1<br>--sub_category_product.php?sub_category_id=1<br>--product_view.php?product_id=59<br><br> -->
                    </td>
                </tr>
                <tr>
                    <td> Image </td>
                    <td> <input type="file" name="image"> </td>
                </tr>
                <tr>
                    <td></td> <td><input type="submit" name="submit" class="btn btn-primary pull-left" value="Submit"></td>
                </tr>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                if (isset($_POST['submit'])) {
                    $page = $_POST['page'];
                    $position = $_POST['position'];
                    $link = $_POST['link'];
                    //        check image choice 
                    if (!$_FILES['image']['error']) {
                        $photo_name = $_FILES['image']['name'];
                        $dir = "home_offer";
                        copy($_FILES['image']['tmp_name'], "$dir/$photo_name");
                        $photo = "$dir/$photo_name";
//            print_r($_FILES);
                        $update = mysql_query("INSERT INTO home_offer VALUES ('','$page','$position','$photo','$link')");
                    }

                    if ($update) {
                        echo "Add Successfull";
                    } else {
                        echo "Add Not Successfull";
                    }
                }
                ?>
            </td>
        </tr>
        </table>
    </div>
    <div class="box4"> View Home Offer <hr>
        <table class="category-show-tb table">
            <tr>
                <th>SL</th>
                <th>Page name</th>
                <th>Position</th>
                <th> Link </th>
                <th>Image</th>
<!--                <td> Edit  </td>-->
                <td> Delete  </td>
            </tr>
            <?php
            include 'db_config.php';
            $i = 1;
            $select = mysql_query("SELECT * FROM home_offer");
            while ($fetch_category = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $fetch_category['page']; ?></td>
                    <td><?php
                     if($fetch_category['position']==1){
                        echo "Home Left";
                     }elseif ($fetch_category['position']==2) {
                         echo "Home mid one";
                     }elseif ($fetch_category['position']==3) {
                         echo "Home mid two";
                     }elseif ($fetch_category['position']==4) {
                         echo "Home mid three";
                     }elseif ($fetch_category['position']==5) {
                         echo "Home bottom one";
                     }else{}

                     ?></td>
                    <td><?php echo $fetch_category['link']; ?></td>
                    <td><img src="<?php echo $fetch_category['image']; ?>" style="width: 100px;height: 130px;"></td>
                        <!--<td><a href="category.php?cat_id=<?php // echo $fetch_category['category_id'];   ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>-->
                    <td><a href="all_home_offer.php?all_home_page=<?php echo $fetch_category['id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>
                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>


<?php
if (isset($_GET['all_home_page'])) {
    $all_home_page = $_GET['all_home_page'];
    $select = mysql_query("SELECT * FROM home_offer WHERE id='$all_home_page'");
    $fetchFile = mysql_fetch_array($select);
    unlink($fetchFile['image']);
    $delete_home = mysql_query("DELETE FROM home_offer WHERE id='$all_home_page'");
    if ($delete_home) {
        ?>
        <script>
            alert("Delete Successful");
            window.location.replace("all_home_offer.php")

        </script>

    <?php } ?>
    <script>
        alert("Delete Successful");
        window.location.replace("all_home_offer.php")

    </script>

<?php } ?>



