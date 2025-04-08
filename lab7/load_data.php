<?php
function loadJsonData($filename) {
    if (!file_exists($filename)) {
        die("Файл $filename не найден!");
    }
    $jsonData = file_get_contents($filename);
    $data = json_decode($jsonData, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Ошибка при чтении JSON: " . json_last_error_msg());
    }
    return $data;
}

// Загрузка данных пользователей и постов
$users = loadJsonData('data/users.json');
$posts = loadJsonData('data/posts.json');
?>