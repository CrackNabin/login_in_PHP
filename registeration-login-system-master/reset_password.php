
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Password Reset</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_REQUEST['new_password'])) {
        $token = $_GET['token'];
        $new_password = stripslashes($_REQUEST['new_password']);    // removes backslashes
        $confirm_password=stripslashes($_REQUEST['confirm_password']);
        $email = mysqli_real_escape_string($con, $email);
        // Check user exist in the database
        if ($new_password==$confirm_password){
            $query    = "Update `users` SET `users`.`password`='" . md5($new_password) . "' WHERE `users`.`token`='$token' AND `users`.`status`='active'";
            $result = mysqli_query($con, $query) or die(mysql_error());
        } else {
            echo "<div class='form'>
                    Password did not match
                  <h3>Email not registered.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
?>
   
    <form class="form" method="post" name="login">
        <h1 class="login-title">Reset Password</h1>
        <input type="password" class="login-input" name="new_password" placeholder="Enter your new Password"/>
        <input type="password" class="login-input" name="confirm_password" placeholder="Confirm Password"/>
        <input type="submit" value="Confirm" name="submit" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>
