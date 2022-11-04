<?php

require_once './autoload.php';
require_once './routers.php';

use Class\Classes\Mvc\UserController;
use Class\Classes\Mvc\Router;

$controller = new UserController();

$parts = explode('?', $_SERVER['REQUEST_URI']);
$path = $parts[0];
$result = Router::resolve($path);
if ($result !== false) {
    echo $result;
    exit(0);
}
include './404.php';

