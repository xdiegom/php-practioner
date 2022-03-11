<?php

/*
 ⚠️ In order to execute this code, it is required to
 have installed mysql on your local computer.

 Look at config.php for new comments :).

 */

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';
