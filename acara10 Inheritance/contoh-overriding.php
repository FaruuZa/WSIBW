<?php
// parent class memiliki method hello yang mengembalikan "beep"
class Car{
    public function hello(){
        return "beep";
    }

}
// child class memiliki method hello yang mengembalikan "hallo"
class SportCar extends Car{
    public function hello(){
        return "hallo";
    }
}
// membuat objek baru 
$sportCar1 = new SportCar();
// mendapatkan hasil dari method hello
echo $sportCar1->hello();

?>