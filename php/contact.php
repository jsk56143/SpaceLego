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
			<?php if (isset($_SESSION['user'])) { ?>
			<a href="logout.php"><span class="login"> Log out </span></a>		
			<span id="welcome"> <?php echo $_SESSION['user'];?> </span> 
			<?php } else { ?>
				<a href="addForm.php"><span class="login"> Register </span></a>
				<a href="loginForm.php"><span class="login"> Log in | </span></a>		
				<span id="welcome"> Welcome! </span>
			<?php } ?>
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
				<li><a href="contact.php" id="currentPage">CONTACT US</a></li>
			</ul>
		</nav>
		
		<main id="contactmain">
			<ul>
				<h2>General</h2>
				<ul>
					<li>Phone: 123-456-7890</li>
					<li>Email: spacelego@gmail.com</li>
				</ul>
					
				<h2>Refunds</h2>
				<ul>
					<li>Phone: 098-765-4321</li>
					<li>Email: spacelegoreturn@gmail.com</li>	
				</ul>
				<h2>Our Supreme Leaders</h2>
				<img src="../res/josh.jpg" alt="photo" id="groupPictureJosh">
				<img src="../res/duy.png" alt="photo" id="groupPictureDuy">
				<img src="../res/jason.png" alt="photo" id="groupPictureJason">					
				<ul>
					<div id="contact1">
						<h4>Chief Executive Officer: Josh Kim</h4>
						<li>Phone: 049-386-4028</li>
						<li>Email: joshk12@gmail.com</li>	
					</div>
			
					<div id="contact2">
						<h4>Chief Operating Officer: Duy Nguyen</h4>
						<li>Phone: 222-222-2223</li>
						<li>Email: dnguyen99@gmail.com</li>	
					</div>
					
					<div id="contact3">
						<h4>Chief Financial Officer: Jason Chang</h4>
						<li>Phone: 101-010-1010</li>
						<li>Email: jasonchang64@gmail.com</li>	
					</div>
				</ul>
			</ul>
		</main>
		<footer> 
			<p> &copy; 2020 Space Lego™ </p>
		</footer>
	</body>
</html>
