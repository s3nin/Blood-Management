<?php
    include 'connection.php';
    include 'functions.php';

    if(isset($_POST['sbmit'])){
        $un=get_safe_value($con,$_POST['un']);
        $ps=get_safe_value($con,$_POST['ps']);

        $q="select * from admin where uname='$un' and pass='$ps'";
        $res=mysqli_query($con,$q);
        $count=mysqli_num_rows($res);
        if($count)
        {
            $_SESSION['ADMIN_LOGIN']='yes';
            $_SESSION['ADMIN_USERNAME']='$un';
          //  header('location:http://localhost/Project%203-1%20(Blood%20Mnagement)/admin/adminHome.php');
          //  die();
            echo "<script>";
            echo "alert('Welcome Admin')";
            echo "</script>";
            header('location:http://localhost/Project%203-1%20(Blood%20Mnagement)/admin/adminHome.php');
            die();
        }
        else{
            echo "<script>";
            echo "alert('Wrong user')";
            echo "</script>";
                    
        }
    }
?>
<!DOCTYPE html>
     <html lang="en">
         
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style_admin.css">

         <title>Admin Login</title>

     </head>
     <body>
     <div class="lg">
     <div class="form-box">
            <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle_button" onclick="Login()">Log in</button>
                    
                </div>
                <form id="Login" class="inpt"  action="" method="POST">
                    <input type="text" name="un" class="inpt-field" placeholder="User Name" required>
                    <input type="password" name="ps" class="inpt-field" placeholder="Enter Password" required>
                    <button type="submit" name="sbmit" class="submit_btn">Log in</button>
                    
                </form>

               </div>
        </div>
        

     </body>
     <html>
         