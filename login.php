<?php
    include"include/db_config.php";
?>

<?php
    session_start();
?>
<?php
include "include/db_config.php";
?>
<?php
    if(!empty($_SESSION['needy_user'])){
        header("location: ./");
    }
    if(isset($_POST['login'])){
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];
        $query = "SELECT * FROM customers WHERE Username = '".$uname."' AND Password = '".$upass."'";
        $log_in = mysqli_query($mysqli,$query);
        while($row = mysqli_fetch_assoc($log_in)){
            $user_id = $row['Id'];
            $usrtype = $row['User_type'];
            
            if(!empty($user_id)){
                $_SESSION["needy_user"] = $uname;
                $_SESSION["needy_userid"] = $user_id;
                $_SESSION["needy_usetype"] = $usrtype;
                echo "<script type='text/javascript'>alert('Login Successfull');alert('Welcome " . $uname . "');</script>";
                
                switch($usrtype){
                    case "Admin":
                        header("location: admin");
                        break;
                    case "addvertiser":
                        header("location: dashboard.php");
                        break;
                    default:
                        header("location: ./");
                }
                
            }else{
                echo "<script type='text/javascript'>alert('Invalid Login Crediantials');</script>";
            }
        }
    }
?>
<?php
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
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
        
        <div class="container-fluid mt-5">
            
            <div class="text-center text-white mb-1">
                <h1 class="display-3">Login Here....</h1>
            </div>            
            
            <div class="row justify-content-center mt-3">                
                <div class="col-3">
                    
                </div>
                <div class="col-6 text-white">
                    
                    <form action="" method="post" class="font-weight-bold">
                        
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="uname" class="label col-3">Username</label>
                            <input type="text" name="uname" id="uname" placeholder="Enter Username" class="form-control col-6" required>
                        </div>
                        <div class="input-group ml-5 mr-5 mb-1">
                            <label for="upass" class="label col-3">Password</label>
                            <input type="password" name="upass" id="upass" placeholder="Enter Password" class="form-control col-6" required>
                        </div>                        

                        <div class="form-group row justify-content-center mt-3">
                            <button type="submit" name="login" class="btn btn-primary">Submit</button>
                            <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                    <div class="text-right mr-5">
                        <h6 class="lead text-warning">Not Registered ??? <a href="./register.php">register</a> Here....</h6>
                    </div>
                </div>
                <div class="col-3">
                    
                </div>
                
                
            </div>
            
        </div>
        
    </div>
</div>