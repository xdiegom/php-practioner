<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>

<body>
    Iteration of an associative array
    <ul>

        <?php foreach ($person as $key => $feature) : ?>
            <li><strong><?= $key; ?></strong>: <?= $feature; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>