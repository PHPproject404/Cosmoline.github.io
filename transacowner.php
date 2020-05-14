<html>
<?php
include('connection.php');
include('topnav.php');
include('sidenav.php');
?>  
<body>
             <div class="col-lg-12">
                <?php
					    $name = $_POST['name'];
						$phone = $_POST['phonenumber'];
						$address = $_POST['address'];
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO owner
								(ID,Name,Phone_Number,Address)
								VALUES ('Null','".$name."','".$phone."','".$address."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "owner.php";
		</script>
                    </div>                
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>

