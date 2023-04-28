<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/header.admin.php"; ?>

<main>
    <section class="update-status">
        <br>
        <div class="profile-user">
            <p class="my-profile">Панель Администратора</p>
        </div>
        <form class="form-update-status" action="/app/admin/tables/update.status.check.php" method="POST">
            <div>
                <label for="">Текущий статус:</label>
                <input name="old-status" disabled type="text" value="<?= $order->status ?>">
            </div>
            <br>
            <input type="hidden" name="id" value="<?= $order->id ?>">
            <?php if ($order->status == "Подтвержден") : ?>
                <textarea name="reason_cancel" id="" cols="30" rows="10"></textarea>
                <br>
                <input type="hidden" name="status-id" value="3">
                <button class="btn-update-status" name="assembly">
                    <p>Выполнен</p>
                </button>
                <input type="hidden" name="canceled-id" value="2">
                <button class="btn-update-status" name="canceled">
                    <p>Отменен</p>
                </button>
                <br>
                <p class="error"><?= $_SESSION['error'] ?? "" ?></p>
            <?php endif ?>
        </form>
    </section>
</main>

<?php
unset($_SESSION['error']);
include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.admin.php";
?>