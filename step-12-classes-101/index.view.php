<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>

<body>
    <h1>Tasks for to today using shorthand conditionals:</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->isComplete()) : ?>
                    <strike> <?= $task->description ?></strike>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>