<?php

echo "<h3>1. Membuat fungsi perbandingan angka</h3>";
function bandingkan($a, $b){
    if ($a > $b) {
        echo "bilangan terbesarnya adalah ".$a;
    } elseif ($b > $a) {
        echo "bilangan terbesarnya adalah ".$b;
    } else {
        echo "keduanya sama besar";
    }
}
$bilangan1 = 100;
$bilangan2 = 150;

bandingkan($bilangan1, $bilangan2);

echo "<h3>2. menampilkan tanggal, bulan dan tahun</h3>";

$date = getdate();

echo $date["mday"]."-".$date["mon"]."-".$date["year"];

echo "<h3>3. menampilkan Tanggal, bulan dan Tahun dgn fungsi date('d-F-Y')</h3>";

echo date('d-F-Y')

?>