<html>
<body>
<?php
			            $sid = $_POST['Manufacturer_ID'];
					    $sname = $_POST['Manufacturer_Name'];
	   include('connection.php');
	 			$query = 'UPDATE manufacturer set Manufacturer_Name ="'.$sname.'"
					 WHERE
					Manufacturer_ID ="'.$sid.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));	
?>	
	<script type="text/javascript">
			alert("Update Successfully.");
			window.location = "supplier.php";
		</script>
 </body>
</html>