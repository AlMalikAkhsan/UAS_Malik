<?php
// membuat fungsi
function perkenalkan($nama, $salam){
    echo $salam.", <br>";
    echo "Perkenalkan, nama saya ". $nama. "<br>";
    echo "Senang berkenalan dengan anda <br>";
}
// memanggil fungsi yg sudah dibuat
perkenalkan("Al Malik","Halo");
echo "<hr>";

$saya = "Fazri";
$ucapansalam = "Selamat Pagi";

// memanggilnya lagi
perkenalkan($saya, $ucapansalam);

?>