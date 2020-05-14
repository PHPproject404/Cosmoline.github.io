<html>
  <head>
    <title><?php echo $title; ?></title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">          
          <a class="navbar-brand" href="./index.php">Cosmoline</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="manufacturer.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Category</a></li>
              <li><a href="products.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Product</a></li>
              <li><a href="about.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; About Us</a></li>
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php if(isset($title) && $title == "Index") { ?>
    <?php } ?>
    <div class="container" id="main">