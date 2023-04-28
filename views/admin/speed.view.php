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
            <div class="add-speed">
                <div>
                    <p class="admin-panel-cars">Максимальная скорость автомобиля</p>
                </div>
                <form class="input-add-speed" action="/app/admin/tables/speed.check.php" method="POST">
                    <input type="text" name="number" placeholder="Введите скорость">
                    <button class="add-speed-car" name="btn-add-speed">
                        <p>Добавить</p>
                    </button>
                </form>
            </div>
            <br>
            <table class="speed-name-car">
                <?php foreach ($speeds as $speed) : ?>
                    <tr class="tr-speed">
                        <td><?= $speed->number ?></td>
                        <td><img class="btn-delete-speed btn-delete-booking delete" data-product-id="<?= $speed->id ?>" src="/upload/icons/free-icon-close-4947222.png" alt=""></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </section>

</main>

<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/loadAdmin.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.admin.php"; ?>