<?php

$tipe_akun = "Admin";
$aksi = "Hapus";

switch ($tipe_akun) {
    case 'Admin':
    echo "Tipe akun : $tipe_akun <br>";
    echo "Aksi : ";
    
        switch ($aksi) {
            case 'Edit':
                echo "Edit akun Admin";
                break;
            case 'Hapus':
                echo "Hapus akun Admin";
                break;
        }
        break;
    case 'User':
        echo "Tipe akun : $tipe_akun <br>";
        echo "Aksi : ";
        switch ($aksi) {
            case "Edit":
                echo "Edit Akun";
                break;
            case "Hapus":
                echo "Tidak bisa hapus akun";
                break;
        }
        break;
    default:
        echo "Akun tidak ditemukan";
        break;
}

?>