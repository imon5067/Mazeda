<?php
include 'left.php';
include 'db_config.php';
$pro_id = $_GET['pro_id'];
$select = mysql_query("SELECT * FROM product WHERE product_id = '$pro_id'");
$fetch_product = mysql_fetch_array($select);
$select_third_category = mysql_query("SELECT * FROM thard_category ORDER BY thard_id ASC");


$select_category = mysql_query("SELECT * FROM category ORDER BY category_id ASC");
$select_sub_category = mysql_query("SELECT * FROM sub_category_table ORDER BY sub_category_id ASC");
$select_brand = mysql_query("SELECT * FROM brand ORDER BY brand_id ASC");

function get_image($product_id) {
    $select = mysql_query("SELECT * FROM image WHERE role_id = '$product_id' ORDER BY image_id DESC");
    $fetch = mysql_fetch_array($select);
    return $fetch['image'];
}
?>
<div class="box3">
    <div class="title"> PRODUCT EDIT INFORMATION </div>
    <div class="box4"> 
        Add Product<hr>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="user-tb table table-responsive">
                <tr>
                    <td>Product Name: </td><td><input type="text" name="pro_name" placeholder="Product Name" value="<?php echo $fetch_product['product_name'];?>" class="form-control"></td>
                </tr>
                <tr>
                    <td> Select Category </td>
                    <td>
                        <select name="category"  class="form-control">
                            <option value=""> Select Category </option>
                            <?php
                            while ($fetch_cat = mysql_fetch_array($select_category)) {
                                ?>
                                <option value="<?php echo $fetch_cat['category_id']; ?>">  <?php echo $fetch_cat['category_name']; ?> </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Select Sub Category </td>
                    <td>
                        <select name="sub_category" class="form-control">
                            <option value=""> Select Sub Category </option>
                            <?php
                            while ($fetch_sub_cat = mysql_fetch_array($select_sub_category)) {
                                ?>
                                <option value="<?php echo $fetch_sub_cat['sub_category_id']; ?>">  <?php echo $fetch_sub_cat['sub_category_name']; ?> </option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <!-- <tr>
                    <td> Third category  </td>
                    <td>
                        <select name="third_category"  class="form-control">
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
                </tr> -->
                <!-- <tr>
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
                    <td>short Description :</td><td> <textarea id="tinyeditor" class="form-control" name="short_description"> <?php echo $fetch_product['pro_short_description']; ?></textarea></td>
                </tr>
                <tr>
                    <td>Long Description :</td><td><textarea id="tinyeditor1" class="form-control" name="long_description"> <?php echo $fetch_product['pro_long_description']; ?></textarea></td>
                </tr>
                <tr>
                    <td> Sell price :</td> <td><input type="text" name="pro_price" value="<?php echo $fetch_product['price']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td> Buy price :</td> <td><input type="text" name="sell_price" value="<?php echo $fetch_product['buy_price']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Product Quantity :</td> <td><input type="text" name="pro_qntity" value="<?php echo $fetch_product['quantity']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Product Size :</td> <td><textarea name="pro_size" class="form-control"><?php echo $fetch_product['size']; ?></textarea></td>
                </tr>
                <tr>
                    <td>Product Code :</td> <td><textarea name="pro_color" class="form-control"><?php echo $fetch_product['color']; ?></textarea></td>
                </tr>
<!--                <tr>
                    <td> Gender :</td> <td>
                        <select name="gender" class="select">
                            <option value="">Select</option>
                            <option value="1">All</option>
                            <option value="2">Boy</option>
                            <option value="3">Girl</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Age  :</td> <td>
                        <select name="age" class="select">
                            <option value="">Select Age </option>
                            <option value="new born">New born </option>
                            <option value="3-12 months">3-12 Months</option>
                            <option value="1-2 years">1-2 years</option>
                            <option value="2-3 years">2-3 years</option>
                            <option value="3-4 years">3-4 years</option>
                            <option value="4-5 years">4-5 years</option>
                            <option value="5-6 years">5-6 years</option>
                            <option value="6-7 years">6-7 years</option>
                            <option value="7-8 years">7-8 years</option>
                            <option value="8-9 years">8-9 years</option>
                            <option value="9-10 years">9-10 years</option>
                            <option value="10-11 years">10-11 years</option>
                            <option value="11-12 years">11-12 years</option>
                        </select>
                    </td>
                </tr>-->
                <tr>
                    <td>Product Image :</td> <td>
                        <input type="file" name="image_one"><br><br>
<!--                        <input type="file" name="pro_image1"><br><br>
                        <input type="file" name="pro_image2"><br>-->
                    </td>
                </tr>
                <tr>
                    <td>Product Image Two :</td> <td>
                        <input type="file"  name="image_two"  id="image" onchange="file()"   ><br><br>

                    </td>
                </tr>
                <tr>
                    <td>Product Image Three :</td> <td>
                        <input type="file"  name="image_three" id="image" onchange="file()"   ><br><br>

                    </td>
                </tr>
                <tr>
                    <td>Product Image four :</td> <td>
                        <input type="file"  name="image_four" id="image" onchange="file()"   ><br><br>

                    </td>
                </tr>
                <tr>


                    <td colspan="2"> 
                        <input type="submit" name="submit" value="Update" class="btn btn-primary" style="margin-left: 200px;">

                        </form>
                        <?php
                        include 'db_config.php';
                        if (isset($_POST['submit'])) {

                            $product_name = $_POST['pro_name'];
                            if ($_POST['category']) {
                                $cat_id = $_POST['category'];
                            } else {
                                $cat_id = $fetch_product['category_id'];
                            }
                            if ($_POST['sub_category']) {
                                $sub_cat_id = $_POST['sub_category'];
                            } else {
                                $sub_cat_id = $fetch_product['sub_category_id'];
                            }
                            if ($_POST['brand']) {
                                $brand_id = $_POST['brand'];
                            } else {
                                $brand_id = $fetch_product['brand_id'];
                            }
                            $third_category = $_POST['third_category'];
                            $s_description = addslashes($_POST['short_description']);
                            $l_description = addslashes($_POST['long_description']);
                            $pro_location = $_POST['pro_loc'];
                            $pro_price = $_POST['pro_price'];
                            $sell_price = $_POST['sell_price'];
                            $pro_qntity = $_POST['pro_qntity'];
                            $pro_size = $_POST['pro_size'];
                            $pro_color = $_POST['pro_color'];
                            if ($_POST['gender']) {
                                $gender = $_POST['gender'];
                            } else {
                                $gender = $fetch_product['gender'];
                            }
                            if ($_POST['age']) {
                                $age = $_POST['age'];
                            } else {
                                $age = $fetch_product['age'];
                            }





                            $type = 'product';



                            /*
                             * check this user exist or not
                             */


                            /*
                             * insert product Information
                             */
                            $update_product = mysql_query("UPDATE product SET 
                        category_id = '$cat_id',
                        sub_category_id = '$sub_cat_id',
                        third_id='$third_category',
                        brand_id = '$brand_id',
                        product_name = '$product_name',
                        price = '$pro_price',
                        buy_price = '$sell_price',
                        quantity = '$pro_qntity',
                        pro_short_description = '$s_description',
                        pro_long_description = '$l_description',
                        product_localion = '$pro_location',
                        size = '$pro_size',
                        color = '$pro_color',
                        age = '$age',
                        gender = '$gender'
                         WHERE product_id = '$pro_id'");

                            if ($update_product) {




//                                if (!$_FILES['image_one']['error']) {
//                                    $photo_name1 = $_FILES['image_one']['name'];
//                                    $ext1 = pathinfo($photo_name1, PATHINFO_EXTENSION);
//                                    $convert1 = time() . '.' . $ext1;
//                                    $file_name1 = "one+$convert1";
//                                    $dir = "image";
//                                    copy($_FILES['image_one']['tmp_name'], "$dir/$file_name1");
//                                    $photo_one = "$dir/$file_name1";
//                                }
                                if (!$_FILES['image_one']['error']) {
                                    $photo_name1 = $_FILES['image_one']['name'];
                                    $ext1 = pathinfo($photo_name1, PATHINFO_EXTENSION);
                                    $convert1 = time() . '.' . $ext1;
                                    $file_name1 = "one+$convert1";
                                    $dir = "image";
                                    copy($_FILES['image_one']['tmp_name'], "$dir/$file_name1");
                                    $photo = "$dir/$file_name1";
                                }
                                if (!$_FILES['image_two']['error']) {
                                    $photo_name3 = $_FILES['image_two']['name'];
                                    $ext2 = pathinfo($photo_name3, PATHINFO_EXTENSION);
                                    $convert3 = time() . '.' . $ext2;
                                    $file_name3 = "two+$convert3";
                                    $dir = "image";
                                    copy($_FILES['image_two']['tmp_name'], "$dir/$file_name3");
                                    $photo_two = "$dir/$file_name3";
                                }


                                if (!$_FILES['image_three']['error']) {
                                    $photo_name4 = $_FILES['image_three']['name'];
                                    $ext4 = pathinfo($photo_name4, PATHINFO_EXTENSION);
                                    $convert4 = time() . '.' . $ext4;
                                    $file_name4 = "three+$convert4";
                                    $dir = "image";
                                    copy($_FILES['image_three']['tmp_name'], "$dir/$file_name4");
                                    $photo_three = "$dir/$file_name4";
                                }

                                if (!$_FILES['image_four']['error']) {
                                    $photo_name5 = $_FILES['image_four']['name'];
                                    $ext5 = pathinfo($photo_name5, PATHINFO_EXTENSION);
                                    $convert5 = time() . '.' . $ext5;
                                    $file_name5 = "four+$convert5";
                                    $dir = "image";
                                    copy($_FILES['image_four']['tmp_name'], "$dir/$file_name5");
                                    $photo_four = "$dir/$file_name5";

                                    mysql_query("UPDATE image SET image_type='product',role_id='$pro_id',image='$photo',image2='$photo_two',image3='$photo_three',image4='$photo_four' WHERE image_id='$pro_id'");
                                }




                                /*
                                 * Update Product image
                                 * there role id mean's product id
                                 */

                                //        check image choice 
//        if (!$_FILES['pro_image']['error']) {
//            $photo_name = $_FILES['pro_image']['name'];
//            $dir = "image";
//            copy($_FILES['pro_image']['tmp_name'], "$dir/$photo_name");
//            $photo = "$dir/$photo_name";
//            mysql_query("INSERT INTO image (image_type,role_id,image) VALUES('product','$pro_id','$photo')");
//        } 
                                ?>
                                <script type="text/javascript">
                                    alert('Product Update Successfull');
                                    window.location.replace("product1.php");
                                </script>
                                <?php
                            } else {
                                ?>
                                <script type="text/javascript">
                                    alert('Product Not Update');
                                    window.location.replace("product1.php");
                                </script>
                                <?php
                            }
                        }
                        ?>

                    </td>
                </tr>
            </table>
    </div>
    <!--    <div class="box4"> View Product <hr> 
            <table class="category-show-tb">
                <tr>
                    <td>Product Id</td>
                    <td>Product Name</td>
                    <td>Price</td>
                    <td>Image</td>
                    <td>Action</td>
    
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
                                                                    <td><img src="<?php echo get_image($fetch_category['product_id']); ?>" width="100" height="100"></td>
                                                                    <td><a href="edit_product.php?pro_id=<?php echo $fetch_category['product_id']; ?>"><img src="image/file_edit.png" style="width: 20px;height: 20px;"></a></td>
                                                                    <td><a href="delete_product.php?pro_id=<?php echo $fetch_category['product_id']; ?>"><img src="image/file_delete.png" style="width: 20px;height: 20px;"></a></td>
                                                                </tr>
    <?php } ?>
            </table>
                -------------- table -------------
    
        </div>-->

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