<?php

class Connection
{
    /*
     Static methods are used to access them
     without instantiate a class
     */
    public static function make()
    {
        try {
            return  new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'root', 'secret');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
