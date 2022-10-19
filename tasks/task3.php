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
<p>$$\huge V = \frac{4}{3} \pi R^{3}$$</p>
<form action="task3.php" method="post">
    <p>R: <input type="number" name="radius"></p>
    <p><input type="submit"/></p>
</form>
</body>
</html>

<?php
if (isset($_POST['radius']) and $_POST['radius'] != '') {
    $radius = $_POST['radius'];
    $res = 4 / 3 * M_PI * pow($radius, 3);
    $str = '<p>$$\huge V = \frac{4}{3} \pi ' . $radius . '^{3} = ' . $res . '$$</p>';
    echo $str;
}