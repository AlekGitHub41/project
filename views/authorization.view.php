<?php
require $_SERVER['DOCUMENT_ROOT'] . "/project/views/header.view.php";
?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Форма входа</h5>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email пользователя:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid alert-danger" style="color: red; font-size: 13px">
                                    <?php
                                    if (isset($data["error"])) {
                                        echo $data["error"];
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Пароль:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="invalid alert-danger" style="color: red; font-size: 13px">
                                <?php
                                if (isset($data["error"])) {
                                    echo $data["error"];
                                }
                                ?>
                            </div>
                            <div>
                                <a href="register.php">Нет аккаунта? Зарегистрируйтесь</a>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/project/views/footer.view.php";
?>