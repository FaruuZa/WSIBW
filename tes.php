<?php
$pintu = 0.2;

if($pintu > 0){
    if($pintu >= 0.5)
        echo "open 1/2";
    elseif($pintu >= 0.33)
        echo "open 1/3";
    elseif($pintu >= 0)
        echo "open 1/4";
    elseif($pintu >= 1)
        echo "open full";
}else
    echo "pintu close";
?>