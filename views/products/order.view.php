<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/header.two.php"; ?>

<main>
    <section class="order">
        <form action="/app/tables/basket/order.check.php" method="POST">
            <br>
            <p class="info-bron">Информация о заказе</p>
            <br><br>
            <div class="info-user-basket">
                <p class="booking-user-info">Имя</p>
                <p class="booking-user-info-registr"><?= $infoUser->name ?></p>
                <p class="booking-user-info">Фамилия</p>
                <p class="booking-user-info-registr"><?= $infoUser->surname ?></p>
                <p class="booking-user-info">Номер тел.</p>
                <p class="booking-user-info-registr">+<?= $infoUser->phone ?></p>
                <p class="booking-user-info">Оплата</p>
                <div class="user-pay-booking">
                    <input id="nal" type='radio' name='pay' value="" checked />
                    <label for="nal">Наличные</label>
                    <input id="beznal" type='radio' name='pay' value="" />
                    <label for="beznal">По карте</label>
                </div>
            </div>
            <?php foreach ($products as $product) : ?>
                <!-- <input type="number" name="statuses[]" style ="display:none" id="" value=""> -->
                <div class="car-booking-all">
                    <div class="cars-basket-order">
                        <div class="cars-info-basket">
                            <p class="cars-basket-model-body"><?= $product->model ?> <?= $product->body ?></p>
                            <p class="price-cars-sell"><?= $product->price ?> ₽ в сутки</p>
                        </div>
                        <img class="img-automobiles" src="/upload/cars/<?= $product->photo ?>" alt="">
                    </div>
                    <hr class="booking-hr-vertikal">
                    <div class="booking-data">
                        <div class="cost-booking">
                            <p class="data-start-end">Дата начала</p>
                            <div class="start-date">
                                <select class="start-date-of-month booking-date" data-prod-id="<?= $product->automobile_id ?>" id="start-date-of-month<?= $product->automobile_id ?>" name="start-month[]"></select>
                                <select class="start-date-of-day booking-date" data-prod-id="<?= $product->automobile_id ?>" id="start-date-of-day<?= $product->automobile_id ?>" name="start-day[]"></select>
                                <select class="start-date-of-year booking-date" data-prod-id="<?= $product->automobile_id ?>" id="start-date-of-year<?= $product->automobile_id ?>" name="start-year[]"></select>
                            </div>
                            <p class="data-start-end">Кол-во дней</p>
                            <div class="end-date">
                                <select class="end-date-of-day booking-date" data-prod-id="<?= $product->automobile_id ?>" id="dop_dni<?= $product->automobile_id ?>" name="count-day[]" data-price="<?= $product->price ?>" data-car-id="<?= $product->automobile_id ?>"></select>
                            </div>
                            <div class="price-cars-one">
                                <p class="data-start-end">Стоимость:</p>
                                <p class="price" data-res-product-id="<?= $product->automobile_id ?>"><?= $product->price ?></p>
                            </div>
                            <p class="status-car <?= $svb[$product->automobile_id][2] ?>"  style="color: <?= $svb[$product->automobile_id][1] ?>"><?=$svb[$product->automobile_id][0]?></p>   
                            <input type="hidden" name="car_id[]" class="car_id" value="<?= $product->automobile_id ?>" data-prod-id="<?= $product->automobile_id ?>" id="car_id<?= $product->automobile_id ?>">
                            <div class="info-data-bron-car">
                                <p>Дата начала:</p>
                                <p class="date_start" data-prod-id="<?= $product->automobile_id ?>" id="date_start<?= $product->automobile_id ?>"></p>
                                <p>Дата окончания:</p>
                                <p class="date_end" data-prod-id="<?= $product->automobile_id ?>" id="date_end<?= $product->automobile_id ?>"></p>
                            </div>
                        </div>
                    </div>
                    <hr class="hr-gorizont-basket">
                </div>
                <br><br>
            <?php endforeach ?>
            <p class="booking-user-info-itog-sum">Итоговая стоимость</p>
            <p class="booking-user-info-sum"></p>

            <button class="btn-confirm-order" name="btn-confirm-order[]">
                <p>Оформить</p>
            </button>
        </form>
    </section>
</main>

<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/booking.js"></script>
<script src="/assets/js/loadProductsBooking.js"></script>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.two.php"; ?>