<?php
class Car
{
    private $model;
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function hello()
    {
        return "beep! I am a <i>" . $this->model . "</i><br />";
    }
}

class SportCar extends Car{

}

$sportCar1 = new SportCar();

$sportCar1->setModel("Mercedes Benz");

echo $sportCar1->hello();

?>