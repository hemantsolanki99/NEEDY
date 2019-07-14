<?php
    session_start();
?>
<?php
include "include/db_config.php";
?>
<?php
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mono = $_POST['mono'];
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];
        $atype = $_POST['ulevel'];
        $add1 = $_POST['add1'];
        $add2 = $_POST['add2'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        
        $query = "INSERT INTO customers (Name, Email, Mobile_No, Username, Password, User_type, Address_Line_1, Address_Line_2, City, Pincode, State, Country) ";
        $query .= "VALUES('{$name}','{$email}','{$mono}','{$uname}','{$upass}','{$atype}','{$add1}','{$add2}','{$city}','{$pincode}','{$state}','{$country}' ) ";

        
        $reg_query = mysqli_query($mysqli,$query);
        
        if(!$reg_query){
            echo "<script type='text/javascript'>alert('Registration Not done <br /> " . mysqli_error($mysqli) . " <br />Please Try Again...');</script>";
        }else{
            echo "<script type='text/javascript'>alert('Registration unSuccessfull');</script>";
            header("Location: ./");
        }
        
        }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Needy</title>
	<link rel="icon" type="image/png" href="images/N.png">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	
		<style>        
        ::-webkit-scrollbar { 
            display: none; 
        }
        .search-input {
            background: transparent;
            border: none;
            border-radius: 0;
            border-bottom: 2px solid #999;
            transition: all .4s;
        }
        .location-input{
            background: transparent;
            color: white;
            border: none;
            border-radius: 0;
            border-bottom: 2px solid #999;
            transition: all .4s;
        }

        .search-input:focus, .location-input:focus {
            background: transparent;
            box-shadow: none;
            border-bottom: 2px solid #dc3545;
            color: azure;
        }

        .search-button, .location-button {
            border-radius: 50%;
            padding: 10px 16px;
            transition: all .4s;
        }

        .search-button:hover, .location-button:hover {
            background-color: #eee;
            transform: translateY(-1px);
        }

    </style>
	
</head>

<body>
	<!-- Navigation Bar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="./">NEEDY</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcontent" aria-controls="navcontent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navcontent">
				<ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav justify-content-end float-right">
                    <li class="nav-item">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control search-input" placeholder="Search...">
                                <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item col-sm-6 text-center">
                        <form method="post" action="">
                            <div class="input-group">
                                <a href="" class="form-control nav-link location-input" name="location-input" placeholder="Locate Your Position">Ahmedabad </a>
                                <button type="button" name="location" class="btn btn-white location-button"><i class="fas fa-map-marker text-danger"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>
		</div>
        </div>
	</nav>
        
<div class="back_reg">
    <div class="front_reg">
        
        <div class="container-fluid text-white">     
            <div class="text-center text-white mb-1">
                <h1 class="display-3">Register Here....</h1>
            </div>            
            
            <div class="row justify-content-center mt-3">                
                <div class="col-3">
                    
                </div>
                <div class="col-6 text-white">
                    
                    <form action="" method="post" class="font-weight-bold">
                        
                        <div class="input-group ml-5 mr-5 m-1">
                            <label for="name" class="label col-3">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your full Name" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="email" class="label col-3">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="mono" class="label col-3">Mo No</label>
                            <input type="text" name="mono" id="mono" placeholder="Enter Mobile" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="uname" class="label col-3">Username</label>
                            <input type="text" name="uname" id="uname" placeholder="Enter Username" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="upass" class="label col-3">Password</label>
                            <input type="password" name="upass" id="upass" placeholder="Enter Password" class="form-control col-6" required>
                        </div>                        
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="ulevel" class="label col-3">Account type</label>
                            <select name="ulevel" id="ulevel" class="form-control col-6" required>
                                <option value="" selected disabled>Select Type</option>
                                <option value="addvertiser" class="form-control">Seller</option>
                                <option value="user" class="form-control">Buyer</option>
                            </select>
                        </div>                        
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="add1" class="label col-3">Address Line 1</label>
                            <input type="text" name="add1" id="add1" placeholder="Address Line 1" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="add2" class="label col-3">Address Line 2</label>
                            <input type="text" name="add2" id="add2" placeholder="Address Line 2" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="city" class="label col-3">City</label>
                            <input type="text" name="city" id="city" placeholder="City" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="pincode" class="label col-3">Pincode</label>
                            <input type="number" name="pincode" id="pincode" placeholder="Pincode" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="state" class="label col-3">State</label>
                            <input type="text" name="state" id="state" placeholder="State" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="country" class="label col-3">Country</label>
                            <input type="text" name="country" id="country" placeholder="Country" class="form-control col-6" required>
                        </div>
                        <div class="form-group row justify-content-center mt-3">
                            <button type="submit" name="register" class="btn btn-primary">Submit</button>
                            <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                    <div class="text-right mr-5">
                        <h6 class="lead text-warning">Already Registered ??? <a href="./login.php">Login</a> Here....</h6>
                    </div>
                </div>
                <div class="col-3">
                    
                </div>
                
                
            </div>
            
        </div>
        
    </div>
</div>