<html>
  <head>
    <title>Store Management System</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="#">Store Management System</a>
    </nav>
    
    <div id="wrapper">
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../customer.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Customer</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../owner.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Owner</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../product.php">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./admin_book.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Transaction</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../supplier.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Supplier</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="../user.php">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
      <div id="content-wrapper">
        <div class="container-fluid">            
     <head>   
    <title>Store Management System</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../css/sb-admin.css" rel="stylesheet">      
  </head>
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../product.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Edit Product</li>
          </ol>
<?php
	session_start();
	require "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_POST['Add'])){
		$id = trim($_POST['id']);
		$id = mysqli_real_escape_string($conn, $id);
		
		$name = trim($_POST['name']);
		$name = mysqli_real_escape_string($conn, $name);

		$brand = trim($_POST['brand']);
		$brand = mysqli_real_escape_string($conn, $brand);
		
		$desc = trim($_POST['desc']);
		$desc = mysqli_real_escape_string($conn, $desc);
		
		$price = floatval(trim($_POST['price']));
		$price = mysqli_real_escape_string($conn, $price);
		
		$manufacturer = trim($_POST['manufacturer']);
		$manufacturer = mysqli_real_escape_string($conn, $manufacturer);
        
		/*if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
			$image = $_FILES['image']['name'];
			$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
			$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
			$uploadDirectory .= $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
		}*/
        
		$findPub = "SELECT * FROM manufacturer WHERE Manufacturer_Name = '$manufacturer'";
		$findResult = mysqli_query($conn, $findPub);
		if(!$findResult){
            
			$insertPub = "INSERT INTO manufacturer(Manufacturer_Name) VALUES ('$manufacturer')";
			$insertResult = mysqli_query($conn, $insertPub);
			if(!$insertResult){
				echo "Can't add new manufacturer " . mysqli_error($conn);
				exit;
			}
			$manufacturerid = mysql_insert_id($conn);
		} else {
			$row = mysqli_fetch_assoc($findResult);
			$manufacturerid = $row['Manufacturer_ID'];
		}


		$query = "INSERT INTO product VALUES ('" . $id . "', '" . $name . "', '" . $image . "', '" . $desc . "', '" . $price . "', '" . $manufacturerid . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location: ../product.php");
		}
	}
?>
	<form method="post" action="admin_add.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ID</th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" required></td>
			</tr>			
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="desc" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required></td>
			</tr>
			<tr>
				<th>Manufacturer</th>
				<td><input type="text" name="manufacturer" required></td>
			</tr>
		</table>
		<input type="submit" name="Add" value="Add new book" class="btn btn-primary">
		<input type="reset" value="Reset" class="btn btn-default">
       <a href="../product.php" class="btn btn-default">Cancel</a>
	</form>
	<br/>          
            </div>
        </div>
    </div> 
 <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Store Management System 2020</span>
            </div>
          </div>
        </footer>     
    </body>
</html>
        