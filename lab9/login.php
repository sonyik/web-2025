<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles/login_style.css">
</head>
<body>
    <div class="container">
        <div class="image-container">
            <h1 class="main-header">Войти</h1> 
        </div>
        <form class="form">
            <label class="form__label" for="email">Электронная почта</label>
            <input class="form__input" type="email" id="email" name="email">
            <span class="form__hint">Введите электронную почту в формате *****@***.**</span>

            <label class="form__label" for="password">Пароль</label>
            <div class="form__password-wrapper">
                <input class="form__input" type="password" id="password" name="password">
                <button type="button" class="form__toggle-password">
                    <img src="images/Eye_off.svg" alt="Видимость пароля">
                </button>
            </div>
            <span class="form__hint">Введите пароль</span>
            <button class="form__submit">Продолжить</button>
        </form>
    </div>
</body>
</html>