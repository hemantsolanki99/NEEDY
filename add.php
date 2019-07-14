<?php
include"include/nav2.php";
?>
<?php
    include "include/db_config.php";
?>
<?php
    if(isset($_POST['add_product'])) {        
        
        $category_id      = $_POST['produ_cat'];
        $product_name     = $_POST['product_name'];
        $product_status   = $_POST['product_status'];
        $product_seller   = $_POST['product_seller'];
        $username         = $_SESSION['needy_user'];
            
        $post_image       = $_FILES['product_image']['name'];
        $post_image_temp  = $_FILES['product_image']['tmp_name'];

        $product_price    = $_POST['product_price'];
        $product_quantity = $_POST['product_quantity'];
        $product_website  = $_POST['product_web_site'];
        $product_details  = $_POST['product_details'];
        $product_tags     = $_POST['product_tags'];
        $product_status   = $_POST['product_status'];
        $post_date        = date('d-m-y');

        
        if($post_image != ''){

            $allowed_ext = array("jpg","png","jpeg");
            $ext = end(explode('.' , $_FILES['product_image']['name']));
            
            if(in_array($ext, $allowed_ext)){
                if($post_image<10000){
                    $img_name = md5(rand()) . '.' . $ext;

                    $path = "images/service/" . $img_name;
                    move_uploaded_file($post_image_temp, $path);
                    
                        
        $query = "INSERT INTO products(product_category_id, product_title, product_seller, post_date, product_image, product_price, product_content, product_web_site, product_tags, product_post_status, Username) ";
        $query .= "VALUES('{$category_id}','{$product_name}','{$product_seller}',now(),'{$img_name}','{$product_price}','{$product_details}','{$product_website}','{$product_tags}','{$product_status}','{$username}' ) ";
        
        $add_product = mysqli_query($mysqli, $query);
                    
                if(!$add_product){
                    echo "<script type='text/javascript'>alert('Product not added <br /> " . mysqli_error($mysqli) . " <br />Please Try Again...');</script>";
                }else{
                    echo "<script type='text/javascript'>alert('Product Added Successfull');</script>";
?>
    <script type="text/javascript">
        window.location.href="./dashboard.php";
    </script>
<?php
                }
            }
        }else{
            echo "<script type='text/javascript'>alert('File is not an image <br /> " . mysqli_error($mysqli) . " <br />Please Select Valid file Again...');</script>";
            }
        
        // CALL TO THE CONFIRM FUNCTION FROM FUNCTION FILE
        }else{
            echo "<script type='text/javascript'>alert('Image Not selected');</script>";
        }

    }
?>
<div class="body_cont" onload="hideCatother()">
    <div class="body_cont_2">
        <div class="body_main">
    <div class="container-fluid font-weight-bold">
        <div class="row justify-content-center">
            
            <div class="col-md-7">
                <div class="form-group">
                   
                   <h2 class="display-4 text-center">Add Products</h2>
                   
                    <form action="" method="post" class="mr-5" enctype="multipart/form-data">
                        <div class="input-group m-2">
                            <label class="col-sm-3" for="">Category :</label>
                            
                            <select name="produ_cat" id="produ_cat" class="form-control">
                                <option value="" selected disabled>Select Category</option>
                                <?php
                                    $query = "SELECT * FROM produ_cat";
                                    $cat_det = mysqli_query($mysqli,$query);
                                    
                                    while($row = mysqli_fetch_assoc($cat_det)){
                                        $cat_id = $row['cat_id'];
                                        $cat_name = $row['cat_title'];
                                        echo '<option value="' . $cat_id . '"> ' . $cat_name .' </option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="input-group m-2">
                            <label class="col-sm-3" for="">Product Name :</label>
                            <input type="text" name="product_name" class="form-control" required>
                        </div>
                        <div class="input-group m-2">
                            <label class="col-sm-3" for="">Product Seller :</label>
                            <input type="text" name="product_seller" class="form-control" placeholder="Enter your Shop Name / GST Registered Name" required>
                        </div>
                        <div class="input-group m-2">
                            <label class="col-sm-3" for="">Product Image :</label>
                            <input type="file" name="product_image" class="form-input" placeholder="Your Product Image" required>
                        </div>
                        <div class="input-group m-2">
                            <label class="col-sm-3" for="">Product Price :</label>
                            <input type="text" name="product_price" class="form-control" required>
                        </div>
                        <div class="input-group m-2">
                            <label class="col-sm-3" for="">Product Quantity :</label>
                            <input type="text" name="product_quantity" class="form-control" required>
                        </div>
                        <div class="input-group m-2">
                            <label for="" class="col-sm-3">Product Details :</label>
                            <textarea class="form-control" placeholder="Provide as Much as possible details about your product" name="product_details" id="" cols="30" rows="5" required>
                            </textarea>
                        </div>
                        <div class="input-group m-2">
                            <label class="col-sm-3" for="">Product Website :</label>
                            <input type="text" name="product_web_site" class="form-control" placeholder="If any website">
                        </div>
                        <div class="input-group m-2">
                            <label for="" class="col-sm-3">Product Tags :</label>
                            <input type="text" name="product_tags" class="form-control" required>
                        </div>
                        <div class="input-group m-2">
                            <label for="" class="col-sm-3">Product Status :</label>
                            <input type="text" name="product_status" class="form-control" required>
                        </div>
                        <div class="row justify-content-center">
                            <button class="btn btn-primary m-1" name="add_product" type="submit">Submit</button>
                            <button class="btn btn-warning m-1" type="reset">Refill</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
        </div>
    </div>
</div>    
</body>
</html>

