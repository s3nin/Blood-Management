<?php

    $server="localhost";
    $user="root";
    $password="";
    $db="register";
    
    $con=mysqli_connect($server,$user,$password,$db);

    if($con){
        echo "<script>";
        echo "alert('Connection Successful')";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('No Connection')";
        echo "</script>";
    }

?>