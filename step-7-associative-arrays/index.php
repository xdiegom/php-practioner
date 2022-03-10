<?php

// Associative array: is an array that consists of
// any number of 'key' 'value' pair of items.


$person = [
    'age' => 29,
    'name' => 'Diego',
    'carrer' => 'Web developer'
];

// This is how to add a new item to an associative
// array:

$person['hair'] = 'brown';


// How to tinker around with code?

// For example if we want to print an array  we could use the
// primitive language construct "echo", but it won't work because
// "echo" is use to print strings.
// So, for arrays we can use in PHP the primitive language construct
// "var_dump()". In this case, the primitive function or language
// construct accepts an argument, which will be an array. E.g:

var_dump($person);

require 'index.view.php';
