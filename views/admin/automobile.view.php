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
        <section class="automobile-admin">
            <form class="form-products" action="/app/admin/tables/automobile.check.php" method="POST" enctype="multipart/form-data">
                <div class="form-products-content">
                    <div class="form-header-admin">
                        <p>Добавить автомобиль</p>
                    </div>
                    <input class="input-admin" type="file" name="photo">

                    <input class="input-admin" type="text" name="price_hour">

                    <select class="input-admin" name="model_id">
                        <?php foreach ($models as $model) : ?>
                            <option value="<?= $model->id ?>"><?= $model->name ?></option>
                        <?php endforeach ?>
                    </select>

                    <select class="input-admin" name="speed_id">
                        <?php foreach ($speeds as $speed) : ?>
                            <option value="<?= $speed->id ?>"><?= $speed->number ?></option>
                        <?php endforeach ?>
                    </select>

                    <select class="input-admin" name="transmission_id">
                        <?php foreach ($transmissions as $transmission) : ?>
                            <option value="<?= $transmission->id ?>"><?= $transmission->name ?></option>
                        <?php endforeach ?>
                    </select>

                    <select class="input-admin" name="power_id">
                        <?php foreach ($powers as $power) : ?>
                            <option value="<?= $power->id ?>"><?= $power->name ?></option>
                        <?php endforeach ?>
                    </select>

                    <select class="input-admin" name="body_id">
                        <?php foreach ($bodies as $body) : ?>
                            <option value="<?= $body->id ?>"><?= $body->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="add_automobiles_admin_image">
                    <div class="form-header-admin">
                        <p>Добавить изображение</p>
                    </div>
                    <div>
                        <input class="input-admin" type="file" name="image_one">
                        <textarea name="text" id="" cols="30" rows="10"></textarea>
                        <input class="input-admin" type="file" name="image_two">
                    </div>
                </div>
                <button class="add-model-cars-aut" name="addAutomobile">
                    <p>Добавить</p>
                </button>
            </form>
            <table class="info-automobile-admin">
                <tr>
                    <th></th>
                    <th>Цена</th>
                    <th>Модель</th>
                    <th>Скорость</th>
                    <th>Коробка</th>
                    <th>Мощность</th>
                    <th>Кузов</th>
                </tr>
                <?php foreach ($automobilies as $automobile) : ?>
                    <tr class="tr-automobile">
                        <td><img src="/upload/cars/<?= $automobile->photo ?>" alt="<?= $automobile->photo ?>"></td>
                        <td><?= $automobile->price_hour ?></td>
                        <td><?= $automobile->model ?></td>
                        <td><?= $automobile->speed ?></td>
                        <td><?= $automobile->transmission ?></td>
                        <td><?= $automobile->power ?></td>
                        <td><?= $automobile->body ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </section>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.admin.php"; ?>