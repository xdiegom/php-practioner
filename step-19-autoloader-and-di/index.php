<?php

/*
 ⚠️ In order to execute this code, it is required to
 have installed mysql on your local computer.

 Main file to read: composer.json, index.php, bootstrap.php, App.php,
                    PageController.php, Router.php@direct, Router.php@callAction

 A Controller is a class that is responsible for receiving a request,
 delegating in some form and returning a response.

 A Namespace is a hierarchicallly concept of organizing the structure of an application.

 */

use App\Core\Request;
use App\Core\Router;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
