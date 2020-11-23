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
				<li><a href="faq.php" id="currentPage">FAQ</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
			</ul>
		</nav>
		
		<main id="faqmain">
			<ul>
				<h2>I bought my product, so how do I get it?</h2>				
				<li>The product will be transferred to your home through delivery by USPS. Please wait for 2-3 days to receive your product.
				</li>
				<h2>My product hasn't arrived in 2-3 days. Can I get a refund?</h2>
				<li>If your product does not arrive within 2-3 days, please contact us through the "Contact Us" form and we will discuss about your missing product.
				If we are unable to locate your product, then we will refund your purchase.
				</li>
				<h2>I purchased a product but decided I don't want it anymore. Could I get a refund and return it?</h2>
				<li>
				Refund is possible only if the product being returned is in mint condition (No signs of damage or missing pieces). Simply seal 
				the product as well as possible and we will refund your product. However, you are unable to return a product <b>7 days</b> after receiving the product.
				</li>
				<h2>I did not give my address when pruchasing my product, so how do you guys know where I live?</h2>
				<li>
				According to Einstein, there is a saying that <b>"The important thing is not to stop questioning."</b> However, there are some questions that should never
				be asked for the greater good. This is one of those questions so please refrain from thinking more into it.
				</li>
			</ul>
		</main>
		<footer> 
			<p> &copy; 2020 Space Lego™ </p>
		</footer>
	</body>
</html>
