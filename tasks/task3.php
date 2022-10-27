<?php
$title = 'Task 3';
include('../base.html');
?>
<main>
    <h1><?= $title; ?></h1>
    <img src="../static/pictures/task3.png" alt="Не найдено">
    <p>$$\huge V = \frac{4}{3} \pi R^{3}$$</p>
    <fieldset>
        <legend>Values:</legend>
        <form action="task3.php" method="post">
            <p>R: <input type="number" name="radius" id="R"></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <button onclick="R.value=10">Default values</button>
    </fieldset>

    <?php
    if (isset($_POST['radius']) and $_POST['radius'] != '') {
        $radius = $_POST['radius'];
        $res = 4 / 3 * M_PI * pow($radius, 3);
        $str = '<p>$$\huge V = \frac{4}{3} \pi ' . $radius . '^{3} = ' . $res . '$$</p>';
        echo $str;
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