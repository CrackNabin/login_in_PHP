<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "root";
    $database = "LoginSystem";

    $con = new mysqli("localhost","root","root","LoginSystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    
?>
