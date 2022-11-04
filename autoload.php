<?php

$loader = function ($className) {
    $parts = explode('\\', $className);
    $str = './' . strtolower($parts[0]) . '/autoload.php';

    echo $str;

    if (file_exists($str)) {
        require_once $str;
    }
};
spl_autoload_register($loader);
