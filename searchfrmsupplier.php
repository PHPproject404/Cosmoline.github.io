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
              <a href="adminpage.php">Home</a>
            </li>
            <li class="breadcrumb-item active">View Supplier</li>
          </ol>
<body>
<?php 
$query = 'SELECT * FROM manufacturer
              WHERE
              Manufacturer_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $i= $row['Manufacturer_ID'];
                $a=$row['Manufacturer_Name'];
              }
              
              $id = $_GET['id'];
?>
             <div class="col-lg-12">
                  <h2>Detailed Records</h2>
                      <div class="col-lg-6">
                        <form role="form" method="post" action="supplier.php">
                            <div class="form-group">
                              <input class="form-control" placeholder="Manufacturer ID" name="Manufacturer_ID" value="<?php echo $i; ?>" readonly>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Manufacturer Name" name="Manufacturer_Name" value="<?php echo $a; ?>"readonly>
                            </div> 
                            
                            <button type="submit" class="btn btn-default">Return to Main Menu</button>
                      </form>  
                    </div>
                </div>   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>

