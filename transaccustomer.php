<html>
<?php
include('connection.php');
include('topnav.php');
include('sidenav.php');
?>  
<body>
             <div class="col-lg-12">
                <?php
					    $fname = $_POST['fname'];
					    $lname = $_POST['lname'];
						$address = $_POST['address'];
						$age = $_POST['age'];
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO customer
								(Customer_ID, firstname, lastname, Address, Age)
								VALUES ('Null','".$fname."','".$lname."','".$address."','".$age."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							break;}?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "customer.php";
		</script>
       </div>                
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>

