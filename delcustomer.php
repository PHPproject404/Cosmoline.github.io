<html>
<body>
<?php
    include('connection.php');
			
					$query = 'DELETE FROM customers
							WHERE
							customerid = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
			<script type="text/javascript">
				alert("Successfully Deleted");
				window.location = "customer.php";
			</script>
			

</body>
</html>