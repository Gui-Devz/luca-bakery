<?php
include "./Home.php";
?>
<?php
include './Components/HomeHeader/index.php';
?>

<div class="hero-content">
  <h1>
    Real <span>Bread</span>. Handmade with Care.
  </h1>
  <div class="button">

    <a href="pages/Shop/index.php">
      Order Online
    </a>
  </div>
</div>
</div>

</div>
<div class="container">
  <h2>Our most ordered products</h2>
  <div class="products-container">
    <?php

    if (!empty($product_array)) {
    ?>
      <div class="bigProductCard-container">
        <?php include './Components/Card/index.php'; ?>
      </div>

      <div class="miniProductCard-container">
        <?php

        if (!empty($product_array)) {

          foreach ($product_array as $key => $value) {
        ?>
            <div class="product-item">
              <?php include './Components/MiniCard/index.php'; ?>
            </div>

        <?php
          }
        }
        ?>
      </div>
    <?php } ?>
    <div class="miniCards-container">
      <?php

      if (!empty($product_array)) {
        $product_array = $mini_products_array;
        foreach ($product_array as $key => $value) {
      ?>
          <div class="product-item">
            <?php include './Components/MiniCard/index.php'; ?>
          </div>

      <?php
        }
      }
      ?>
    </div>
  </div>

</div>

<?php
include './Components/Footer/index.php';
?>
<?php include './Components/MenuModal/index.php'; ?>
</body>

</html>

<script src="scripts/buttonQuantity.js"></script>