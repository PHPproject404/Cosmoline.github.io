<html>
<head>
<title>Store Management System</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$name = $_POST['name'];
			$phone = $_POST['phonenumber'];
		    $address = $_POST['address'];
	   include('connection.php');
	 			$query = 'UPDATE owner set Name ="'.$name.'",
					Phone_Number ="'.$phone.'", Address ="'.$address.'"
					 WHERE
					ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));						
?>	
	<script type="text/javascript">
			alert("Update Successfully.");
			window.location = "owner.php";
		</script>
 </body>
</html>