<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/header.admin.php"; ?>
<br>
<main>
    <section>
        <div class="profile-user">
            <p class="my-profile">Панель Администратора</p>
        </div>
    </section>
    <br><br>
    <section class="cars-admin">
        <section class="panel">
            <div class="admin-panel">
                <p class="name-panel">Панель</p>
                <a href="/app/admin/tables/product.php" class="button-panel">Машины</a>
                <a href="/app/admin/tables/automobile.php" class="button-panel">Автомобили</a>
                <a href="/app/admin/tables/speed.php" class="button-panel">Скорость</a>
                <a href="/app/admin/tables/model.php" class="button-panel">Модели</a>
                <a href="/app/admin/tables/category.php" class="button-panel">Категории</a>
                <a href="/app/admin/tables/orderAdmin.php" class="button-panel">Заявки</a>
                <a href="/app/admin/tables/admin.php" class="button-panel">Администраторы</a>
                <a href="/app/admin/tables/logoutadmin.php" class="button-panel">Выйти</a>

            </div>
        </section>
        <section class="panel-info">
            <form class="order-admin" action="/app/admin/tables/orderAdmin.php">
                <button class="btn-form-check" name="status" value="all">Все</button>

                <?php foreach ($statuses as $status) : ?>
                    <button class="btn-form-check" name="status" value="<?= $status->id ?>"><?= $status->name ?></button>
                <?php endforeach ?>
            </form>

            <table class="orders-table">
                <tr>
                    <th>Пользователь</th>
                    <th>Статус</th>
                    <th>Дата (Y.m.d)</th>
                </tr>
                <?php foreach ($orders as $order) : ?>
                    <tr class="tr-order">
                        <td><?= $order->user ?></td>
                        <td id="status" data-order-status="<?= $order->id ?>"><?= $order->statuse ?></td>
                        <td><?= $order->registration_date ?></td>
                        <td><?= $order->reason_cancel ?></td>
                        <td>
                            <form action="/app/admin/tables/show.order.php">
                                <input type="hidden" name="id" value="<?= $order->id ?>">
                                <button name="btn-order-info" class="order-admin-filter-au">Информация</button>
                            </form>
                        </td>
                        <td>
                            <form action="/app/admin/tables/update.status.php" method="POST">
                                <input type="hidden" name="id" value="<?= $order->id ?>">
                                <button name="btn-status" class="order-admin-filter-au" data-order-update="<?= $order->id ?>">Статус</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </section>
</main>

<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/loadAdmin.js"></script>
<script src="/assets/js/updateStatus.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.admin.php"; ?>