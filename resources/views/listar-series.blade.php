<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar series</title>
</head>
<body>
    <h1>Series</h1>

    <ul>
        <?php foreach($series as $serie): ?>
            <li><?= $serie ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>