<?php 
	require_once('accountDatabase.php');
	session_start();	
	if (!isset($_SESSION['id'])) {
		header('Location: loginForm.php');
	}	
	$userID = $_SESSION['id'];
	//get User's product
	$getProducts = "SELECT * FROM cart INNER JOIN product ON cart.productID = product.ID WHERE UserID = '$userID' ORDER BY cart.ID";
	$statement = $db->prepare($getProducts);
	$statement->execute();
	$allProducts = $statement->fetchAll();
	$statement->closeCursor();
	$getTotal = "SELECT SUM(product.Price) AS Sum FROM cart INNER JOIN product ON cart.productID = product.ID WHERE UserID = '$userID'";
	$newStatement = $db->prepare($getTotal);
	$newStatement->execute();
	$total = $newStatement->fetchAll();
	$newStatement->closeCursor();
	
	$query="SELECT * FROM account WHERE ID = '$userID'";
    $statement2 = $db->prepare($query);
	$statement2->execute();
	$userAmount = $statement2->fetch();
	$amount = $userAmount['Amount'];
	$statement2->closeCursor();
	
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
		
		<main id="productList">
		<h1>My Cart</h1>
			<table>
				<thead>
					<tr>
						<th id="productLabel"> Product </th>
						<th></th>
						<th id="priceLabel"> Price </th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($allProducts as $product) : ?>
					<tr>
						<td> <img class="productImg" src="<?php echo $product['Image']; ?>"> </td>
						<td> <a id="prodName" href="?id=<?php echo $product['ID']; ?>">
								<?php echo $product['Name']; ?>
							</a>
						</td>
						<td> <?php echo $product['Price']; ?> </td>
						<td>
							<form action='removeItem.php' method="post">
								<input type="hidden" name="hiddenRemoveItem" value="<?php echo $product['ID']; ?>">
								<input type="submit" name="submit" value="Remove item">
							</form>
						</td>
					</tr>		
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<td id="Cart_TotalText">Account Amount</td>
						<td id="Cart_TotalValue">
							<?php echo $amount; ?>
						</td>
					</tr>
					<?php foreach ($total as $totals) : ?>
					<tr>
						<td id="Cart_TotalText">Total</td>
						<td id="Cart_TotalValue">
							<?php echo $totals['Sum']; ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tfoot>
			</table>
				<form action="checkBalance.php" method="post">						
						<input type="submit" value="Checkout">
				</form>
				<form action="clearCart.php" method="post">	
						<input type="hidden" name="submitted" value="reset">
						<input type="submit" value="Clear Cart">
				</form>
				<p id="Cart_TotalValue"> <?php if (!empty($lowFunds)) { ?>
					<p><?php echo htmlspecialchars($lowFunds);?></p>
				<?php } ?>
				</p>
		</main>
		
		<footer> 
			<p> &copy; 2020 Space Lego™ </p>
		</footer>
	</body>
</html>