<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/header.two.php"; ?>

<main>
    <section class="category-car-list">
        <div>
            <img src="/upload/photo/<?= $product->image ?>" class="start-image-category" alt="<?= $product->image ?>">
            <p class="title-model-text"><?= $product->text ?></p>
            <h5 class="title-model-name"><?= $product->model ?> <?= $product->body ?></h5>

            <div class="content">
                <div class="category-car-info-two">
                    <div class="div">
                        <p class="card-text"><?= $product->power ?> л.с./110 кВт</p>
                        <p class="card-text"><?= $product->speed ?>км/ч</p>
                        <p class="info-speed-power">Мощность</p>
                        <p class="info-speed-power">Максимальная скорость</p>
                    </div>
                    <p class="prava-category">[1] Указанные значения являются «определенными значениями CO2 в цикле WLTP» в соответствии с подп. (3) ст. 2 Регламента ЕС 2017/1153 (получены в соответствии с процедурой тестирования,
                        установленной Приложением XXI к Регламенту ЕС 2017/1151). Значения расхода топлива рассчитаны на основании данных значений. Расход электроэнергии и запас хода рассчитаны на основе Регламента ЕС 2017/1151.
                        Приведенные значения могут отличаться от значений по документам о соответствии требованиям Правил ООН №101, являющихся основанием для выпуска Одобрения типа транспортного средства (ОТТС) Таможенного Союза,
                        в силу различия методик испытаний по вышеуказанным Регламентам и Правилам ООН №101.</p>
                </div>
                <div class="info-category-car-all">
                    <p class="desing">Дизайн</p>
                    <br>
                    <div class="info-car-images">
                        <?php foreach ($imageInfo as $infoAuto) : ?>
                            <p class="for-desinf-down"><?= nl2br($infoAuto->info) ?></p>
                            <br>
                            <img class="photo-salon" src="/upload/photo/<?= $infoAuto->img ?>" alt="">
                        <?php endforeach ?>
                    </div>
                    <br><br>
                    <div class="bron-btn-info">
                        <div>
                            <a href="/#catolog" class="btn btn-primary button-bron-catalog">Перейти к каталогу</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<br><br>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.two.php"; ?>