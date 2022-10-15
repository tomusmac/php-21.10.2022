<?php
function potega($x,$y=1) {
    if(is_int($x) && is_int($y)) {
    return $x=$x**$y; 
    }
    else { 
    echo "Liczby musza byc calkowite!";
    }
}
echo potega(2);
echo "<br>";
echo potega(2,3);
echo "<br>";
echo potega(2.3,3);
?>