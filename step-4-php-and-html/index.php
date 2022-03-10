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

    <!-- 
    In order to embed PHP into HTML, we need to use
    php open tag (all together) < ? php and closing 
    php tag ?>. 


    https://www.php.net/manual/en/language.variables.superglobals.php

    Several predefined variables in PHP are "superglobals", which means they are
    available in all scopes throughout a script. There is no need to do global $variable;
    to access them within functions or methods

    These superglobal variables are:

    $GLOBALS
    $_SERVER
    $_GET
    $_POST
    $_FILES
    $_COOKIE
    $_SESSION
    $_REQUEST
    $_ENV


    Fetching data from the outside world, we set it to a variable
    and reference that variable in some point in the logic.

    Security is important, thus in order to protect your webiste from
    malicious attackers, an example of it would be when a user type
    HTML code in a variable within the URL:
    
    http://yourwebsite.com?name=<a href="https://malicious-website.com">Diego</a>

    In order to prevent that, with PHP whe can use an special function call
    "htmlspecialchars()" that sanatize the inputs from the user. 

    Technique: Assume any user is guilty until proven innocent


    See examples below.
 -->
    <section>
        Using superglobals in order to fetch data from the outside world.
        See code in order to see how to display the fetched data in a different
        way of code style:

        <header>
            <span>Using variable assignment:</span>
            <h1>
                <?php

                $name = htmlspecialchars($_GET['name']);

                echo "Hello, $name";
                ?>
            </h1>
        </header>
    </section>

    <section>
        <header>
            <span>Using concatenation with superglobal</span>
            <h1>
                <!-- 
                    In this scenario, if a variable is only used once in our code
                    we can concatenate the superglobal
                 -->
                <?php
                echo 'Hello ' . htmlspecialchars($_GET['name']);
                ?>
            </h1>
        </header>
    </section>

    <section>
        <header>
            <span>Using php shortcut (all together) < ? =  ?> to echo out fetched data:</span>
            <h1><?= 'Hello ' . htmlspecialchars($_GET['name']) . 'with shortcut echo'; ?></h1>
        </header>
    </section>
</body>

</html>