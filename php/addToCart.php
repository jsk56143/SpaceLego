<?php
	require_once('accountDatabase.php');
	session_start();
	
	if (!isset($_SESSION['id'])) {
		header('Location: loginForm.php');
	}
	
	$userID = $_SESSION['id'];
	$productID = $_POST['productID'];
	$query = "INSERT INTO cart
		(UserID, ProductID) VALUES
		('$userID', '$productID')";
	$db->exec($query);	
	
	header('Location: cart_view.php');
?>