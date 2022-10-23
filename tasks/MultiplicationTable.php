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
    <title>Task 3</title>
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
        <h1>Multiplication Table</h1>
        <fieldset>
            <legend>Values:</legend>
            <form action="MultiplicationTable.php" method="post">
                <p>Size: <input type="number" name="size" id="size"></p>
                <p><input type="submit" value="Submit"/></p>
            </form>
            <button onclick="size.value=10">Default values</button>
        </fieldset>

        <?php
        if (isset($_POST['size']) and $_POST['size'] != '') {
            $size = $_POST['size'];
            echo '<table>';
            for ($i = 1; $i <= $size; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $size; $j++) {
                    echo "<td>" . $i * $j . "</td>";
                }
                echo "</tr>";
            }
            echo '</table>';
        }
        ?>
    </main>
</body>
</html>
<pre>