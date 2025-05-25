<?php
include './Shop.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../../css/cardStyles.css">
	<link rel="stylesheet" type="text/css" href="../../css/footerStyles.css">
	<link rel="stylesheet" type="text/css" href="../../css/shopStyles.css">
	<link rel="stylesheet" href="../../css/headerStyles.css">
	<link rel="stylesheet" href="../../css/modalStyles.css">
	<link rel="stylesheet" href="../../css/floatingCartStyles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




	<title>Shop - Luca Loaves Bakery</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

	<?php include '../../Components/Header/index.php'; ?>
	<?php include '../../Components/MenuModal/index.php'; ?>

	<div id="product-grid">
		<div class="txt-heading"><b>Take a look at our Shop</b></div>
		<div class="products-list-container">
			<?php
			$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
			if (!empty($product_array)) {
				foreach ($product_array as $key => $value) {
			?>
					<div class="product-item">
						<?php include '../../Components/MiniCard/index.php'; ?>
					</div>

			<?php
				}
			}
			?>
		</div>
	</div>

	<?php
	if (isset($_SESSION["cart_item"]) && !empty($_SESSION["cart_item"])) {
		$total_quantity = 0;
		foreach ($_SESSION["cart_item"] as $item) {
			$total_quantity += $item["quantity"];
		}
	?>
		<a href="../MyCart/index.php" class="floating-cart">
			<i class="fa fa-shopping-cart"></i>
			<span class="cart-badge"><?php echo $total_quantity; ?></span>
		</a>
	<?php
	}
	?>

	<?php
	include '../../Components/Footer/index.php';
	?>
</body>

</html>

<script src="../../scripts/buttonQuantity.js"></script>