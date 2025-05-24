<?php

?>


<div class="miniCard-container">
  <div>
    <img src="../../img/<?php echo $product_array[$key]["image"] ?>" alt="Red velvet cake">
  </div>
  <div class="miniCard-content">
    <div class="miniCard-header">
      <h3><?php echo $product_array[$key]["name"]; ?></h3>
      <p>
        Small, soft cakes, often with fruit or nuts.
      </p>
    </div>
    <div class="miniCard-footer">
      <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">

        <div>
          <p>Quantity</p>

          <div class="interaction-quantity">
            <div class="quantity-btns">
              <button class="qt-btn" type="button" data-id="<?php echo $product_array[$key]["code"] ?>"> - </button>
              <input type="number" name="quantity" class="qtd" id="qtd-<?php echo $product_array[$key]["code"] ?>" value="1" min="1">
              <button class="qt-btn" type="button" data-id="<?php echo $product_array[$key]["code"] ?>"> + </button>
            </div>
            <div class="price">$<span id="price-<?php echo $product_array[$key]["code"] ?>" data-price="<?php echo $product_array[$key]["price"] ?>"><?php echo $product_array[$key]["price"] ?></span></div>
          </div>
          <button class="btn-cart">Add to Cart</button>
        </div>
      </form>
    </div>
  </div>
</div>