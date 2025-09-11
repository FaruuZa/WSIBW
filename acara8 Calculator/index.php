<?php
class Calculator
{
    public function tambah($a, $b)
    {
        return $a + $b;
    }
    public function kurang($a, $b)
    {
        return $a - $b;
    }
    public function bagi($a, $b)
    {
        return $a / $b;
    }
    public function kali($a, $b)
    {
        return $a * $b;
    }
}

$calc = new Calculator();

$hasil = null;
if (isset($_GET["operator"])) {
    $operator=$_GET["operator"];
    $angka1 =$_GET["angka1"];
    $angka2=$_GET["angka2"];

    if ($angka1!= "" || $angka2!= "") {

        switch($operator){
            case 'tambah':
                $hasil = $calc->tambah($angka1, $angka2);
                break;
            case 'kurang':
                $hasil = $calc->kurang($angka1, $angka2);
                break;
            case 'kali':
                $hasil = $calc->kali($angka1, $angka2);
                break;
            case 'bagi':
                $hasil = $calc->bagi($angka1, $angka2);
                break;
        }
    } else {
        $hasil = "masukkan angka";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="get" class="box">
        <h1>Kalkulator sederhana</h1>
        <input type="number" name="angka1" id="angka1">
        <div class="buttons">
            <label class="radio">.
                <input type="radio" id="html" name="operator" value="tambah" checked>
                <span class="checkmark plus">+</span>
            </label>
            <label class="radio ">
                <input type="radio" id="css" name="operator" value="kurang">
                <span class="checkmark minus">-</span>
            </label>
            <label class="radio ">
                <input type="radio" id="javascript" name="operator" value="kali">
                <span class="checkmark kali">X</span>
            </label>
            <label class="radio ">
                <input type="radio" id="javascript" name="operator" value="bagi">
                <span class="checkmark bagi">/</span>
            </label>

        </div>
        <input type="number" name="angka2" id="angka2">
        <textarea id="hasil">
        <?php
        if ($hasil != null) {
            echo $hasil;
        }
        ?>
        </textarea>
        <input type="submit">

    </form>
</body>

</html>