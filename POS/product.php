<?php
  session_start();
  $title = "Cosmoline Products";
  $productid = $_GET['productid'];
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $query = "SELECT * FROM product WHERE Product_ID = '$productid'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }
  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty Product";
    exit;
  }
  $brand = $row['Product_Name'];
  require "./template/header.php";
?>
      <p class="lead" style="margin: 25px 0"><a href="products.php">Products</a> > <?php echo $row['Product_Name']; ?></p>
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $row['Product_Image']; ?>">
        </div>
        <div class="col-md-6">
          <h4>Product Description</h4>
          <p><?php echo $row['Product_Desc']; ?></p>
          <h4>Product Details</h4>
          <table class="table">
          	<?php foreach($row as $key => $value){
              if($key == "Product_Desc" || $key == "Product_Image" || $key == "Manufacturer_ID"){
                continue;
              }
              switch($key){
                case "Product_ID":
                  $key = "ID";
                  break;
                case "Product_Name":
                  $key = "Name";
                  break;
                case "Product_Price":
                  $key = "Price";
                  break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
          <form method="post" action="cart.php">
            <input type="hidden" name="id" value="<?php echo $productid;?>">
            <input type="submit" value="Add to cart" name="cart" class="btn btn-primary">
          </form>
       	</div>
      </div>
<?php
  require "./template/footer.php";
?>