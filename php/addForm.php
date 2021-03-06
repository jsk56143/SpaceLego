<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Space Lego Shop</title>
	<link rel="shortcut icon" href="../res/favicon.ico">
	<link rel="normal" href="../styles/normalize.css">
	<link rel="stylesheet" href="../styles/stylesheet.css">	
	<script type="text/javascript" src="../JS/addFormTemp.js"></script>
</head>

	<body>
		<header> 
			<a href="index.php"><img id = "logo" src="../res/logo.png" alt="Shop Logo"></a>
			<a href="loginForm.php"><span id="regLogin"> Log in </span></a>		
			<span id="welcome"> Welcome! </span>
			<a href="cart_view.php"><img src="../res/shopping_cart.png" id="cart"><span id="cartText">MY CART</span></a></li> 
		</header>
		
		<nav id="nav_menu">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="allSets.php">SETS</a>
					<ul>
						<li><a href="SpacePolice.php">Space Police</a></li>
						<li><a href="MarsMission.php">Mars Mission</a></li>
						<li><a href="GalaxySquad.php">Galaxy Squad</a></li>
						<li><a href="AlienConquest.php">Alien Conquest</a></li>
						<li><a href="StarWars.php">Star Wars</a></li>
					</ul>
				</li>

				<li><a href="accountPage.php">MY ACCOUNT</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
			</ul>
		</nav>

	<main>
		<h2 id="loginText">Add Account</h2>
		<?php if (!empty($created)) { ?>
			<b> <p style="margin-left: 25px"><?php echo htmlspecialchars($created);?></p> <b>
		<?php } ?>
		<form name="accountCreationForm" action="addAccount.php" method="post">
			<label for="username" id="firstLabel">UserName:</label>
			<input type="text" id="username" name="UserName" required><span id="error1"> * </span><br>
			<label for="passwd" id="secondLabel">Password:</label>
			<input type="text" id="passwd" name="Password" required><span id="error2"> * </span><br>			
			<label for="email" id="thirdLabel">Email:</label>
			<input type="email" id="email" name="Email" placeholder="Enter your email" required><span id="error3"> * </span><br>
            <label for="creditcardno" id="fourthLabel">Credit Card Number:</label>
            <input type="text" id="creditcardno" name="CreditCardNo" required><span id="error4"> * </span><br>
			<label for="creditcardamount" id="fifthLabel">Amount in Card: </label>
			<input type="text" id="creditcardamount" name="Amount" required><span id="error5"> * </span><br>
			<input type="reset" id="clearEntries" value="Clear Entries">
			<input id="add" type="button" value="Add Account">
		</form><br>
	</main>
	
	<footer>
    	<p> &copy; 2020 Space Lego™ </p>
	</footer>
</body>

</html>
