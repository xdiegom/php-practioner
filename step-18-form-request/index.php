<?php

/*
 ⚠️ In order to execute this code, it is required to
 have installed mysql on your local computer.

 cd to this folder and boot up PHP server "php -S localhost:<port>"
 in order to make router redirection works.

 Main file to read: add-tasks.php, QueryBuilder.php@insert(), routes.php, Router.php@get(),
                    Router.php@post(), Request.php@method

 */

require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
