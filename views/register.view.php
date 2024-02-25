<?php
require $_SERVER['DOCUMENT_ROOT'] . "/project/views/header.view.php";
?>
<div class="container mt-5">
    <h2>Регистрация</h2>
    <form method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Имя пользователя</label>
            <input type="text" class="form-control" id="username" name="username"
                   placeholder="Введите имя пользователя" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email адрес</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Введите email" required>
            <div class="invalid alert-danger" style="color: red; font-size: 13px">
                <?php
                if (isset($data["error"])) {
                    echo $data["error"];
                }
                ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль" required>
        </div>
        <div>
            <a href="authorization.php">Уже есть аккаунт? Тогда можете просто войти</a>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Зарегистрироваться</button>
    </form>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/project/views/footer.view.php";
?>
