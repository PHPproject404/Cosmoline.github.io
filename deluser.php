<html>
<body>
<?php
    include('connection.php');
			
					$query = 'DELETE FROM admin
							WHERE
							user_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
			<script type="text/javascript">
				alert("Successfully Deleted");
				window.location = "user.php";
			</script>
</body>
</html>