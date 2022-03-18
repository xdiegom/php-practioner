<?php

namespace App\Controllers;

use App\Core\App;

class TodoController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('todos');

        return view('todos', compact('tasks'));
    }
}
