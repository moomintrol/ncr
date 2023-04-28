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
            <div class="add-cars">
                <div>
                    <p class="admin-panel-cars">Машины</p>
                </div>
                <form class="input-add-cars" action="/app/admin/tables/product.check.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="number" placeholder="Введите Гос.номер">

                    <input type="file" name="photo">

                    <select name="automobiles_id">
                        <?php foreach ($automobyles as $automobyle) : ?>
                            <option value="<?= $automobyle->id ?>"><?= $automobyle->model ?> <?= $automobyle->body ?></option>
                        <?php endforeach ?>
                    </select>

                    <button class="add-model-cars" name="btnAddCar">Добавить</button>
                </form>
            </div>
            <div class="select-cars-admin">
                <div class="filter-butt-cars">
                    <input type="hidden" name="status_id" value="all">
                    <button class="btn-form-check-ai" data-status-id="all" name="btn-status">
                        <p>Все</p>
                    </button>
                    <?php foreach ($allCarStatuses as $status) : ?>
                        <input type="hidden" name="status_id" value="<?= $status->id ?>">
                        <button class="btn-form-check-ai" data-status-id="<?= $status->name ?>" name="btn-status">
                            <p><?= $status->name ?></p>
                        </button>
                    <?php endforeach ?>
                </div>
            </div>
            <br><br>
            <table class="panel-info-car-admin">
                <tr class="panel-info-car-admin-th">
                    <th>Машина</th>
                    <th>Гос.номер</th>
                    <th>Статус</th>
                </tr>
                <tbody class="product-tables">

                </tbody>
            </table>
        </section>
    </section>
    <br><br>
</main>

<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/loadProductAdmin.js"></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.admin.php"; ?>