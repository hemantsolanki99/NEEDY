<?php
    
    $query = "SELECT * FROM user_ads ";

    $ads_details = mysqli_query($mysqli, $query);
    
?>
<div class="body_cont" onload="helloWork()">
    <div class="body_cont_2">
        <div class="body_main">
            <div class="container-fluid font-weight-bold">
                <div class="row justify-content-center">

                    <div class="col-md-7">
                        <div class="form-group">

                           <h2 class="display-4 text-center">Your Advertises</h2>
                           
                           <div class="well">
                               
                                <div class="row justify-content-center">

<?php                                    
    while($row = mysqli_fetch_assoc($ads_details)){
        $pr_cat      = $row['product_category_id'];
        $item_name   = $row['Ads_name'];
        $item_dets   = $row['Ads_detail'];
        $item_date   = $row['Date'];
        $item_mps    = $row['min_price'];
        $item_pms    = $row['max_price'];
?>                                    
            <div class="col-md-6">

                <h4 class="h4"><?php echo $item_name; ?></h4>
                <div><?php echo $item_dets; ?></div>
                <div><?php echo $item_date; ?></div>
                <div> &#8377; <?php echo $item_mps; ?> to &#8377; <?php echo $item_pms; ?></div>


                <div class="row justify-content-center">
                <button class="btn btn-warning btn-lg"><a class="text-white" href="<?php echo $site; ?>">Know More</a></button>
<?php
    }else{
?>
            <button class="btn btn-warning btn-lg"><a class="text-white" href="">Know More</a></button>
<?php
    }
?>
                </div>
            </div>
<?php
        if($id%2 == 0){
?>
           </div>
           <br/>
           <div class="row justify-content-center">
<?php
        }
    }
?>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>