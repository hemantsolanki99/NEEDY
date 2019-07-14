<?php
    if(isset($_GET['ZELQvvh2KO'])){
?>
    <script type="text/javascript">alert('Your data successfully updated');</script>
<?php
    }

    if(isset($_POST['update'])){
        $email = $_POST['email'];
        $mono = $_POST['mono'];
        $add1 = $_POST['add1'];
        $add2 = $_POST['add2'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $country = $_POST['country'];

        $query = "UPDATE customers SET Email = '$email', Mobile_No = '$mono', Address_Line_1 = '$add1', Address_Line_2 = '$add2', City = '$city', Pincode = '$pincode', State = '$state', Country = '$country' WHERE Username = '$user_name'";

        $runquery = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

        if(mysqli_affected_rows($mysqli) > 0){
?>
<script type="text/javascript">window.location.href = "?2uQqiIRAn1ZELQvvh2KOIw=oei&2uQqiIRAnlZELQvvh2KOIw=pro&ZELQvvh2KO=true";</script>
<?php
        }else{
?>
<script type="text/javascript">alert('There is some eroor... Please try again after some time');</script>
<?php
        }
    }
?>
<?php
    $query = "SELECT * FROM customers WHERE Username = '{$user_name}'";
    $get_details = mysqli_query($mysqli,$query);
    
    while($row = mysqli_fetch_assoc($get_details)){
        // echo $row['Id'];
?>
        <div class="container-fluid pt-3 mt-0 pb-5">
            <div class="row">
                <div class="col-7">
                    <form action="" method="post" class="font-weight-bold">
                        
                        <div class="input-group ml-5 mr-5 m-1">
                            <label for="name" class="label col-3">Username</label>
                            <input type="text" name="name" id="name"class="form-control col-9" value="<?php echo $row['Username']; ?>" disabled>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="email" class="label col-3">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your Email" value="<?php echo $row['Email']; ?>" class="form-control col-9" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="mono" class="label col-3">Mo No</label>
                            <input type="text" name="mono" id="mono" placeholder="Enter Mobile" value="<?php echo $row['Mobile_No']; ?>" class="form-control col-9" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="add1" class="label col-3">Address Line 1</label>
                            <input type="text" name="add1" id="add1" placeholder="Address Line 1" value="<?php echo $row['Address_Line_1']; ?>" class="form-control col-9" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="add2" class="label col-3">Address Line 2</label>
                            <input type="text" name="add2" id="add2" placeholder="Address Line 2" value="<?php echo $row['Address_Line_2']; ?>" class="form-control col-9" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="city" class="label col-3">City</label>
                            <input type="text" name="city" id="city" placeholder="City" value="<?php echo $row['City']; ?>" class="form-control col-9" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="pincode" class="label col-3">Pincode</label>
                            <input type="number" name="pincode" id="pincode" placeholder="Pincode" value="<?php echo $row['Pincode']; ?>" class="form-control col-9" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="state" class="label col-3">State</label>
                            <input type="text" name="state" id="state" placeholder="State" value="<?php echo $row['State']; ?>" class="form-control col-9" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="country" class="label col-3">Country</label>
                            <input type="text" name="country" id="country" placeholder="Country" value="<?php echo $row['Country']; ?>" class="form-control col-9" required>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <button type="submit" name="update" class="btn btn-primary">Update Profile</button>
                            <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>                
            </div>
</div>
<?php
}
?>