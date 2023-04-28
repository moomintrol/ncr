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
</head>

<body>
    <header class="header-two">
        <nav class="navigation-main">
            <a href="/"><img class="logo" src="/upload/logo/NCR.two.svg" alt="logo"></a>
            <hr class="hr-header-two">
            <ul class="navigation-two">
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
</body>

</html>