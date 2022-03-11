<?php

/*
 ⚠️ In order to execute this code, it is required to
 have installed mysql on your local computer.

 */

require 'core/bootstrap.php';


require Router::load('routes.php')
    ->direct(Request::uri());
