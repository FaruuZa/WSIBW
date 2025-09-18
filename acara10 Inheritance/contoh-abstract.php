<?php

abstract class Car
{
    // class abstract dapat memiliki properti
    protected $tankVolume;
    // class abstract juga dapat memiliki fungsi non-abstract
    public function setTankVolume($volume)
    {
        $this->tankVolume = $volume;
    }
    // abstract methodDF
    abstract public function calcNumMilesOnFullTank();
}



?>