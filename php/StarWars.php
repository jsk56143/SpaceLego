<?php 
	require_once('accountDatabase.php');
	
	//get all products
	$getAllProducts = 'SELECT * FROM product WHERE Theme = "Star Wars"';
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
		<a href="../html/addForm.html"><span class="login"> Register </span></a>
		<a href="loginForm.php"><span class="login"> Log in | </span></a>
		<span id="welcome"> Welcome! </span> 
		<a href="../html/Construction.html"><img src="../res/shopping_cart.png" id="cart"><span id="cartText">MY CART</span></a></li> 
		<input type="search" id ="searchbar" name="searchbar" placeholder="Enter your search here... ">
		<button type="submit" id="searchButton">
		</header>

		<nav id="nav_menu">
			<ul>
				<li><a href="../php/index.php">HOME</a></li>

				<li><a href="allSets.php">SETS</a>
					<ul>
						<li><a href="SpacePolice.php">Space Police</a></li>
						<li><a href="MarsMission.php">Mars Mission</a></li>
						<li><a href="GalaxySquad.php">Galaxy Squad</a></li>
						<li><a href="AlienConquest.php">Alien Conquest</a></li>
						<li><a href="StarWars.php">Star Wars</a></li>
					</ul>
				</li>

				<li><a href="Construction.html">PREORDERS</a></li>
				<li><a href="../html/faq.html">FAQ</a></li>
				<li><a href="../html/contact.html">CONTACT US</a></li>
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
					<td> <img class="productImg" src="<?php echo $product['Image']; ?>"> </td>
					<td> <a id="prodNameSW" href="?id=<?php echo $product['ID']; ?>">
							<?php echo $product['Name']; ?>
						</a>
					</td>
					<td> $<?php echo $product['Price']; ?> </td>
					<td> <form action="addToCart.php" method="post">
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
