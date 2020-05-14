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
            <li class="breadcrumb-item active">Add Product</li>
          </ol>
<body>
             <div class="col-lg-12">
                  <h2>Add New Records</h2>
                      <div class="col-lg-6">
                        <?php
                        $query = "SELECT * FROM product";
                        $result = mysqli_query($db,$query)
                        ?>
                        <form role="form" method="post" action="transacproduct.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" hidden placeholder="Product ID" name="id">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Product Name" name="name" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Product Brand" name="brand" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Image" name="brand_name" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Quantity" name="qnty" type="number" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" hidden value="1" placeholder="Quantity" type="number" name="Qty">
                            </div>
                            <div class="form-group">
                              <input class="form-control" hidden value="1" placeholder="Onhand" type="number" name="onhand">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Selling Price" name="selling" type="number" required>
                            </div> 
                           <div class="form-group">
                              <input class="form-control" type="date" placeholder="Date Purchased" name="date_purchased" required>
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="supplier">
                                <option selected disabled>Suppliers:</option>
                                <?php while($row = mysqli_fetch_array($result)):;?>
                                <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                              <?php endwhile; ?>
                              </select>
                            </div> 
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear</button>
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

