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
				<li><a href="accountPage.php">MY ACCOUNT</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
			</ul>
		</nav>
		
		<main>
			<table id="freeMerchTable">
				<body>
					<tr>
						<td><img src="../res/space/pic1.png" alt="pic1.png" width=500 height=500></td>
						<td><img src="../res/space/pic2.png" alt="pic2.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic3.png" alt="pic3.png" width=500 height=500></td>
						<td><img src="../res/space/pic4.png" alt="pic4.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic5.png" alt="pic5.png" width=500 height=500></td>
						<td><img src="../res/space/pic6.png" alt="pic6.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic7.png" alt="pic7.png" width=500 height=500></td>
						<td><img src="../res/space/pic8.png" alt="pic8.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic9.png" alt="pic9.png" width=500 height=500></td>
						<td><img src="../res/space/pic10.png" alt="pic10.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic11.png" alt="pic11.png" width=500 height=500></td>
						<td><img src="../res/space/pic12.png" alt="pic12.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic13.png" alt="pic13.png" width=500 height=500></td>
						<td><img src="../res/space/pic14.png" alt="pic14.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic15.png" alt="pic15.png" width=500 height=500></td>
						<td><img src="../res/space/pic16.png" alt="pic16.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic17.png" alt="pic17.png" width=500 height=500></td>
						<td><img src="../res/space/pic18.png" alt="pic18.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic19.png" alt="pic19.png" width=500 height=500></td>
						<td><img src="../res/space/pic20.png" alt="pic20.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic21.png" alt="pic21.png" width=500 height=500></td>
						<td><img src="../res/space/pic22.png" alt="pic22.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic23.png" alt="pic23.png" width=500 height=500></td>
						<td><img src="../res/space/pic24.png" alt="pic24.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic25.png" alt="pic25.png" width=500 height=500></td>
						<td><img src="../res/space/pic26.png" alt="pic26.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic27.png" alt="pic27.png" width=500 height=500></td>
						<td><img src="../res/space/pic28.png" alt="pic28.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic29.png" alt="pic29.png" width=500 height=500></td>
						<td><img src="../res/space/pic30.png" alt="pic30.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic31.png" alt="pic31.png" width=500 height=500></td>
						<td><img src="../res/space/pic32.png" alt="pic32.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic33.png" alt="pic33.png" width=500 height=500></td>
						<td><img src="../res/space/pic34.png" alt="pic34.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic35.png" alt="pic35.png" width=500 height=500></td>
						<td><img src="../res/space/pic36.png" alt="pic36.png" width=500 height=500></td>
					</tr>
					<tr>
						<td><img src="../res/space/pic37.png" alt="pic37.png" width=500 height=500></td>
					</tr>					
				</tbody>
			</table>
		</main>

				

	
	<footer>
    	<p> &copy; 2020 Space Lego™ </p>
	</footer>
</body>

</html>
