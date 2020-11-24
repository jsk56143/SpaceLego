<?php
	include('accountDatabase.php');
	include('../html/addForm.html');
	$username=(isset($_POST['UserName']) ? $_POST['UserName'] : '');
	$password=(isset($_POST['Password']) ? $_POST['Password'] : '');
    $email=(isset($_POST['Email']) ? $_POST['Email'] : '');
    $creditcardno=(isset($_POST['CreditCardNo']) ? $_POST['CreditCardNo'] : '');
	$creditcardamount=(isset($_POST['Amount']) ? $_POST['Amount'] : '');
	$query="INSERT INTO account
		(UserName, Password, Email, CreditCardNo) VALUES
		('$username', '$password', '$email', '$creditcardno')";
		
	$cardquery="INSERT INTO creditcard
		(CreditCardNo, Amount) VALUES
		('$creditcardno', '$creditcardamount')";
	$db->exec($query);
	$db->exec($cardquery);
	
	header('Location: loginForm.php');
?>
