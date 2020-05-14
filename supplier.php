<?php
include('connection.php');
include('topnav.php');
include('sidenav.php');
?>
    <head>   
    <title>Cosmoline</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">      
  </head>
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Customer</li>
          </ol>
          <div class="col-lg-12">
                        <h2>List of Category <a href="addsupplier.php" type="button" class="btn btn-xs btn-info">Add New</a></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                      					<th>Category ID</th>
                      					<th>Category Name</th>     
                                <th>Options</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM manufacturer';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>'. $row['Manufacturer_ID'].'</td>';
                            echo '<td>'. $row['Manufacturer_Name'].'</td>';
                         echo '<td> <a type="button" class="btn btn-xs btn-info fas fa-search" href="searchfrmsupplier.php?action=edit & id='.$row['Manufacturer_ID'] . '" ></a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fas fa-pencil-alt" href="editsupplier.php?action=edit & id='.$row['Manufacturer_ID'] . '"></a>';
                           echo ' <a  type="button" class="btn btn-xs btn-danger fas fa-trash-alt" href="delsupplier.php?action=delete & id=' . $row['Manufacturer_ID'] . '"></a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
<?php include('footer.php'); ?>