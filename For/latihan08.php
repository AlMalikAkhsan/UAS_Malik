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
        <h2>Nilai Ujian sekolah</h2>
        <table>
        <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" ></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
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
                    <td></td>
                    <td><center>Masukkan Nilai</center></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_harian">40%</td>
                </tr>
                <tr>
                    <td>Nilai Sikap</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_sikap">20%</td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_uts">20%</td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_uas">20%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Proses" name="kirim">
                    </td>
                </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['kirim'])) {
    
    $nami = $_POST['nama'];
    $class = $_POST['kelas'];
    $juru = $_POST['jurusan'];
    $niha = $_POST['nilai_harian'];
    $nisa = $_POST['nilai_sikap'];
    $niuts = $_POST['nilai_uts'];
    $niuas = $_POST['nilai_uas'];

}
$satu = $niha;
$dua = $nisa;
$tiga = $niuts;
$empat = $niuas;

$harian = $satu * 0.4;
$sikap = $dua * 0.2;
$uts = $tiga * 0.2;
$uas = $empat * 0.2;

$hasil = $harian + $sikap + $uts + $uas;

$status = $hasil > 75 ? "<b>Selamat Anda Lulus</b>" : "<b>Maaf Anda Tidak Lulus</b>";

echo "<br><center>
        <table>
        <tr>
        <td>Nama Lengkap </td>
        <td>:</td>
        <td> $nami</td>
        </tr>
        <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>$class</td>
        </tr>
        <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td> $juru</td>
        </tr>
        <tr>
        <td>Nilai Harian</td>
        <td>:</td>
        <td> $niha</td>
        </tr>
        <tr>
        <td>Nilai Sikap</td>
        <td>:</td>
        <td>$nisa</td>
        </tr>
        <tr>
        <td>Nilai UTS</td>
        <td>:</td>
        <td>$niuts</td>
        </tr>
        <tr>
        <td>Nilai UAS</td>
        <td>:</td>
        <td>$niuas</td>
        </tr>
        <tr>
        <tr>
        <td>Rata-rata </td>
        <td>:</td>
        <td> $hasil</td>
        </tr>
        <tr>
        <td><b>Keterangan</b></td>
        <td>:</td>
        <td> $status</td>
        </tr>
        </table>
    </center>";

?>
<html lang="en">
<body>
    <center>
        <table>
            <h2>-- STRUK PEMBAYARAN SEBLAK CEU IROH --</h2>
            <hr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td><?php echo $nami ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><?php echo $tanggal ?></td>
            </tr>
            <tr>
                <td>Makanan</td>
                <td>:</td>
                <td><?php echo $mak ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
    </center>  
</body>
</html>