<?php
// Construct adalah method yg dijalankan pertama kali
// Destruct adalah method yg dijalankan terakhir

// Construct
// class manusia
echo "Construct :<br>";
class Manusia{

    // property
    var $nama;
    var $warna;

    function __construct() {
        echo "Ini adalah isi method construct <br>";
    }

    // method manusia
    function tampilkan_nama(){
        return "Nama saya Malasngoding <br>";
    }

}
//instansiasi class manusia
$manusia = new Manusia();

// memanggil method Tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();

echo "<br><hr>";

echo "Destruct :<br>";
// Destruct
// class hewan
class Hewan{

    // property
    var $nama;
    var $warna;

    // method construct dijalankan pertama kali
    function __construct(){
        echo "Ini adalah isi method Construct <br>";
    }

    // method destrcut dijalankan terakhir
    function __destruct(){
        echo "Ini adalah isi method Destruct <br>";
    }

    // method Hewan
    function tampilkan_warna(){
        return "Warna Kulitnya kuning langsat <br>";
    }

}
// instansiasi class hewan
$hewan = new Hewan();

// memanggil method tampilkan_warna dari class hewan
echo $hewan->tampilkan_warna();
?>