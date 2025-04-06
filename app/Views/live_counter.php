<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Gym Count</title>
</head>
<body>
    <div style="text-align: center; margin-top: 40px;">
        <h2>People Currently in the Gym</h2>
        <div id="gym-counter" style="font-size: 3em; font-weight: bold; color: #28a745;">Loading...</div>
    </div>

    <script>
        function updateGymCount() {
            fetch("<?= site_url('api/gym-count') ?>")
                .then(response => response.json())
                .then(data => {
                    document.getElementById('gym-counter').textContent = data.count;
                })
                .catch(error => {
                    console.error("Error fetching count:", error);
                    document.getElementById('gym-counter').textContent = "N/A";
                });
        }

        // Call now and every 5 seconds
        updateGymCount();
        setInterval(updateGymCount, 5000);
    </script>
</body>
</html>
