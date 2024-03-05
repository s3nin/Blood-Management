<?php
    session_start();
    $un=$_SESSION['un'];
    unset($un);
    header('Location:http://localhost/Project%203-1%20(Blood%20Mnagement)/homepage/homepage.php');
   // echo "hello";
    ?>