<?php

require_once $_SERVER['DOCUMENT_ROOT']."/project/controllers/RegisterController.php";
require_once $_SERVER['DOCUMENT_ROOT']."/project/controllers/MainController.php";
require_once $_SERVER['DOCUMENT_ROOT']."/project/controllers/AuthorizationController.php";

class Router
{
    protected $routes = [];

    public function addRoute($route, $controller)
    {
        $this->routes[$route] = ['controller' => $controller];
    }

    public function dispatch($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $controller();
        } else {
            echo "Данного путя не существует";
        }
    }
}

?>