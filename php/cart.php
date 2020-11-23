<?php
function add_product($productID, $quantity) {
	global $products;
	if ($quantity < 1) return;
	
	if (isset($_SESSION['cart'][$productID] {
		$quantity += $_SESSION['cart'][$productID]['qty'];
		update_product($productID, $quantity);
		return;
	}
	
	//add item
	$cost = $products[$productID]['cost'];
	$total = $cost * $quantity;
	$item = array (
		'name' => $products[$productID]['name'],
		'cost' => $cost,
		'qty' => $quantity,
		'total' => $total
	);
	$_SESSION['cart'][$productID] = $item;
}

function update_product($productID, $quantity) {
	$quantity = (int) $quantity;
	if (isset($_SESSION['cart'][$productID])) {
		if ($quantity <= 0) {
			unset($_SESSION['cart'][$productID]);
		}
		else {
			$_SESSION['cart'][$productID]['qty'] = $quantity;
			$total = $_SESSION['cart'][$productID]['cost'] * $_SESSION['cart'][$productID]['qty'];
			$_SESSION['cart'][$productID]['total'] = $total;
		}
	}
}

function get_subtotal() {
	$subtotal = 0;
	foreach ($_SESSION['cart'] as $item) {
		$subtotal += $item['total'];
	}
	$subtotal_f = numer_format($subtotal, 2);
	return $subtotal_f;
}

?>