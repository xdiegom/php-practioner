<?php

/*
    A class can represent any possibly thing in your project or domain.
    We look for the nouns to represent the classes.

    So a Class is the representation or the blueprint for some concept
    in your application.

    How to define a class?

    class <noun>
    {
        // code
    }

    Concepts:

    - Constructor:
     A constructor is something that will automatically happen
     whenever you prepare a new class. In this case a Task

    - Instantiate a class:
    An instance of a class is called an object, and the way how
    we can instantiate a class is like this:

    $object = new <ClassName>(param1, param2,);

    Any argument that you pass through the parameters inside the
    parentheses will be passed to the constructor.

    - The "this" keyword
    We can refer to the current instance of a class using the keyword
    "this" followed by an arrow "->" to access the Properties of the
    object.

    - Properties
    Are the attributes that defines the blueprint or template of the
    class. E.g:
    A Person class has a name, age, height, weight, etc.

*/

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$task = new Task('Go to the store');

$tasks = [
    new Task('Go to the store'),
    new Task('Finish the screencast'),
    new Task('Clean my room')
];

$tasks[0]->complete();

require 'index.view.php';
