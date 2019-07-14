<?php

//	  Page for user to put a ad for needing things

if(isset($_POST['add_ads'])){

    $category_id      = $_POST['produ_cat'];
    $item_name        = $_POST['product_name'];
    $username         = $_SESSION['needy_user'];
    $min_price    	  = $_POST['minprice'];
    $max_price    	  = $_POST['maxprice'];
    $item_quantity    = $_POST['product_quantity'];
    $item_details     = $_POST['product_details'];
    $post_date        = date('d-m-y');

    $query_ads = "INSERT INTO user_ads (product_category_id, Ads_name, Ads_detail, Date, min_price, max_price, item_quantity, Username) ";
    $query_ads .= "VALUES ('{$category_id}', '{$item_name}', '{$item_details}', now(), '{$min_price}', '{$max_price}', '{$item_quantity}', '{$username}')";

    $add_ads_user = mysqli_query($mysqli, $query_ads) or die(mysqli_error($mysqli));

    if(mysqli_affected_rows($mysqli) > 0){

?>

<script type="text/javascript">

	alert("Successfully Advertise posted....");
	window.location.href = "?voftatt=grhd";

</script>

<?php

	}else{

?>

<script type="text/javascript">alert("There is some error.. Try again in some time);</script>

<?php

	}
}

?>
<script type="text/javascript">
	
function helloWork(){
	
	document.getElementById("prdetails").value = "";
}

</script>
<div class="body_cont" onload="helloWork()">
    <div class="body_cont_2">
        <div class="body_main">
            <div class="container-fluid font-weight-bold">
                <div class="row justify-content-center">
                    
                    <div class="col-md-12">
                        <div class="form-group">
                           
                          	<h2 class="display-4 text-center">Put Advertise</h2>
							<div class="row justify-content-center">
                           		<div class="col-md-7">

		                            <form action="" method="post" class="mr-5" enctype="multipart/form-data">
		                                <div class="input-group m-2 align-items-center">
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
		                                <div class="input-group m-2 align-items-center">
		                                    <label class="col-sm-3" for="">Item Name :</label>
		                                    <input type="text" name="product_name" class="form-control" required>
		                                </div>
		                                <div class="input-group m-2 align-items-center">
		                                    <label class="col-sm-3" for="">Price Range :</label>
		                                    <input type="number" name="minprice" class="form-control" value="500"> &nbsp; &#8209; &nbsp; <input type="number" name="maxprice" class="form-control" value="100000" >
		                                </div>
		                                <div class="input-group m-2 align-items-center">
		                                    <label class="col-sm-3" for="">Quantity :</label>
		                                    <input type="text" name="product_quantity" class="form-control" required>
		                                </div>
		                                <div class="input-group m-2 align-items-center">
		                                    <label for="" class="col-sm-3">Item Details :</label>
		                                    <textarea class="form-control" name="product_details" id="prdetails" cols="30" rows="5" placeholder="Provide as Much as possible details">
		                                    </textarea>
		                                </div>
		                                <div class="input-group m-2 justify-content-center">
		                                	
			                                    <button class="btn btn-primary m-1" name="add_ads" type="submit">Submit</button>
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
    </div>
</div> 