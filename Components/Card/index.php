<?php

?>


<div class="card-container">
  <div>
    <img src="img/red-velvet-cake.jpeg" alt="Red velvet cake" >
  </div>
  <div class="card-content">
    <div class="card-header">
      <h3>Red Velvet Cake</h3>
      <p>Decadent chocolate cake crowned with a medley of fresh red berries – rich, fruity, and irresistible..</p>
    </div>
    <div class="card-footer">
      <form action="">

        <div>
          <p>Quantity</p>

          <div class="interaction-quantity">
            <div class="interaction-price">
              <div class="quantity-btns">
                <button class="qt-btn" type="button" data-id="1"> - </button>
                <input type="number" name="quantity" class="qtd" id="qtd-1" value="1" min="1">
                <button class="qt-btn" type="button" data-id="1"> + </button>
              </div>
              <div class="price">

                $<span id="price-1" data-price="25">25.00</span>
              </div>
            </div>
            <button class="btn-cart">Add to Cart</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


