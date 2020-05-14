<html>
<body>
<?php
    include('connection.php');
			
					$query = 'DELETE FROM manufacturer
							WHERE
							Manufacturer_ID = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
			<script type="text/javascript">
				alert("Successfully Deleted");
				window.location = "supplier.php";
			</script>
</body>
</html>