<?php
	require_once('accountDatabase.php');
	session_start();
	$userID = $_SESSION['id'];
	$getTotal = "SELECT SUM(product.Price) AS Sum FROM cart INNER JOIN product ON cart.productID = product.ID WHERE UserID = '$userID'";
	$newStatement = $db->prepare($getTotal);
	$newStatement->execute();
	$total = $newStatement->fetch();
	$price = $total['Sum'];
	$newStatement->closeCursor();
	
	$query="SELECT * FROM account WHERE ID = '$userID'";
    $statement2 = $db->prepare($query);
	$statement2->execute();
	$userAmount = $statement2->fetch();
	$amount = $userAmount['Amount'];
	$statement2->closeCursor();
	
	if ($price > $amount) {		
		$lowFunds = 'Insufficient amount to purchase';
		include ('cart_view.php');
		exit();
	}
	
	else if ($price == 0) {
		$lowFunds = 'You did not choose any product';
		include ('cart_view.php');
		exit();
	}
	
	else {
		$newAmount = $amount - $price;
		$update = "UPDATE account SET Amount = '$newAmount' WHERE ID = '$userID'";
		$db->exec($update);
		header ('Location: purchased.php');
	}
?>