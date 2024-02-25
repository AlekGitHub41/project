<?php


require_once $_SERVER['DOCUMENT_ROOT'] . "/project/mvc/controller.php";

class RegisterController extends Controller
{
    public function post_register($username, $email, $password)
    {
        $this->register_users->register($username, $email, $password);
    }

    public function unique_email($email)
    {
        return $this->register_users->unique_email($email);
    }

}

?>