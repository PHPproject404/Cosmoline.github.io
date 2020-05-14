<?php
	$title = "Admin Login";
?>
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
          <a class="navbar-brand" href="#">Admin Login</a>
        </div>
        </div>
    </nav>
    <?php if(isset($title) && $title == "Index") { ?>
    <?php } ?>
    <div class="container" id="main">
	<form class="form-horizontal" method="post" action="admin_verify1.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Email:</label>
			<div class="col-md-4">
				<input type="text" name="email" class="form-control" placeholder="Email Address" required>
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password:</label>
			<div class="col-md-4">
				<input type="password" name="password" class="form-control" placeholder="Password" required>
			</div>
		</div>
        <center><input type="submit" name="submit" value="LOGIN" class="btn btn-primary"></center>
	</form>

<?php
	require_once "./template/footer.php";
?>