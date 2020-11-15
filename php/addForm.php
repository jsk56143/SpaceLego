<?php
	
/*	include('accountDatabase.php');
	$query='SELECT * FROM categories';
	$products=$db->query($query);
*/
?>

<head>
	<script src="../JS/addForm.js"></script>
</head>

<body>
	<header>
		<h1>Account Manager</h1>
	</header>
	
	<main>
		<h2>Add Account</h2>
		<form action="AddAccount.php" method="post">
			<label>UserName:</label>
			<input class="textInput" type="text" name="UserName"><br>
			<label>Password:</label>
            <input class="textInput" type="text" name="Password"><br>
            <label>Email:</label>
            <input class="textInput" type="email" placeholder="Enter your email" name="Email"><br>
            <label>Image:</label>
            <input class="textInput" type="text" name="Image"><br>
            <label>Credit Card Number:</label>
            <input class="textInput" type="text" name="CreditCardNo"><br>
			<input id="submitInput" type="submit" value="Add Account">
		</form><br>
	</main>
	
	<footer>
    <p> &copy; 2020 Space Lego™ </p>
	</footer>
</body>



