<?php
$title = 'Multiplication Table';
include('../base.html');
?>
    <main>
        <h1><?= $title; ?></h1>
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