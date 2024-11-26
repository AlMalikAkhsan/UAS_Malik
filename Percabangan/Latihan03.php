<?php

//-- Makanan --//
$seb = 10000;
$pen = 15000;
$bat = 20000;

//-- Minuman --//
$thai = 5000;
$mix = 7000;
$kopi = 12000;

$jumlah = 5;

$jenis = "makanan";
$total = $bat * $jumlah;  
$diskon = $total * 0.1;
$bayar = $total - $diskon;

echo "Nama : Fahri <br>";
echo "Jenis kelamin : laki-laki <br>";
echo "Tanggal beli : 2 Oktober 2024 <br>";
echo "jenis : $jenis <br>";
echo "Menu : Batagor <br>";
echo "Harga : $bat <br>";
echo "Jumlah : $jumlah <br>";
echo "<hr>";

echo "Total : $total <br>";

if ($total >= 50000) {
    echo "Diskon : $diskon <br> <hr> Total bayar : $bayar ";
}else {
    echo "Diskon : 0 <br> <hr> Total bayar : $total";
}

?>