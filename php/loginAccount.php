<?php
	include('accountDatabase.php');
	include('../html/loginForm.html');
	$username=(isset($_POST['UserName']) ? $_POST['UserName'] : '');
	$password=(isset($_POST['Password']) ? $_POST['Password'] : '');
	
	$query="SELECT * FROM account WHERE UserName='$username' AND WHERE Password='$password'";
    $accounts = $db->query($query);
    
    if (empty($accounts)) {
        echo "Login failed.";
    }
    else {
        echo "Redirecting you to your account page";
    }


?>