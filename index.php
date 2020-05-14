<html>
<?php
include('connection.php');
include('topnav.php');
?>
    <head>   
    <title>Cosmoline</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">      
  </head>
<div id="wrapper">
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./POS/index.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Shop</span>
          </a>
        </li>        
          <li class="nav-item">
          <a class="nav-link" href="session.php">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Management</span>
          </a>
        </li>
      </ul>
    
      <div id="content-wrapper">
        <div class="container-fluid">          
         
<?php include('breadcrumbs.php');?>

        </div>
    </div>
</div>

          <?php include('footer.php'); ?>
</html>
