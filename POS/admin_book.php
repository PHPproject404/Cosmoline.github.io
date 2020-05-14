
<html>
  <head>
    <title><?php echo $title; ?></title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">          
          <a class="navbar-brand" href="#">Store</a>
        </div>       
      </div>
    </nav>
    <?php if(isset($title) && $title == "Index") { ?>
    <?php } ?>
    <div class="container" id="main">

<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "List of Products";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
	<p class="lead"><a href="admin_add.php">Add New Product</a></p>
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Brand</th>
			<th>Image</th>
			<th>Description</th>
			<th>Price</th>
			<th>Manufacturer</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['Product_ID']; ?></td>
			<td><?php echo $row['Product_Name']; ?></td>
			<td><?php echo $row['Product_Brand']; ?></td>
			<td><?php echo $row['Product_Image']; ?></td>
			<td><?php echo $row['Product_Desc']; ?></td>
			<td><?php echo $row['Product_Price']; ?></td>
			<td><?php echo getMname($conn, $row['Manufacturer_ID']); ?></td>
			<td><a href="admin_edit.php?productid=<?php echo $row['Product_ID']; ?>">Edit</a></td>
			<td><a href="admin_delete.php?productid=<?php echo $row['Product_ID']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>