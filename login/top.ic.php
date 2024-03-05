<?php

        include 'dbcon.php';
        include 'func.php';
        //----------login form---------------
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "register";

        if (isset($_POST['sbmit'])) {
            $email = $_POST['mail'];
            $pass = $_POST['psword'];
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            //die($email);
            //$pass = password_hash($pass, PASSWORD_BCRYPT);

            $sql = "SELECT * FROM registration WHERE Email='$email' AND Password='$pass'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
            // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $_SESSION['logged'] = true;
                    $_SESSION['email'] = $email;
                    header('location:http://localhost/Project%203-1%20(Blood%20Mnagement)/DonorInformation/DonorList.php');
                    }
            } else {
                echo "Invalid login";
            }
            $conn->close();
    }
    
    
                


        //----------registration ----------

            if(isset($_POST['submit'])){
               $name = mysqli_real_escape_string($con, trim($_POST['name']));
               $email = mysqli_real_escape_string($con, trim($_POST['email']));
               $password = mysqli_real_escape_string($con, trim($_POST['password']));
               $cpassword = mysqli_real_escape_string($con, trim($_POST['cpassword']));

                $emailquery="select * from  registration where email='$email'";
                $query=mysqli_query($con,$emailquery);

                $emailcount=mysqli_num_rows($query);
                echo $password != $cpassword;

                if($emailcount>0){
                    echo "<script>";
                            echo "alert('Email alreay exists')";
                            echo "</script>";
                    
                }
                else{
                    if($password===$cpassword){
                        $insertquery=" insert into `registration`(`ID`, `Email`, `Password`) values ('$username','$email','$password')";
                    
                        $iquerry=mysqli_query($con,$insertquery);

                        if($iquerry){
                            echo "<script>";
                            echo "alert('Inserted Successful')";
                            echo "</script>";
                        }
                        else{
                            echo "<script>";
                            echo "alert('Unsuccessful')";
                            echo "</script>";
                        }
                    }
                    else{
                        echo "<script>";
                            echo "alert('Password are not matching')";
                            echo "</script>";
                        
                    }
                }
            }

     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">

         <title>Document</title>

     </head>
     <html>
         