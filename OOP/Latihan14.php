<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Diri Calon Pendaftar</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="">
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat_lahir" id="">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_lahir" id="">
                    </td>
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="nomor_hp" id="">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" id="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="kirim" value="simpan">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['kirim'])) {
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_hp = $_POST['nomor_hp'];
    $email = $_POST['email'];

    class calonDaftar{

        public function pendaftaran($jurusan2, $nama2, $jenis_kelamin, $tempat_lahir2, $tanggal_lahir2, $no_hp2, $email2){
        echo "Jurusan : ".$jurusan2."<br>";
        echo "Nama Lengkap : ".$nama2."<br>";
        echo "Jenis Kelamin : ".$jenis_kelamin."<br>";
        echo "Tempat Lahir : ".$tempat_lahir2."<br>";
        echo "Tanggal Lahir : ".$tanggal_lahir2."<br>";
        echo "Nomor HP : ".$no_hp2."<br>";
        echo "Email : ".$email2."<br>";

        }
        
    }

    $hasil = new calonDaftar();
    echo $hasil->pendaftaran($jurusan, $nama, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $no_hp, $email);
}