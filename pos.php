<?php
include "connection.php";
include('topnav.php');

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["id"]))
	{
		$item_array_id = array_column($_SESSION["id"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["id"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'productname'		=>	$_POST["product_name"],
                'brandname'		    =>	$_POST["brand_name"],
				'item_price'		=>	$_POST["price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["id"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'productname'		=>	$_POST["product_name"],
            'brandname'		    =>	$_POST["brand_name"],
			'item_price'		=>	$_POST["price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["id"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["id"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["id"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}
?>
                
<!DOCTYPE HTML>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head> 
    
    <?php
				$query = "SELECT * FROM product ORDER BY Product_ID ASC";
				$result = mysqli_query($db, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>

    <div class="col-xs-3">
				<form method="post" action="pos.php?action=add&id=<?php echo $row["Product_ID"]; ?>">
					<div style="border:1px solid #555; background-color:#f2f2f2; border-radius:5px; padding:20px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" style="float: left; width: auto; margin-right: auto; margin-bottom: 0.5em;" />    
                        <h4 class="text-info"><strong><?php echo $row["Brand_Name"]; ?></strong></h4>
						<h5 class="text-info"><?php echo $row["Product_Name"]; ?></h5>
						<h4 class="text-danger"><strong>$ <?php echo $row["selling_price"]; ?></strong></h4>
                        <strike style='color:red;text-decoration:line-through'><h5 class="text-danger">$ <?php echo $row["disc"]; ?></h5></strike>
                        <style> .form-control { text-align:center; } </style>
						<input type="text" name="quantity" class="form-control" required/>
						<input type="hidden" name="product_name" value="<?php echo $row["Product_Name"]; ?>" />
						<input type="hidden" name="brand_name" value="<?php echo $row["Brand_Name"]; ?>" />
						<input type="hidden" name="price" value="<?php echo $row["selling_price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart"/>
                        </div> 
                    </form>
            </div> 
    <?php
					}
				}
			?>
    <div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr >
						<th width="30%" style="text-align:center">Product Name</th>
                        <th width="30%" style="text-align:center">Brand Name</th>
						<th width="10%" style="text-align:center">Quantity</th>
						<th width="20%" style="text-align:center">Price</th>
						<th width="10%" style="text-align:center">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["id"]))
					{
						$total = 0;
						foreach($_SESSION["id"] as $keys => $values)
						{
					?>
					<tr>
						<td align="center"><?php echo $values["productname"]; ?></td>
                        <td align="center"><?php echo $values["brandname"]; ?></td>
						<td align="center"><?php echo $values["item_quantity"]; ?></td>
						<td align="center">$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td align="center"><a href="pos.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total:</td>
						<td align="center">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
<?php include "footer.php";?>  
    
</html>
