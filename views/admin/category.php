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
            <div class="add-category">
                <div>
                    <p class="admin-panel-cars">Категории</p>
                </div>
                <form class="input-add-category" action="/app/admin/tables/category.check.php" method="POST">
                    <input type="text" name="name" placeholder="Добавить категорию">

                    <button class="add-body" name="addBody">Добавить</button>
                </form>
            </div>
            <br>
            <table class="category-name-car">
                <?php foreach ($categories as $category) : ?>
                    <tr class="tr-category">
                        <td class="category-name"><?= $category->name ?></td>
                        <td><img class="btn-delete-category btn-delete-booking delete" data-product-id="<?= $category->id ?>" src="/upload/icons/free-icon-close-4947222.png" alt=""></td>
                    </tr>
                <?php endforeach ?>
                <tr></tr>
            </table>
        </section>
</main>

<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/loadAdmin.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.admin.php"; ?>