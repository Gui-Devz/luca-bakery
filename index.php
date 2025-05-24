

<div class="hero">
  <div class="overlay">

    <?php 
      include './Components/HomeHeader/index.php';
      ?>
    <div class="hero-content">
      <h1>
        Real <span>Bread</span>. Handmade with Care.
      </h1>
      <div class="button">

        <a href="pages/Shop/index.php" >
          Order Online
        </a>
      </div>
    </div>
  </div>
  
</div>
<div class="container">
  <h2>Our most ordered products</h2>
  <div class="products-container">
    <div>

      <?php include './Components/Card/index.php'; ?>
    </div>
    <div class="miniCards-container">
      <?php include './Components/MiniCard/index.php'; ?>
      <?php include './Components/MiniCard/index.php'; ?>
    </div>
  </div>

</div>
  <?php
  include './Components/Footer/index.php';
  ?>
</body>

</html>

<script src="scripts/buttonQuantity.js"></script> 