<?php

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

        $sql = "SELECT * FROM register WHERE Email='$email' AND Password='$pass'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $_SESSION['logged'] = true;
                $_SESSION['email'] = $email;
                header('location:homepage.php');
            }
        } else {
            echo "Invalid login";
        }
        $conn->close();
    }
    ?>