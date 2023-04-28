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
            <div class="add-admin">
                <p class="admin-panel-cars">Администраторы</p>
                <br>
                <form class="input-add-admin" action="/app/admin/tables/admin.check.php" method="POST">
                    <div class="input-add-admin-d">
                        <label for="">Имя</label>
                        <input type="text" name="name">
                        <label for="">Фамилия</label>
                        <input type="text" name="surname">
                        <label for="">Дата рождения</label>
                        <input type="date" name="data_of_birth">
                        <label for="">Телефон</label>
                        <input type="phone" name="phone">
                        <label for="">Пароль</label>
                        <input type="password" name="password">
                        <button name="btn-add-admin" class="btn-add-admin-btn">
                            <p>Добавить</p>
                        </button>
                    </div>
                </form>
            </div>
            <table class="amdin-info-add">
                <?php foreach ($admins as $admin) : ?>
                    <tr class="tr-admin">
                        <td><?= $admin->name ?></td>
                        <td><?= $admin->surname ?></td>
                        <td><?= $admin->phone ?></td>
                        <td><?= $admin->data_of_birth ?></td>
                        <td><img class="btn-delete-admin btn-delete-booking delete" data-product-id="<?= $admin->id ?>" src="/upload/icons/free-icon-close-4947222.png" alt=""></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </section>
</main>

<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/loadAdmin.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.admin.php"; ?>