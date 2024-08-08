<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefaaaass :D</title>
</head>
<body>
    <h1>Gerenciador de Tarefas (Task Manager)</h1>
    <form action="add_task.php" method="post">
        <input type="text" name="task" placeholder="Nova tarefa" required>
        <button type="submit">Adicionar</button>
    </form>
    <h2>Lista de Tarefas</h2>
    <ul>
        <?php
        include 'tasks.php';
        $tasks = getTasks();
        foreach ($tasks as $task) {
            echo '<li>' . htmlspecialchars($task) . ' <a href="remove_task.php?task=' . urlencode($task) . '">Remover</a></li>';
        }
        ?>
    </ul>
</body>
</html>
