<?php	
	if(!isset($_POST['save_change'])){
		echo "Something wrong!";
        exit;
    }
	$id = trim($_POST['id']);
	$name = trim($_POST['name']);
	$desc = trim($_POST['desc']);
	$price = floatval(trim($_POST['price']));
	$manufacturer = trim($_POST['manufacturer']);

	if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
		$image = $_FILES['image']['name'];
		$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
		$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
		$uploadDirectory .= $image;
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
	} 
	require_once("./functions/database_functions.php");
	$conn = db_connect();

	$findman = "SELECT * FROM manufacturer WHERE Manufacturer_Name = '$manufacturer'";
	$findResult = mysqli_query($conn, $findman);
	if(!$findResult){
		$insertman = "INSERT INTO manufacturer(Manufacturer_Name) VALUES ('$manufacturer')";
		$insertResult = mysqli_query($conn, $insertman);
		if(!$insertResult){
			echo "Cant add new Manufacturer " . mysqli_error($conn);
		}
	}
	$query = "UPDATE product SET Product_Name = '$name',
	Product_Desc = '$desc', Product_Price = '$price'";

	if(!isset($image)){
        $query .= "WHERE Product_ID = '$id'";		
	} else {
		$query .= ", Product_Image='$image' WHERE Product_ID = '$id'";
	}

	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Cant update data " . mysqli_error($conn);
	} else {
		header("Location: ../product.php");
	}
?>