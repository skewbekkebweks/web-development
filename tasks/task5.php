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

$title = 'Task 5';
include('../base.html');
?>
<main>
    <h1><?= $title; ?></h1>
    <img src="../static/pictures/task5.png" alt="Не найдено">
    <p>$$\huge ((x + 2) * y - z) / y + y * z$$</p>
    <fieldset>
        <legend>Values:</legend>
        <form action="task5.php" method="post">
            <p>x: <input type="number" name="x" id="x"/></p>
            <p>y: <input type="number" name="y" id="y"/></p>
            <p>z: <input type="number" name="z" id="z"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <button onclick="x.value=1;y.value=2;z.value=3">Default values</button>
    </fieldset>

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
    ?>
</main>
</body>
<head>
    <script type="text/javascript"
            src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>
</head>
</html>
