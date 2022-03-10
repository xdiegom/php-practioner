<?php

/*
 Separation of concerns.

 1. We have one file that receive and prepare the data
 2. We reference another file that will be responsible for
    rendering that data onto the screen.
*/

$greeting = 'Hello Diego!';

require('index.view.php');
