<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $hostname = "sql6.freemysqlhosting.net";
    $username = "sql6511791";
    $password = "1vyXxxpJaF";
    $database = "sql6511791";


    $con = new mysqli($hostname,$username,$password,$database);
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    
?>
