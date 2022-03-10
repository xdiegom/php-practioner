<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with HTML</title>
    <style>
        header {
            padding: 2em;
            background-color: #e3e3e3;
            text-align: center;
            margin-top: 1em;
        }

        span {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <h1><?= $greeting; ?></h1>
    </header>
</body>

</html>