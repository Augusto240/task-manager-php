<?php
include 'tasks.php';

if (isset($_GET['task'])) {
    $task = $_GET['task'];
    removeTask($task);
}

header('Location: index.php');
exit;
?>
