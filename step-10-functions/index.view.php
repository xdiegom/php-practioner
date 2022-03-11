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
        <li><strong>Name: </strong>: <?= $task['title']; ?></li>
        <li><strong>Person in charge: </strong>: <?= $task['assigned_to']; ?></li>
        <li><strong>Due date: </strong>: <?= $task['due']; ?></li>
        <li>
            <!-- 
                Here we can use HTML code using the short syntax 
                like a foreach statement, but with the if statement
                in order to add HTML that in a ternary would look 
                messy.
             -->
            <strong>Status: </strong>
            <?php if ($task['completed']) : ?>
                <span class="icon">&#9989;</span>
            <?php else : ?>
                <span class="icon">Incomplete</span>
            <?php endif ?>
        </li>
    </ul>
</body>

</html>