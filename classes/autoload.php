<?php

$loader = function ($className) {
    $parts = explode('\\', $className);
    $last = $parts[count($parts) - 1];
    unset($parts[count($parts) - 1]);
    $str = "./" . implode('/', $parts) . "/";
    $str = strtolower($str);
    $str .= $last . '.php';

    echo $str . PHP_EOL;

    if (file_exists($str)) {
        include $str;
    }
};
spl_autoload_register($loader);