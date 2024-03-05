<?php
     include 'config.php';

     ?>
    
<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style.css">

         <title>Searching Donor</title>

     </head>

     <body>
      <div class="container" align="center">
            <div class="text-center mt-5 mb-4">
                <br>
            <h1 class="text-center"> Search Donor </h1>
            <br>
			<hr class="white-bar">
			<br><br>

            </div>

           <form name="form" action="" method="POST">
           <table>
                <tr>
                    <td><br>Enter City : </td>
                    <td><br><input type="text" name="city" ></td>
                </tr>
                
                <tr>
                    <td><br>Enter Blood Group : </td>
                    <td><br><input type="text" name="blood_group" ></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center"><br><br>
                        <input type="submit" name="submit1" value="search"><br><br>
                    </td>
                </tr>
            </table>
           </form>
</body>
</html>

<?php
       
      

       if(isset($_POST["submit1"])){
           $res=mysqli_query($con,"SELECT * FROM  donor WHERE city='$_POST[city]'");
           echo "<table border=1>";
           echo "<tr>";
           echo "<th>";     echo "Name"; echo "</th>";
           echo "<th>";     echo "City"; echo "</th>";
           echo "<th>";     echo "Blood group"; echo "</th>";
           echo "<th>";     echo "Gender"; echo "</th>";
           echo "<th>";     echo "Contact number"; echo "</th>";
           echo "<th>";     echo "Email"; echo "</th>";
           echo "</tr>";
           
            while($row=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>";     echo $row["name"]; echo "</td>";
                echo "<td>";     echo $row["city"]; echo "</td>";
                echo "<td>";     echo $row["blood group"]; echo "</td>";
                echo "<td>";     echo $row["gender"]; echo "</td>";
                echo "<td>";     echo $row["Phone number"]; echo "</td>";
                echo "<td>";     echo $row["email"]; echo "</td>";

                echo "</tr>";
            }
            echo "</table>";
       }
       
        ?>