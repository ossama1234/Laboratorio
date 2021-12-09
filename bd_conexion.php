<?php 

    $conn = new mysqli('fdb33.awardspace.net','4003669_admin','corriendo1234','4003669_admin');

    if($conn->connect_error){

        echo $error -> $conn->connect_error;


    }

    $conn->set_charset("utf8");


?>