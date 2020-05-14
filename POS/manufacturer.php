<?php
	session_start();
    $title = "Cosmoline Porducts";
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "SELECT * FROM manufacturer ORDER BY Manufacturer_ID";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty Manufacturer ! Something wrong!";
		exit;
	}

	$brand = "List Of Brand";
	require "./template/header.php";
?>
	<p class="lead">List of Products</p>
	<ul>
	<?php 
		while($row = mysqli_fetch_assoc($result)){
			$count = 0; 
			$query = "SELECT Manufacturer_ID FROM product";
			$result2 = mysqli_query($conn, $query);
			if(!$result2){
				echo "Can't retrieve data " . mysqli_error($conn);
				exit;
			}
			while ($ppb = mysqli_fetch_assoc($result2)){
				if($ppb['Manufacturer_ID'] == $row['Manufacturer_ID']){
					$count++;
				}
			}
	?>
		<li>
			<span class="badge"><?php echo $count; ?></span>
		    <a href="ppb.php?mid=<?php echo $row['Manufacturer_ID']; ?>"><?php echo $row['Manufacturer_Name']; ?></a>
		</li>
	<?php } ?>
		<li>
			<a href="products.php">Full List of Products</a>
		</li>
	</ul>
<?php
	mysqli_close($conn);
	require "./template/footer.php";
?>