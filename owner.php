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
            <li class="breadcrumb-item active">Owner</li>
          </ol>
          <div class="col-lg-12">
                        <h2>List of Owner <a href="addowner.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a></h2>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                      					<th>Name</th>
                      					<th>Phone number</th>
                      					<th>Address</th>
                      					<th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM owner';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['ID'].'</td>';
                            echo '<td>'. $row['Name'].'</td>';
                            echo '<td>'. $row['Phone_Number'].'</td>';
                            echo '<td>'. $row['Address'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info fas fa-search" href="searchfrmowner.php?action=edit & id='.$row['ID'] . '" ></a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fas fa-pencil-alt" href="editowner.php?action=edit & id='.$row['ID'] . '"></a>';
                            echo ' <a  type="button" class="btn btn-xs btn-danger fas fa-trash-alt" href="delowner.php?action=delete & id=' . $row['ID'] . '"></a> </td>';
                            echo '</tr> ';
                }
            ?>                                     
                                </tbody>
                            </table>
                        </div>
                    </div>
<?php include('footer.php'); ?>