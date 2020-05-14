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
            <li class="breadcrumb-item active">Edit Owner</li>
          </ol>
<body>                
<?php 
$query = 'SELECT * FROM owner
              WHERE
             ID ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {  
                $i= $row['ID'];
                $a=$row['Name'];
                $b=$row['Phone_Number'];
                $c=$row['Address'];
              }
              $id = $_GET['id'];         
?>
             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">
                        <form role="form" method="post" action="edit1owner.php">    
                              <input class="form-control" placeholder="Name" name="id" value="<?php echo $i; ?>" type="hidden">

                            <div class="form-group">
                              <input class="form-control" placeholder="Name" name="name" value="<?php echo $a; ?>"required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Phone Number" name="phonenumber" value="<?php echo $b; ?>"required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address" value="<?php echo $c; ?>"required>
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

