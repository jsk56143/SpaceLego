<?php
	include('accountDatabase.php');
	//$username=(isset($_POST['UserName']) ? $_POST['UserName'] : '');
	//$password=(isset($_POST['Password']) ? $_POST['Password'] : '');
	$username= $_POST['UserName'];
	$password= $_POST['Password'];
	
	$query="SELECT * FROM account WHERE UserName='$username' AND Password='$password'";
    $accounts = $db->query($query);
    
    if ($accounts->rowCount() > 0) {
		header("Location: index.php");
    }
    else {
		$status = 'Invalid Username or Password';
        include('loginForm.php');
		exit();
    }


?>
