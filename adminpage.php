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
            <li class="breadcrumb-item active">Admin Page</li>
          </ol>
         <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <a href="customer.php" style="color: black; text-decoration: none;">
              <div class="card text-black o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Customer's Table</div>
                  <?php 
                  $query = 'SELECT COUNT(*) FROM customers';
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                  while ($row = mysqli_fetch_array($result)) {
                      echo "$row[0]";
                    }
                  ?> Record(s)
                </div>
                 <a class="card-footer text-white clearfix small z-1" href="customer.php">
                  <span class="float-left">View Table</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </a>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <a href="owner.php" style="color: black; text-decoration: none;">
              <div class="card text-green bg o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-calendar-alt"></i>
                  </div>
                  <div class="mr-5">Owner's Table</div>
                  <?php 
                  $query = 'SELECT COUNT(*) FROM owner';
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                  while ($row = mysqli_fetch_array($result)) {
                      echo "$row[0]";
                    }
                  ?> Record(s)
                </div> 
                <a class="card-footer clearfix small z-1" href="owner.php" style="color: black;">
                  <span class="float-left">View Table</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </a>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <a href="product.php" style="color: black; text-decoration: none;">
              <div class="card text-black o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Product's table</div>
                  <?php 
                  $query = 'SELECT COUNT(*) FROM product';
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                  while ($row = mysqli_fetch_array($result)) {
                      echo "$row[0]";
                    }
                  ?> Record(s)
                </div>
                <a class="card-footer text-white clearfix small z-1" href="product.php">
                  <span class="float-left">View Table</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a> 
              </div>
            </a>
            </div>
             <div class="col-xl-3 col-sm-6 mb-3">
              <a href="transaction.php" style="color: black; text-decoration: none;">
              <div class="card text-green bg o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Transaction Table</div>
                  <?php 
                  $query = 'SELECT COUNT(*) FROM orders';
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                  while ($row = mysqli_fetch_array($result)) {
                      echo "$row[0]";
                    }
                  ?> Record(s)
                </div>
                <a class="card-footer clearfix small z-1" href="transaction.php" style="color: black;">
                  <span class="float-left">View Table</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a> 
              </div>
            </a>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <a href="supplier.php" style="color: black; text-decoration: none;">
              <div class="card text-green bg o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Supplier's Table</div>
                  <?php 
                  $query = 'SELECT COUNT(*) FROM manufacturer';
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                  while ($row = mysqli_fetch_array($result)) {
                      echo "$row[0]";
                    }
                  ?> Record(s)
                </div>
                <a class="card-footer clearfix small z-1" href="supplier.php" style="color: black;">
                  <span class="float-left">View Table</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a> 
              </div>
            </a>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <a href="user.php" style="color: black; text-decoration: none;">
              <div class="card text-green bg o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Admin's Table</div>
                  <?php 
                  $query = 'SELECT COUNT(*) FROM admin';
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));
                  while ($row = mysqli_fetch_array($result)) {
                      echo "$row[0]";
                    }
                  ?> Record(s)
                </div>
                <a class="card-footer clearfix small z-1" href="user.php" style="color: black;">
                  <span class="float-left">View Table</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </a>
            </div>             
          </div> 

<?php include('footer.php'); ?>
