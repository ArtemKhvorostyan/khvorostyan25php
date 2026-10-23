# Лабораторна №2

## PHP-код

```
<?php
    $appname = "Task manager";
    $taskTitle = "Вивчити основи PHP";
    $taskTimeEstimate = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task manager</title>
</head>
<body>
    <header>
        <h1><?= $appname ?></h1>
    </header>
    <main>
        <ul>
            <li><?= $taskTitle ?></li>
            <li><?= $taskTimeEstimate ?></li>
        </ul>
    </main>
</body>
</html>
```

![скріншот](screenshot.png)
