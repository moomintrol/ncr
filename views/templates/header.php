<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCR</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/css.css">
    <script type="module" src="/assets/js/modals.js"></script>
    <script src="/assets/js/fetchUser.js"></script>
</head>

<body>
    <header class="header">
        <nav class="navigation-main">
            <a href="/"><img class="logo" src="/upload/logo/NCR.svg" alt="logo"></a>
            <hr class="hr-header">
            <ul class="navigation">
                <li><a href="/#catolog">Автомобили</a></li>
                <li><a href="/#bron-info">Бронирование</a></li>
                <?php if (!isset($_SESSION["auth"]) || !$_SESSION["auth"]) : ?>
                    <li class="user"><a href="">Авторизация</a></li>
                <?php else : ?>
                    <li><a href="/app/tables/users/profile.php">Личный кабинет</a></li>
                    <li><a href="/app/tables/basket/booking.php">Корзина</a></li>
                <?php endif  ?>
            </ul>
        </nav>
    </header>

    <div class="modal-wrapper" id="modal-wrapper">
        <div class="modal">
            <div class="modal__div">
                <img class="logo" src="/upload/logo/NCR.two.svg" alt="logo">
                <p class="sign">Назад</p>
                <p class="text-header-auth">Авторизация</p>
                <div class="modal__close">&times;</div>
                <div class="modal__content">
                    <form class="entrance" action="" method="POST" id="form-auth">
                        <input type="hidden" name="action" value="auth">
                        <input class="entrance-input" type="phone" placeholder="Номер тел." name="phone">
                        <input class="entrance-input" type="password" placeholder="Пароль" name="password">
                        <p class="error-modal"></p>
                        <button class="btn-auth btn-modal" name="btnAuth">
                            <h3>Войти</h3>
                        </button>
                        <div class="btn-modal-reg">
                            <p class="text-gray">Нет учетной записи?</p>
                            <button class="btn-modal-header reg">
                                <p>Создайте её.</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>