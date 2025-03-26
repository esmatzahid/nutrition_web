<?php // products.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>

    <!-- Link to Google Fonts for modern typography -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Link Stylesheet (Use CodeIgniter base_url helper) -->
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
            background-color: #28a745;
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
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-item h3 {
            font-size: 1.6em;
            color: #333;
            margin-top: 15px;
        }

        .product-item p {
            font-size: 1.1em;
            color: #555;
            margin: 10px 0;
        }

        .btn-home {
            display: inline-block;
            background-color: #007BFF;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 40px;
            transition: background-color 0.3s ease;
        }

        .btn-home:hover {
            background-color: #0056b3;
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
        <h1>Our Products</h1>
        <p>Discover high-quality supplements and healthy food options that support your active lifestyle.</p>
    </header>
    
    <section class="products">
        <div class="product-item">
            <img src="<?= base_url('public/images/protein_bar.jpg'); ?>" alt="Protein Bars">
            <h3>Protein Bars</h3>
            <p>Packed with nutrients to fuel your active lifestyle.</p>
        </div>
        <div class="product-item">
            <img src="<?= base_url('public/images/vitamins.jpg'); ?>" alt="Vitamins">
            <h3>Vitamins & Supplements</h3>
            <p>Support your daily health needs with our quality supplements.</p>
        </div>
        <div class="product-item">
            <img src="<?= base_url('public/images/organic_food.jpg'); ?>" alt="Organic Food">
            <h3>Organic Foods</h3>
            <p>Natural and wholesome food options for your well-being.</p>
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
