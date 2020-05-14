<?php
	session_start();
	if(!isset($_POST['submit'])){
		echo "Something wrong! Check again!";
		exit;
	}
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$email = trim($_POST['email']);
	$pass = trim($_POST['password']);

	if($email == "" || $pass == ""){
		echo "Email or Password is empty!";
		exit;
    }
	$email = mysqli_real_escape_string($conn, $email);
	$pass = mysqli_real_escape_string($conn, $pass);
	$pass = sha1($pass);
	$query = "SELECT email, password from admin";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);

	if($email != $row['email'] && $pass != $row['password']){
		echo "Email or Password is wrong. Check again!";
		$_SESSION['admin'] = false;
		exit;
	}

	if(isset($conn)) {mysqli_close($conn);}
	$_SESSION['admin'] = true;
	header("Location: index.php");
?>