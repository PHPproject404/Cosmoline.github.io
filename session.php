<?php
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: ./POS/admin1.php");
        exit();
    }
?>