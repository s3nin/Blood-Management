
<?php
require('top.ic.php');
?>
    <body>
        
        <div class="lg">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle_button" onclick="Login()">Log in</button>
                    <button type="button" class="toggle_button" onclick="Register()">Register</button>
                </div>
                <form id="Login" class="inpt"  action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                    <input type="text" name="mail" class="inpt-field" placeholder="Email ID" required>
                    <input type="password" name="psword" class="inpt-field" placeholder="Enter Password" required>
                    <button type="submit" name="sbmit" class="submit_btn">Log in</button>
                </form>
                <form id="Register" class="inpt"  action="" method="POST">
                    <input type="text" name="name" class="inpt-field" placeholder="User Name" required>
                    <input type="email" name="email" class="inpt-field" placeholder="Email Id" required>
                    <input type="password" name="password" class="inpt-field" placeholder="Enter Password" required>
                    <input type="password" name="cpassword" class="inpt-field" placeholder="Confirm Password" required>
                    <button type="submit" name="submit" class="submit_btn">Register</button>
                </form>
            </div>
        </div>
        <script>
            var x=document.getElementById("Login");
            var y=document.getElementById("Register");
            var z=document.getElementById("btn");

            function Register(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }
            function Login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0";
            }
        </script>
    </body>
</html>