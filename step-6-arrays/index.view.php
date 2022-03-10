<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>

<body>
    First approach (see php code):
    <ul>

        <?php
        /**
         * How to interpret a "foreach" keyword funcionality?
         * Any code inside the curly braces of the "foreach"
         * will be triggered "for each" item in the array.
         */

        foreach ($names as $name) {
            echo "<li>$name</li>";
        }
        ?>
    </ul>

    Second approach (see php code):
    <ul>

        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>