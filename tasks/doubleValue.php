<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <link rel="icon"
          href="https://sun9-71.userapi.com/impf/c854528/v854528816/113120/rqhbUgxbvmA.jpg?size=986x1080&quality=96&sign=fb15b8926a6494c08c90e142ce2d0996&type=album"/>
    <title>Double Value</title>
</head>
<body>
<div class="categories">
    <a href="rowCount.php" target="_blank">Row Count</a>
    <a href="doubleValue.php">Double Value</a><br><br>
</div>
<form action="doubleValue.php" method="post">
    <p>Count: <input type="number" name="count"></p>
    <p><input type="submit"/></p>
</form>
</body>
</html>

<?php

function random_string(int $len): string
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersCount = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $len; $i++) {
        $randomString .= $characters[rand(0, $charactersCount - 1)];
    }
    return $randomString;
}

if (isset($_POST['count']) and $_POST['count'] != '') {
    $row_count = $_POST['count'];
    $array = [];
    while (count($array) != $row_count) {
        $way = rand(1, 4);
        if ($way == 1) {
            $array[rand(1, 50)] = rand(1, 50);
        } elseif ($way == 2) {
            $array[rand(1, 50)] = random_string(5);
        } elseif ($way == 3) {
            $array[random_string(5)] = rand(1, 50);
        } elseif ($way == 4) {
            $array[random_string(5)] = random_string(5);
        }
    }
    echo '<table>';
    echo '<tr><td>index</td><td>before</td><td>after</td></tr>';
    foreach ($array as $index => $elem) {
        echo '<tr>';
        echo '<td>' . $index . '</td>';
        echo '<td>' . $elem . '</td>';
        if (gettype($index) == 'string') {
            if (gettype($elem) == 'string') {
                echo '<td>' . $elem . $elem . '</td>';
            } else {
                echo '<td>' . pow($elem, 2) . '</td>';
            }
        } else {
            echo '<td>' . $elem . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}