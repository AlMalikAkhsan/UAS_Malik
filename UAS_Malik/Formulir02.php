<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <?php
            if (isset($_POST['proses'])) {
                $nomor = $_POST['no'];
                $nama = $_POST['nama'];
                $unit = $_POST['unit'];
                $gaj = $_POST['gaji'];
                $jabatan = $_POST['jabatan'];
                $lamker = $_POST['lama_kerja'];
                $st = $_POST['status_kerja'];
                $bpjs = $_POST['bpjs'];
                $pinjam = $_POST['pinjaman'];
                $cicilan = $_POST['cicilan'];
                $infaq = $_POST['infaq'];

                // Jabatan dan Gaji
                if ($jabatan == "Kepala Sekolah") {
                    $gaji = 10000000;
                } elseif ($jabatan == "Wakasek") {
                    $gaji = 7500000;
                } elseif ($jabatan == "Guru") {
                    $gaji = 5000000;
                } elseif ($jabatan == "Karyawan") {
                    $gaji = 2500000;
                } else {
                    $gaji = 0;
                }

                $bonus = ($st == "Tetap") ? 1000000 : 0;

                $gaji_kotor = $gaji + $bonus;
                $total_potongan = $bpjs + $pinjam + $cicilan + $infaq;
                $gaji_bersih = $gaji_kotor - $total_potongan;

        ?>
        <div class="container mt-5">
        <div class="card shadow">
        <div class="card-header text-center h2">
        <tr>
            <th colspan="2" class="text-center h5"><?php echo $nama; ?></th>
        </tr>
        </div>
        <br>
        <div class="text-center text-primary">
            <h4>STRUK GAJI</h4>
        </div>
        <div class="card-body">
            <center>
            <table>
                    <tr>
                        <th>No</th>
                        <td>:</td>
                        <td><?php echo $nomor; ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td><?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <th>Unit Pendidikan</th>
                        <td>:</td>
                        <td><?php echo $unit; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Gaji</th>
                        <td>:</td>
                        <td><?php echo $gaj; ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td>:</td>
                        <td><?php echo $jabatan; ?></td>
                    </tr>
                    <tr>
                        <th>Gaji</th>
                        <td>:</td>
                        <td>Rp <?php echo number_format($gaji, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Lama Kerja</th>
                        <td>:</td>
                        <td><?php echo $lamker; ?> Tahun</td>
                    </tr>
                    <tr>
                        <th>Status Kerja</th>
                        <td>:</td>
                        <td><?php echo $st; ?></td>
                    </tr>
                    <tr>
                        <th>Bonus</th>
                        <td>:</td>
                        <td>Rp <?php echo number_format($bonus, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>BPJS</th>
                        <td>:</td>
                        <td>Rp <?php echo number_format($bpjs, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Pinjaman</th>
                        <td>:</td>
                        <td>Rp <?php echo number_format($pinjam, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Cicilan</th>
                        <td>:</td>
                        <td>Rp <?php echo number_format($cicilan, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Infaq</th>
                        <td>:</td>
                        <td>Rp <?php echo number_format($infaq, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Total Potongan</th>
                        <td>:</td>
                        <td>Rp <?php echo number_format($total_potongan, 0, ',', '.'); ?></td>
                    </tr>
                    <tr class="table">
                        <td></td>
                        <td></td>
                        <td>Rp <?php echo number_format($gaji_bersih, 0, ',', '.'); ?></td>
                    </tr>
            </table>
            </center>
            <?php
                } 
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>