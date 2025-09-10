<?php

// 1. Login

echo "<h2> Kasus Login</h2>";

$username = "Faza";
$password = "Rahasia123";

$inputName = "Fazaa";
$inputPass = "Rahasia123";

if($username == $inputName and $password == $inputPass){
    echo "Berhasil Login";
}else{
    echo "Gagal Login";
}

// 2. Form

echo "<h2>Kasus Form</h2>";
$inputNama = "Raya";
$inputEmail = "raya@gmail.com";
$inputAlamat = "";

if($inputNama != "" and $inputEmail != "" and $inputAlamat != ""){
    echo "Nama : ".$inputNama."</br>";
    echo "Email : ".$inputEmail."</br>";
    echo "Alamat : ".$inputAlamat."</br>";
}else{
    echo "Harap isi Data!";
}

// 3. Hak akses

echo "<h2>kasus Hak Akses</h2>";
$userRole = "karyawan";

if($userRole == "karyawan"){
    echo "Tampilan Karyawan";
}elseif($userRole == "owner"){
    echo "Tampilan Owner";
}else{
    echo "role tidak ditemukan!";
}

// 4. Looping

echo "<h2>kasus looping</h2>";

$iterasi = 1;
while($iterasi <= 10){
    echo $iterasi++;
}

// 5. Pembayaran

echo "<h2>Kasus Pembayaran</h2>";

$saldo = 50000;
$harga_barang = 55000;

echo "harga barang: Rp. ".$harga_barang."</br>";
echo "saldo: Rp. ".$saldo."</br></br>";

if($saldo >= $harga_barang){
    echo "Pembayaran sukses </br>";
    echo "Sisa saldo: Rp. ".$saldo-$harga_barang."</br>";
}else{
    echo "Pembayaran gagal!";
}

?>