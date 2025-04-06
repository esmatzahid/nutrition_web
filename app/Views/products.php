<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
            color: #333;
        }
        header {
            background-color: #004225;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }
        .home-button-container {
            text-align: center;
            margin-top: 20px;
        }
        .home-button {
            background-color: #52b788;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .home-button:hover {
            background-color: #2d6a4f;
        }
        .products {
            max-width: 1200px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            padding: 0 20px;
        }
        .product-item {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }
        .product-item img {
            width: 100%;
            max-height: 200px;
            object-fit: contain;
        }
        .price {
            font-size: 1.3em;
            font-weight: bold;
            color: #28a745;
        }
        .add-to-cart {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .cart-icon {
            position: absolute;
            right: 30px;
            top: 20px;
            font-size: 1.5em;
            color: white;
            cursor: pointer;
        }
        .cart-icon span {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border-radius: 50%;
            font-size: 1em;
        }
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }
        .modal-content button {
            margin-top: 10px;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- Cart Icon -->
    <div class="cart-icon" onclick="window.location.href='https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/cart'">
        <img src="/imgs/icon.svg" alt="Cart">
        <span id="cart-count">0</span>
    </div>

    <header>
        <h1>Our Products</h1>
        <p>High-quality supplements for your fitness journey.</p>
    </header>

    <!-- Home Button -->
    <div class="home-button-container">
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/home">
            <button class="home-button">Home</button>
        </a>
    </div>
    <section class="products" id="product-grid">
    <div class="product-item">
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/index.php/shop/product/1">
            <img src="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/download.jpg" alt="Whey Protein">
            <h3>Whey Protein</h3>
        </a>
        <p class="price">£29.99</p>
        <button class="add-to-cart" onclick="openModal('Whey Protein', 29.99)">Add to Cart</button>
    </div>

    <div class="product-item">
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/index.php/shop/product/2">
            <img src="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/71Ue2EqyrJL._AC_SY879_.jpg" alt="Creatine Monohydrate">
            <h3>Creatine Monohydrate</h3>
        </a>
        <p class="price">£19.99</p>
        <button class="add-to-cart" onclick="openModal('Creatine Monohydrate', 19.99)">Add to Cart</button>
    </div>

    <div class="product-item">
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/index.php/shop/product/3">
            <img src="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/abe-blue-raz.jpg" alt="Pre-Workout">
            <h3>Pre-Workout</h3>
        </a>
        <p class="price">£22.99</p>
        <button class="add-to-cart" onclick="openModal('Pre-Workout', 22.99)">Add to Cart</button>
    </div>
</section>
<div style="text-align: center; margin-top: 30px;">
    <button class="home-button" onclick="loadMoreProducts()">Show More</button>
</div>


    <!-- Modal -->
    <div id="cart-modal" class="modal">
        <div class="modal-content">
            <h2 id="modal-title"></h2>
            <p id="modal-price"></p>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" value="1" min="1" max="10">
            <button onclick="addToCart()">Add to Cart</button>
            <button onclick="closeModal()">Cancel</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    let selectedProduct = {};
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function updateCartCount() {
      const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
      document.getElementById("cart-count").textContent = totalItems;
    }

    updateCartCount();

    function openModal(name, price) {
      selectedProduct = { name, price };
      document.getElementById("modal-title").textContent = name;
      document.getElementById("modal-price").textContent = "£" + price.toFixed(2);
      document.getElementById("cart-modal").style.display = "block";
    }

    function closeModal() {
      document.getElementById("cart-modal").style.display = "none";
    }

    function addToCart() {
      let quantity = parseInt(document.getElementById("quantity").value);
      if (isNaN(quantity) || quantity < 1) {
        alert("Please enter a valid quantity.");
        return;
      }

      cart.push({
        name: selectedProduct.name,
        price: selectedProduct.price,
        quantity: quantity
      });

      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartCount();
      closeModal();
      alert("Added to cart!");
    }

    function loadMoreProducts() {
      fetch("https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/random-products")
        .then(res => res.json())
        .then(products => {
          const grid = document.getElementById('product-grid');
          products.forEach(p => {
            const img = p.image_front_small_url || 'https://via.placeholder.com/150';
            const name = p.product_name || 'Unknown Product';
            const price = (Math.random() * (35 - 15) + 15).toFixed(2);

            const html = `
              <div class="product-item">
                <img src="${img}" alt="${name}">
                <h3>${name}</h3>
                <p class="price">£${price}</p>
                <button class="add-to-cart" onclick="openModal('${name.replace(/'/g, "\\'")}', ${price})">Add to Cart</button>
              </div>
            `;
            grid.insertAdjacentHTML('beforeend', html);
          });
        })
        .catch(err => {
          alert("Failed to load products");
          console.error(err);
        });
    }
  </script>


</body>
</html>
