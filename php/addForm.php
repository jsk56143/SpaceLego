<?php
	
/*	include('accountDatabase.php');
	$query='SELECT * FROM categories';
	$products=$db->query($query);
*/
?>

<head>
	<script type="text/javascript" src="../JS/addForm.js"></script>
</head>

<body>
	<header>
		<h1>Account Manager</h1>
	</header>
	
	<main>
		<h2>Add Account</h2>
		<form action="addAccount.php" method="post">
			<label for="username" id="firstLabel">UserName:</label>
			<input type="text" id="username" name="UserName" required><span id="error1">*</span><br>
			<label for="passwd" id="secondLabel">Password:</label>
            <input type="text" id="passwd" name="Password" required><span id="error2">*</span><br>
            <label for="email" id="thirdLabel">Email:</label>
            <input type="email" id="email" name="Email" placeholder="Enter your email" required><span id="error3">*</span><br>
            <label>Image:</label>
            <input type="text" name="Image"><br>
            <label for="creditcardno" id="fourthLabel">Credit Card Number:</label>
            <input type="text" id="creditcardno" name="CreditCardNo" required><span id="error4">*</span><br>
			<input id="submitInput" type="submit" value="Add Account">
			<input type="reset" id="clear" value="Clear Entries">
		</form><br>
	</main>
	
	<footer>
    	<p> &copy; 2020 Space Lego™ </p>
	</footer>
</body>

</html>


