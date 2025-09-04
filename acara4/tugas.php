<?php

for ($i = 100; $i <= 1000; $i++) {
    echo $i . " ";
    if ($i % 30 == 0 and $i != 100) {
        echo "</br>";
    }
}

?>