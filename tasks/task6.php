<?php
$title = 'Task 6';
include('../base.html');
?>
<main>
    <h1><?= $title; ?></h1>
    <img src="../static/pictures/task6.png" alt="Не найдено">
    <p>$$\huge x^{5} + 6 x^{4} + 10 x^{3} + 25 x^{2} + 30 x + 101 =$$</p>
    <p>$$\huge = x * (x * (x * (x * (x + 6) + 10) + 25) + 30) + 101$$</p>
    <fieldset>
        <legend>Values:</legend>
        <form action="task6.php" method="post">
            <p>x: <input type="number" name="x" id="x"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <button onclick="x.value=3">Default values</button>
    </fieldset>

    <?php
    if (isset($_POST['x']) and $_POST['x'] != '') {
        $x = $_POST['x'];
        $res = pow($x, 5) + 6 * pow($x, 4) + 10 * pow($x, 3) + 25 * pow($x, 2) + 30 * $x + 101;
        $str1 = '<p>$$\huge x^{5} + 6 * x^{4} + 10 * x^{3} + 25 * x^{2} + 30 * x + 101 = $$</p><p>$$\huge = x * (x * (x * (x * (x + 6) + 10) + 25) + 30) + 101 = ' . $res . '$$</p>';
        $str1 = str_replace('x', $x, $str1);
        echo $str1;
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