# Лабораторна №3

## PHP-код

```
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
```