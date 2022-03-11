<?php

/*
 In order to protect sensitive information or data that cannot be
 hardcoded in your project. We could reach for a configuration file.

 The new thing right here is the options attribute of the database array.

 This attribute is going to be passed to the PDO constructor, which allows
 to add options for scenarios that might be hard to debug if nothing shows
 up while you are working on your application.

 E.g.: Imagine that you are trying to fetch data from a database that doesn't
 have a table, and all of the configuration is correct.
 In this scenario, nothing won't be displayed on the screen, thus there is an
 option that helps dealing with that scenario:

 - [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
 Refer to: https://www.php.net/manual/en/pdo.setattribute.php#:~:text=to%20upper%20case.-,PDO%3A%3AATTR_ERRMODE,-%3A%20Error%20reporting.

*/
return [
    'database' => [
        'name' => 'mytodos',
        'username' => 'root',
        'password' => 'secret',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
