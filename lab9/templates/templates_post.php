<div class="post">
    <div class="profile">
        <div class="profile__info">
            <img class="profile__avatar" src="<?= htmlspecialchars($users[$post['user_id'] - 1]['avatar']) ?>" alt="Аватар">
            <a href="profile.php?id=<?= $post['user_id'] ?>" class="post__author"><?= htmlspecialchars($post['author_name']) ?></a>
        </div>
        <button class="profile__edit-btn"><img src="images/Edit.svg" alt="Редактировать"></button>
    </div>
    <img class="post__image" src="<?= htmlspecialchars($post['image']) ?>" alt="Пост">
    <div class="post__footer">
        <button class="post__like-btn">
            <img src="images/heart.png" alt="Лайк" class="like-icon">
            <span><?= htmlspecialchars($post['likes']) ?></span>
        </button>
        <span class="post__description"><?= htmlspecialchars($post['description']) ?></span>
        <button class="post__more-btn">ещё</button>
        <span class="post__date"><?= date('d.m.Y', $post['date']) ?></span>
    </div>
</div>