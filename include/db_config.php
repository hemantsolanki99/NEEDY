<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'wt_project';

    $mysqli = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if(!$mysqli) {
        die("Unable to Establish a connection " . mysqli_error($conn));
    }

?>