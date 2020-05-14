<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    
<?php
    require('connection.php');
    if (isset($_REQUEST['email'])) {        
        $email    = mysqli_real_escape_string($db, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db, $password);       
        $query    = "INSERT into user (password, email)
                     VALUES ('" . md5($password) . "', '$email')";
        $result   = mysqli_query($db, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Registered Successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>Register</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Already have an Account?</a></p>
    </form>
<?php
    }
?>
</body>
</html>