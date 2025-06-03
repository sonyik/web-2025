<?php
require_once 'validation.php';

try {
   
    $users = json_decode(file_get_contents('data/users.json'), true);
    $posts = json_decode(file_get_contents('data/posts.json'), true);

    validateUsersData($users);
    validatePostsData($posts, $users);

} catch (Exception $e) {
    die("Ошибка валидации: " . $e->getMessage());
}

