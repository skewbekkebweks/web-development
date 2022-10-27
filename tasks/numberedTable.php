<?php
$title = 'Numbered Table';
include('../base.html');
?>
    <main>
        <h1><?= $title; ?></h1>
        <fieldset>
            <legend>Values:</legend>
            <form action="numberedTable.php" method="post">
                <p>Count: <input type="number" name="count" id="count"></p>
                <p><input type="submit" value="Submit"/></p>
            </form>
            <button onclick="count.value=20">Default values</button>
        </fieldset>

        <?php
        if (isset($_POST['count']) and $_POST['count'] != '') {
            $row_count = $_POST['count'];
            echo '<table>';
            for ($i = 1; $i <= $row_count; $i++) {
                echo '<tr><td>' . $i . '</td></tr>';
            }
            echo '</table>';
        }
        ?>
    </main>
</body>
</html>