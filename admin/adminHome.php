<?php
    include 'connection.php';
    include 'functions.php';
    ?>

<!DOCTYPE html>
     <html lang="en">
         
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style_admin.css">

         <title>AdminHome</title>

     </head>
     <body>
        <div class="body">
       
       
       <h1 text-color="red">Welcome Admin</h1><br><br><br><br><br>
        
        <center><ul>
            <li><a href="http://localhost/Project%203-1%20(Blood%20Mnagement)/DonorInformation/Donor.php">Donor Registration</a></li>
            <li><a href="http://localhost/Project%203-1%20(Blood%20Mnagement)/DonorInformation/DonorList.php">Donor List</a></li>
        </ul><br><br><br><br>
        <ul>
            <li><a href="#">Stock Blood List</a></li>
            <li><a href="#">Out Stock Blood List</a></li>
        </ul>
</center>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
        <p align="center"><a href="http://localhost/Project%203-1%20(Blood%20Mnagement)/logout/logout.php" onclick="Logout()" ><font color="darkblue">Logout</font></a></p>
        
     </body>
     <html>    