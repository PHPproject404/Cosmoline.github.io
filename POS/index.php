<?php
  session_start();
  $count = 0;
  $title = "Cosmoline Official Website";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = selectLatestProduct($conn);
?>
      <p class="lead text-center text-muted">Latest Products</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="product.php?productid=<?php echo $book['Product_ID']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['Product_Image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>