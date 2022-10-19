<?php
require_once 'classes/Group.php';
require_once 'classes/Student.php';
$group = new Group('web-development');
$s1 = new Student('миша', 15, $group);
echo Student::$handsCount . PHP_EOL;
Student::$handsCount = 3;
$s2 = new Student('тимур', 16, $group);
echo $s2::$handsCount;
$s3 = new Student('фархад', 16, $group);
$s4 = new Student('сергей', 16, $group);
$s5 = new Student('юрий', 26, $group);
$s6 = new Student('дамир', 15, $group);
$s7 = new Student('данил', 16, $group);
$s8 = new Student('максим', 16, $group);
$s9 = new Student('виталя', 16, $group);
$s10 = new Student('костя', 16, $group);
?>
<pre
    <?php
    var_dump($group);
    echo $s1->name;

