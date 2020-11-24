<?php
	include('accountDatabase.php');
	session_start();
	$userID = $_SESSION['id'];
	$fund=(isset($_POST['addFundInput']) ? $_POST['addFundInput'] : '');
	$update="UPDATE account SET Amount = Amount + '$fund' WHERE ID = '$userID'";
	$db->exec($update);
	
	header('Location: accountPage.php');
?>
