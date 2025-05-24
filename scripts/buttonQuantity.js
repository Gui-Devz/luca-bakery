document.querySelectorAll(".qt-btn").forEach((button) => {
  button.addEventListener("click", function () {
    const productId = this.getAttribute("data-id");
    const priceElement = document.querySelector("#price-" + productId);
    const price = Number(priceElement.getAttribute("data-price"));

    const input = this.parentElement.querySelector("#qtd-" + productId);

    let value = parseInt(input.value);

    if (this.textContent.includes("+")) {
      value++;
    } else if (this.textContent.includes("-") && value > 1) {
      value--;
    }

    priceElement.textContent = (value * price).toFixed(2);

    input.value = value;
  });
});
// This script adds functionality to quantity buttons in a shopping cart or product page.
