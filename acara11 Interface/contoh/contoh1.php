<?php

interface Bird{
    public function makeSound();
}
class Perkutuk implements Bird{
    public function makeSound(){
        echo "kur kur";
    }
}
$burung = new Perkutuk();
$burung->makeSound();

?>