<?php
	session_start();
    $title = "Cosmoline Category";
	require_once "./functions/database_functions.php";
	if(isset($_GET['mid'])){
		$mid = $_GET['mid'];
	} else {
		echo "Wrong query! Check again!";
		exit;
	}
	$conn = db_connect();
	$mname = getMname($conn, $mid);

	$query = "SELECT Product_ID,Product_Name, Product_Image FROM product WHERE Manufacturer_ID = '$mid'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty Product ! Please wait until new Products coming!";
		exit;
	}

	$brand = "Product per Category";
	require "./template/header.php";
?>
	<p class="lead"><a href="manufacturer.php">Category</a> > <?php echo $mname; ?></p>
	<?php while($row = mysqli_fetch_assoc($result)){
?>
	<div class="row">
		<div class="col-md-3">
			<img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $row['Product_Image'];?>">
		</div>
		<div class="col-md-7">
			<h4><b><?php echo $row['Product_Name'];?></b></h4>
			<a href="product.php?productid=<?php echo $row['Product_ID'];?>" class="btn btn-primary">Get Details</a>
		</div>
	</div>
	<br>
<?php
	}
	if(isset($conn)) { mysqli_close($conn);}
	require "./template/footer.php";
?>