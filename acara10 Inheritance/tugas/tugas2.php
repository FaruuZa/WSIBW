<?php

class Pakaian{
    protected $ukuran, $warna, $nama;
}

class Topi extends Pakaian{
    public $model;
}

class celana extends Pakaian{
    public $tipe, $model;
}

class baju extends Pakaian{
    public $tipe;
}   

?>