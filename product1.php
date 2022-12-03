<?php
include 'left.php';
include 'db_config.php';
$select_category = mysql_query("SELECT * FROM category ORDER BY category_id ASC");
$select_category1 = mysql_query("SELECT * FROM category ORDER BY category_id ASC");
$select_sub_category = mysql_query("SELECT * FROM sub_category_table ORDER BY sub_category_id ASC");
$select_third_category = mysql_query("SELECT * FROM thard_category ORDER BY thard_id ASC");

function sub_by_id($cat_id) {
    return mysql_query("SELECT * FROM sub_category_table WHERE category_id = '$cat_id'  ORDER BY sub_category_id ASC");
}

$select_brand = mysql_query("SELECT * FROM brand ORDER BY brand_id ASC");

function get_image($product_id) {
    $select = mysql_query("SELECT * FROM image WHERE role_id = '$product_id'");
    $fetch = mysql_fetch_array($select);
    return $fetch['image'];
}
?>
<script src="../js/jquery.js"></script>
<script type="text/javascript">
    function show_sub_category(e) {
        var url = "show_sub_category.php?cat_id=" + e;
        $(".sub-category").load(url);
    }

    function file() {

        var fileInput = document.getElementById("image");
        var size = fileInput.files[0].size; // Size returned in bytes.
        if (size > 200000) {
            alert(' Image size must be lagethen 200KB.');
        }
    }
