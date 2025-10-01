<?php

interface HitungLuas
{

    public function hitungLuasPersegi();
    public function hitungLuasSegitiga();
    public function hitungLuasLingkaran();
}

class Persegi implements hitungLuas
{
    public $sisi;
    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    public function hitungLuasPersegi()
    {
        return $this->sisi * $this->sisi;
    }
    public function hitungLuasSegitiga(){
        return null;
    }
    public function hitungLuasLingkaran(){
        return null;
    }
}
class Segitiga implements hitungLuas
{
    public $alas, $tinggi;
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function hitungLuasPersegi()
    {
        return null;
    }
    public function hitungLuasSegitiga(){
        return 0.5 * $this->alas * $this->tinggi;
    }
    
    public function hitungLuasLingkaran(){
        return null;
    }
}
class Lingkaran implements hitungLuas
{
    public $jari;
    public function __construct($jari){
        $this->jari = $jari;
    }
    public function hitungLuasPersegi()
    {
        return null;
    }
    public function hitungLuasSegitiga(){
        return null;
    }
    public function hitungLuasLingkaran(){
        return pi() * $this->jari * $this->jari;
    }
}

$persegi = new Persegi(10);
$segitiga = new Segitiga(3,5);
$lingkaran = new Lingkaran(5);

echo "Luas Persegi: " . $persegi->hitungLuasPersegi()."</br>";
echo "Luas Segitiga: " . $segitiga->hitungLuasSegitiga()."</br>";
echo "Luas Lingkaran: " . $lingkaran->hitungLuasLingkaran()."</br>";











?>