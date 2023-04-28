<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/header.two.php"; ?>


<main>
    <br>
    <section class="booking">
        <p class="cost-text-booking">Ваши выбранные автомобили</p>
        <?php foreach ($products as $product) : ?>
            <div class="car-booking-all">
                <div class="cars-basket">
                    <img class="btn-delete-booking delete" data-product-id="<?= $product->automobile_id ?>" src="/upload/icons/free-icon-close-4947222.png" alt="">
                    <div class="cars-info-basket">
                        <p class="cars-basket-model-body"><?= $product->model ?> <?= $product->body ?></p>
                        <p class="price-cars-sell"><?= $product->price ?> ₽ в сутки</p>
                    </div>
                    <img class="img-automobiles" src="/upload/cars/<?= $product->photo ?>" alt="">
                </div>
                <hr class="booking-hr-vertikal">
                <hr class="hr-gorizont-basket">
            </div>
        <?php endforeach ?>
    </section>
    <br>
    <section class="booking-two">
        <div class="info-booking">
            <p class="cost-text-booking">Оформление</p>
            <br>
            <div class="booking-user-date">
                <p class="booking-user-info">Кол-во авто</p>
                <p class="booking-user-info-registr-count"><?= $totalCount->count_car ?></p>
            </div>
        </div>
        <br><br>
        <form action="/app/tables/basket/order.php" method="POST" class="btn-booking-bron">
            <button class="btn-booking">Забронировать</button>
        </form>
    </section>
    <br><br><br>
    <section class="section-basket-null">
        <p class="message"></p>
    </section>
</main>


<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/loadProductsBooking.js"></script>

<?php
unset($_SESSION['basket']);
include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.two.php"; ?>