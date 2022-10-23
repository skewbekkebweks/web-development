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
    <title>Task 6</title>
    <script type="text/javascript"
            src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>
</head>
<body>
<div id="wrapper">
    <aside>
        <ol>
            <li>
                <a href="task3.php">Task 3</a>
            </li>
            <li>
                <a href="task4.php">Task 4</a>
            </li>
            <li>
                <a href="task5.php">Task 5</a>
            </li>
            <li>
                <a href="task6.php">Task 6</a>
            </li>
            <li>
                <a href="task7.php">Task 7</a>
            </li>
            <li>
                <a href="MultiplicationTable.php">Multiplication Table</a>
            </li>
            <li>
                <a href="numberedTable.php">Numbered Table</a>
            </li>
            <li>
                <a href="doubleValue.php">double Value</a>
            </li>
        </ol>
    </aside>
    <main>
        <h1>Task 6</h1>
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
</html>