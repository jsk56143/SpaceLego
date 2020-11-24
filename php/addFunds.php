<?php
	include('accountDatabase.php');
	$user=(isset($_POST['addUserInput']) ? $_POST['addUserInput'] : '');
	$fund=(isset($_POST['addFundInput']) ? $_POST['addFundInput'] : '');
	$update="UPDATE account SET Amount = Amount + '$fund' WHERE UserName = '$user'";
	$db->exec($update);
	
	header('Location: accountPage.php');
?>
