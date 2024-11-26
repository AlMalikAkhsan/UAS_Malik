<?php
function datadiri($jurusan, $nama, $kelamin, $lahir, $tlahir, $no_hp, $email){
    echo "Jurusan : $jurusan <br>";
    echo "Nama Lengkap : $nama <br>";
    echo "Jenis Kelamin : $kelamin <br>";
    echo "Tempat Lahir : $lahir <br>";
    echo "Tanggal Lahir : $tlahir <br>";
    echo "No Hp : $no_hp <br>";
    echo "Email : $email <br>";
}
echo "<h2>Data Diri</h2>";
datadiri("RPL","Al Malik","Laki-laki","Bandung","02 Mei 2008",8951380,"malikakhsan07@gmail.com");
echo "<hr>";

function asalsekolah($asal_sekolah, $alamat_sekolah){
    echo "Nama Asal Sekolah : $asal_sekolah <br>";
    echo "Alamat Sekolah : $alamat_sekolah <br>";
}
echo "<h2>Data Asal Sekolah</h2>";
asalsekolah("SMK Assalaam Bandung","Situ Tarate");
echo "<hr>";

function ortu($nama_ortu, $kerjaan, $no_hp, $alamat){
    echo "Nama Orangtua : $nama_ortu <br>";
    echo "Pekerjaan : $kerjaan <br>";
    echo "No Hp : $no_hp <br>";
    echo "Alamat : $alamat <br>";
}
echo "<h2>Data Orang Tua</h2>";
ortu("Abdul Al Akhsan","Buruh Harian Lepas",8951380,"Ciparay Tengah");
echo "<hr>";

function daerah($kab,$kec,$kel,$al){
    echo "Kab/Kota : $kab <br>";
    echo "Kecamatan : $kec <br>";
    echo "Kelurahan : $kel <br>";
    echo "Alamat : $al <br>";
}
echo "<h2>Calon Pendaftar</h2>";
daerah("Bandung","Bojong Loa Kidul","Cibaduyut Kidul","Ciparay Tengah");
?>