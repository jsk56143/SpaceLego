<?php
	include('accountDatabase.php');
	$id=(isset($_POST['ID']) ? $_POST['ID'] : '');
	$username=(isset($_POST['UserName']) ? $_POST['UserName'] : '');
	$password=(isset($_POST['Password']) ? $_POST['Password'] : '');
    $email=(isset($_POST['Email']) ? $_POST['Email'] : '');
    $image=(isset($_POST['Image']) ? $_POST['Image'] : '');
    $creditcardno=(isset($_POST['CreditCardNo']) ? $_POST['CreditCardNo'] : '');
	
	$query="INSERT INTO account
		(ID, UserName, Password, Email, Image, CreditCardNo) VALUES
		('$id', '$username', '$password', '$email', '$image', '$creditcardno')";
	$db->exec($query);
	
	include('AddForm.php');


?>