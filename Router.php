<?php

namespace Class\Classes\Mvc;

class Router
{
    public static $routes = [];

    public static function get($url, $controller, $method) {
        self::$routes[$url] = [
            'controller' => $controller,
            'GET' => $method
        ];
    }
    public static function post($url, $controller, $method) {
        self::$routes[$url] = [
            'controller' => $controller,
            'POST' => $method
        ];
    }

    public static function resolve($router, $path) {

    }
}