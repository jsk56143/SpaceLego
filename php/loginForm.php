<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Space Lego Shop</title>
	<link rel="shortcut icon" href="../res/favicon.ico">
	<link rel="normal" href="../styles/normalize.css">
	<link rel="stylesheet" href="../styles/stylesheet.css">	
	<script type="text/javascript" src="../JS/loginForm.js"></script>
</head>

	<body>
		<header> 
			<a href="index.php"><img id = "logo" src="../res/logo.png" alt="Shop Logo"></a>
			<a href="addForm.php"><span id="logLogin"> Register </span></a>		
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
		<h2 id="loginText">Login</h2>
		<?php if (!empty($status)) { ?>
			<p><?php echo htmlspecialchars($status);?></p>
		<?php } ?>
		<form name="loginForm" action="loginAccount.php" method="post">
			<label for="username" id="loginLabel1">UserName:</label>
			<input type="text" id="username" name="UserName" required><span id="error1"> * </span><br>
			<label for="passwd" id="loginLabel2">Password:</label>
			<input type="text" id="passwd" name="Password" required><span id="error2"> * </span><br>
			<input id="loginButton" type="submit" value="Login">		
		</form><br>
	</main>
	
	<footer>
    	<p> &copy; 2020 Space Lego™ </p>
	</footer>
</body>

</html>


