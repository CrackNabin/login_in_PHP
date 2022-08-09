<?php

session_start();

include 'db.php';

if(isset($_GET['token'])){

    $token = $_GET['token'];

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee


    //$updatequery = "UPDATE `users` SET `status` = 'active' WHERE `users`.`id` = 26";

     $updatequery = "UPDATE `users` SET `status` = 'active' WHERE `users`.`token` = '$token' ";

    // UPDATE `users` SET `status` = 'active' WHERE `users`.`id` = 26;

   

    $query = mysqli_query($con, $updatequery) or die(mysqli_error($con));

  


    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account activated successfully";
            header('Location: login.php');
       }
        else{
            $_SESSION['msg'] = "You are logged out";
            header('Location: login.php');
<<<<<<< HEAD
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
=======
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
             }
        }
    else{
            $_SESSION['msg'] = "Account activation failed";
<<<<<<< HEAD
<<<<<<< HEAD
            header('Location: /registration.php');
=======
            header('Location: registration.php');
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
=======
            header('Location: registration.php');
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
        }
}

?>