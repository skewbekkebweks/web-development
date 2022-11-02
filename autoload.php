<?php

$dirs_list = glob('*', GLOB_ONLYDIR);
file_put_contents('autoload.php', "<?php\n");
foreach ($dirs_list as $dir) {
    $file_name = $dir . '/autoload.php';

    file_put_contents($file_name, file_get_contents('class/autoload.php'));

    file_put_contents('autoload.php', "require_once '$dir/autoload.php';\n", FILE_APPEND);
}
