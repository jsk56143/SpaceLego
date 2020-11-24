<?php
	include('accountDatabase.php');
	include('accountPage.php');
	
	$user=(isset($_POST['addUserInput']) ? $_POST['addUserInput'] : '');
	$fund=(isset($_POST['addFundInput']) ? $_POST['addFundInput'] : '');
	
	$query="UPDATE account SET Amount = Amount + $fund WHERE UserName = '$user'";
	$db->exec($query);
	
	header('Location: accountPage.php');
?>
