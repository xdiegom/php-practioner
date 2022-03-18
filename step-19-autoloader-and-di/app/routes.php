<?php

$router->get('step-19-autoloader-and-di', 'PageController@home');
$router->get('step-19-autoloader-and-di/about', 'PageController@about');
$router->get('step-19-autoloader-and-di/contact', 'PageController@contact');

$router->get('step-19-autoloader-and-di/todos', 'TodoController@index');
