<?php
include '../../pages/Shop/Shop.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="../../css/footerStyles.css">
  <link rel="stylesheet" href="../../css/myCartStyles.css">
  <link rel="stylesheet" href="../../css/headerStyles.css">
  <link rel="stylesheet" href="../../css/modalStyles.css">
  <link rel="stylesheet" href="../../css/purchaseModalStyles.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>My cart - Luca Loaves Bakery</title>
</head>

<body>
  <?php include '../../Components/Header/index.php'; ?>
  <?php include '../../Components/MenuModal/index.php'; ?>
  <?php include '../../Components/PurchaseModal/index.php'; ?>
  
  <div id="shopping-cart">
    <div class="txt-heading">
      <h1>My cart</h1>
    </div>
    <?php
    if (!empty($_SESSION["cart_item"])) {
    ?>
      <a id="btnEmpty" href="index.php?action=empty"><i class="fa fa-trash" style="font-size:18px"></i>Delete all items</a>
    <?php
    }
    ?>

    <?php
    if (isset($_SESSION["cart_item"])) {
      $total_quantity = 0;
      $total_price = 0;
    ?>
      <div class="table-container">
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
          <thead>
            <tr>
              <th style="text-align:left;"></th>
              <th style="text-align:left;">Name</th>
              <th style="text-align:left;">Code</th>
              <th style="text-align:center;" width="5%">Quantity</th>
              <th style="text-align:center;" width="20%">Price</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($_SESSION["cart_item"] as $item) {
              $item_price = $item["quantity"] * $item["price"];
            ?>
              <tr>
                <td class="delete-item" colspan="5">
                  <a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">
                    <i class="fa fa-trash" style="font-size:18px"></i>Delete
                  </a>
                </td>
              </tr>
              <tr class="cart-item">
                <td class="colName"><img src="../../img/<?php echo $item["image"]; ?>" class="cart-item-image" /></td>
                <td class="colName"><?php echo $item["name"]; ?></td>
                <td><?php echo $item["code"]; ?></td>
                <td style="text-align:center;"><?php echo $item["quantity"]; ?></td>
                <td style="text-align:right;"><?php echo "$ " . number_format($item_price, 2); ?></td>
              </tr>
            <?php
              $total_quantity += $item["quantity"];
              $total_price += ($item["price"] * $item["quantity"]);
            }
            ?>

            <tr class="cart-total">
              <td colspan="3" align="right">Total:</td>
              <td align="center"><?php echo $total_quantity; ?></td>
              <td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
            </tr>
          </tbody>
        </table>
        
        <button id="buyButton" class="buy-button">
          <i class="fa fa-shopping-cart"></i>
          Complete Purchase
        </button>
      </div>
    <?php
    } else {
    ?>
      <div class="empty-cart">
        <div class="no-records"><i><b>Your Cart is Empty</b></i></div>
        <?php
        if (empty($_SESSION["cart_item"])) {
        ?>
          <a id="btnContinue" href="../../pages/Shop/index.php">
            <i class="fa fa-arrow-left" style="font-size:18px"></i>Continue shopping
          </a>
        <?php
        }
        ?>
      </div>
    <?php
    }
    ?>
  </div>

  <?php include '../../Components/Footer/index.php'; ?>

  <script>
    const buyButton = document.getElementById('buyButton');
    const purchaseModal = document.getElementById('purchaseModal');
    const closeModal = document.querySelector('.close-purchase-modal');
    const confirmButton = document.getElementById('confirmPurchase');

    // Show modal when buy button is clicked
    if (buyButton) {
      buyButton.addEventListener('click', () => {
        purchaseModal.style.display = 'block';
      });
    }

    // Close modal when X is clicked
    closeModal.addEventListener('click', () => {
      purchaseModal.style.display = 'none';
    });

    // Close modal and redirect when confirm button is clicked
    confirmButton.addEventListener('click', () => {
      // Empty the cart
      window.location.href = 'index.php?action=empty';
    });

    // Close modal when clicking outside
    window.addEventListener('click', (event) => {
      if (event.target === purchaseModal) {
        purchaseModal.style.display = 'none';
      }
    });
  </script>
</body>

</html>