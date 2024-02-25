<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "/project/route/route.php";

$router = new Router();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {


    $router->addRoute('/project/', function () {
        header("Location: authorization.php");
    });
    $router->addRoute('/project/index.php', function () {
        header("Location: authorization.php");
    });

    $router->addRoute('/project/authorization.php', function () {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            header("Location: main.php");
            die();
        } else {
            $register = new AuthorizationController();
            $register->render("authorization", array());
        }

    });
    $router->addRoute('/project/main.php', function () {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            $register = new MainController();
            $register->render("main", array());

        } else {
            header("Location: authorization.php");
            die();
        }

    });

    $router->addRoute('/project/register.php', function () {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            header("Location: main.php");
            die();

        } else {
            $register = new RegisterController();
            $register->render("register", array());
        }
    });
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $router->addRoute('/project/authorization.php', function () {

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            header("Location: main.php");
            die();

        } else {
            $email = $_POST["email"]; // change with username to email
            $password = $_POST["password"];
            $register = new AuthorizationController();
            if (isset($email) && isset($password) && $register->authorization($email, $password)) {
                $_SESSION['logged_in'] = true;
                header("Location: main.php");
                die();
            } else {
                $register->render("authorization", array("error" => "Введены неверные данные"));
            }
        }
    });
    $router->addRoute('/project/main.php', function () {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            if (isset($_POST["btn"])) {
                unset($_SESSION['logged_in']);
                header("Location: authorization.php");
                die();
            }
        } else {
            header("Location: authorization.php");
            die();
        }
    });
    $router->addRoute('/project/register.php', function () {
        $register = new RegisterController();

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (isset($username) && isset($email) && isset($password)) {
            $_SESSION['logged_in'] = true;
            if ($register->unique_email($email)) {
                $register->post_register($username, $email, $password);
                header("Location: main.php");
                die();
            } else {
                $register->render("register", array("error" => "Email должен быть уникальный"));
            }
        } else {
            echo "Неверные данные";
        }
    });
}
?>