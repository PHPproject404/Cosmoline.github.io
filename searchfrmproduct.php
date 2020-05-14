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
              <a href="adminpage.php">Home</a>
            </li>
            <li class="breadcrumb-item active">View Product</li>
          </ol>
<body>
<?php 
$query = 'SELECT * FROM product
              WHERE
             Product_ID ='. $_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $i= $row['Product_ID'];
                $a=$row['Product_Name'];
                $c=$row['Product_Image'];
                $d=$row['Product_Desc'];
                $e=$row['Product_Price'];
                $f=$row['Manufacturer_ID'];
              }
              $id = $_GET['id'];
?>

             <div class="col-lg-12">
                  <h2>Detailed Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="product.php">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Product ID" name="id" value="<?php echo $i; ?>"readonly>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Product Name" name="pname" value="<?php echo $a; ?>" readonly>
                            </div>                              
                            <div class="form-group">
                              <input class="form-control" placeholder="Image Title" name="image" value="<?php echo $c; ?>" readonly>
                            </div> 
                            
                             <div class="form-group">
                              <input class="form-control" placeholder="Desc" name="desc" value="<?php echo $d; ?>"readonly>
                            </div> 
                             <div class="form-group">
                              <input class="form-control" placeholder="Price" name="price" value="<?php echo $e; ?>"readonly>
                            </div>                             
                             <div class="form-group">
                              <input class="form-control" placeholder="Manufacturer ID" name="mid" value="<?php echo $f; ?>" readonly>
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
</html>

