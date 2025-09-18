<?php
class Tablet {
    private $merk;
    private $camera;
    private $memory;

    public function setTablet($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function infoTablet() {
        return "Merk: $this->merk, Camera: $this->camera MP, Memory: $this->memory GB";
    }
}

class Handphone extends Tablet {
    private $handphone_baru;

    public function setHandphone($handphone_baru) {
        $this->handphone_baru = $handphone_baru;
    }

    public function beli_handphone() {
        return "Membeli handphone baru: $this->handphone_baru";
    }
}

// --- Testing ---
$hp = new Handphone();
$hp->setTablet("iPhone", 48, 512);
$hp->setHandphone("iPhone 15 Pro Max");

echo $hp->infoTablet() . "\n";
echo $hp->beli_handphone();
?>
