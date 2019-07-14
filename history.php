<?php
    $type2 = " History";
    include "include/nav2.php";
?>

<div class="container-fluid pt-3 mt-5">
    <div class="row">
        <div class="col-md-2 bg-dark">
            <nav class="navbar navbar-nav nav-pills nav-stacked navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="nav-link">View</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Edit</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Delete</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-10">
<?php
    if($user_type == "addvertiser"){
        
        include "include/adv.php";
        
    }else{
        
        include "include/usr.php";
        
    }
?>            
        </div>
    </div>
</div>