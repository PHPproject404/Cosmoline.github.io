
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
            <li class="breadcrumb-item active">Edit Product</li>
          </ol>
<body>
<?php 
$query = 'SELECT * FROM product
              WHERE
              Product_ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['Product_ID'];
                $b=$row['Product_Name'];
                $c=$row['Brand_Name'];
                $d=$row['Quantity'];
                $e=$row['Onhand'];
                $f=$row['Original_price'];
                $g=$row['markup'];
                $h=$row['selling_price'];
                $i=$row['Date_Purchased'];
                $j=$row['Supplier_ID'];
              }
              
              $id = $_GET['id'];
?>
             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">
                        <form role="form" method="post" action="edit1product.php">
                            <div class="form-group">
                              <input class="form-control" placeholder="Product ID" name="Product_ID" value="<?php echo $zz; ?>"required>
                            </div>                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Product Name" name="Product_Name" value="<?php echo $b; ?>"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Brand Name" name="Brand_Name" value="<?php echo $c; ?>"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Quantity" name="Quantity" value="<?php echo $d; ?>"required>
                            </div> 
                             <div class="form-group">
                              <input class="form-control" placeholder="Onhand" name="Onhand" value="<?php echo $e; ?>"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Original Price" name="Original_price" value="<?php echo $f; ?>"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="MarkUp" name="markup" value="<?php echo $g; ?>"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Selling Price" name="selling_price" value="<?php echo $h; ?>">
                            </div>  
                             <div class="form-group">
                              <input class="form-control" placeholder="Date Purchased" name="Date_Purchased" value="<?php echo $i; ?>"required> 
                              </div> 
                             <div class="form-group">
                              <input class="form-control" placeholder="Supplier ID" name="Supplier_ID" value="<?php echo $j; ?>"required>
                              </div>
                           
                            <button type="submit" class="btn btn-default">Update Record</button>
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

