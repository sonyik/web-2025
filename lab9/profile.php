<?php
// profile.php
require_once 'load_data.php';

if (!isset($_GET['id'])) {
    header('Location: home.php');
    exit();
}

$userId = (int)$_GET['id'];

$user = null;
foreach ($users as $u) {
    if ($u['id'] === $userId) {
        $user = $u;
        break;
    }
}

if (!$user) {
    header('Location: home.php');
    exit();
}

$userPosts = array_filter($posts, fn($p) => $p['user_id'] === $userId);
$postsCount = count($userPosts);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/profile_style.css" rel="stylesheet">
    <title><?= htmlspecialchars($user['name']) ?></title>
</head>
<body>
    <div class="nav-bar">
        <button class="nav-bar__icon"><img src="images/Home.svg" alt="Лента"></button>  
        <button class="nav-bar__icon"><img src="images/Profile.svg" alt="Профиль"></button>
        <button class="nav-bar__icon"><img src="images/New_post.svg" alt="Добавить пост"></button>
    </div>

    <div class="content-area">
        <?php include 'templates/templates_profile.php'; ?>
    </div>
</body>
</html>