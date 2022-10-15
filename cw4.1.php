<?php
function do3(&$x) {
    $x=$x**3;
}
$a = 2;
do3($a);
echo $a;
?>