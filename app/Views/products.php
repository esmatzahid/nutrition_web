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
    <div class="cart-icon" onclick="window.location.href='cart'">
        <img src="/imgs/icon.svg" alt="Cart">
        <span id="cart-count">0</span>
    </div>

    <header>
        <h1>Our Products</h1>
        <p>High-quality supplements for your fitness journey.</p>
    </header>
    
    <section class="products">
        <div class="product-item">
            <img src="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/download.jpg" alt="Whey Protein">
            <h3>Whey Protein</h3>
            <p class="price">£29.99</p>
            <button class="add-to-cart" onclick="openModal('Whey Protein', 29.99)">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/71Ue2EqyrJL._AC_SY879_.jpg" alt="Creatine">
            <h3>Creatine Monohydrate</h3>
            <p class="price">£19.99</p>
            <button class="add-to-cart" onclick="openModal('Creatine Monohydrate', 19.99)">Add to Cart</button>
        </div>
    </section>

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

    <script>
        let selectedProduct = {};
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        document.getElementById("cart-count").textContent = cart.length;

        function openModal(name, price) {
            selectedProduct = { name, price };
            document.getElementById("modal-title").textContent = name;
            document.getElementById("modal-price").textContent = "£" + price;
            document.getElementById("cart-modal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("cart-modal").style.display = "none";
        }

        function addToCart() {
            let quantity = parseInt(document.getElementById("quantity").value);
            cart.push({ ...selectedProduct, quantity });
            localStorage.setItem('cart', JSON.stringify(cart));
            document.getElementById("cart-count").textContent = cart.length;
            closeModal();
        }
    </script>

</body>
</html>
