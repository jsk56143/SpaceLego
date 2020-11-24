<?php 
	require_once('accountDatabase.php');
	session_start();
	//get all products
	$getAllProducts = 'SELECT * FROM product WHERE Theme = "Mars Mission"';
	$statement = $db->prepare($getAllProducts);
	$statement->execute();
	$allProducts = $statement->fetchAll();
	$statement->closeCursor();
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
			<a href="logout.php"><span class="logged"> Log out </span></a>		
			<span id="welcome"> Welcome, <?php echo $_SESSION['user'];?>! </span> 
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

				<li><a href="allSets.php" id="currentPage">SETS</a>
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

		<main id="productList">
			<table>
				<tr>
					<th id="productLabel"> Product </th>
					<th></th>
					<th id="priceLabel"> Price </th>
					<th></th>
				</tr>
				<?php foreach ($allProducts as $product) : ?>
				<tr>
					<td> <a href="imageview.php?link=<?php echo $product['Image'];?>"><img class="productImg" src="<?php echo $product['Image']; ?>"></a> </td>
					<td> <a id="prodName" href="imageview.php?link=<?php echo $product['Image'];?>">
							<?php echo $product['Name']; ?>
						</a>
					</td>
					<td> $<?php echo $product['Price']; ?> </td>
					<td> <form action="addToCart.php" method="post">
								<input type="hidden" name="productID" value= <?php echo $product['ID'];?>>								
								<input id="addCartButton" type="submit" value="Add to Cart">
						</form>
					</td>
				</tr>	
				<?php endforeach; ?>
			</table>
		</main>

		<footer> 
			<p> &copy; 2020 Space Lego™ </p>
		</footer>
	</body>
</html>
