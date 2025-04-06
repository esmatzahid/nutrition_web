<?php
// Define content for the home page
$content = '
    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h1>Welcome to Healthy Nutrition</h1>
            <p>Your guide to premium supplements, protein bars, and healthy choices.</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content">
        <h2>Why Nutrition Matters?</h2>
        <p>Good nutrition is the foundation of a healthy lifestyle. Explore our range of supplements and protein bars to support your health goals. Whether you\'re looking to boost energy, build muscle, or maintain overall wellness, our products are designed to meet your needs.</p>

        <h2>Our Products</h2>
        <ul>
            <li>Protein Bars - Packed with nutrients for your active lifestyle.</li>
            <li>Vitamins & Supplements - Support your daily health needs.</li>
            <li>Organic Foods - Natural and wholesome food options.</li>
        </ul>
        <div style="text-align: center; margin-top: 40px;">
            <h2>Live Gym Visitors</h2>
            <div id="gym-counter" style="font-size: 3em; font-weight: bold; color: #28a745;">Loading...</div>
        </div>
    </section>

    <script>
        function updateGymCount() {
            fetch("/~2015319/nutrition/public/index.php/gym-count")
                .then(response => response.json())
                .then(data => {
                    console.log("Live count:", data); // Optional
                    document.getElementById("gym-counter").textContent = data.count ?? "N/A";
                })
                .catch(error => {
                    console.error("Error fetching gym count:", error);
                    document.getElementById("gym-counter").textContent = "N/A";
                });
        }

        updateGymCount();
        setInterval(updateGymCount, 5000); // Refresh every 5 seconds
    </script>
';

// Include the layout and inject the content
include('layout.php');
