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
	<script type="text/javascript" src="../JS/addForm.js"></script>
</head>

	<body>
		<header> 
			<a href="index.php"><img id = "logo" src="../res/logo.png" alt="Shop Logo"></a>
			<a href="addForm.php"><span class="login"> Register </span></a>
			<?php if (isset($_SESSION['user'])) { ?>
			<a href="logout.php"><span class="login"> Log out | </span></a>		
			<span id="welcome"> <?php echo $_SESSION['user'];?> </span> 
			<?php } else { ?>
				<a href="loginForm.php"><span class="login"> Log in | </span></a>		
				<span id="welcome"> Welcome! </span>
			<?php } ?>
			<a href="cart_view.php"><img src="../res/shopping_cart.png" id="cart"><span id="cartText">MY CART</span></a></li> 
			<input type="search" id ="searchbar" name="searchbar" placeholder="Enter your search here... ">
			<button type="submit" id="searchButton">
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

				<li><a href="../html/Construction.html">PREORDERS</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
			</ul>
		</nav>

	<main>
		<h2>Add Account</h2>
		<form name="accountCreationForm" action="../php/addAccount.php" method="post">
			<label for="username" id="firstLabel">UserName:</label>
			<input type="text" id="username" name="UserName" required><span id="error1">*</span><br>
			<label for="passwd" id="secondLabel">Password:</label>
			<input type="text" id="passwd" name="Password" required><span id="error2">*</span><br>			
			<label for="email" id="thirdLabel">Email:</label>
			<input type="email" id="email" name="Email" placeholder="Enter your email" required><span id="error3">*</span><br>
            <label for="creditcardno" id="fourthLabel">Credit Card Number:</label>
            <input type="text" id="creditcardno" name="CreditCardNo" required><span id="error4">*</span><br>
			<input id="add" type="button" value="Add Account">
			<input type="button" id="clearEntries" value="Clear Entries">
		</form><br>
	</main>
	
	<footer>
    	<p> &copy; 2020 Space Lego™ </p>
	</footer>
</body>

</html>


