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
            <li class="breadcrumb-item active">Edit Customer</li>
          </ol>
<body>            
<?php 
$query = 'SELECT * FROM customers
              WHERE
              customerid ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
              
                $zz=$row['customerid'];
                $q=$row['name'];
                $b=$row['address'];
              }
              $id = $_GET['id'];
?>
             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">
                        <form role="form" method="post" action="edit1customer.php">
                           <div class="form-group">
                              <input type="hidden" name="id" value="<?php echo $zz; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Name" name="name" value="<?php echo $q; ?>" required>
                            </div>                             
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address" value="<?php echo $b; ?>"required>
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

