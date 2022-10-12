<?php

require_once "./functions.php";

echo min_(1234, 12345) . PHP_EOL;

$id = 1;
$link = 'https://vk.com/im?rel=' . $id;

$myHtml = '<a href="' . $link . '">chat</a>';
$myHtml = <<<HTML
<a href="$link" target="_top">Chat</a>
HTML;

echo $myHtml;

echo str_pad($id, 5, 0, STR_PAD_LEFT);
$pos = mb_stripos('мама мыла раму', 'Мама');

if ($pos !== false) {
    echo 'Нашлось' . PHP_EOL;
}
$arr = [1,2,3,4,5,6, 'word1', 'word2', 'word' => 1, 1 => 17];
var_dump('<pre>', $arr);

$x = &$arr['nf'];
if ($x == null) {
    $x = 10;
}

error_reporting(E_ALL ^ E_NOTICE);
$x[124];
error_reporting(E_ALL);
$x[124];