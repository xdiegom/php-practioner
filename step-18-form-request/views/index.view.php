<?php require('partials/head.php'); ?>

<h1>List of tasks: </h1>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <?php if ($task->completed) : ?>
            <li><strike><?= $task->description ?> </strike> </li>
        <?php else : ?>
            <li><?= $task->description ?> </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<h2>Submit A Task to the TO-DO list</h2>

<form action="/tasks" method="POST">
    <input placeholder="Description" type="text" name="description">
    <button>Submit</button>
</form>

<?php require('partials/footer.php') ?>