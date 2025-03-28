<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles.css'); ?>">
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

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        header p {
            font-size: 1.2em;
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
            overflow: hidden;
            text-align: center;
            padding: 20px;
        }

        .product-item img {
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: contain;
            border-radius: 8px;
        }

        .product-item h3 {
            font-size: 1.6em;
            color: #004225;
            margin-top: 15px;
        }

        .product-item p {
            font-size: 1.1em;
            color: #555;
            margin: 10px 0;
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

        .add-to-cart:hover {
            background-color: #218838;
        }

        .btn-home {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 40px;
            transition: background-color 0.3s ease;
        }

        .btn-home:hover {
            background-color: #218838;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        /* Cart Icon */
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
    </style>
</head>
<body>
    <!-- Cart Icon -->
    <div class="cart-icon" onclick="window.location.href='cart.php'">
        <img src="cart-icon.png" alt="Cart">
        <span id="cart-count">0</span> <!-- This shows the number of items in the cart -->
    </div>

    <header>
        <h1>Our Products</h1>
        <p>High-quality supplements for your fitness journey.</p>
    </header>
    
    <section class="products">
        <div class="product-item">
            <img src="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/download.jpg" alt="Whey Protein">
            <h3>Whey Protein</h3>
            <p>High-quality protein for muscle growth and recovery.</p>
            <p class="price">£29.99</p>
            <button class="add-to-cart" onclick="addToCart('Whey Protein', 29.99)">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/71Ue2EqyrJL._AC_SY879_.jpg" alt="Creatine">
            <h3>Creatine Monohydrate</h3>
            <p>Boost strength and power during workouts.</p>
            <p class="price">£19.99</p>
            <button class="add-to-cart" onclick="addToCart('Creatine Monohydrate', 19.99)">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/abe-blue-raz.jpg" alt="Pre-Workout">
            <h3>Pre-Workout</h3>
            <p>Increase focus and energy for intense training.</p>
            <p class="price">£24.99</p>
            <button class="add-to-cart" onclick="addToCart('Pre-Workout', 24.99)">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/a7214.jpg" alt="BCAA">
            <h3>BCAA</h3>
            <p>Support muscle recovery and endurance.</p>
            <p class="price">£14.99</p>
            <button class="add-to-cart" onclick="addToCart('BCAA', 14.99)">Add to Cart</button>
        </div>
    </section>

    <!-- Home Button -->
    <div style="text-align: center;">
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/" class="btn-home">
            Go to Home
        </a>
    </div>

    <footer>
        <p>&copy; <?= date('Y'); ?> Healthy Nutrition. All rights reserved.</p>
    </footer>
</body>
</html>
