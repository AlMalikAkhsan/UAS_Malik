<?php

function LuasPersegi($s, $l){
    $jumlah = $s * $s;

    echo "<h2> Menghitung Luas Persegi </h2> <br>";
    echo "Sisinya : $s <br>";
    echo "Luasnya : $l <br>";
    echo "Caranya : L = S x S <br>";
    echo "Hasil dari luas Persegi adalah : $jumlah";
    echo "<hr>";
}
LuasPersegi(5,7);

function LuasPersegiPanjang($p, $l){
    $jumlah = $p * $l;

    echo "<h2> Menghitung Luas Persegi Panjang </h2> <br>";
    echo "Panjangnya : $p <br>";
    echo "Lebarnya : $l <br>";
    echo "Caranya : L = P x L <br>";
    echo "Hasil dari luas Persegi Panjang adalah : $jumlah";
    echo "<hr>";
}
LuasPersegiPanjang(12, 6);

function LuasSegitiga($p, $a, $t){
    $jumlah = $p * $a * $t;

    echo "<h2> Menghitung luas Segitiga </h2> <br>";
    echo "Alasnya : $a <br>";
    echo "Tingginya : $t <br>";
    echo "Caranya : L = 1/2 x a x t <br>";
    echo "Hasil dari luas Segitiga adalah : $jumlah";
    echo "<hr>";
}
LuasSegitiga(1/2, 4, 8);

function LuasLingkaran($a, $r){
    $jumlah = $a * $r * $r;

    echo "<h2> Menghitung luas Lingkaran </h2> <br>";
    echo "Jari-jarinya : $r <br>";
    echo "Luasnya : $a <br>";
    echo "Caranya : phi x r x r <br>";
    echo "Hasil dari luas lingkaran adalah : $jumlah";
    echo "<hr>";
}
LuasLingkaran(3.14, 3, 3);