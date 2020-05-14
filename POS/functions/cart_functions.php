<?php
	function total_price($cart){
		$price = 0.0;
		if(is_array($cart)){
		  	foreach($cart as $id => $qty){
		  		$productprice = getpprice($id);
		  		if($productprice){
		  			$price += $productprice * $qty;
		  		}
		  	}
		}
		return $price;
    }
	function total_items($cart){
		$items = 0;
		if(is_array($cart)){
			foreach($cart as $id => $qty){
				$items += $qty;
			}
		}
		return $items;
	}
?>