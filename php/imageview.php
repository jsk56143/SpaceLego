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
		<script>
		function magnify(imgID, zoom) {
		  var img, glass, w, h, bw;
		  img = document.getElementById(imgID);
		  /*create magnifier glass:*/
		  glass = document.createElement("DIV");
		  glass.setAttribute("class", "magnifying_glass");
		  /*insert magnifier glass:*/
		  img.parentElement.insertBefore(glass, img);
		  /*set background properties for the magnifier glass:*/
		  glass.style.backgroundImage = "url('" + img.src + "')";
		  glass.style.backgroundRepeat = "no-repeat";
		  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
		  bw = 3;
		  w = glass.offsetWidth / 2;
		  h = glass.offsetHeight / 2;
		  /*execute a function when someone moves the magnifier glass over the image:*/
		  glass.addEventListener("mousemove", moveMagnifier);
		  img.addEventListener("mousemove", moveMagnifier);
		  /*and also for touch screens:*/
		  glass.addEventListener("touchmove", moveMagnifier);
		  img.addEventListener("touchmove", moveMagnifier);
		  function moveMagnifier(e) {
			var pos, x, y;
			/*prevent any other actions that may occur when moving over the image*/
			e.preventDefault();
			/*get the cursor's x and y positions:*/
			pos = getCursorPos(e);
			x = pos.x;
			y = pos.y;
			/*prevent the magnifier glass from being positioned outside the image:*/
			if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
			if (x < w / zoom) {x = w / zoom;}
			if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
			if (y < h / zoom) {y = h / zoom;}
			/*set the position of the magnifier glass:*/
			glass.style.left = (x - w) + "px";
			glass.style.top = (y - h) + "px";
			/*display what the magnifier glass "sees":*/
			glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
		  }
		  function getCursorPos(e) {
			var a, x = 0, y = 0;
			e = e || window.event;
			/*get the x and y positions of the image:*/
			a = img.getBoundingClientRect();
			/*calculate the cursor's x and y coordinates, relative to the image:*/
			x = e.pageX - a.left;
			y = e.pageY - a.top;
			/*consider any page scrolling:*/
			x = x - window.pageXOffset;
			y = y - window.pageYOffset;
			return {x : x, y : y};
		  }
		}
		</script>
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

		<main id="imageViewMain">
			<div class="magnifying_container">
				<img id="imageProd" src="<?php echo $_GET['link'];?>" width="600" height="400" alt="product">
			</div>
			<script>
				magnify("imageProd", 3);
			</script>
		</main>

		<footer> 
			<p> &copy; 2020 Space Lego™ </p>
		</footer>
	</body>
</html>