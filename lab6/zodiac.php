<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Знаки зодиака</title>
</head>
<body>
    <h2>Знак зодиака</h2>
    <form method="post">
        <label for="date">Введите дату:</label>
        <input type="text" name="date" placeholder="ДД.ММ.ГГГГ">
    </form>
    <?php
    if (!empty($_POST["date"])) {
        $input = $_POST["date"];
        $digits = '';
        for ($i = 0; $i < strlen($input); $i++) {
            if (ctype_digit($input[$i])) {
                $digits .= $input[$i];
            }
        }
        if (strlen($digits) >= 4) {
            $day = intval(substr($digits, 0, 2));
            $month = intval(substr($digits, 2, 2));
            function zodiac($day, $month) {
                if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) return "Водолей";
                if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) return "Рыбы";
                if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) return "Овен";
                if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) return "Телец";
                if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) return "Близнецы";
                if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) return "Рак";
                if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) return "Лев";
                if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) return "Дева";
                if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) return "Весы";
                if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) return "Скорпион";
                if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) return "Стрелец";
                return "Козерог";
            }
            echo "<p>" . zodiac($day, $month) . "</p>";
        } else {
            echo "Ошибка";
        }
    }
    ?>
</body>
</html>
