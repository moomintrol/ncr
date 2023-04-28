<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/header.admin.php"; ?>
<br>

<main>
    <section>
        <div class="profile-user">
            <p class="my-profile">Панель Администратора</p>
        </div>
            <table class="info-order-panel">
                <tr class="info-cars-order-panel">
                    <th>Модель</th>
                    <th></th>
                    <th>Номер</th>
                    <th>Дата начала</th>
                    <th>Дата конца</th>
                </tr>
                <?php foreach ($products as $product) : ?>
                    <tr class="info-cars-order-panel-info">
                        <td><?= $product->model ?> <?= $product->body ?></td>
                        <td></td>
                        <td><?= $product->number ?></td>
                        <td><?= $product->date_time_biginning ?></td>
                        <td><?= $product->date_time_eding ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
    </section>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.admin.php"; ?>