<?php
$title = 'Create Autoloaders';
include('../base.html');
?>
<main>
    <h1><?= $title; ?></h1>
    <img src="../static/pictures/autoloaders_creator.png" id="imageid" height="316" alt="Не нашлось.">
    <h3>Source:</h3>
    <a onclick="document.getElementById('imageid').src='../static/pictures/dir_autoloader1.png';">class/autoload.php</a><br>
    <a onclick="document.getElementById('imageid').src='../static/pictures/autoloaders_creator1.png';">create_autoloaders.php</a><br>
    <h3>Result:</h3>
    <a onclick="document.getElementById('imageid').src='../static/pictures/dir_autoloader1.png';">class/autoload.php</a><br>
    <a onclick="document.getElementById('imageid').src='../static/pictures/dir_autoloader1.png';">classes/autoload.php</a><br>
    <a onclick="document.getElementById('imageid').src='../static/pictures/dir_autoloader1.png';">static/autoload.php</a><br>
    <a onclick="document.getElementById('imageid').src='../static/pictures/dir_autoloader1.png';">tasks/autoload.php</a><br>
    <a onclick="document.getElementById('imageid').src='../static/pictures/autoloader1.png';">autoload.php</a><br>
</main>
</body>
</html>