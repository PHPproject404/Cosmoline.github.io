<html>
<?php
include('connection.php');
include('topnav.php');
include('sidenav.php'); 
?>  
<body>
    <?php 
        $query = "SELECT user_id FROM user";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
          $uid = $row['user_id'];
        }
        ?>
    <?php 
        $query = "SELECT Customer_ID FROM customer";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
          $cid = $row['Customer_ID'];
        }
        ?>
    <?php 
        $query = "SELECT Product_ID FROM product";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
          $pid = $row['Product_ID'];
        }
        ?>
    <?php 
        $query = "SELECT Delivery_ID FROM deliveryid";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
          $deli = $row['Delivery_ID'];
        }
        ?>
             <div class="col-lg-12">
                <?php
					    $date = date('Y-m-d'); 
					    $qnt = $_POST['qnt'];
						$prc = $_POST['prc'];
						$ttal = $_POST['ttt'];
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO transaction(Date,user_id,Customer_ID,Product_ID,Quantity,price,total,Delivery_ID)
								VALUES ('".$date."','".$uid."','".$cid."','".$pid."','".$qnt."','".$prc."','".$ttal."','".$deli."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							break;}?>
    	<script type="text/javascript">
			alert("Successfully added");
			window.location = "pos.php";
		</script>
       </div>                
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>

