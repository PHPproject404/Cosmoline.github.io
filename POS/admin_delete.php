<?php
	$productid = $_GET['id'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM product WHERE Product_ID = '$productid'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: ../product.php");
?>