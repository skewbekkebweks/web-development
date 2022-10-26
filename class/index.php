<?php

require_once './functions.php';
require_once './autoload.php';

use Class\Classes\Group;
use Class\Lib\Group as LibGroup;

$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g = new Group('WEB');
$g2 = new LibGroup('WEB');
$a = new Class\Lib\A();

file_put_contents('hello.json', json_encode([
    "file" => 1,
    "file2" => 2
]));
echo file_get_contents('hello.json');
$v = json_decode(file_get_contents('hello.json'), true);
echo PHP_EOL;
var_dump($v);
echo $v['file2'];