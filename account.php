<?php
    include "include/nav2.php";
?>

<div class="container-fluid pt-3 mt-5">
    <div class="row">
        <div class="col-md-2 bg-dark">
            <nav class="navbar navbar-nav nav-pills nav-stacked navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="account.php?2uQqiIRAn1ZELQvvh2KOIw=fwb&2uQqiIRAnlZELQvvh2KOIw=gen" class="nav-link">General</a></li>
                    <li class="nav-item"><a href="account.php?2uQqiIRAn1ZELQvvh2KOIw=oei&2uQqiIRAnlZELQvvh2KOIw=pro" class="nav-link">Profile</a></li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item"><a href="account.php?2uQqiIRAn1ZELQvvh2KOIw=asc&2uQqiIRAnlZELQvvh2KOIw=adv" class="nav-link">Advance</a></li>
                    <li class="nav-item"><a href="account.php?2uQqiIRAn1ZELQvvh2KOIw=oat&2uQqiIRAnlZELQvvh2KOIw=yap" class="nav-link">Payment</a></li>
<!--                    <li class="nav-item"><a href="" class="nav-link">Other</a></li>-->
                </ul>
            </nav>
        </div>
        <div class="col-md-10 mt-3" style="min-height: 700px">


<?php

if(isset($_GET['2uQqiIRAn1ZELQvvh2KOIw']) || isset($_GET['ZELQvvh2KOIw'])){
    $pgvn = $_GET['2uQqiIRAnlZELQvvh2KOIw'];
    
    switch($pgvn){
        case "gen":
?>
            <div class="text-center">
                <h1 class="display-3">General Settings</h1>
            </div>
<?php
            include "accmng/general.php";
            break;
        case "pro":
?>
            <div class="text-center">
                <h1 class="display-3">Profile Settings</h1>
            </div>
<?php
            include "accmng/profile.php";
            break;
        case "adv":
?>
            <div class="text-center">
                <h1 class="display-3">Advance Settings</h1>
            </div>
<?php
            break;
        case "yap":
?>
            <div class="text-center">
                <h1 class="display-3">Payment Settings</h1>
            </div>
<?php
            include "accmng/payment.php";
            break;
    }
}
/*
    if($user_type == "addvertiser"){
        
        include "include/adv.php";
        
    }else{
        
        include "include/usr.php";
        
    }
*/
            
//        2uQqiIRAn1ZELQvvh2KOIw==

?>            
        </div>
    </div>
</div>
<?php
    include"include/footer.php";
?>