<?php

$dirs_list = glob('*', GLOB_ONLYDIR);
file_put_contents('autoload.php', "<?php\n");
foreach ($dirs_list as $dir) {
    $file_name = $dir . '/autoload.php';

    file_put_contents($file_name, "<?php\n");

    foreach (glob($dir . '/*.php') as $file) {
        $file = explode('/', $file)[1];

        if ($file != 'autoload.php') {
            file_put_contents($file_name, 'require_once \'' . $file . "';\n", FILE_APPEND);
        }
    }

    file_put_contents('autoload.php', "require_once '$dir/autoload.php';\n", FILE_APPEND);
}

