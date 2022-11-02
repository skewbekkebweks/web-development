<?php

$loader = function ($className) {
    $parts = explode('\\', $className);
    $str = "./" . $parts[0] . "/";
    $str = strtolower($str);
    $str .= 'autoload.php';

    if (file_exists($str)) {
        include $str;
    }
};
spl_autoload_register($loader);
