<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Space Lego Shop</title>
		<link rel="shortcut icon" href="../res/favicon.ico">
		<link rel="normal" href="../styles/normalize.css">
		<link rel="stylesheet" href="../styles/stylesheet.css?v=<?php echo time();?>">
	</head>

	<body>
		<header> 
		<a href="index.php"><img id = "logo" src="../res/logo.png" alt="Shop Logo"></a>
		<a href="../html/addForm.html"><span class="login"> Register </span></a>
		<a href="loginForm.php"><span class="login"> Log in | </span></a>
		<span id="welcome"> Welcome! </span> 
		<a href="../html/Construction.html"><img src="../res/shopping_cart.png" id="cart"><span id="cartText">MY CART</span></a></li> 
		<input type="search" id ="searchbar" name="searchbar" placeholder="Enter your search here... ">
		<button type="submit" id="searchButton">
		</header>

		<nav id="nav_menu">
			<ul>
				<li><a href="index.php" id="currentPage">HOME</a></li>

				<li><a href="#">SETS</a>
					<ul>
						<li><a href="../html/SpacePolice.html">Space Police</a></li>
						<li><a href="../html/MarsMission.html">Mars Mission</a></li>
						<li><a href="../html/GalaxySquad.html">Galaxy Squad</a></li>
						<li><a href="../html/AlienConquest.html">Alien Conquest</a></li>
						<li><a href="../html/StarWars.html">Star Wars</a></li>
					</ul>
				</li>

				<li><a href="../html/Construction.html">PREORDERS</a></li>
				<li><a href="../html/faq.html">FAQ</a></li>
				<li><a href="../html/contact.html">CONTACT US</a></li>
			</ul>
		</nav>

<!--
		<aside id="leftColumn"> 
			<h3> NEWEST RELEASES </h3>
			<ul>
				<a href=""><img src="../res/product1.jpg" alt="product1"> ITEM 1</a>
				<a href=""><img src="../res/product2.jpg" alt="product2"> ITEM 2</a>
				<a href=""><img src="../res/product3.jpg" alt="product3"> ITEM 3</a>
			</ul>

			<h3> BEST SELLERS </h3>
			<ul>
				<a href=""><img src="../res/product1.jpg" alt="product1"> ITEM 1</a>
				<a href=""><img src="../res/product2.jpg" alt="product2"> ITEM 2</a>
				<a href=""><img src="../res/product3.jpg" alt="product3"> ITEM 3</a>
			</ul>
		</aside>

		<main>
			<h3 id="hot"> WHAT'S HOT </h3>
			<a href=""><img src="" alt="FRONT"></a>	
		</main>
-->
		<main>
			<h1>Welcome to Space Lego!</h1>
			<h3>Your one-stop shop for everything LEGO Space related</h3>
			<h2>Who are we</h2>
			<blockquote>We are Space Lego, an ecommerce business specializing in Space Lego sets. Our business
			was founded in November 1, 2020 with a goal of improving accessibility of purchasing old
			Lego Space themed sets. Like many of you reading this, our childhood was mainly based on
			Legos. However, many of these lego sets are no longer sold on official websites. As a result,
			we took up the opportunity to help people like you buy these nostalgic lego sets. We currently
			sell 5 different lego sets, which you can see in the "Sets" tab. If you have any questions, please
			refer to the FAQ first before reaching out to us in the "Contact Us" tab. Enjoy!</blockquote>
			
			<h2>Free Merch - Space Lego HD Wallpapers</h2>
			
			<h2>Enjoy the Lego Space Mini Movie Part 1</h2>			
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Smgm5KPYN6Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<h2>Enjoy the Lego Space Mini Movie Part 2</h2>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vxlWH4sX0xs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
		</main>
		<footer> 
			<p> &copy; 2020 Space Lego™ </p>
		</footer>
	</body>
</html>
