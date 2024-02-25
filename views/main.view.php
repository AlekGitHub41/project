<?php
require $_SERVER['DOCUMENT_ROOT'] . "/project/views/header.view.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="text-center">
                    <form method="post">
                        <p>Вы вошли на сайт</p>
                        <button type="submit" class="btn btn-primary btn-lg" name="btn">Выйти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/project/views/footer.view.php";
?>