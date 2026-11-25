# Лабораторна робота №4

## PHP-код

```
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
```

![скріншот](screenshot%20(2).png)