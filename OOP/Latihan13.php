<?php

class bangunDatar{

    var $luas_persegi= 25;
    var $luas_persegi_panjang= 15;
    var $luas_segitiga= 10;
    var $luas_lingkaran= 5;

    public function luasPersegi($s){
        $hasilnya = $s * $s;
        echo "Luas Persegi <br> ";
        echo "rumusnya : s x s <br>";
        echo "Luasnya : ".$this->luas_persegi. "<br>";
        echo "Sisinya : ".$s. "<br>";
        echo "Hasilnya :".$hasilnya;
    }
    public function luasPersegiPanjang($p, $l){
        $hasilnya = $p * $l;
        echo "Luas Persegi Panjang<br> ";
        echo "rumusnya : p x l <br>";
        echo "Luasnya : ".$this->luas_persegi_panjang. "<br>";
        echo "Panjangnya : ".$p. "<br>";
        echo "Hasilnya : ".$hasilnya;
    }
    public function luasSegitiga($p, $a, $t){
        $hasilnya = $p * $a * $t;
        echo "Luas Segitiga <br> ";
        echo "rumusnya : p x a x t<br>";
        echo "Luasnya : ".$this->luas_segitiga. "<br>";
        echo "Alasnya : ".$a."<br>";
        echo "Panjangnya : ".$p. "<br>";
        echo "Hasilnya : ".$hasilnya;
    }
    public function luasLingkaran($a, $r){
        $hasilnya = $a * $r * $r;
        echo "Luas Lingkaran <br> ";
        echo "rumusnya : a x r x r<br>";
        echo "Luasnya : ".$this->luas_lingkaran. "<br>";
        echo "Alasnya : ".$a."<br>";
        echo "Jari-jarinya : ".$r. "<br>";
        echo "Hasilnya : ".$hasilnya;
    }
}

$hasil = new bangunDatar();
echo $hasil->luasPersegi(5);
echo "<br><hr>";
echo $hasil->luasPersegiPanjang(6,3);
echo "<br><hr>";
echo $hasil->luasSegitiga(1/2, 6, 3);
echo "<br><hr>";
echo $hasil->luasLingkaran(3.14, 4);
?>