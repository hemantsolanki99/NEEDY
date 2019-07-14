<?php
session_start();
?>
<?php

if(isset($_GET['Cl2QIB4DD3nA'])){
    
    if($_GET['Cl2QIB4DD3nA'] == "true" && $_GET['Cl2QIB4DnA'] == "false"){
        
        session_unset();
        session_destroy();
?>

    <script type="text/javascript">

        alert("Log out Successfully");
        
        window.location.href = "../admin";
        
    </script>

<?php
    }else{
        header("location: ./");
    }
}else{
        header("location: ./");
}


?>