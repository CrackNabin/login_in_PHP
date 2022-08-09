
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
    // When form submitted, check and create user session.
    if (isset($_REQUEST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        // Check user exist in the database
        $query    = "SELECT * FROM `users` WHERE `users`.`email`='$email' AND `users`.`status`='active'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $attributes=mysqli_fetch_assoc($result);
        $username=$attributes['username'];
        $token=$attributes["token"];
        if ($rows == 1) {
                $subject = "Password Reset:";
                $body = "Hi, $username. \n\n.===\n\nPlease click on the link below to reset your password:\n\n http://localhost/registeration-login-system-master/reset_password.php?token=$token\n\n";
                $headers = "From: ak02432718@student.ku.edu.np";

                if (mail($email, $subject, $body, $headers)) {
                    $_SESSION['msg'] ="Reset success.";
                    header('Location: login.php');
                } else {
                    echo "Email sending failed...";

                }
        } else {
            echo "<div class='form'>
                  <h3>Email not registered.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
?>
   
    <form class="form" method="post" name="login">
        <h1 class="login-title">Reset Password</h1>
        <input type="text" class="login-input" name="email" placeholder="Enter your email" autofocus="true"/>
        <input type="submit" value="Enter" name="submit" class="login-button"/>
  </form>
</body>
</html>
