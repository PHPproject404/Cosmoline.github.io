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
    <title>Cosmoline</title>
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
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_GET['id'])){
        $Product_ID = $_GET['id'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($_GET['id'])){
		echo "Empty ID! ";
		exit;
	}
	$query = "SELECT * FROM product WHERE Product_ID = '$Product_ID'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<form method="post" action="editproduct.php">
		<table class="table">
			<tr>
				<th>ID</th>
				<td><input type="text" name="id" value="<?php echo $row['Product_ID'];?>" readOnly></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" value="<?php echo $row['Product_Name'];?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image" id="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="desc" cols="40" rows="5"><?php echo $row['Product_Desc'];?></textarea>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" value="<?php echo $row['Product_Price'];?>" required></td>
			</tr>
			<tr>
				<th>Manufacturer</th>
				<td><input type="text" name="manufacturer" value="<?php echo getMname($conn, $row['Manufacturer_ID']); ?>" required></td>
			</tr>
		</table>
		<input type="submit" name="save_change" id="save_change" value="Change" class="btn btn-primary">
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
            