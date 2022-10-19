<?php
function step_by_step($x, $y)
{
    $s1 = 1 + $y;
    $s2 = ($x + $y);
    $s3 = pow($x, 2);
    $s4 = $s3 - 4;
    $s5 = 1 / $s4;
    $s6 = $y + $s5;
    $s7 = $s2 / $s6;
    $s8 = 2 * $x;
    $s9 = pow($y, 2);
    $s10 = $s8 + $s9;
    $s11 = $s10 - $s7;
    return $s1 * $s11;
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
        <a href="task3.php" target="_blank">Task 3</a>
        <a href="task4.php" target="_blank">Task 4</a>
        <a href="task5.php" target="_blank">Task 5</a>
        <a href="task6.php" target="_blank">Task 6</a>
        <a href="task7.php" target="_blank">Task 7</a><br><br>
    </div>
    <p>$$\huge (1 + y) * (2x + y^{2} - (x + y) / (y + 1 / (x^{2} - 4)))$$</p>
    <form action="task4.php" method="post">
        <p>x: <input type="number" name="x"/></p>
        <p>y: <input type="number" name="y"/></p>
        <p><input type="submit"/></p>
    </form>
    </body>
    </html>

<?php
if (isset($_POST['x']) and $_POST['x'] != '' and isset($_POST['y']) and $_POST['y'] != '') {
    $x = $_POST['x'];
    $y = $_POST['y'];
    try {
        $res = (1 + $y) * (2 * $x + pow($y, 2) - ($x + $y) / ($y + 1 / (pow($x, 2) - 4)));
        $res = step_by_step($x, $y);
        $str = '<p>$$\huge (1 + y) * (2 * x + y^{2} - (x + y) / (y + 1 / (x^{2} - 4))) =' . $res . ' $$</p>';
        $str = str_replace('x', $x, $str);
        $str = str_replace('y', $y, $str);
        echo $str;
    } catch (DivisionByZeroError $e) {
        echo 'Недопустимые значения(произошло деление на ноль)';
    }
}