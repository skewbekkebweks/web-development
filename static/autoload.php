<?php

$loader = function ($className) {
    $parts = explode('\\', $className);
    $last = $parts[count($parts) - 1];
    unset($parts[count($parts) - 1]);
    unset($parts[0]);
    $str = "./" . implode('/', $parts) . "/";
    $str = strtolower($str);
    $str .= $last . '.php';

    if (file_exists($str)) {
        require_once $str;
    }
};
spl_autoload_register($loader);
