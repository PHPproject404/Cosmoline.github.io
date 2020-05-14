
<html>
<head>
<title>Store Management System</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$name = $_POST['name'];
		    $address = $_POST['address'];	
			
	   include('connection.php');		
	 			$query = 'UPDATE customers set name ="'.$name.'",
					Address ="'.$address.'"
					 WHERE
					customerid ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
    ?>	
	<script type="text/javascript">
			alert("Update Successfully");
			window.location = "customer.php";
		</script>
 </body>
</html>