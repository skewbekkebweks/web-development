<?php
function step_by_step($x, $y, $z)
{
    $x += 2;
    $x *= $y;
    $x -= $z;
    $x /= $y;
    $y *= $z;
    $x += $y;
    return $x;
}

?>
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
        <title>Tasks</title>
        <script type="text/javascript"
                src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
        </script>
    </head>
    <body>
    <div class="categories">
        <a href="task3.php">Task 3</a>
        <a href="task4.php">Task 4</a>
        <a href="task5.php">Task 5</a>
        <a href="task6.php">Task 6</a>
        <a href="task7.php">Task 7</a><br><br>
    </div>
    <p>$$\huge ((x + 2) * y - z) / y + y * z$$</p>
    <form action="task5.php" method="post">
        <p>x: <input type="number" name="x"/></p>
        <p>y: <input type="number" name="y"/></p>
        <p>z: <input type="number" name="z"/></p>
        <p><input type="submit"/></p>
    </form>
    </body>
    </html>

<?php
if (isset($_POST['x']) and $_POST['x'] != '' and
    isset($_POST['y']) and $_POST['y'] != '' and
    isset($_POST['z']) and $_POST['z'] != '') {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];
    try {
        $res = (($x + 2) * $y - $z) / $y + $y * $z;
        $res = step_by_step($x, $y, $z);
        $str = '<p>$$\huge ((x + 2) * y - z) / y + y * z =' . $res . '$$</p>';
        $str = str_replace('x', $x, $str);
        $str = str_replace('y', $y, $str);
        $str = str_replace('z', $z, $str);
        echo $str;
    } catch (DivisionByZeroError $e) {
        echo 'Недопустимые значения(произошло деление на ноль)';
    }
}