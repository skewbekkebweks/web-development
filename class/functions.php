<?php

function min_($a1, $a2, $a3 = 2e10, $a4 = 2e10, $a5 = 2e10)
{
    $m12 = $a1 < $a2 ? $a1 : $a2;
    $m34 = $a3 < $a4 ? $a3 : $a4;
    $m14 = $m12 < $m34 ? $m12 : $m34;
    return $m14 < $a5 ? $m14 : $a5;
}