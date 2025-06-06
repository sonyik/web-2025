<div class="post">
    <div class="profile">
        <div class="profile__info">
            <img class="profile__avatar" src="<?= htmlspecialchars($users[$post['user_id'] - 1]['avatar']) ?>" alt="Аватар">
            <a href="profile.php?id=<?= $post['user_id'] ?>" class="post__author"><?= htmlspecialchars($post['author_name']) ?></a>
        </div>
        <button class="profile__edit-btn"><img src="images/Edit.svg" alt="Редактировать"></button>
    </div>
    
    <div class="slider">
        <div class="slides">
            <?php foreach ($post['images'] as $index => $image): ?>
                <div class="slide <?= $index === 0 ? 'active' : '' ?>">
                    <img src="<?= htmlspecialchars($image) ?>" alt="Пост <?= $index + 1 ?>">
                </div>
            <?php endforeach; ?>
        </div>
        
        <?php if (count($post['images']) > 1): ?>
            <button class="slider-arrow prev">❮</button>
            <button class="slider-arrow next">❯</button>
            <div class="slider-indicator">
                <span class="current-slide">1</span>/<span class="total-slides"><?= count($post['images']) ?></span>
            </div>
        <?php endif; ?>
    </div>
    
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.slider').forEach(slider => {
        const slides = slider.querySelector('.slides');
        const prev = slider.querySelector('.prev');
        const next = slider.querySelector('.next');
        const currentSlide = slider.querySelector('.current-slide');
        const totalSlides = slider.querySelector('.total-slides');
        let currentIndex = 0;
        
        // Обновление индикатора слайдов
        function updateIndicator() {
            if (currentSlide) {
                currentSlide.textContent = currentIndex + 1;
            }
        }

        function showSlide(index) {
            // Циклическое переключение
            if (index >= slides.children.length) index = 0;
            if (index < 0) index = slides.children.length - 1;
            
            // Скрыть все слайды
            slider.querySelectorAll('.slide').forEach(slide => {
                slide.classList.remove('active');
            });
            
            // Показать выбранный слайд
            slides.children[index].classList.add('active');
            currentIndex = index;
            
            // Обновить индикатор
            updateIndicator();
        }

        if (prev && next) {
            prev.addEventListener('click', () => {
                showSlide(currentIndex - 1);
            });

            next.addEventListener('click', () => {
                showSlide(currentIndex + 1);
            });
        }
        
        // Инициализация индикатора
        updateIndicator();
    });
});
</script>