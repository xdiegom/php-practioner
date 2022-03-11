<?php

function connectToDB()
{
    // As a general rule of thumb, whe we manually connect to a database
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

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
