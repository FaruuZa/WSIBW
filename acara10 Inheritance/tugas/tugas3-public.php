<?php

class Tablet
{
    public $merk;
    public $camera;
    public $memory;

    public function infoTablet()
    {
        return "Merk: $this->merk, Camera: $this->camera MP, Memory: $this->memory GB";
    }
}

class Handphone extends Tablet
{
    public $handphone_baru;

    public function beli_handphone()
    {
        return "Membeli handphone baru: $this->handphone_baru";
    }
}

// --- Testing ---
$hp = new Handphone();
$hp->merk = "Samsung";
$hp->camera = 48;
$hp->memory = 128;
$hp->handphone_baru = "Samsung Galaxy S23";

echo $hp->infoTablet() . "\n";
echo $hp->beli_handphone();
?>