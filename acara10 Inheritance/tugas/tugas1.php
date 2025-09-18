<?php

class MobiLengkap
{
    public function nontonTV()
    {
        return "TV Dihidupkan, Tv Mencari Channel, TV Menampilkan gambar. ";
    }
}

class MobilBMW extends MobiLengkap
{
}

class MobilBMWBeraksi extends MobilBMW
{
    public function nontonTV()
    {
        return "MobilBMW menonton TV";
    }
    public function hidupkanMobil()
    {
        return "Mobil Dihidupkan";
    }

    public function matikanMobil()
    {
        return "Mobil Dimatikan";
    }
    public function ubahGigi($gigi)
    {
        return "Gigi diubah ke gigi-" . $gigi;
    }
}

$mobilBMW1 = new MobilBMW();
$mobilBeraksi = new MobilBMWBeraksi();

echo "<h3>pewarisan fungsi dari MobiLengkap</h3>";
echo $mobilBMW1->nontonTV()."<br />";

echo "<h3>overriding fungsi pada MobilBMWBeraksi</h3>";
echo $mobilBeraksi->nontonTV()."<br />";

?>