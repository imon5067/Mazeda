<?php
include 'left.php';
include 'db_config.php';

$slider_id = $_GET['slider_id'];
$select = mysql_query("SELECT * FROM slider WHERE slider_id='$slider_id'");
$fetch = mysql_fetch_array($select);
?>
<div class="box3">
    <div class="title"> Slider  </div>

    <div class="box4"> 
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form-tb">
                <h2>Update Slider</h2><hr>
                <tr>
                    <td> Slider Image </td><td><input type="file" name="slider_image"> <img src="<?php echo $fetch['slider_image']; ?>" style="width: 80px;height: 80px;"></td>

                </tr>
                <tr>
                    <td> Link </td> <td> <br><input type="text" class="form-control" name="link" value="<?php echo $fetch['link']; ?>">-- category_product.php?category_id=1<br>--sub_category_product.php?sub_category_id=1<br>--product_view.php?product_id=59<br><br> </td>
                </tr>
                <tr>
                    <td></td> <td> <input type="submit" name="submit" class="btn" value="Update"> </td>
                </tr>

        </form>
        <tr>
            <td colspan="2"> 
                <?php
                if (isset($_POST['submit'])) {
                    $link = $_POST['link'];
                    $query = "UPDATE slider SET link = '$link' ";
                    if(!$_FILES['slider_image']['error']){
//                        print_r($_FILES);
                        
                        $image = $_FILES['slider_image']['name'];
                        $dir = "image/slider_image";
                         $src = "$dir/$image";
                        copy($_FILES['slider_image']['tmp_name'],"$dir/$image");
                    $query .= ",slider_image = '$dir/$image'  ";
                    }else{
//                        echo 'image not select';
                    }
                    
                    $query .= " WHERE slider_id = '$slider_id'";
                    $update = mysql_query($query);
                    if($update){
                        ?>
                <script type="text/javascript">
            window.location.replace("slider.php");    
            </script>
                <?php
                    }else{
                        echo "Update Not Successfull";
                    }
                
                }
                ?>
            </td>
        </tr>
        </table>
        <!--    -------------- table --------------->

    </div>

</div>