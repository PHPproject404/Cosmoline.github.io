<html>
<?php
include('connection.php');
include('topnav.php');
include('sidenav.php');
?>  
<body>
             <div class="col-lg-12">
                <?php
						$product = $_POST['prod_id'];
					    $pname = $_POST['prod_name'];
						$bname = $_POST['brand_name'];
						$qnty = $_POST['qnty'];
						$quantity = $_POST['Qty'];
						$onhand = $_POST['onhand'];
						$selling = $_POST['selling'];
						$dpurchased = $_POST['date_purchased'];
						$supplier = $_POST['supplier'];
					switch($_GET['action']){
						case 'add':	
						for ($i=1; $i <= $qnty; $i++) { 
									$query = "INSERT INTO product
								(Product_ID,Product_Name,Brand_Name,Quantity,Onhand,
								selling_price,Date_Purchased,Supplier_ID)
								VALUES ('Null','".$pname."','".$bname."','".$quantity."','".$onhand."','".$selling."','".$dpurchased."','".$supplier."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
								}		
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "product.php";
		</script>
                    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>

