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

$title = 'Task 4';
include('../base.html');
?>
<main>
    <h1><?= $title; ?></h1>
    <img src="../static/pictures/task4.png" alt="Не найдено">
    <p>$$\huge (1 + y) * (2x + y^{2} - (x + y) / (y + 1 / (x^{2} - 4)))$$</p>
    <fieldset>
        <legend>Values:</legend>
        <form action="task4.php" method="post">
            <p>x: <input type="number" name="x" id="x"/></p>
            <p>y: <input type="number" name="y" id="y"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <button onclick="x.value=3;y.value=5">Default values</button>
    </fieldset>


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
    ?>
</main>
</body>
</html>
<head>
    <script type="text/javascript"
            src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>
</head>
</html>