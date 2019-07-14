<?php
session_set_cookie_params(0);
session_start();
?>
<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
}
?>
<?php
if (!empty($_SESSION['needy_user'])) {
    $user_name = $_SESSION['needy_user'];
    $user_type = $_SESSION['needy_usetype'];
    switch ($user_type) {
        case "Admin":
            $type_nedy = "Admin";
            break;
        case "Addvertiser":
            $type_nedy = "Ads Home";
            break;
        default:
            $type_nedy = "User";
    }
} else {
    header("Location: index.php");
}
?>
<?php
    include "db_config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Needy-<?php echo $type_nedy . @$type2; ?></title>
	<link rel="icon" type="image/png" href="images/N.png">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dash.css">   
	
	<script type="text/javascript" src="dash.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
	<!-- Navigation Bar -->
	<div id="navi">
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark navigators-nav" id="dash_nav_bar">
		<div class="container-fluid">
			<a class="navbar-brand" href="./dashboard.php"><img src="images/logo.jpg" class="logo_des p-0 m-0" height="40px" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcontent" aria-controls="navcontent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navcontent">
				<ul class="navbar-nav mr-auto">
		     		
		    	</ul>

		    	<ul class="navbar-nav justify-content-end navbar-right">
<?php
    if($user_type == "user"){
?>
		    		<li class="nav-item">
		    			<a id="buy" class="nav-link" href="dashboard.php?GDy6sGHE4e=kivmkuce6K">Your Cart <i class="fas fa-shopping-cart"></i></a>
		    		</li>
<?php
    }
    if($user_type == "addvertiser"){
?>
		    		<li class="nav-item">
		    			<a id="sell" class="nav-link" href="dashboard.php?GDy6sGHE4e=a9DSRDNFk">Sell <i class="fas fa-clipboard-check"></i></a>
		    		</li>
<?php
    }
?>
		    		<form class="form-inline my-2 my-lg-0">
      					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      					<button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
    				</form>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b><i class="fa fa-user"></i> <?php echo $user_name; ?></b></a>
                            <div class="dropdown-menu" style="" aria-labelledby="userDropdown">
                                <a href="account.php?2uQqiIRAn1ZELQvvh2KOIw=fwb&2uQqiIRAnlZELQvvh2KOIw=gen"" class="dropdown-item">Manage Account</a>
                                <a href="account.php?ZELQvvh2KOIw=MEXhGX7&2uQqiIRAnlZELQvvh2KOIw=pro" class="dropdown-item">Edit Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item">Your Activity</a>
                                <a href="history.php" class="dropdown-item">History</a>
                                <div class="dropdown-divider"></div>
                            </div>
                    </li>
                    <li class="nav-item">
                        <form method="post" id="form_logout" action="">
                            <button id="logout" name="logout" class="logout pt-2 btn text-white bg-transparent">Log Out <i class="fa fa-sign-out-alt"></i></button>
                        </form>
                    </li>
                </ul>
		    </div>
		</div>
	</nav>
	</div>