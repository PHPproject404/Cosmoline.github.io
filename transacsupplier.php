<html>
<?php
include('connection.php');
include('topnav.php');
include('sidenav.php');
?>  
    <head>   
    <title>Store Management System</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">      
  </head>
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Supplier</li>
          </ol>
<body>
             <div class="col-lg-12">
                <?php
					    $sname = $_POST['Manufacturer_Name'];
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO manufacturer
								(Manufacturer_Name)
								VALUES ('".$sname."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
						break;	
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "supplier.php";
		</script>
        </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

