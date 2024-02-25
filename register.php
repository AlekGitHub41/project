<?php

require_once $_SERVER['DOCUMENT_ROOT']."/project/route/routes.php";

$uri = $_SERVER['REQUEST_URI'];

$router->dispatch($uri);

?>