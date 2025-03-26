<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the best nutrition, supplements, and protein bars for a healthy lifestyle.">
    <title>Nutrition & Supplements</title>

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
            padding: 30px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        header p {
            font-size: 1.2em;
        }

        .hero img {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
        }

        .content {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #555;
        }

        .content ul {
            padding-left: 20px;
            list-style-type: disc;
            font-size: 1.1em;
            color: #555;
        }

        .btn-view-products, .btn-about-us {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }

        .btn-view-products:hover, .btn-about-us:hover {
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
        <h1>Welcome to Healthy Nutrition</h1>
        <p>Your guide to supplements, protein bars, and healthy food choices.</p>
    </header>
    
    <section class="hero">
        <img src="<?= base_url('public/images/nutrition_banner.jpg'); ?>" alt="Healthy Food and Supplements">
    </section>
    
    <section class="content">
        <h2>Why Nutrition Matters?</h2>
        <p>Good nutrition is the foundation of a healthy lifestyle. Explore our range of supplements and protein bars to support your health goals. Whether you're looking to boost energy, build muscle, or maintain overall wellness, our products are designed to meet your needs.</p>
        
        <h2>Our Products</h2>
        <ul>
            <li>Protein Bars - Packed with nutrients for your active lifestyle.</li>
            <li>Vitamins & Supplements - Support your daily health needs.</li>
            <li>Organic Foods - Natural and wholesome food options.</li>
        </ul>
    </section>

    <!-- View Products Button (Fixed) -->
    <div style="text-align: center;">
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/products" class="btn-view-products">
            View Products
        </a>
    </div>

    <!-- About Us Button (Fixed) -->
    <div style="text-align: center;">
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/about" class="btn-about-us">
            About Us
        </a>
    </div>

    <footer>
        <p>&copy; <?= date('Y'); ?> Healthy Nutrition. All rights reserved.</p>
    </footer>
</body>
</html>
