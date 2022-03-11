<?php

/*
 ⚠️ In order to execute this code, it is required to
 have installed mysql on your local computer.

 What is PDO?

 PDO stands for PHP Data Objects, it offers an interface
 to connect to a database or a lot of databases.

 Parameters of the class PDO:

 - DSN (Data Source Name)
   It's the connection string to the database. For MySQL
   it has the following structure:

   new PDO('<DB_ENGINE>:host=<IP_ADDRESS>;db_name=<DB_NAME>;', 'user', 'password');

   - DB_ENGINE: is the type of database you are using, it could be: mysql, postgress, sqlite, etc.
   - user: is the user that connects to the database.
   - password: if the connection has a password, you type it there.
     ⚠️ password must be fetch from a config file or somethin similar
        that is saved somewhere safely
 */


require 'functions.php';
require 'Task.php';

/*
 - fetchAll(): returns an array consisting of all values of a single column or
   all (*) columns from the result set.
   By default, it returns the data as an associative array and as an indexed array.
   This is done by using PDO::FETCH_BOTH constant, which is the default value of
   the function.

   There are other types of constants that can be passed to the function in order to
   fetch the data in different forms:
    - FETCH_OBJ: fetch the data as objects
    - FETCH_ASSOC: fetch the data as an associative array
    - FETCH_CLASS: fetch the data and maps to a class
 */

$pdo = connectToDB();
$tasks = fetchAllTasks($pdo);


require 'index.view.php';
