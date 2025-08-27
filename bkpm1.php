<?php

echo "Ahmad Abdillah Faza <br/> E41240676 <br/> gol B<br/><br/>";

echo "1. Kelipatan 2, dimulai dari 2. (10 deret) <br/>";
$kel2 = 2;
for ($i = 0; $i < 10; $i++) {
    echo $kel2. " ";
    $kel2 *= 2 ;
}

echo "<br/><br/>2. Kelipatan 2 ditambah pengurangan 1, dimulai dari 12. (10 deret) <br/>";

$kel2min1 = 12;
for ($i = 0; $i < 5; $i++) {
    echo $kel2min1 . " ";
    $kel2min1 *= 2;
    echo $kel2min1 . " ";
    $kel2min1 -= 1;
}
?>
