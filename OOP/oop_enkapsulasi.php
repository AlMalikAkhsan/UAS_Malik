<?php
// public adalah method biasa pada umumnya
// private dan protected adalah method yg tidak bisa diakses diluar class

// ini class
class Manusia{
    
    // property
    public $nama = "Agus";

    // ini method
    private function tampilkan_nama(){
        return "Nama saya $this->nama";
    }

    public function keluar(){
        echo $this->tampilkan_nama();
    }

}

// ini object
$hasil = new Manusia();
echo $hasil->keluar();
echo "<br>";
echo $hasil->nama;

?>