<?php
	include('accountDatabase.php');
	$username=(isset($_POST['UserName']) ? $_POST['UserName'] : '');
	$password=(isset($_POST['Password']) ? $_POST['Password'] : '');
    $email=(isset($_POST['Email']) ? $_POST['Email'] : '');
    $creditcardno=(isset($_POST['CreditCardNo']) ? $_POST['CreditCardNo'] : '');
	$creditcardamount=(isset($_POST['Amount']) ? $_POST['Amount'] : '');
	$query="INSERT INTO account
		(UserName, Password, Email, CreditCardNo, Amount) VALUES
		('$username', '$password', '$email', '$creditcardno', '$creditcardamount')";
	$db->exec($query);
	
	header('Location: loginForm.php');
?>
