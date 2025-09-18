<?php
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

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
    protected $handphone_baru;

    public function setHandphone($handphone_baru) {
        $this->handphone_baru = $handphone_baru;
    }

    public function beli_handphone() {
        return "Membeli handphone baru: $this->handphone_baru";
    }
}

// --- Testing ---
$hp = new Handphone();
$hp->setTablet("Oppo", 64, 256);
$hp->setHandphone("Oppo Find X7");

echo $hp->infoTablet() . "\n";
echo $hp->beli_handphone();
?>
