<?php

function connectToDB()
{
    // As a general rule of thumb, when we manually connect to a database
    // we allways wrap the PDO connection in a try/catch block

    try {
        return  new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'root', 'secret');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    /*
     - fetchAll(): returns an array consisting of all values of a single column or
        all (*) columns from the result set.
        By default, it returns the data as an associative array and as an indexed array.
        This is done by using PDO::FETCH_BOTH constant, which is the default value of
        the function.

        There are other types of constants that can be passed to the function in order to
        fetch the data in different forms:
            - FETCH_OBJ: fetch the data as a standard objects
            - FETCH_ASSOC: fetch the data as an associative array
            - FETCH_CLASS: fetch the data and maps to a class passed as a second
                           parameter to the function.
    */
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
