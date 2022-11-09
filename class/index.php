<?php

require_once './autoload.php';
require_once './routes.php';

use Class\Classes\Mvc\UserController;
use Class\Classes\Mvc\Router;

$controller = new UserController();

$parts = explode('?', $_SERVER['REQUEST_URI']);
$path = $parts[0];
$response = Router::resolve($path);
if ($response !== false) {
    if (!$response) $response = '';
    if (is_string($response)) {
        switch ($response) {
            case '401':
                echo 'Доступ запрещён';
                http_response_code(401);
                exit();
        }
        echo $response;
    } else if (is_array($response)) {
        $response = json_encode($response);
        header('Content-type: application/JSON');
        echo $response;
    }
    exit(0);
}
include './404.php';

