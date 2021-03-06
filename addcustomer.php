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
            <li class="breadcrumb-item active">Add Customer</li>
          </ol>
<body>
             <div class="col-lg-12">
                  <h2>Add New Records</h2>
                      <div class="col-lg-6">
                        <form role="form" method="post" action="transaccustomer.php?action=add">
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="fname" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lname" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Age" name="age" required>
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
    <?phpinclude('footer.php');?>
</html>

