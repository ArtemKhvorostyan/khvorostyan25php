<?php
    $appname = "Task manager";
    $taskTitle = "Оволодіти англійською мовою:";
    $taskTimeEstimate = 3;
    $isCompleted = true;

    function formatTitle($text, $maxLength = 20) {
        if (strlen($text) > $maxLength) {
            return substr($text, 0, $maxLength)."...";
        } else {
            return $text;
        }
    }

    function getCurrentGreeting() {
        $hour = (int) date('H');

        if ($hour >= 6 && $hour < 12) {
            return "Доброго ранку";
        } elseif ($hour >= 12 && $hour < 18) {
            return "Добрий день";
        } elseif ($hour >= 18 && $hour < 24) {
            return "Добрий вечір";
        } else {
            return "Доброї ночі";
        }
    }
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
        <p><?= getCurrentGreeting() ?>!</p>
    </header>
    <main>
        <ul>
            <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">
                <?= formatTitle($taskTitle) ?>
                <?php if ($isCompleted): ?> Виконано 
                <?php else: ?> В процесі 
                <?php endif; ?>
            </li> 
            <li><?= $taskTimeEstimate ?></li>
        </ul>
    </main>
</body>
</html>