<?php include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/header.admin.php";?>
<br>
<main>
    <section>
        <div class="profile-user">
            <p class="my-profile">Панель Администратора</p>
        </div>
    </section>
</main>
<br><br>
<form class="insert" action="/app/admin/tables/auth.check.admin.php" method="POST">
    <label for="phone">Логин</label>
    <input type="phone" name="phone" placeholder="номер телефона"> <br>
    <label for="password">Пароль</label>
    <input type="password" name="password" id="password" placeholder="пароль"> <br>

    <?php if (!empty($_SESSION['error'])) : ?>
        <p class="error"><?= $_SESSION['error'] ?></p>
    <?php endif ?>

    <button class="btn-auth-admin" name="btnAdmin" id="btnAdmin">Войти</button>
</form>

<?php
unset($_SESSION['error']);
include $_SERVER['DOCUMENT_ROOT'] . "/views/templates/footer.admin.php";
?>