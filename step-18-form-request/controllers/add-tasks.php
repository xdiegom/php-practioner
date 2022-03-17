<?php

$app['database']->insert('todos', [
    'description' => $_POST['description']
]);

header('Location: /');
