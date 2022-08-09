
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
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Reset Password</h1>
        <div><p> <?php  echo $_SESSION['msg']; ?> </p></div>
        <input type="text" class="login-input" name="email" placeholder="Enter your Email" autofocus="true"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>
