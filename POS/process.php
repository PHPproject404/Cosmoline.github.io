<?php
	session_start();

	$_SESSION['err'] = 1;
	foreach($_POST as $key => $value){
		if(trim($value) == ''){
			$_SESSION['err'] = 0;
		}
		break;
	}
	if($_SESSION['err'] == 0){
		header("Location: purchase.php");
	} else {
		unset($_SESSION['err']);
	}
	require_once "./functions/database_functions.php";
	$title = "Purchase Process";
	require "./template/header.php";
	$conn = db_connect();
    extract($_SESSION['ship']);
    
	$customerid = getCId($name, $address);
	if($customerid == null) {
	$customerid = setCId($name, $address);
	}
	$date = date("Y-m-d H:i:s");
	insertOrder($conn, $customerid, $_SESSION['total_price'], $date, $name, $address);
	$orderid = getOID($conn, $customerid);

	foreach($_SESSION['cart'] as $id => $qty){
		$productprice = getpprice($id);
		$query = "INSERT INTO order_items VALUES 
		('$orderid', '$id', '$productprice', '$qty')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Insert value false!" . mysqli_error($conn2);
			exit;
		}
	}
	session_unset();
?>
	<p class="lead text-success">Your order has been processed sucessfully. Please check your email to get your order confirmation and shipping detail!. 
	Your cart has been empty.</p>

<?php
	if(isset($conn)){
		mysqli_close($conn);
	}
	require_once "./template/footer.php";
?>