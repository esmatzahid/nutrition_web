<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shopping Cart</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f1f3f6;
      margin: 0;
      padding: 0;
      color: #333;
    }
    h1 {
      text-align: center;
      padding: 30px 0 10px;
      font-size: 2rem;
    }
    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }
    th, td {
      padding: 15px;
      text-align: center;
    }
    th {
      background-color: #004225;
      color: #ffffff;
      font-weight: 500;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    .update-btn {
      color: #e63946;
      cursor: pointer;
      font-weight: 500;
      font-size: 1.5rem;
      margin: 0 5px;
    }
    .remove-btn {
      color: #dc3545;
      cursor: pointer;
      font-size: 1.2rem;
    }
    .total {
      font-size: 1.5em;
      font-weight: bold;
      text-align: right;
      margin-top: 20px;
    }
    .btn-group {
      text-align: right;
      margin-top: 20px;
    }
    .btn {
      padding: 12px 24px;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-left: 10px;
      transition: background 0.3s ease;
    }
    .continue-shopping {
      background-color: #004225;
      color: #fff;
    }
    .continue-shopping:hover {
      background-color: #026c3d;
    }
    .checkout-btn {
      background-color: #28a745;
      color: white;
    }
    .checkout-btn:hover {
      background-color: #218838;
    }
    .add-product-btn {
      display: inline-block;
      margin: 20px auto 0;
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      font-size: 1rem;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .add-product-btn:hover {
      background-color: #0056b3;
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.5);
    }
    .modal-content {
      background-color: white;
      margin: 8% auto;
      padding: 30px 20px;
      border-radius: 10px;
      width: 90%;
      max-width: 400px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
    .modal-content h2 {
      margin-bottom: 10px;
    }
    .modal-content input {
      width: 80px;
      padding: 8px;
      margin: 10px 0;
      font-size: 1em;
    }
    .modal-content button {
      padding: 10px 20px;
      margin: 10px 5px;
      border: none;
      border-radius: 5px;
      font-size: 1em;
      cursor: pointer;
    }
    #add-to-cart-btn {
      background-color: #28a745;
      color: white;
    }
    #add-to-cart-btn:hover {
      background-color: #218838;
    }
    #cancel-btn {
      background-color: #ccc;
    }
    #cancel-btn:hover {
      background-color: #bbb;
    }
    @media (max-width: 600px) {
      .container {
        padding: 10px;
      }
      .btn-group {
        text-align: center;
      }
      .btn {
        margin: 10px 5px;
      }
      table, thead, tbody, th, td, tr {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>

  <h1>Your Cart</h1>

  <div class="container">
    <

    <table>
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Remove</th>
        </tr>
      </thead>
      <tbody id="cart-items"></tbody>
    </table>

    <p class="total">Total: £<span id="cart-total">0.00</span></p>

    <div class="btn-group">
      <button class="btn continue-shopping" onclick="window.location.href='/~2015319/nutrition/public/'">Continue Shopping</button>
      <button class="btn checkout-btn" onclick="window.location.href='/~2015319/nutrition/public/checkout'">Checkout</button>
      <button class="btn" id="empty-cart-btn" style="background-color: #dc3545; color: white;">Empty Cart</button>
    </div>
  </div>

  <!-- Modal -->
  <div id="product-modal" class="modal">
    <div class="modal-content">
      <h2 id="product-name">Product Name</h2>
      <p id="product-price">£0.00</p>
      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" value="1" min="1" />
      <br />
      <button id="add-to-cart-btn">Add to Cart</button>
      <button id="cancel-btn">Cancel</button>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];

      function updateCartDisplay() {
        let total = 0;
        $("#cart-items").html("");

        if (cart.length === 0) {
          $("#cart-items").html(`<tr><td colspan="5">Your cart is empty</td></tr>`);
        } else {
          cart.forEach((item, index) => {
            let itemTotal = item.price * item.quantity;
            total += itemTotal;
            $("#cart-items").append(`
              <tr>
                <td>${item.name}</td>
                <td>£${item.price.toFixed(2)}</td>
                <td>
                  <span class="update-btn" data-index="${index}" data-action="decrease">-</span>
                  ${item.quantity}
                  <span class="update-btn" data-index="${index}" data-action="increase">+</span>
                </td>
                <td>£${itemTotal.toFixed(2)}</td>
                <td><span class="remove-btn" data-index="${index}">&#10006;</span></td>
              </tr>
            `);
          });
        }

        $("#cart-total").text(total.toFixed(2));

        $(".update-btn").click(function () {
          let index = $(this).data("index");
          let action = $(this).data("action");
          if (action === "decrease" && cart[index].quantity > 1) {
            cart[index].quantity--;
          } else if (action === "increase") {
            cart[index].quantity++;
          }
          localStorage.setItem("cart", JSON.stringify(cart));
          updateCartDisplay();
        });

        $(".remove-btn").click(function () {
          let index = $(this).data("index");
          cart.splice(index, 1);
          localStorage.setItem("cart", JSON.stringify(cart));
          updateCartDisplay();
        });
      }

      window.openModal = function(name, price) {
        $("#product-name").text(name);
        $("#product-price").text("£" + price.toFixed(2));
        $("#quantity").val(1);
        $("#product-modal").fadeIn();
      };

      $("#add-to-cart-btn").click(function () {
        const quantity = parseInt($("#quantity").val());
        const productName = $("#product-name").text();
        const priceText = $("#product-price").text().replace("£", "");
        const productPrice = parseFloat(priceText);

        if (!productName || isNaN(productPrice) || isNaN(quantity) || quantity < 1) {
          alert("Invalid product details or quantity.");
          return;
        }

        let existingItem = cart.find(item => item.name === productName && item.price === productPrice);
        if (existingItem) {
          existingItem.quantity += quantity;
        } else {
          cart.push({ name: productName, price: productPrice, quantity: quantity });
        }

        localStorage.setItem("cart", JSON.stringify(cart));
        $("#product-modal").fadeOut();
        updateCartDisplay();
        alert("Product added to cart!");
      });

      $("#cancel-btn").click(function () {
        $("#product-modal").fadeOut();
      });

      $(".checkout-btn").click(function () {
        if (cart.length > 0) {
          alert("Proceeding to checkout!");
        } else {
          alert("Your cart is empty!");
        }
      });

      $("#empty-cart-btn").click(function () {
        if (confirm("Are you sure you want to empty the cart?")) {
          cart = [];
          localStorage.removeItem("cart");
          updateCartDisplay();
        }
      });

      updateCartDisplay();
    });
  </script>
</body>
</html>
