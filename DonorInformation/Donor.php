<?php
    include 'connection.php';
    include 'functions.php';

 if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, trim($_POST['name']));
    $email = mysqli_real_escape_string($con, trim($_POST['email']));
    $password = mysqli_real_escape_string($con, trim($_POST['password']));
    $c_password = mysqli_real_escape_string($con, trim($_POST['c_password']));
    $blood_group = mysqli_real_escape_string($con, trim($_POST['blood_group']));
    $gender = mysqli_real_escape_string($con, trim($_POST['gender']));
    $date = mysqli_real_escape_string($con, trim($_POST['date']));
    $contact_no = mysqli_real_escape_string($con, trim($_POST['contact_no']));
    $city = mysqli_real_escape_string($con, trim($_POST['city']));


     $emailquery="select * from  donor where email='$email'";
     $query=mysqli_query($con,$emailquery);

     $emailcount=mysqli_num_rows($query);
     echo $password != $c_password;

     if($emailcount>0){
         echo "<script>";
                 echo "alert('Email alreay exists')";
                 echo "</script>";
         
     }
     else{
         if($password===$c_password){
             $insertquery=" insert into `donor`( `name`, `city`, `blood group`, `gender`, `email`, `Phone number`, `password`) VALUES ('$name','$city','$blood_group','$gender','$email','$contact_no','$password')";
         
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

         <title>Donor Registartion</title>

     </head>
     <body>
     <div class="lg">
     <div class="form-box">
            <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle_button" onclick="Register()">Register</button>
                    
                </div>
                <form margin-left="70px" align="left" class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name : </label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
					</div><!--full name-->
                    <br>
					<div class="form-group">
              <label for="name">Blood Group : </label>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
            <br>
					<div class="form-group">
				              <label for="gender">Gender : </label>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
				    </div><!--gender-->
                    <br>
				    <div class="form-inline">
              <label for="name">Date of Birth : </label>
              <select class="form-control demo-default" id="date" name="date" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>
            </div><!--End form-group-->
            
				    <div class="form-group">
						<label for="fullname">Email : </label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
					</div>
                    <br>
					<div class="form-group">
              <label for="contact_no">Contact No : </label>
              <input type="text" name="contact_no" value="" placeholder="01*********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
            </div><!--End form-group-->
            <br>
					<div class="form-group">
              <label for="city">City : </label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Dhaka" label="&raquo;Dhaka"></optgroup><option value="Dhamrai"> Dhamrai</option><option value="Dohar"> Dohar</option><option value="Keraniganj" >Keraniganj</option><option value="Nawabganj" >Nawabganj</option><option value="Savar">Savar</option><optgroup title="Chattogram" label="&raquo; Chattogram"></optgroup><option value="Anwara" >Anwara</option><option value="Banshkhali" >Banshkhali</option><option value="Boalkhali" >Boalkhali</option><option value="Chandanaish" >Chandanaish</option><option value="Fatikchhari" >Fatikchhari</option><option value="Hathazari" >Hathazari</option><option value="Mirsharai" >Mirsharai</option><option value="Patiya" >Patiya</option><option value="Lohagara" >Lohagara</option><option value="Rangunia" >Rangunia</option><option value="Raozan" >Raozan</option><option value="Sandwip" >Sandwip</option><option value="Satkania" >Satkania</option><option value="Sitakunda" >Sitakunda</option><option value="Bandar" >Bandar</option><option value="Chandgaon" >Chandgaon</option><option value="Double Mooring" >Double Mooring</option><option value="Kotwali" >Kotwali</option><option value="Pahartali" >Pahartali</option><option value="Panchlaish" >Panchlaish</option><optgroup title="Rajshahi" label="&raquo; Rajshahi"></optgroup><option value="Bagha Bagmara" >Bagha Bagmara</option><option value="Charghat" >Charghat</option><option value="Durgapur" >Durgapur</option><option value="Godagari" >Godagari</option><option value="Mohanpur Paba" >Mohanpur Paba</option><option value="Puthia" >Puthia</option><optgroup title="Khulna" label="&raquo; Khulna"></optgroup><option value="Dumuria" >Dumuria"</option><optgroup title="Sylhet" label="&raquo; Sylhet"></optgroup><option value="Sylhet Sadar" >Sylhet Sadar</option><option value="Beanibazar" >Beanibazar</option><optgroup title="Mymensingh" label="&raquo; Mymensingh"></optgroup><option value="Mymensingh" >Mymensingh</option><optgroup title="Barishal" label="&raquo; Barishal"></optgroup><option value="Babuganj" >Babuganj</option><option value="Barishal Sadar" >Barishal Sadar</option><optgroup title="Rangpur" label="&raquo;Rangpur"></optgroup><option value="Rangpur Sadar">Rangpur Sadar</option><option value="Mithapukur">Mithapukur</option></select>
            </div><!--city end-->
            <br>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required >
            </div><!--End form-group-->
            <br>
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required >
            </div><!--End form-group-->
            <br>
            
			
					<div class="form-group">
						<button  id="submit_btn" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
               </div>
        </div>
        </body>
</html>