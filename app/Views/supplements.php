<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplement Search</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eaf4e6; /* Light green background */
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2d6a4f; /* Dark green */
            padding-top: 20px;
            font-size: 36px;
        }
        .home-button {
            background-color: #52b788;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .home-button:hover {
            background-color: #2d6a4f;
        }
        form {
            display: flex;
            justify-content: center;
            margin: 20px;
        }
        input[type="text"] {
            padding: 12px;
            width: 60%;
            max-width: 400px;
            font-size: 16px;
            border: 2px solid #2d6a4f; /* Dark green border */
            border-radius: 5px;
            margin-right: 10px;
            background-color: #f9f9f9;
        }
        button {
            padding: 12px 20px;
            font-size: 16px;
            background-color: #38b000; /* Green button */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2d6a4f; /* Dark green hover */
        }
        hr {
            border: 1px solid #c2e6c4; /* Light green hr */
            margin: 20px 0;
        }
        .results-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .result-item {
            border-bottom: 1px solid #f0f0f0;
            padding: 15px 0;
        }
        .result-item:last-child {
            border-bottom: none;
        }
        .result-item strong {
            color: #2d6a4f; /* Dark green */
        }
        .no-results {
            text-align: center;
            color: #888;
            font-size: 18px;
        }
        .info-text {
            text-align: center;
            color: #333;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Search for a Supplement</h1>

    <div style="text-align: center; margin-top: 10px;">
        <a href="https://mi-linux.wlv.ac.uk/~2015319/nutrition/public/home">
            <button class="home-button">Home</button>
        </a>
    </div>

    <form method="get" action="/~2015319/nutrition/public/index.php/supplements">
        <input type="text" name="q" placeholder="e.g. Vitamin D, Creatine" value="<?= esc($query) ?>">
        <button type="submit">Search</button>
    </form>

    <hr>

    <?php if ($query): ?>
        <h2 style="text-align:center; color:#2d6a4f;">Results for "<?= esc($query) ?>"</h2>

        <?php if (!empty($fda['results'])): ?>
            <div class="results-container">
                <?php foreach ($fda['results'] as $item): ?>
                    <div class="result-item">
                        <strong>Brand:</strong> <?= esc($item['openfda']['brand_name'][0] ?? 'Unknown') ?><br>
                        <strong>Purpose:</strong> <?= esc($item['purpose'][0] ?? 'No purpose info') ?><br>
                        <strong>Manufacturer:</strong> <?= esc($item['openfda']['manufacturer_name'][0] ?? 'N/A') ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="no-results">No results found for this search term.</p>
        <?php endif; ?>
    <?php else: ?>
        <p class="info-text">Enter a supplement name above to search the FDA database.</p>
    <?php endif; ?>
</body>
</html>
