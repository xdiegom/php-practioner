<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>

<body>
    <h1>Tasks for to today:</h1>
    <ul>
        <li><strong>Name: </strong>: <?= $task['title']; ?></li>
        <li><strong>Person in charge: </strong>: <?= $task['assigned_to']; ?></li>
        <li><strong>Due date: </strong>: <?= $task['due']; ?></li>
        <li><strong>Status: </strong>: <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?></li>
    </ul>
</body>

</html>