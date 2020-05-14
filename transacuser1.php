<?php include('connection.php'); ?>  

                <?php
					    $fn = $_POST['firstname'];
						$ln = $_POST['lastname'];
						$em = $_POST['email'];
						$pw = $_POST['password'];                 
						$pn = $_POST['position'];
					switch($_GET['action']){
						case 'add':			
				$query = "INSERT INTO user (firstname, lastname, email,password,position)
						VALUES ('".$fn."','".$ln."','".$em."',sha1('".$pw."'),'".$pn."')";
						mysqli_query($db,$query)or die ('Error in updating Database');
						break;		
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added");
			window.location = "login.php";
		</script>


