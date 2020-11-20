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
		<a href="../html/addForm.html"><span class="login"> Register </span> <span class="login"> | </span> <a href="loginForm.php"><span class="login"> Log in </span>
		<span id="welcome"> Welcome!</span> 
		<a href="../html/Construction.html"><img src="../res/shopping_cart.png" id="cart"><span id="cartText">MY CART</span></a></li> 
		<input type="search" id ="searchbar" name="searchbar" placeholder="Enter your search here... ">
		<button type="submit" id="searchButton">
	</header>
	
	<nav id="nav_menu">
		<ul>
			<li><a href="index.php">HOME</a></li>

			<li><a href="#">SETS</a>
				<ul>
					<li><a href="../html/Construction.html">Space Police</a></li>
					<li><a href="../html/Construction.html">Mars Mission</a></li>
					<li><a href="../html/Construction.html">Galaxy Squad</a></li>
					<li><a href="../html/Construction.html">Alien Conquest</a></li>
					<li><a href="../html/Construction.html">Star Wars</a></li>
				</ul>
			</li>

			<li><a href="../html/Construction.html">PREORDERS</a></li>
			<li><a href="../html/faq.html">FAQ</a></li>
			<li><a href="../html/contact.html">CONTACT US</a></li>
		</ul>
	</nav>

	<main>
		<h2>Login</h2>
		<?php if (!empty($status)) { ?>
			<p><?php echo htmlspecialchars($status);?></p>
		<?php } ?>
		<form name="loginForm" action="loginAccount.php" method="post">
			<label for="username" id="firstLabel">UserName:</label>
			<input type="text" id="username" name="UserName" required><span id="error1">*</span><br>
			<label for="passwd" id="secondLabel">Password:</label>
			<input type="text" id="passwd" name="Password" required><span id="error2">*</span><br>
			<input id="loginButton" type="submit" value="Login">		
		</form><br>
	</main>
	
	<footer>
    	<p> &copy; 2020 Space Lego™ </p>
	</footer>
</body>

</html>

