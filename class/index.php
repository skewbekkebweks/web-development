<?php

require_once '../autoload.php';

use Class\Classes\Mvc\UserController;

$controller = new UserController();

$parts = explode('?', $_SERVER['REQUEST_URI']);
$path = $parts[0];
$router = Class\Classes\Mvc\Router::$routes;

if (isset($router[$path])) {
    $handler = $router[$path];
    $controller = new $handler['controller']();
    $method = $handler[$_SERVER['REQUEST_METHOD']];
    if (method_exists($controller, $method)) {
        $request = new Class\Classes\Mvc\Request();
        $result = $controller->$method($request);
        echo $result;
        exit(0);
    }
}
http_response_code(404);


