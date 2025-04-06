<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Discover the best nutrition, supplements, and protein bars for a healthy lifestyle." />
    <title>Your Website</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="http://localhost:8080/public/styles.css" />

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
            color: #333;
        }

        .navbar {
            background-color: #004225;
            padding: 15px;
            text-align: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            background: url('https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/images/fitness-man-drinking-protein-shake_87720-64018.jpg') no-repeat center center;
            background-size: cover;
            height: 400px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4); /* overlay */
            z-index: 1;
        }

        .hero h1,
        .hero p {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 10px;
            background: linear-gradient(to right, #2ecc71, #27ae60);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.5em;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
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
        }

        .content p {
            font-size: 1.1em;
            color: #555;
        }

        .btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 5px;
            text-decoration: none;
            margin: 20px;
            transition: background-color 0.3s;
        }

        .btn:hover {
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

    <!-- Navigation -->
    <div class="navbar">
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/products">View Products</a>
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/about">About Us</a>
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/supplements">Supplements</a>
    </div>

    <!-- Main Content Area -->
    <div class="content">
        <!-- Page-specific content will be inserted here -->
        <?php echo $content; ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Healthy Nutrition. All rights reserved.</p>
    </footer>

</body>
</html>
