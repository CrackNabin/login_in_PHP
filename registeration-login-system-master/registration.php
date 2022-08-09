<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
<<<<<<< HEAD
<<<<<<< HEAD
        $token = bin2hex(random_bytes(10));
=======
        $token = bin2hex(random_bytes(16));
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
=======
        $token = bin2hex(random_bytes(16));
>>>>>>> 0a6e92d51bc4689f9323cac5514aaf61e0c15dee
        $query    = "INSERT into `users` (username, password, email, create_datetime, token, status)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime', '$token','inactive')";
        $result   = mysqli_query($con, $query);
        if ($result) {
           
                $subject = "Email Verification:";
                $body = "Hi, $username.\n\nThank you for registering at our website.\n\nPlease click on the link below to activate your account:\n\n http://localhost/registeration-login-system-master/activate.php?token=$token\n\n";
                $headers = "From: ak02432718@student.ku.edu.np";

                if (mail($email, $subject, $body, $headers)) {
                    $_SESSION['msg'] ="Registration successful. Please check your email to activate your account.";
                    header('Location: login.php');
                } else {
                    echo "Email sending failed...";
                }
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
