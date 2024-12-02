<?php
// liên kết với file flower.json để xuất dữ liệu ra màn hình
require_once 'function.php';
$flowers = getFlowers();

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách loài hoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        header {
            text-align: center;
            background-color: #f8f9fa;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
        }
        header h1 {
            margin: 0;
            font-size: 2em;
            color: #333;
        }
        .flower-section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }
        .flower-section img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .flower-section h2 {
            margin-top: 15px;
            font-size: 1.8em;
            color: #2c3e50;
        }
        .flower-section p {
            font-size: 1em;
            color: #555;
            text-align: justify;
        }
    </style>
</head>
<body>
    <header>
        <h1>Danh sách các loại hoa</h1>
    </header>

    <main>
        <?php foreach ($flowers as $index => $flower): ?>
            <div class="flower-section">
                <img src="<?= $flower['image'] ?>" alt="<?= $flower['name'] ?>">
                <h2><?= $index + 1 ?>. <?= $flower['name'] ?></h2>
                <p><?= $flower['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>