<?php
	
/*	include('accountDatabase.php');
	$query='SELECT * FROM categories';
	$products=$db->query($query);
*/
?>

<head>
	<link rel="stylesheet" href="AddForm.css">
</head>

<body>
	<header>
		<h1>Product Manager</h1>
	</header>
	
	<main>
		<h2>Add Product</h2>
		<form action="AddProduct.php" method="post">
			<label>Category:</label>
			<select id="dropDownInput" name="category_id">
				<?php foreach($products as $product):?>
				<option value="<?php echo $product['categoryID']?>"> <?php echo $product['categoryName']?></option>
				<?php endforeach;?>
			</select><br>
			<label>Code:</label>
			<input class="textInput" id="firstTextInput" type="text" name="code"><br>
			<label>Name:</label>
			<input class="textInput" id="secondTextInput" type="text" name="name"><br>
			<label>ListPrice:</label>
			<input class="textInput" id="thirdTextInput" type="text" name="price"><br>
			<input id="submitInput" type="submit" value="Add Product">
		</form><br>
		<a href="ProductList.php">View Product List</a>	
	</main>
	
	<footer>
		<p>&copy; 2010 My Guitar Shop, Inc.</p>
	</footer>
</body>



