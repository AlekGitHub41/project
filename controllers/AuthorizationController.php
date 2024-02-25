<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/project/mvc/controller.php";

class AuthorizationController extends Controller
{
    public function authorization($email,$password)
    {
        return $this->register_users->authorization($email,$password);
    }
}