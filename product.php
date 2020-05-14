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
            <li class="breadcrumb-item active">Product</li>
          </ol>
          <div class="col-lg-12">
                        <h2>List of Product <a href="./POS/admin_add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                      			<th>Product ID</th>
                      			<th>Product Name</th>
                      			<th>Image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT a.Product_ID,a.Product_Name,a.Product_Image,a.Product_Desc,Product_Price, b.Manufacturer_Name FROM product a,manufacturer b WHERE a.Manufacturer_ID=b.Manufacturer_ID GROUP BY Product_ID';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>'. $row['Product_ID'].'</td>';
                            echo '<td>'. $row['Product_Name'].'</td>';
                            echo '<td>'. $row['Product_Image'].'</td>';
                            echo '<td>'. $row['Product_Desc'].'</td>';
                            echo '<td>'. $row['Product_Price'].'</td>';  
                            echo '<td>'. $row['Manufacturer_Name'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info fas fa-search" href="searchfrmproduct.php?action=edit & id='.$row['Product_ID'] . '" ></a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fas fa-pencil-alt" href="./POS/admin_edit.php?action=edit & id='.$row['Product_ID'] . '"></a>';
                           echo ' <a  type="button" class="btn btn-xs btn-danger fas fa-trash-alt" href="./POS/admin_delete.php?action=delete & id=' . $row['Product_ID'] . '"></a> </td>';
                            echo '</tr> ';
                }?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
<?php include('footer.php'); ?>