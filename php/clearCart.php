<?php

	$determine = $_POST['submitted'];
	require_once('accountDatabase.php');
	session_start();
	$userID = $_SESSION['id'];
	$query = "DELETE FROM cart
		WHERE UserID = '$userID'";
	$db->exec($query);	
	
	if ($determine == 'reset') {
		header('Location: allSets.php');
	}	
	else {
		header ('Location: index.php');
	}
?>

