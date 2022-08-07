<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "LoginSystem";

    $con = new mysqli("localhost","root","","LoginSystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Log In user
    if(isset($_POST['submit']))
?>
