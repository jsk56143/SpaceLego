<?php
	include('accountDatabase.php');

	$productID=(isset($_POST['hiddenRemoveItem']) ? $_POST['hiddenRemoveItem'] : '');
	
	$query="DELETE FROM cart WHERE ProductID=$productID LIMIT 1";
	$db->exec($query);
	
	header('Location: cart_view.php');
?>
