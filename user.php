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
            <li class="breadcrumb-item active">User</li>
          </ol>
          <div class="col-lg-12">
                        <h2>List of User <a href="adduser.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a></h2>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                <th>User ID</th>                      					
                      			<th>Email</th>
                      			<th>Password</th>
                                <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM admin';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['user_id'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
                            echo '<td>'. $row['password'].'</td>';
                            echo '<td><a  type="button" class="btn btn-xs btn-warning fas fa-pencil-alt" href="edituser.php?action=edit & id='.$row['user_id'] . '"></a>';
                            echo '  <a  type="button" class="btn btn-xs btn-danger fas fa-trash-alt" href="deluser.php?action=delete & id=' . $row['user_id'] . '"></a> </td>';
                            echo '</tr> ';
                }
            ?>        
                                </tbody>
                            </table>
                        </div>
                    </div>
<?php include('footer.php'); ?>