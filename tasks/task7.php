<?php
$title = 'Task 7';
include('../base.html');
?>
<main>
    <h1><?= $title; ?></h1>
    <img src="../static/pictures/task7.png" alt="Не найдено">
    <fieldset>
        <legend>Values:</legend>
        <form action="task7.php" method="post">
            <p>a: <input type="number" name="a" id="a"/></p>
            <p>b: <input type="number" name="b" id="b"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <button onclick="a.value=1;b.value=2">Default values</button>
    </fieldset>

    <?php
    if (isset($_POST['a']) and $_POST['a'] != '' and
        isset($_POST['b']) and $_POST['b'] != '') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $str1 = '<p>$$\huge a + b = ' . $a . ' + ' . $b . ' = ' . ($a + $b) . '$$</p>';
        $str2 = '<p>$$\huge a - b = ' . $a . ' - ' . $b . ' = ' . ($a - $b) . '$$</p>';
        $str3 = '<p>$$\huge b - a = ' . $b . ' - ' . $a . ' = ' . ($b - $a) . '$$</p>';
        $str4 = '<p>$$\huge a * b = ' . $a . ' * ' . $b . ' = ' . ($a * $b) . '$$</p>';
        $str5 = '<p>$$\huge a/b = ' . $a . '/' . $b . ' = ' . ($a / $b) . '$$</p>';
        $str6 = '<p>$$\huge a \mod b = ' . $a . ' \mod ' . $b . ' = ' . ($a % $b) . '$$</p>';
        $str7 = '<p>$$\huge b/a = ' . $b . '/' . $a . ' = ' . ($b / $a) . '$$</p>';
        $str8 = '<p>$$\huge b \mod a = ' . $b . ' \mod ' . $a . ' = ' . ($b % $a) . '$$</p>';
        echo $str1 . $str2 . $str3 . $str4 . $str5 . $str6 . $str7 . $str8;
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