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
	
		<main>
			<h1 class="centerText">THANK YOU FOR BUYING OUR PRODUCTS! <br> WE HOPE YOU COME AGAIN!</h1>
			<img id="purchaseImg" src="../res/sunglasses_lego.png">
			<form action="clearCart.php" method="post">
				<input type="hidden" name="submitted" value="exit">
				<input type="submit" id="indexButton" value="Return to Main Page">
			</form>
		</main>
		
		<footer> 
			<p> &copy; 2020 Space Lego™ </p>
		</footer>		
	</body>
</html>
