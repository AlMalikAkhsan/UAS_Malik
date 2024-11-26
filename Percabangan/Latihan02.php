<?php

$nama = "Al Malik Akhsan";
$kelas = "XI RPL 2";
$jenis_kelamin = "Laki-Laki";

$nima = 90;
$nibindo = 90;
$nibingg = 80;
$nipro = 80;
$bagi = 4;
$rata = 85;

$j = $nima + $nibindo + $nibingg + $nipro / $bagi;

echo "Nama : $nama <br>";
echo "Kelas : $kelas <br>";
echo "Jenis Kelamin : $jenis_kelamin <br>";
echo "<hr>";
echo "Nilai Matematika : $nima <br>";
echo "Nilai B.Indonesia : $nibindo <br>";
echo "Nilai B.Inggris : $nibingg <br>";
echo "Nilai Produktif : $nipro <br>";
echo "<hr>";

echo "Rata-rata : $rata <br>";
echo "Keterangan : ";
if ($j > 85) {
    echo "Selamat Anda Lulus";
} else {
    echo "Maaf Anda Tidak Lulus";
}

?>