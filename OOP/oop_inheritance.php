<?php

// class utama
class Kendaraan{

    protected $warna = "Putih";
    public $merk;

}

// class turunan
class Mobil extends Kendaraan{

    public function deskripsi(){
        echo "Warna Mobil $this->warna";
    }

}

$cetak = new Mobil();
echo $cetak->deskripsi();
?>