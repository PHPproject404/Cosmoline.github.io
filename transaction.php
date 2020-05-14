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
            <li class="breadcrumb-item active">Transaction</li>
          </ol>
          <div class="col-lg-12">
                        <h2>List of Transaction <a href="./POS/index.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a></h2> 
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable">
                                <thead>
                                    <tr>
                                        
                      		    <th>Order ID</th>
                      		    <th>Product</th>
                      		    <th>Quantity</th>
                      		    <th>Price</th>                                
                                <th>Total</th>
                                <th>Customer Name</th>                       
                                <th>Address</th>
                                <th>Date Purchased</th> 
                                  </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT a.orderid,d.product_name,a.item_price,a.quantity,c.name,b.amount,b.date,b.ship_address FROM order_items a, orders b,customers c,product d WHERE a.orderid=b.orderid AND a.product_id=d.product_id AND b.customerid=c.customerid group by a.orderid';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['orderid'].'</td>';
                            echo '<td>'. $row['product_name'].'</td>';
                            echo '<td>'. $row['quantity'].'</td>';
                            echo '<td>'. $row['item_price'].'</td>';
                            echo '<td>'. $row['amount'].'</td>'; 
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['ship_address'].'</td>';                           
                            echo '<td>'. $row['date'].'</td>';
                }
            ?>                 
                                </tbody>
                            </table>
                        </div>
                    </div>
<?php include('footer.php'); ?>