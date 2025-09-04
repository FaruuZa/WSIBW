<?php

$matrixA = array(
    array(1,1,1),
    array(2,2,2),
    array(3,3,3)
);

$matrixB = array(
    array(3,3,3),
    array(2,2,2),
    array(1,1,1)
);

// menjumlahkan matrix
echo "<h3> hasil penjumlahan Matrix A dengan Matrix B : </h3>";
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 3; $j++) { 
        echo $matrixA[$i][$j]+$matrixB[$i][$j]." ";
    }
    echo "</br>";
}
?>