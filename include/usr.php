<?php        
        $query = "SELECT * FROM products WHERE Username = '".$user_name."'";
        
    
    $history = mysqli_query($mysqli,$query);
    
    $rowcounts = mysqli_num_rows($history);

    if($rowcounts > 0){

?>
    <h2 class="lead display-4 text-center text-warning">Your Orders</h2>
    <table class="table table-bordered">
        <thead>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Details</th>
            <th>Image</th>
            <th>Website</th>
            <th>Seller</th>
            <th>Status</th>
            <th>tag</th>
            <th>Settings</th>
        </thead>
        <tbody>
        
<?php

        while($row = mysqli_fetch_assoc($history)){
            $id       = $row['product_id'];
            $title    = $row['product_title'];
            $cat_id   = $row['product_category_id'];
            $seller   = $row['product_seller'];
            $img      = $row['product_image'];
            $web      = $row['product_web_site'];
            $price    = $row['product_price'];
            $details  = substr($row['product_content'],0,50);
            $tags     = $row['product_tags'];
            $status   = $row['product_post_status'];
            
            $query2 = "SELECT * FROM produ_cat WHERE cat_id = '".$cat_id."'";
            $run_cat = mysqli_query($mysqli,$query2);
?>
    
    <tr>
        <td><?php echo $title; ?></td>
        <td><?php 
            while($row2 = mysqli_fetch_assoc($run_cat)){
                $cat_name = $row2['cat_title'];
                echo $cat_name;
            }
            ?></td>
        <td><?php echo $price; ?></td>
        <td><?php echo $details; ?></td>
        <td><img src="<?php echo "images/service/". $img; ?>" width="100" alt="Product Image" /></td>
        <td><a href="<?php echo $web; ?>" class="nav-link">Website</a></td>
        <td><?php echo $seller; ?></td>
        <td><?php echo $status; ?></td>
        <td><?php echo $tags; ?></td>
        <td><?php echo "edit" ?></td>
    </tr>
    
<?php
        }
?>
        </tbody>
    </table>

<?php
    }else{
?>
    <div class="pt-5 text-center">
        <h2 class="lead">Currently you had not taken or bought any products</h2>
        <h3 class="lead">Want to buy products.. ???<a href="dashboard.php?ref=history">Buy products </a> here... </h3>
    </div>
<?php
        }
?>