<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2>Form Biodata Diri</h2>
            <table>    
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" ></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" ></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="budha">Budha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="sekolah" id="">
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="smk">SMK</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="menikah" id="">
                            <option value="sudah menikah">Sudah Menikah</option>
                            <option value="belum menikah">Belum Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" value="membaca">Membaca
                        <input type="checkbox" name="hobi" value="menulis">Menulis
                        <input type="checkbox" name="hobi" value="ngepush">Ngepush
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita-cita" id="">
                            <option value="programmer">Programmer</option>
                            <option value="tentara">Tentara</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="kata-kata" id=""></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="KIRIM"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['proses'])) {

    $nale = $_POST['nama'];
    $kel = $_POST['lahir'];
    $tel = $_POST['tanggal_lahir'];
    $jes = $_POST['jenis_kelamin'];
    $alma = $_POST['alamat'];
    $aga = $_POST['agama'];
    $sek = $_POST['sekolah'];
    $men = $_POST['menikah'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita-cita'];
    $kata = $_POST['kata-kata'];

    echo "<br><center>
        <table>
        <tr>
        <td>Nama Lengkap </td>
        <td>:</td>
        <td> $nale</td>
        </tr>
        <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>$kel</td>
        </tr>
        <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td> $tel</td>
        </tr>
        <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td> $jes</td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>$alma</td>
        </tr>
        <tr>
        <td>Agama</td>
        <td>:</td>
        <td>$aga</td>
        </tr>
        <tr>
        <td>Pendidikan Terakhir</td>
        <td>:</td>
        <td>$sek</td>
        </tr>
        <tr>
        <td>Status</td>
        <td>:</td>
        <td>$men</td>
        </tr>
        <tr>
        <td>Hobi</td>
        <td>:</td>
        <td>$hobi</td>
        </tr>
        <tr>
        <td>Cita-cita</td>
        <td>:</td>
        <td>$cita</td>
        </tr>
        <tr>
        <td>Kata-kata Bijak</td>
        <td>:</td>
        <td>$kata</td>
        </tr>
        </table>
    </center>";

}
?>