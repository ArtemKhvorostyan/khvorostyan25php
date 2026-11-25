<?php
    $appname = "Task manager";
    $taskTitle = "Вивчити основи PHP:";
    $taskTimeEstimate = 3;
    $isCompleted = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task manager</title>
    <style>
        .task-done {
            color: green;
        }

        .task-pending {
            color: gray;
        }
    </style>
</head>
<body>
    <header>
        <h1><?= $appname ?></h1>
    </header>
    <main>
        <ul>
            <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">
                <?= $taskTitle ?>
                <?php if ($isCompleted): ?> Виконано 
                <?php else: ?> В процесі 
                <?php endif; ?>
            </li> 
            <li><?= $taskTimeEstimate ?></li>
        </ul>
    </main>
</body>
</html>