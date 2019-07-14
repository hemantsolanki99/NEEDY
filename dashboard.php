<?php
    include "include/nav2.php";
?>
<!-- Panel Bar -->

<?php

//    condition for user to put ads or view others ads

    if(isset($_GET['voftatt'])){

        if($_GET['voftatt'] == "grhd"){
            include "include/adder.php";
        }
        if($_GET['voftatt'] == "grdh"){
            include "include/viewer.php";
        }

    }elseif(isset($_GET['GDy6sGHE4e'])){
    
//     condition for view cart or view products

        if($_GET['GDy6sGHE4e'] == "kivmkuce6K"){
            include "include/cart.php";
        }
        if($_GET['GDy6sGHE4e'] == "a9DSRDNFk"){
            include "include/products.php";
        }
        
    }else{

//    condition for check the user type and according to user type load pages

        if($user_type == "addvertiser"){
            include "include/adv_dash.php";
        }
        if($user_type == "Admin"){
            header("location: admin");
        }
        if($user_type == "user"){
            include "include/usr_dash.php";
        }

    }
//  Encrypted text for $_GET method for page redirect with values   Cl2QIB4DD3nA


?>

<?php
    include "include/footer.php";
?>