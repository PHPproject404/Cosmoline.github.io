<?php

	session_start();
	require_once "./functions/database_functions.php";
	require_once "./functions/cart_functions.php";
	if(isset($_POST['id'])){
		$productid = $_POST['id'];
	}
	if(isset($productid)){
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();
			$_SESSION['total_items'] = 0;
			$_SESSION['total_price'] = '0.00';
		}
		if(!isset($_SESSION['cart'][$productid])){
			$_SESSION['cart'][$productid] = 1;
		} elseif(isset($_POST['cart'])){
			$_SESSION['cart'][$productid]++;
			unset($_POST);
		}
	}
	if(isset($_POST['save_change'])){
		foreach($_SESSION['cart'] as $id =>$qty){
			if($_POST[$id] == '0'){
				unset($_SESSION['cart']["$id"]);
			} else {
				$_SESSION['cart']["$id"] = $_POST["$id"];
			}
		}
	}
	$title = "Cosmoline Cart";
	require "./template/header.php";
	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		$_SESSION['total_price'] = total_price($_SESSION['cart']);
		$_SESSION['total_items'] = total_items($_SESSION['cart']);
?>
   	<form action="cart.php" method="post">
	   	<table class="table">
	   		<tr>
	   			<th>Item</th>
	   			<th>Price</th>
	  			<th>Quantity</th>
	   			<th>Total</th>
	   		</tr>
	   		<?php
		    	foreach($_SESSION['cart'] as $id => $qty){
					$conn = db_connect();
					$product = mysqli_fetch_assoc(getProductID($conn, $id));
			?>
			<tr>
				<td><?php echo $product['Product_Name']; ?></td>
				<td><?php echo "P" . $product['Product_Price']; ?></td>
				<td><input type="text" value="<?php echo $qty; ?>" size="2" name="<?php echo $id; ?>"></td>
				<td><?php echo "P" . $qty * $product['Product_Price']; ?></td>
			</tr>
			<?php } ?>
		    <tr>
		    	<th>&nbsp;</th>
		    	<th>&nbsp;</th>
		    	<th><?php echo $_SESSION['total_items']; ?></th>
		    	<th><?php echo "P" . $_SESSION['total_price']; ?></th>
		    </tr>
	   	</table>
	   	<input type="submit" class="btn btn-primary" name="save_change" value="Save Changes">
	</form>
	<br/><br/>
	<a href="checkout.php" class="btn btn-primary">Go To Checkout</a> 
	<a href="products.php" class="btn btn-primary">Continue Shopping</a>
<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some products in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>