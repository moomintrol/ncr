 <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/header.php"; ?>

<main>
    <section>
        <a href="#" class="back-to-top"></a>
    </section>

    <section class="main-header-section">
        <h1 class="header-text-one">Mercedes-Benz A-Класс <br> AMG 45</h1>
        <h5 class="header-text-two">Всё новое – это хорошо забытое старое</h5>
        <h5 class="header-text-three">«Мы изменим представление о современном каршеринге» </h5>
        <img class="start-image-car" src="/upload/cars/carmain.png" alt="home">
        <img class="start-image" src="/upload/cars/photomain.png" alt="home" />
    </section>

    <section class="main-info-bron" id="bron-info">
        <h2 class="text-main-one">Бронирование - в три шага</h2>
        <div class="img-info">
            <?php foreach ($textBrons as $text) : ?>
                <div>
                    <img class="photo-bron-main-info" src="/upload/photo/<?= $text->image ?>" alt="">
                    <p class="main-bron-info"><?= nl2br($text->text) ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </section>

    <section class="main-catalog" id="catolog">
        <h2 class="text-main-two">Модельный ряд</h2>
        <br><br>
        <div class="main-filter">
            <div class="main-filter-button">
                <?php foreach ($bodiesForFIlter as $body) : ?>
                    <button data-body-id="<?= $body->id ?>" name="btn-body-filter" class="button-filter"><?= $body->name ?></button>
                <?php endforeach ?>
                <button name="btn-body-filter" class="button-filter-all button-filter">Все</button>
            </div>
            <div class="hr">
                <hr class="hr-vertikal">
            </div>
            <div class="products">

            </div>
        </div>
    </section>

    <section class="main-catalog">
        <br>
        <h2 class="text-main-two" id="sovet-poset">Советуем посетить</h2>
        <br><br>
        <div class="main-mesta">
            <?php foreach ($textRoutes as $text) : ?>
                <div>
                    <img class="photo-park" src="/upload/photo/<?= $text->image ?>" alt="">


                    <p class="name-park-main"><?= $text->name ?></p>

                    <hr class="hr-park">

                    <p class="text-park"><?= nl2br($text->text) ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</main>

<br><br>

<script src="/assets/js/popapaBasket.js"></script>
<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/loadProducts.check.js"></script>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.php";