</script>
<div class="box3">
    <div class="title"> PRODUCT INFORMATION </div>
    <div class="box4"> 
        Add Product <hr>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="user-tb table table-responsive">
                <tr>
                    <td>Product Name: </td><td><input type="text" required="" class="form-control" name="pro_name" placeholder="Product Name"></td>
                </tr>
                <tr>
                    <td> Select Category </td>
                    <td>
                        <select name="category"  required="" class="form-control" onchange="show_sub_category(this.value)">
                            <option value=""> Select Category </option>
                            <?php
                            while ($fetch_cat1 = mysql_fetch_array($select_category)) {
                                ?>
                                <option value="<?php echo $fetch_cat1['category_id']; ?>">  <?php echo $fetch_cat1['category_name']; ?> </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Sub Category </td>
                    <td>
                        <select name="sub_category"  class="form-control sub-category">
                            <option value=""> Select Category </option>

                        </select>
                    </td>
                </tr>

                <!-- <tr>
                    <td> Third category  </td>
                    <td>
                        <select name="third_category"  class="select">
                            <option value=""> Select third category </option>
                            <?php
                            while ($fetch_third = mysql_fetch_array($select_third_category)) {
                                ?>
                                <option value="<?php echo $fetch_third['thard_id']; ?>">  <?php echo $fetch_third['thard_name']; ?> </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Brand  </td>
                    <td>
                        <select name="brand"  class="select">
                            <option value=""> Select Brand </option>
                            <?php
                            while ($fetch_brand = mysql_fetch_array($select_brand)) {
                                ?>
                                <option value="<?php echo $fetch_brand['brand_id']; ?>">  <?php echo $fetch_brand['brand_name']; ?> </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <td>short Description :</td><td> <textarea required="" id="tinyeditor" style="width: 400px; height: 200px" name="short_description"></textarea></td>
                </tr>
                <tr>
                    <td>Long Description :</td><td><textarea required="" id="tinyeditor1" style="width: 400px; height: 200px" name="long_description"></textarea></td>
                </tr>
                <tr>
                    <td>Buy price :</td> <td><input type="text" name="pro_price" required="" class="form-control" placeholder="00.00"></td>
                </tr>
                <tr>
                    <td>Sell price :</td> <td><input type="text" name="sell_price" required="" class="form-control" placeholder="00.00"></td>
                </tr>
                <tr>
                    <td>Product Quantity :</td> <td><input type="text" name="pro_qntity"  required=""  class="form-control" placeholder="00"></td>
                </tr>
                <tr>
                    <td>Product Size :</td> <td><input type="text"  class="form-control" name="pro_size"   placeholder="Xl, Ml, Sl"></td>
                </tr>
                <tr>
                    <td>Product Code :</td> <td><input type="text"  class="form-control"  name="pro_color" required=""  placeholder="Product Code"></td>
                </tr>

                <tr>
                    <td>Product Image one:</td> <td>
                        <input type="file"  name="image_one"  required="" id="image" onchange="file()"   ><br><br>

                    </td>
                </tr>
                <tr>
                    <td>Product Image Two :</td> <td>
                        <input type="file"  name="image_two"  required="" id="image" onchange="file()"   ><br><br>

                    </td>
                </tr>
                <tr>
                    <td>Product Image Three :</td> <td>
                        <input type="file"  name="image_three"  required="" id="image" onchange="file()"   ><br><br>

                    </td>
                </tr>
                <tr>
                    <td>Product Image four :</td> <td>
                        <input type="file"  name="image_four"  required="" id="image" onchange="file()"   ><br><br>

                    </td>
                </tr>
                <tr>


                    <td colspan="2"> 
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="margin-left: 100px;">

                        </form>
                        <?php
                        $marchent_id = $_SESSION['kids_admin_id'];
                        include 'db_config.php';
                        if (isset($_POST['submit'])) {

                            $product_name = $_POST['pro_name'];
                            $cat_id = $_POST['category'];
                            $sub_cat_id = $_POST['sub_category'];
                            $third_category = $_POST['third_category'];
                            $brand_id = $_POST['brand'];
                            $s_description = addslashes($_POST['short_description']);
                            $l_description = addslashes($_POST['long_description']);
                            $pro_location = $_POST['pro_loc'];
                            $pro_price = $_POST['pro_price'];
                            $sell_price = $_POST['sell_price'];
                            $pro_qntity = $_POST['pro_qntity'];
                            $pro_size = $_POST['pro_size'];
                            $pro_color = $_POST['pro_color'];
                            $gender = $_POST['gender'];
                            $age = $_POST['age'];
                            $out_dhaka_const = $_POST['out_dhaka_const'];
                            $dhaka_const = $_POST['dhaka_const'];



//        check image choice 
                            if (!$_FILES['image_one']['error']) {
                                $photo_name3 = $_FILES['image_one']['name'];
                                $ext2 = pathinfo($photo_name3, PATHINFO_EXTENSION);
                                $convert3 = time() . '.' . $ext2;
                                $file_name3 = "$convert3";
                                $dir = "image";
                                copy($_FILES['image_one']['tmp_name'], "$dir/$file_name3");
                                $photo_one = "$dir/$file_name3";
                            } else {
                                $photo_one = 'image/default.png';
                            }



                            if (!$_FILES['image_two']['error']) {
                                $photo_name3 = $_FILES['image_two']['name'];
                                $ext2 = pathinfo($photo_name3, PATHINFO_EXTENSION);
                                $convert3 = time() . '.' . $ext2;
                                $file_name3 = "two+$convert3";
                                $dir = "image";
                                copy($_FILES['image_two']['tmp_name'], "$dir/$file_name3");
                                $photo_two = "$dir/$file_name3";
                            } else {
                                $photo_two = 'image/default.png';
                            }


                            if (!$_FILES['image_three']['error']) {
                                $photo_name4 = $_FILES['image_three']['name'];
                                $ext4 = pathinfo($photo_name4, PATHINFO_EXTENSION);
                                $convert4 = time() . '.' . $ext4;
                                $file_name4 = "three+$convert4";
                                $dir = "image";
                                copy($_FILES['image_three']['tmp_name'], "$dir/$file_name4");
                                $photo_three = "$dir/$file_name4";
                            } else {
                                $photo_three = 'image/default.png';
                            }


                            if (!$_FILES['image_four']['error']) {
                                $photo_name5 = $_FILES['image_four']['name'];
                                $ext5 = pathinfo($photo_name5, PATHINFO_EXTENSION);
                                $convert5 = time() . '.' . $ext5;
                                $file_name5 = "four+$convert5";
                                $dir = "image";
                                copy($_FILES['image_four']['tmp_name'], "$dir/$file_name5");
                                $photo_four = "$dir/$file_name5";
                            } else {
                                $photo_four = 'image/default.png';
                            }


                            $type = 'product';



                            /*
                             * insert product Information
                             */
                            $insert_product = mysql_query("INSERT INTO product 
                        (category_id,
                        sub_category_id,
                        third_id,
                        brand_id,
                        product_name,
                        price,
                        buy_price,
                        pro_short_description,
                        pro_long_description,
                        product_localion,
                        size,
                        color,
                        age,
                        gender,
                        dhaka_cost,
                        out_dhaka_cost,
                        quantity,
                        marsent_id
                        ) 
                        VALUES (
                        '$cat_id',
                        '$sub_cat_id',
                        '$third_category',
                        '$brand_id',
                        '$product_name',
                        '$pro_price',
                        '$sell_price',
                        '$s_description',
                        '$l_description',
                        '$pro_location',
                        '$pro_size',
                        '$pro_color',
                        '$age',
                        '$gender',
                        '$dhaka_const',
                        '$out_dhaka_const',
                        '$pro_qntity',
                        '$marchent_id'
                        )");

                            if ($insert_product) {

                                /*
                                 * Select Product Id
                                 * for use other table
                                 */
                                $select_product_id = mysql_query("SELECT * FROM product ORDER BY product_id DESC");
                                $fetch_product_id = mysql_fetch_array($select_product_id);
                                $product_id = $fetch_product_id['product_id'];

                                /*
                                 * Insert Product image
                                 * there role id mean's product id
                                 */
                                mysql_query("INSERT INTO image (image_type,role_id,image,image2,image3,image4) VALUES('$type','$product_id','$photo_one','$photo_two','$photo_three','$photo_four')");
                                ?>
                                <script type="text/javascript">
                                    alert('Product Insert Successfull');
                                </script>
                                <?php
                            } else {
                                ?>
                                <script type="text/javascript">
                                    alert('Product Not Insert');
                                </script>
                                <?php
                            }
                        }
                        ?>

                    </td>
                </tr>
            </table>
    </div>
    <div class="box4" style="height: 500px; overflow: auto;"> View Product <hr> 
        <table class="category-show-tb table">
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            <?php
            include 'db_config.php';
            $select = mysql_query("SELECT * FROM product WHERE marsent_id = '$marchent_id' ORDER BY product_id DESC");
            while ($fetch_category = mysql_fetch_array($select)) {
                ?>
                <tr>
                    <td><?php echo $fetch_category['product_id']; ?></td>
                    <td><?php echo $fetch_category['product_name']; ?></td>
                    <td><?php echo $fetch_category['price']; ?> TK</td>
                    <td><?php echo $fetch_category['quantity']; ?></td>
                    <td><img src="<?php echo get_image($fetch_category['product_id']); ?>" width="100" height="100"></td>
                    <td><a href="edit_product.php?pro_id=<?php echo $fetch_category['product_id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>
                    <td><a href="delete_product.php?pro_id=<?php echo $fetch_category['product_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>

                </tr>
            <?php } ?>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>

<script>
    var editor = new TINY.editor.edit('editor', {
        id: 'tinyeditor',
        width: 584,
        height: 175,
        cssclass: 'tinyeditor',
        controlclass: 'tinyeditor-control',
        rowclass: 'tinyeditor-header',
        dividerclass: 'tinyeditor-divider',
        controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
            'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
            'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
            'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
        footer: true,
        fonts: ['Verdana', 'Arial', 'Georgia', 'Trebuchet MS'],
        xhtml: true,
        cssfile: 'custom.css',
        bodyid: 'editor',
        footerclass: 'tinyeditor-footer',
        toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
        resize: {cssclass: 'resize'}
    });
    var editor1 = new TINY.editor.edit('editor1', {
        id: 'tinyeditor1',
        width: 584,
        height: 175,
        cssclass: 'tinyeditor1',
        controlclass: 'tinyeditor1-control',
        rowclass: 'tinyeditor1-header',
        dividerclass: 'tinyeditor1-divider',
        controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
            'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
            'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
            'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
        footer: true,
        fonts: ['Verdana', 'Arial', 'Georgia', 'Trebuchet MS'],
        xhtml: true,
        cssfile: 'custom.css',
        bodyid: 'editor1',
        footerclass: 'tinyeditor1-footer',
        toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
        resize: {cssclass: 'resize'}
    });
</script>