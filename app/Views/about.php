<?php // about.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            background-color: #004225; /* Dark Green */
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

        .about {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .about h2 {
            font-size: 2em;
            color: #004225;
            margin-top: 20px;
        }

        .about p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6;
        }

        .about ul {
            font-size: 1.2em;
            color: #555;
            padding-left: 20px;
            list-style-type: disc;
            margin-top: 20px;
        }

        /* Contact Section */
        .contact {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background-color: #28a745; /* Green */
            color: white;
            border-radius: 8px;
        }

        .contact p {
            font-size: 1.2em;
            margin: 5px 0;
        }

        .btn-home {
            display: inline-block;
            background-color: #28a745; /* Green */
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
            background-color: #004225;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
        <p>Learn more about Healthy Nutrition and our mission.</p>
    </header>
    
    <section class="about">
        <h2>Our Mission</h2>
        <p>At Healthy Nutrition, we are dedicated to providing high-quality supplements and food products to support a healthy lifestyle.</p>
        
        <h2>Why Choose Us?</h2>
        <ul>
            <li>Premium quality ingredients.</li>
            <li>Scientifically backed supplements.</li>
            <li>Customer satisfaction guaranteed.</li>
        </ul>

        <!-- Contact Section -->
        <div class="contact">
            <h2>Contact Us</h2>
            <p>Email: <a href="mailto:esmatzahid@icloud.com" style="color: white;">esmatzahid@icloud.com</a></p>
            <p>Phone: <a href="tel:+447857984362" style="color: white;">07857 984362</a></p>
        </div>

        <!-- Home Button -->
        <div style="text-align: center;">
            <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/" class="btn-home">
                Go to Home
            </a>
        </div>
    </section>
    
    <footer>
        <p>&copy; <?= date('Y'); ?> Healthy Nutrition. All rights reserved.</p>
    </footer>
</body>
</html>
