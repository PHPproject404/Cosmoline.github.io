<html>
<body>
<?php
			$product = $_POST['Product_ID'];
					    $pname = $_POST['Product_Name'];
						$bname = $_POST['Brand_Name'];
						$quantity= $_POST['Quantity'];
						$onhand = $_POST['Onhand'];
						$original_price = $_POST['Original_price'];
						$mark_up = $_POST['markup'];
						$selling_price = $_POST['selling_price'];
						$date_purchased = $_POST['Date_Purchased'];
				        $sid = $_POST['Supplier_ID'];						
	   include('connection.php');
	 			$query = 'UPDATE product set Product_Name ="'.$pname.'",
					Brand_Name ="'.$bname.'", Quantity="'.$quantity.'",Onhand="'.$onhand.'",Original_price="'.$original_price.'",markup="'.$mark_up.'",selling_price="'.$selling_price.'",Date_Purchased="'.$date_purchased.'"
				,Supplier_ID="'.$sid.'" WHERE
					Product_ID ="'.$product.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>	
	<script type="text/javascript">
			alert("Update Successfully.");
			window.location = "product.php";
		</script>
 </body>
</html>