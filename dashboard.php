<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <center><p>Welcome, <?php echo $_SESSION['email']; ?>!</p></center>
        <center><p> You are now entering the <a href="adminpage.php"> Admin Page.</a></p></center>
    </div>
</body>
</html>