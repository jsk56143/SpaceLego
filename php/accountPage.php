<?php
	require_once('accountDatabase.php');
	session_start();
	if (!isset($_SESSION['id'])) {
		header('Location: loginForm.php');
	}
	$userID = $_SESSION['id'];
	$getInfo = "SELECT * FROM account WHERE ID = '$userID'";
	$statement = $db->prepare($getInfo);
	$statement->execute();
	$account = $statement->fetch();
	$cardNumber = $account['CreditCardNo'];
	$amount = $account['Amount'];
	$statement->closeCursor();	

?>
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

				<li><a href="accountPage.php" id="currentPage">MY ACCOUNT</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
			</ul>
		</nav>

		<main id="faqmain">
			<h1>Username:</h1>
			<h2> <?php echo $_SESSION['user'];?></h2>
			<h1>Your Credit Card Number:</h1>
			<h2> <?php echo $cardNumber;?></h2>
			<h1>Your amount:</h1>
			<h2>$<?php echo $amount;?></h2>
		</main>
		<footer> 
			<p> &copy; 2020 Space Lego™ </p>
		</footer>
	</body>
</html>
