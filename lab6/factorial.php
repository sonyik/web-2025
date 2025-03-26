<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Факториал </title>
</head>
<body>
    <h2>Факториал</h2>
    <form method="post">
        <label for="num">Введите целое число:</label>
        <input type="number" name="num" min="0" required>
        <button type="submit">Вычислить</button>
    </form>
    <?php
    function factorial($num) {
        if ($num <= 1) return 1;
        return $num * factorial($num - 1);
    }
    if (isset($_POST["num"]) && $_POST["num"] !== '')  {
        $num = intval($_POST["num"]);
        $result = factorial($num);
        echo $result;
    }
    ?>
</body>
</html>
