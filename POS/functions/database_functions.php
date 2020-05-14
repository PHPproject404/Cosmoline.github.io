<?php
	function db_connect(){
		$conn = mysqli_connect("localhost", "root", "", "sarisari");
		if(!$conn){
			echo "Can't connect database " . mysqli_connect_error($conn);
			exit;
		}
		return $conn;
	}

	function selectLatestProduct($conn){
		$row = array();
		$query = "SELECT Product_ID, Product_Image FROM product ORDER BY Product_ID DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
		for($i = 0; $i < 4; $i++){
			array_push($row, mysqli_fetch_assoc($result));
		}
		return $row;
	}

    function getAll($conn){
		$query = "SELECT * from product ORDER BY Product_ID DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
	}

	function getProductID($conn, $id){
		$query = "SELECT Product_Name, Product_Price FROM product WHERE Product_ID = '$id'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
	}

    function getMname($conn, $mid){
		$query = "SELECT Manufacturer_Name FROM manufacturer WHERE Manufacturer_ID = '$mid'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		if(mysqli_num_rows($result) == 0){
			echo "Empty books ! Something wrong!";
			exit;
		}

		$row = mysqli_fetch_assoc($result);
		return $row['Manufacturer_Name'];
	}

	function getOID($conn, $customerid){
		$query = "SELECT orderid FROM orders WHERE customerid = '$customerid'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "retrieve data failed!" . mysqli_error($conn);
			exit;
		}
		$row = mysqli_fetch_assoc($result);
		return $row['orderid'];
	}

	function insertOrder($conn, $customerid, $total_price, $date, $ship_name, $ship_address){
		$query = "INSERT INTO orders VALUES 
		('', '" . $customerid . "', '" . $total_price . "', '" . $date . "', '" . $ship_name . "', '" . $ship_address . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Insert orders failed " . mysqli_error($conn);
			exit;
		}
	}

	function getpprice($id){
		$conn = db_connect();
		$query = "SELECT Product_Price FROM product WHERE Product_ID = '$id'";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Get Product Price failed! " . mysqli_error($conn);
			exit;
		}
		$row = mysqli_fetch_assoc($result);
		return $row['Product_Price'];
	}

	function getCId($name, $address){
		$conn = db_connect();
		$query = "SELECT customerid from customers WHERE 
		name = '$name' AND 
		address = '$address'";
		$result = mysqli_query($conn, $query);
		if($result){
			$row = mysqli_fetch_assoc($result);
			return $row['customerid'];
		} else {
			return null;
		}
	}

	function setCId($name, $address){
		$conn = db_connect();
		$query = "INSERT INTO customers VALUES 
			('', '" . $name . "', '" . $address . "')";

		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "insert false !" . mysqli_error($conn);
			exit;
		}
		$customerid = mysqli_insert_id($conn);
		return $customerid;
	}

	

	
?>