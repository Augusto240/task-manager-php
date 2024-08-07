<?php
include 'tasks.php';

if (isset($_POST['task'])) {
    $task = $_POST['task'];
    addTask($task);
}

header('Location: index.php');
exit;
?>
