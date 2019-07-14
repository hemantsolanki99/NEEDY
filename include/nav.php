<?php
    session_set_cookie_params(0);
    session_start();
?>
<?php
include "include/db_config.php";
?>
<?php
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
    }
    if(!empty($_SESSION['needy_user'])){
?>
    <script type="text/javascript">
        window.location.href = "dashboard.php";
    </script>
<?php
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
		     	<li class="nav-item">
		        	<a class="nav-link" href="#know">Know More</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#review">Reviews</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#about">About Us</a>
		      	</li>
<?php
    
    if(!empty($_SESSION['needy_user'])){
        $utype = $_SESSION['needy_usetype'];

        switch($utype){
                    case "Admin":
?>
    <script type="text/javascript">
//        window.location.href = "admin";
    </script>
<?php
                        break;
                    case "addvertiser":
?>
    <script type="text/javascript">
        window.location.href = "dashboard.php";
    </script>
<?php

                        break;
                    default:
                        header("location: ");
                }
        
?>
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link">Dashboard</a>
                </li>
<?php
    }    
?>
		    </ul>
                <ul class="navbar-nav justify-content-end float-right">
                    <li class="nav-item">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="text" name="search-input" class="form-control search-input" placeholder="Search...">
                                <button type="submit" name="search-button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
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

<?php
    if(!empty($_SESSION['needy_user'])){
        $user_needy = $_SESSION['needy_user'];
?>
		    <ul class="navbar-nav justify-content-end">
		    	<li class="nav-item">
		    		<a id="user_name" class="nav-link" href=""><?php echo $user_needy; ?> <i class="fa fa-user"></i></a>
		    	</li>
		    	<li class="nav-item">
                    <form method="post" id="form_logout" action="">
		    			<button id="logout" name="logout" class="logout pt-2 btn text-white bg-transparent">Log Out <i class="fa fa-sign-out-alt"></i></button>
                    </form>
		    	</li>
		    </ul>
<?php
    }else{
?>      
		    <ul class="navbar-nav justify-content-end">
		    	<li class="nav-item">
		    		<a id="login" class="nav-link" href="login.php">Log In <i class="fa fa-user"></i></a>
		    	</li>
		    	<li class="nav-item">
		    		<a id="signup" class="nav-link" href="register.php">Sign Up <i class="fa fa-user-plus"></i></a>
		    	</li>
		    </ul>
<?php
    }
?>
		</div>
        </div>
        
        <!-- Button trigger modal -->
<!--    <button type="button" class="btn btn-transparent text-white font-weight-bold" data-toggle="modal" data-target="#loginModal"> <i class="fa fa-sign-in text-primary"></i> Login </button>-->

<!-- Modal -->
<!--
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="input-group m-1 p-1">
                        <span class="input-group-addon mx-1 px-1"><i class="fa fa-user"> </i> </span>
                        <input type="text" class="form-control" placeholder="Username" id="uname" name="uname" required="">
                    </div>
                    <div class="input-group m-1 p-1">
                        <span class="input-group-addon mx-1 px-1"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" id="upass" name="upass" placeholder="Password" required="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="login" name="login" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
-->

        
	</nav>

	<!-- Login Form -->
<!--
	<form id="myForm" action="" method="POST">
		<div class="container">
			<div class="form-group">
				<input class="form-control" type="text" name="username" placeholder="User Name">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<button class="btn btn-success" name="login" type="submit">Log In</button>
				<button class="btn btn-danger" onclick="closeForm()">Close</button>
			</div>
		</div>
	</form>
-->
