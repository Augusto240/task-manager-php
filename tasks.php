<?php
$tasksFile = 'tasks.txt';

function getTasks() {
    global $tasksFile;
    if (!file_exists($tasksFile)) {
        return [];
    }
    $tasks = file($tasksFile, FILE_IGNORE_NEW_LINES);
    return $tasks;
}

function addTask($task) {
    global $tasksFile;
    $tasks = getTasks();
    $tasks[] = $task;
    file_put_contents($tasksFile, implode(PHP_EOL, $tasks) . PHP_EOL);
}

function removeTask($task) {
    global $tasksFile;
    $tasks = getTasks();
    $tasks = array_filter($tasks, function ($t) use ($task) {
        return $t !== $task;
    });
    file_put_contents($tasksFile, implode(PHP_EOL, $tasks) . PHP_EOL);
}
?>
