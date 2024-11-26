<?php

class Pendaftaran{

    public function dataDiri($jurusan, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $no_hp, $email){
        echo "Jurusan : ".$jurusan."<br>";
        echo "Nama Lengkap : ".$nama."<br>";
        echo "Jenis Kelamin : ".$jenis_kelamin."<br>";
        echo "Tempat Lahir : ".$tempat_lahir."<br>";
        echo "Tanggal Lahir : ".$tanggal_lahir."<br>";
        echo "Nomor HP : ".$no_hp."<br>";
        echo "Email : ".$email;
    }

    public function alamatCalon($provinsi, $kab_kota, $kecamatan, $desa_kelurahan, $alamat, $kode_pos){
        echo "Provinsi : ".$provinsi."<br>";
        echo "Kab/Kota : ".$kab_kota."<br>";
        echo "Kecamatan : ".$kecamatan."<br>";
        echo "Desa/Kelurahan : ".$desa_kelurahan."<br>";
        echo "Alamat : ".$alamat."<br>";
        echo "Kode Pos : ".$kode_pos;
    }

    public function asalSekolah($asal_sekolah, $alamat_sekolah){
        echo "Asal Sekolah : ".$asal_sekolah."<br>";
        echo "Alamat Sekolah : ".$alamat_sekolah;
    }

    public function identitasOrangtua($nama_ortu, $pekerjaan, $nomor_hp, $alamat_lengkap){
        echo "Nama OrangTua : ".$nama_ortu."<br>";
        echo "Pekerjaan : ".$pekerjaan."<br>";
        echo "Nomor HP : ".$nomor_hp."<br>";
        echo "Alamat : ".$alamat_lengkap;
    }

}

$cetak = new Pendaftaran();
echo $cetak->dataDiri("RPL","Malik","Laki-laki","Bandung","2008-05-02",89513,"Al_malik@gmail.com");
echo "<br><hr>";
echo $cetak->alamatCalon("Jawa Barat","Bandung","Bojong loa Kidul","Cibaduyut Kidul","Ciparat Tengah",7324);
echo "<br><hr>";
echo $cetak->asalSekolah("SMK Assalaam Bandung","Jl. Situtarate");
echo "<br><hr>";
echo $cetak->identitasOrangtua("Akhsan","Buruh Harian Lepas",89135,"Ciparay Tengah");

?>