<div class="card-container">
  <div>
    <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/luca/img/<?php echo $first_product_array[0]["image"] ?>" alt="Image of <?php echo $first_product_array[0]["name"] ?>">
  </div>
  <div class="card-content">
    <div class="card-header">
      <h3><?php echo $first_product_array[0]["name"]; ?></h3>
      <p><?php echo $first_product_array[0]["description"]; ?></p>
    </div>
    <div class="card-footer">
      <form method="post" action="index.php?action=add&code=<?php echo $first_product_array[0]["code"]; ?>">

        <div>
          <p>Quantity</p>

          <div class="interaction-quantity">
            <div class="interaction-price">
              <div class="quantity-btns">
                <button class="qt-btn" type="button" data-id="<?php echo $first_product_array[0]["code"]; ?>"> - </button>
                <input type="text" name="quantity" class="qtd" id="qtd-<?php echo $first_product_array[0]["code"]; ?>" value="1" min="1">
                <button class="qt-btn" type="button" data-id="<?php echo $first_product_array[0]["code"]; ?>"> + </button>
              </div>
              <div class="price">

                $<span id="price-<?php echo $first_product_array[0]["code"]; ?>" data-price="<?php echo $first_product_array[0]["price"]; ?>"><?php echo $first_product_array[0]["price"]; ?></span>
              </div>
            </div>
            <button class="btn-cart">Add to Cart</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>