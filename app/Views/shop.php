<!DOCTYPE html>
<html>
<head>
    <title>Nutrition Shop</title>
</head>
<body>
    <h1>Our Products</h1>
    
    <?php foreach ($products as $product): ?>
    <div class="product">
        <h3><?= $product['name'] ?></h3>
        <p><?= $product['description'] ?></p>
        <p>Price: $<?= $product['price'] ?></p>
        <a href="/shop/product/<?= $product['id'] ?>">View Product</a>
    </div>
    <?php endforeach; ?>
</body>
</html>