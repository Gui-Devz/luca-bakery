<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="../../css/footerStyles.css">
  <link rel="stylesheet" href="../../css/sitemapStyles.css">
  <link rel="stylesheet" href="../../css/headerStyles.css">
  <link rel="stylesheet" href="../../css/modalStyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Sitemap - Luca Loaves Bakery</title>
</head>

<body>
  <?php include '../../Components/Header/index.php'; ?>
  <?php include '../../Components/MenuModal/index.php'; ?>

  <div class="container">
    <h1>Sitemap</h1>
    <p class="description">Welcome to our sitemap. Here you can find a complete overview of all pages available on our website.</p>

    <div class="sitemap-container">
      <!-- Main Pages Section -->
      <div class="sitemap-section">
        <h2>Main Pages</h2>
        <ul>
          <li>
            <a href="/luca">
              <i class="fa fa-home"></i>
              Home
            </a>
            <span class="page-description">Our main page featuring fresh products and welcome message</span>
          </li>
          <li>
            <a href="/luca/pages/Shop">
              <i class="fa fa-shopping-basket"></i>
              Shop
            </a>
            <span class="page-description">Browse and purchase our delicious baked goods</span>
          </li>
          <li>
            <a href="/luca/pages/AboutUs">
              <i class="fa fa-info-circle"></i>
              About Us
            </a>
            <span class="page-description">Learn about our story and passion for baking</span>
          </li>
        </ul>
      </div>

      <!-- Customer Service Section -->
      <div class="sitemap-section">
        <h2>Customer Service</h2>
        <ul>
          <li>
            <a href="/luca/pages/Contact">
              <i class="fa fa-envelope"></i>
              Contact Us
            </a>
            <span class="page-description">Get in touch with us for any inquiries</span>
          </li>
          <li>
            <a href="/luca/pages/Career">
              <i class="fa fa-briefcase"></i>
              Careers
            </a>
            <span class="page-description">Join our team of passionate bakers</span>
          </li>
        </ul>
      </div>

      <!-- Shopping Section -->
      <div class="sitemap-section">
        <h2>Shopping</h2>
        <ul>
          <li>
            <a href="/luca/pages/MyCart">
              <i class="fa fa-shopping-cart"></i>
              My Cart
            </a>
            <span class="page-description">View and manage your shopping cart</span>
          </li>
          <li>
            <a href="/luca/pages/Shop">
              <i class="fa fa-tag"></i>
              Products
            </a>
            <span class="page-description">Our complete catalog of fresh baked goods</span>
          </li>
        </ul>
      </div>

      <!-- Utility Pages -->
      <div class="sitemap-section">
        <h2>Utility Pages</h2>
        <ul>
          <li>
            <a href="/luca/pages/Sitemap">
              <i class="fa fa-sitemap"></i>
              Sitemap
            </a>
            <span class="page-description">Current page - Overview of our website structure</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <?php include '../../Components/Footer/index.php'; ?>
</body>

</html> 