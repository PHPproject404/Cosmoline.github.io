<html>
<head>
<title>Store Management System</title>
</head>
<body>
<?php
			$id = $_POST['user_id'];
			$em = $_POST['email'];
		    $pw = $_POST['password'];
	   include('connection.php');
	 			$query = 'UPDATE admin set email ="'.$em.'", password ="'.$pw.'"
					 WHERE
					user_id ="'.$id.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));						
?>	
	<script type="text/javascript">
			alert("Update Successfully.");
			window.location = "user.php";
		</script>
 </body>
</html>