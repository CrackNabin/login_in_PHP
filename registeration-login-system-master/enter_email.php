
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
<<<<<<< HEAD
<<<<<<< HEAD
    // When form submitted, check email and send reset link.
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        // Check user is exist in the database
        $query = "SELECT * FROM `users` WHERE `users`.`email`='$email'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        
        if ($rows == 1) { 
                    $subject = "Reset Password:";
                    $body = "Hi, $email.\n\nThank you for registering at our website.\n
                    \nPlease click on the link below to activate your account:\n
                    \n http://localhost/registeration-login-system-master/reset_password.php?token=$token\n\n";
                    $headers = "From: ak02432718@student.ku.edu.np";
    
                    if (mail($email, $subject, $body, $headers)) {
                        $_SESSION['msg'] ="Registration successful. Please check your email to activate your account.";
                        header('Location: login.php');
                    } else {
                        echo "Email sending failed...";
                    }
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
=======
=======
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
    // When form submitted, check and create user session.
    if (isset($_REQUEST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        // Check user exist in the database
        $query    = "SELECT * FROM `users` WHERE `users`.`email`='$email' AND `users`.`status`='active'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $attributes=mysqli_fetch_assoc($result);
        $token=$attributes["token"];
        if ($rows == 1) {
                $subject = "Password Reset:";
                $body = "Hi, $email. \n\n.===\n\nPlease click on the link below to reset your password:\n\n http://localhost/registeration-login-system-master/reset_password.php?token=$token\n\n";
                $headers = "From: n02431918@student.ku.edu.np";

                if (mail($email, $subject, $body, $headers)) {
                    $_SESSION['msg'] ="Reset success.";
                    header('Location: reset_password.php');
                } else {
                    echo "Email sending failed...";

                }
        } else {
            echo "<div class='form'>
                    $email
                  <h3>Email not registered.</h3><br/>
<<<<<<< HEAD
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
=======
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<<<<<<< HEAD
<<<<<<< HEAD
    <form class="form" method="post" name="login">
        <h1 class="login-title">Reset Password</h1>
        <div><p> <?php  echo $_SESSION['msg']; ?> </p></div>
        <input type="text" class="login-input" name="email" placeholder="Enter your Email" autofocus="true"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
=======
=======
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
   
    <form class="form" method="post" name="login">
        <?php echo "<h1>$rows </h1>"; ?>
        <h1 class="login-title">Reset Password</h1>
        <input type="text" class="login-input" name="email" placeholder="Enter your email" autofocus="true"/>
        <input type="submit" value="Enter" name="submit" class="login-button"/>
<<<<<<< HEAD
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
=======
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
  </form>
<?php
    }
?>
</body>
</html>
