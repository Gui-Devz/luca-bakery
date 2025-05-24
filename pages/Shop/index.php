<?php
include './shop.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../../css/cardStyles.css">
	<link rel="stylesheet" type="text/css" href="../../css/footerStyles.css">
	<link rel="stylesheet" type="text/css" href="../../css/shopStyles.css">



	<title>Shop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

	<div class="sticky">

		<nav class="stroke" id="mainNav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="/luca/index.html#Gallery">Gallery</a></li>
				<li><a href="php/index.php">Shop</a></li> <!-- Shop.php file -->
				<li><a href="/luca/index.html#About">About Us</a></li>
				<li><a href="/luca/index.html#Contact">Contact</a></li>
			</ul>
		</nav>
	</div>

	<div class="header">

		<a name="Home"><img src="product-images/Logo.jpeg" alt="Luca Loaves Logo">
		</a>


	</div>




	<div id="product-grid">
		<div class="txt-heading"><b>Take a look at our Products</b></div>
		<div class="products-list-container">
			<?php
			$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
			if (!empty($product_array)) {
				// $jsonData = json_encode($product_array); 
				// echo '<script>console.log($jsonData)</script>';
				foreach ($product_array as $key => $value) {
			?>
					<div class="product-item">
						<!-- <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
				<div class="product-image"><img src="../../img/<?php echo $product_array[$key]["image"]; ?>"></div>
				<div class="product-tile-footer">
				<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
				<div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
				<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
				</div>
				</form> -->

						<?php include '../../Components/MiniCard/index.php'; ?>
					</div>

			<?php
				}
			}
			?>
		</div>
	</div>


	<?php
	include '../../Components/Footer/index.php';
	?>
</body>

</html>

<script src="../../scripts/buttonQuantity.js"></script>