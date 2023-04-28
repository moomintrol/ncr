<?php

include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/header.two.php";
?>

<main>
    <div class="profile-user">
        <p class="my-profile">Мой профиль</p>
    </div>
    <br><br>
    <section class="info-user-profil">
        <div class="profile-menu">
            <section class="panel">
                <div class="user-panel">
                    <a href="/app/tables/users/profile.php" class="button-panel">Данные учетной записи</a>
                    <a href="/app/tables/users/orders_user.php" class="button-panel">Арендованные автомобили</a>
                    <a href="/app/tables/users/logout.php" class="button-panel">Выйти</a>
                </div>
            </section>
        </div>
        <div class="info-user">
            <hr class="hr-line-profile">
            <p>Имя</p>
            <p><?= $infoUser->name ?></p>
            <p>Фамалия</p>
            <p><?= $infoUser->surname ?></p>
            <p>Номер телефона</p>
            <p>+<?= $infoUser->phone ?></p>
            <hr class="hr-line-profile">
        </div>
    </section>
</main>