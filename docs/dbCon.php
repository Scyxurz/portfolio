<?php
    //mysqli(server, username, pass(that you logged into phpMyAdmin with), db)
    $mysqli = new mysqli('localhost', 'aas3447', 'Khoja7^richly', 'aas3447');
    //#conn is holding an object! $conn -> method(), $conn -> property
    //let's do a test
    if(mysqli_connect_errno()){ //if I get in here, something went wrong
        echo 'connection failed: ' . mysqli_connect_errno();
        exit();
    } else{
        //echo 'connection good';
    }
?>