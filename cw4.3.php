<?php
function mniejsza($x,$y) {
    if(is_numeric($x) && is_numeric($y)) {
        if($x<$y) {
            return $x;
        } else if($x>$y) {
            return $y;
        } else if($x==$y) {
            echo "Liczby są takie same!";
        }
    } else {
        echo "Argument musi być liczbą!";
    }
}
echo mniejsza(5,3);
echo "<br>";
echo mniejsza(4,5);
echo "<br>";
echo mniejsza(2,"asd");
?>