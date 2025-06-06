<?php
require_once 'validation.php';

try {
    $users = json_decode(file_get_contents('data/users.json'), true);
    $posts = json_decode(file_get_contents('data/posts.json'), true);

    // Преобразование старых постов для совместимости
    foreach ($posts as &$post) {
        if (isset($post['image']) && !isset($post['images'])) {
            $post['images'] = [$post['image']];
            unset($post['image']);
        }
    }
    unset($post);

    validateUsersData($users);
    validatePostsData($posts, $users);

} catch (Exception $e) {
    die("Ошибка валидации: " . $e->getMessage());
}