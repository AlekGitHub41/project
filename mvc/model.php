<?php

//require $_SERVER['DOCUMENT_ROOT']."/project/connect.php";

class Model
{
    protected $conn="";
    public function __construct()
    {
        require_once $_SERVER['DOCUMENT_ROOT']."/project/connect.php";
        $this->conn=$connect;
    }

    public function get_data()
    {

    }
}

?>