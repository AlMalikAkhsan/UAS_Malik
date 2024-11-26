<?php
$mhs = [
    [
        "nama" => "Malik",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "alamat" => "Bandung",
    ],
    [
        "nama" => "Abdul",
        "jurusan" => "Teknik Informatika",
        "alamat" => "Cimahi",
    ],
];

foreach ($mhs as $data) {
    echo "Nama : ". $data["nama"]. "<br>";
    echo "Jurusan : ". $data["jurusan"]. "<br>";
    echo "Alamat :  ". $data["alamat"]. "<br>";
    echo "<hr>";
}
?>