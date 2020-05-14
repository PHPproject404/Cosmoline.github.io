<html>
<body>
<?php
    include('connection.php');
			
					$query = 'DELETE FROM owner
							WHERE
							ID = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
			<script type="text/javascript">
				alert("Successfully Deleted");
				window.location = "owner.php";
			</script>
			

</body>
</html>