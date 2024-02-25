<?php

require_once $_SERVER['DOCUMENT_ROOT']."/project/mvc/view.php";
require_once $_SERVER['DOCUMENT_ROOT']."/project/mvc/model.php";

class Controller
{

    protected $model;
    protected $view;
    protected $register_users = "";

    function __construct()
    {
        $this->view = new View();
        require_once $_SERVER['DOCUMENT_ROOT'] . "/project/models/Users.php";
        $this->register_users = new Users();
    }

    public function render(string $name_view, $data = [])
    {
        $this->view->generate($name_view, $data);
    }
}

?>