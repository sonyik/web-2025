<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styles/home_style.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <div class="page">
        <!-- Навигация -->
        <div class="nav-bar">
            <button class="nav-bar__icon"><img src="images/home.svg" alt="Лента"></button>
            <button class="nav-bar__icon"><img src="images/Profile.svg" alt="Профиль"></button>
            <button class="nav-bar__icon"><img src="images/New_post.svg" alt="Добавить пост"></button>
        </div>

        <!-- Основной контент -->
        <div class="content-area">
            <div class="container">
                <?php
                require_once 'load_data.php';

                // Фильтрация постов по user_id
                if (isset($_GET['user_id'])) {
                    $userId = (int)$_GET['user_id'];
                    if (validateUserIdExists($userId, $users)) {
                        $posts = array_filter($posts, fn($p) => $p['user_id'] === $userId);
                    } else {
                        header('Location: home.php');
                        exit();
                    }
                }

                foreach ($posts as $post) {
                    $author = $users[array_search($post['user_id'], array_column($users, 'id'))];
                    $post['author_name'] = $author['name'];
                    include 'templates/templates_post.php';
                }
                ?> 
            </div>
        </div>
    </div>
</body>
</html>