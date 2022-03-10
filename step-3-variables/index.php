<?php

// In real life variables will be modified.

$greeting = 'Ahoy';
$name = 'Diego';

//  Difference between single quotes and double quotes:
//  ** Double Quotes **
//  Using double quotes, we can interpolate variables into a string. E.g:

echo "Using double quotes \"\":";
echo "<br> Hello, my name is $name";

// Also, with double quotes, you can concatenate two or variables
// using curly braces, which is something that some developers might
// tend to use

echo "<br><br> Using double quotes with interpolation and curly braces '':<br>";
echo "{$greeting}, {$name}";

//  ** Single Quotes **
//  Using single quotes, we can use string concatenation with a dot "." E.g:

echo "<br><br> Using single quotes with concatenation '':";
echo '<br>' . 'Hello, my name is ' . $name;
