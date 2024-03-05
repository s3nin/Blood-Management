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
         <link rel="stylesheet" href="style.css">

         <title>Donor List</title>
            <style type="text/css">
                td{
                    width: 10px;
                    height:40px;
                }
            </style>
     </head>
     <body>
     <div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center"> Donor List </h1>
			<hr class="white-bar">
			<br>
         
    
     <div class="bodydiv">
         <center>
         
 
             <div class="form" style="padding: 40px 0px 0px 5px;" action="http://localhost/Project%203-1%20(Blood%20Mnagement)/Search/SearchingDonor.php" method="POST">
                <table border="1" cellspacing="0" cellpadding="0" style="width:100%">
                    <tr>
                        <td><center><b><font color="darkred">Name</font></b></center></td>
                        <td><center><b><font color="darkred">City</font></b></center></td>
                        <td><center><b><font color="darkred">Blood Group</font></b></center></td>
                        <td><center><b><font color="darkred">Gender</font></b></center></td>
                        <td><center><b><font color="darkred">Mobile No</font></b></center></td>
                        <td><center><b><font color="darkred">Email</font></b></center></td>
                    </tr>
                    
                    <?php
                        $sql = "SELECT * FROM donor";
                        $result = $con->query($sql);


            if ($result->num_rows > 0) {
            // output data of each row
                while ($row = $result->fetch_assoc()) {
                             ?>
                                <tr>
                                <td><center><?php echo $row["name"];?></center></td>
                                <td><center><?php echo $row["city"];?></center></td>
                                <td><center><?php echo $row["blood group"];?></center></td>
                                <td><center><?php echo $row["gender"];?></center></td>
                                <td><center><?php echo $row["Phone number"];?></center></td>
                                <td><center><?php echo $row["email"];?></center></td>
                               
                            </tr>
                            <?php
                         }}
                         
                         $con->close();
                         ?>
                    
                </table>
             </div>
         </center>
         </div>
        
     </body>
     
</html>