<?php
	include('accountDatabase.php');
	session_start();
	$username= $_POST['UserName'];
	$password= $_POST['Password'];
	$query="SELECT * FROM account WHERE UserName='$username' AND Password='$password'";
    $accounts = $db->query($query);
	
    if ($accounts->rowCount() > 0) {		
		$getID = "SELECT * FROM account WHERE UserName='$username' AND Password='$password'";
		$statement = $db->prepare($getID);
		$statement->execute();
		$UserID = $statement->fetch();
		$id = $UserID['ID'];
		$statement->closeCursor();
		$_SESSION['id'] = $id;
		$_SESSION['user'] = $username;
	
		header("Location: index.php");
    }
    else {
		$status = 'Invalid Username or Password';
        include('loginForm.php');
		exit();
    }


?>