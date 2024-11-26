<?php
$data = ["agung" => 90, "asep" => 75, "rido" => 65, "romlah" => 85];

// menambah index di array
$data["ahmad"] = 88;

foreach ($data as $key => $val) {
    echo "Nama : $key <br>";
    echo "Nilai : $val <br>";

    $kete = $val > 75 ? "Tuntas" : "Tidak Tuntas";
    echo "Keterangan : $kete <hr>";
} 

?>