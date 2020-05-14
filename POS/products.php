<?php
  session_start();
  $count = 0;
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT Product_ID, Product_Image FROM product";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "Full Catalogs of Proudcts";
  require_once "./template/header.php";
?>
  <p class="lead text-center text-muted">Full Catalogs of Products</p>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3">
            <a href="product.php?productid=<?php echo $query_row['Product_ID']; ?>">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row['Product_Image']; ?>">
            </a>
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      </div>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  require_once "./template/footer.php";
?>