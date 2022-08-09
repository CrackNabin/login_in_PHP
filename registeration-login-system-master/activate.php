<?php

session_start();

include 'db.php';

if(isset($_GET['token'])){

    $token = $_GET['token'];

    $updatequery = "UPDATE 'users' SET status = 'active' WHERE 'users'.'token' = '$token' ";

    $query = mysqli_query($con, $updatequery) or die(mysqli_error($con));

    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account activated successfully";
            header('Location: /login.php');
       }
        else{
            $_SESSION['msg'] = "You are logged out";
            header('Location: /login.php');
             }
        }
    else{
            $_SESSION['msg'] = "Account activation failed";
            header('Location: /registration.php');
        }
}

?>