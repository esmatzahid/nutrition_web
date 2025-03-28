<?php
// Initialize cart array if it's not already set
$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

if (empty($cart)) {
    echo '<script>alert("Your cart is empty!"); window.location.href="index.php";</script>';
    exit;
}

$totalPrice = 0;
foreach ($cart as $item) {
    $totalPrice += $item['price'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
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

        .cart-items {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .cart-item {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
            margin-bottom: 20px;
        }

        .cart-item h3 {
            font-size: 1.6em;
            color: #004225;
        }

        .cart-item .price {
            font-size: 1.3em;
            font-weight: bold;
            color: #28a745;
        }

        .total-price {
            font-size: 1.5em;
            font-weight: bold;
            color: #004225;
            margin-top: 20px;
        }

        .btn-checkout {
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

        .btn-checkout:hover {
            background-color: #218838;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your Cart</h1>
        <p>Review and finalize your order.</p>
    </header>

    <section class="cart-items">
        <?php foreach ($cart as $item): ?>
        <div class="cart-item">
            <h3><?= $item['name'] ?></h3>
            <p class="price">£<?= number_format($item['price'], 2) ?></p>
        </div>
        <?php endforeach; ?>

        <p class="total-price">Total: £<?= number_format($totalPrice, 2) ?></p>
    </section>

    <div style="text-align: center;">
        <a href="checkout.php" class="btn-checkout">
            Checkout
        </a>
    </div>

    <footer>
        <p>&copy; <?= date('Y'); ?> Healthy Nutrition. All rights reserved.</p>
    </footer>

    <script>
        // Function to set cart in cookies (for the future pages to access)
        function setCartCookie(cartData) {
            document.cookie = "cart=" + JSON.stringify(cartData) + ";path=/;max-age=3600";  // 1 hour expiry
        }
    </script>
</body>
</html>
