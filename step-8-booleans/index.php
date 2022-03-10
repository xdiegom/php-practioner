<?php

// Reasons why booleans are used:

// - it can be use in conditionals (next lesson)
// - we can use directly in a view, accesing the
//   the value to render something depending if it's
//   a "true" or "false".


$task = [
    'title' => 'Go to the store',
    'assigned_to' => 'Diego',
    'due' => 'Tomorrow',
    'completed' => false
];

require 'index.view.php';

// Side notes:

// We learned about:
// - arrays
// - associative arrays,
// - Booleans and how to handle them in HTML that comes
//   from the server or an API using a conditional ternary
