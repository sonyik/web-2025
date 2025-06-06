<div class="info">
    <img class="info__avatar" src="<?= htmlspecialchars($user['avatar']) ?>" alt="Фото профиля">
    <h2 class="info__name"><?= htmlspecialchars($user['name']) ?></h2>
    <span class="info__description"><?= htmlspecialchars($user['description'] ?? '') ?></span>
    <button class="info__counter">
        <img src="images/count_posts.svg">
        <?= htmlspecialchars($postsCount) ?> поста 
    </button>
</div>

<div class="gallery">
    <?php foreach ($userPosts as $post): ?>
        <img class="gallery__item" src="<?= htmlspecialchars($post['images'][0]) ?>" alt="Пост">
    <?php endforeach; ?>
</div>
