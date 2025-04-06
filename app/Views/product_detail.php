<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($productName) ?> - Supplement Info</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }
        h1 {
            text-align: center;
            color: #2d6a4f; /* Dark green for titles */
            font-size: 36px;
            margin-top: 40px;
        }
        .product-container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 30px;
        }
        .product-container img {
            display: block;
            margin: 0 auto;
            border-radius: 8px;
            max-width: 100%;
            height: auto;
        }
        .product-info {
            margin-top: 30px;
            font-size: 18px;
        }
        .product-info p {
            margin: 10px 0;
        }
        .product-info strong {
            color: #2d6a4f; /* Green for labels */
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 40px;
            font-size: 18px;
            color: #2d6a4f;
            text-decoration: none;
        }
        .back-link:hover {
            color: #38b000; /* Green hover */
        }
        @media (max-width: 768px) {
            .product-container {
                width: 95%;
                padding: 20px;
            }
            h1 {
                font-size: 28px;
            }
            .product-info {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <h1><?= esc($productName) ?></h1>

    <?php if ($productData): ?>
        <div class="product-container">
            <?php if (!empty($productData['image_front_url'])): ?>
                <img src="<?= esc($productData['image_front_url']) ?>" width="200">
            <?php endif; ?>

            <div class="product-info">
                <p><strong>Product Name:</strong> <?= esc($productData['product_name'] ?? 'N/A') ?></p>
                <p><strong>Brand:</strong> <?= esc($productData['brands'] ?? 'Unknown') ?></p>
                <p><strong>Ingredients:</strong> <?= esc($productData['ingredients_text'] ?? 'Not listed') ?></p>
                <p><strong>Nutrition Score:</strong> <?= esc($productData['nutriscore_grade'] ?? 'N/A') ?></p>
                <p><strong>Energy (100g):</strong> <?= esc($productData['nutriments']['energy-kcal_100g'] ?? 'N/A') ?> kcal</p>
                <p><strong>Proteins (100g):</strong> <?= esc($productData['nutriments']['proteins_100g'] ?? 'N/A') ?> g</p>
                <p><strong>Fat (100g):</strong> <?= esc($productData['nutriments']['fat_100g'] ?? 'N/A') ?> g</p>
                <p><strong>Sugars (100g):</strong> <?= esc($productData['nutriments']['sugars_100g'] ?? 'N/A') ?> g</p>
            </div>

            <a href="/~2015319/nutrition/public/index.php/products" class="back-link">Back to Products</a>
        </div>
    <?php else: ?>
        <div class="product-container">
            <p>No detailed information found on Open Food Facts for "<?= esc($productName) ?>".</p>
            <a href="/~2015319/nutrition/public/index.php/products" class="back-link">Back to Products</a>
        </div>
    <?php endif; ?>

</body>
</html>
