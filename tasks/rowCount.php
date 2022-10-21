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
    <title>Row Count</title>
</head>
<body>
<div class="categories">
    <a href="rowCount.php">Row Count</a>
    <a href="doubleValue.php" target="_blank">Double Value</a><br><br>
</div>
<form action="rowCount.php" method="post">
    <p>Count: <input type="number" name="count"></p>
    <p><input type="submit"/></p>
</form>
</body>
</html>

<?php
if (isset($_POST['count']) and $_POST['count'] != '') {
    $row_count = $_POST['count'];
    echo '<table>';
    for ($i = 1; $i <= $row_count; $i++) {
        echo '<tr><td>' . $i . '</td></tr>';
    }
    echo '</table>';
}