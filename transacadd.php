<html>
<?php
include('connection.php');
include('topnav.php');
include('sidenav.php');
?> 
    
<body>
<div class="col-lg-12">
                <?php
						$d = $_POST['date'];
					    $p = $_POST['price'];
						$pid = $_POST['pid'];
						$qty = $_POST['qty'];
						$cid = $_POST['cid'];
						$did = $_POST['did'];
					switch($_GET['action']){
						case 'add':	
									$query = "INSERT INTO transaction
								(Date,price,Product_ID,Quantity,Customer_ID,Delivery_ID)
								VALUES ('".$d."','".$p."','".$pid."','".$qty."','".$cid."','".$did."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
								}	
							$sql = "UPDATE product set onhand = onhand-quantity where Product_ID='".$pid."'";
							mysqli_query($db,$sql)or die (mysqli_error($db));
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "transaction.php";
		</script>
                    </div>                
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>

