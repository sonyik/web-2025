<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Счастливые билеты</title>
</head>
<body>
    <h2>Счастливые билеты</h2>
    <form method="post">
        <label>Начальный номер:</label>
        <input type="text" name="start" pattern="\d{6}" required>
        <label>Конечный номер:</label>
        <input type="text" name="end" pattern="\d{6}" required>
        <button type="submit">Выполнить</button>
    </form>
    <?php
    if (!empty($_POST["start"]) && !empty($_POST["end"])) {
        $start = (int)$_POST["start"];
        $end = (int)$_POST["end"];
        for ($i = $start; $i <= $end; $i++) {
            $num = str_pad($i, 6, STR_PAD_LEFT);
            $sum1 = $num[0] + $num[1] + $num[2];
            $sum2 = $num[3] + $num[4] + $num[5];
            if ($sum1 == $sum2) {
                echo "<p>$num</p>";
            }
        }
    }
    ?>
</body>
</html>
