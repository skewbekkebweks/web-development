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
    <title>Task 7</title>
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
                <a href="numberedTable.php">Numbered Table</a>
            </li>
            <li>
                <a href="doubleValue.php">double Value</a>
            </li>
        </ol>
    </aside>
    <main>
        <img src="../static/pictures/task7.png" alt="Не найдено">
        <form action="task7.php" method="post">
            <p>a: <input type="number" name="a"/></p>
            <p>b: <input type="number" name="b"/></p>
            <p><input type="submit"/></p>
        </form>

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
</html>