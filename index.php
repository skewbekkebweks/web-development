<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tables</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="icon"
          href="https://sun9-71.userapi.com/impf/c854528/v854528816/113120/rqhbUgxbvmA.jpg?size=986x1080&quality=96&sign=fb15b8926a6494c08c90e142ce2d0996&type=album"/>
</head>
<pre>
    <?php
    echo "<table>";
    echo "<caption>Multiplication table</caption>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
