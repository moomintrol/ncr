<?php

use App\models\Order;

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
        <table class="info-order-user">
            <?php foreach($orders as $order): ?>
                <tr class="info-order-date-user">
                    <td>Дата заказа <?=$order->registration_date ?></td>
                    <td>Статус <?= $order->status ?></td>
                </tr>
                <?php foreach(Order::getProductByOrderUser($order->id) as $product): ?>
                    <tr class="info-car-order-user">
                        <td><?= $product->model ?> <?= $product->body ?></td>
                        <td><img src="/upload/cars/<?= $product->photo ?>" alt="<?= $product->photo ?>"></td>
                        <td><?= $product->number ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endforeach ?>
        </table>
    </section>
</main>