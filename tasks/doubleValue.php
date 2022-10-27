<?php
$title = 'Double Value';
include('../base.html');
?>
    <main>
        <h1><?= $title; ?></h1>
        <fieldset>
            <legend>Values:</legend>
            <form action="doubleValue.php" method="post">
                <p>Count: <input type="number" name="count" id="count"></p>
                <p><input type="submit" value="Submit"/></p>
            </form>
            <button onclick="count.value=20">Default values</button>
        </fieldset>

        <?php

        function random_string(int $len): string
        {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersCount = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $len; $i++) {
                $randomString .= $characters[rand(0, $charactersCount - 1)];
            }
            return $randomString;
        }

        if (isset($_POST['count']) and $_POST['count'] != '') {
            $row_count = $_POST['count'];
            $array = [];
            while (count($array) != $row_count) {
                $way = rand(1, 4);
                if ($way == 1) {
                    $array[rand(1, 50)] = rand(1, 50);
                } elseif ($way == 2) {
                    $array[rand(1, 50)] = random_string(5);
                } elseif ($way == 3) {
                    $array[random_string(5)] = rand(1, 50);
                } elseif ($way == 4) {
                    $array[random_string(5)] = random_string(5);
                }
            }
            echo '<table>';
            echo '<tr><td>index</td><td>before</td><td>after</td></tr>';
            foreach ($array as $index => $elem) {
                echo '<tr>';
                echo '<td>' . $index . '</td>';
                echo '<td>' . $elem . '</td>';
                if (gettype($index) == 'string') {
                    if (gettype($elem) == 'string') {
                        echo '<td>' . $elem . $elem . '</td>';
                    } else {
                        echo '<td>' . pow($elem, 2) . '</td>';
                    }
                } else {
                    echo '<td>' . $elem . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }

        ?>
    </main>
</body>
</html>
