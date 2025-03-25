<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевод</title>
</head>
<body>
    <form method="post">
        <label for="num">Введите число</label>
        <input type="number" name="number" min="0" max="9">
    </form>
    <?php
        if (isset($_POST["number"]) && $_POST["number"] !== '') {
        $num = (int)$_POST["number"];
        $nums = ['Ноль', 'Один', 'Два', 'Три', 'Четыре', 'Пять', 'Шесть', 'Семь', 'Восемь', 'Девять'];
        echo $nums[$num];
    }
    ?>
</body>
</html>
