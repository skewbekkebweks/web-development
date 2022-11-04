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
    public static function resolve($path){
        if (isset(self::$routes[$path])) {
            $handler = self::$routes[$path];
            $controller = new $handler['controller']();
            $method = $handler[$_SERVER['REQUEST_METHOD']];
            if (method_exists($controller, $method)) {
                $request = new Request();
                $result = $controller->$method($request);
                return $result;
            }
        }
        return false;
    }
}