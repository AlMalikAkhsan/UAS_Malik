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
            <table>
                <h2><b>Seblak Ceu Iroh</b></h2>
                <tr>
                    <td>Nama Pembeli</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Beli</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="hari" id="">
                    </td>
                </tr>
                <tr>
                    <td>Makanan</td>
                    <td>:</td>
                    <td>
                        <select name="makan" id="">
                            <option value="seblak ceker">Seblak ceker</option>
                            <option value="cilok goang">Cilok Goang</option>
                            <option value="cimol bojot">Cimol Bojot</option>
                            <option value="makroni seuhah">Makroni Seuhah</option>
                            <option value="pentol">pentol</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Qty</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="jumlah1" id="">
                    </td>
                </tr>
                <tr>
                    <td>Minuman</td>
                    <td>:</td>
                    <td>
                        <select name="minum" id="">
                            <option value="air mineral">Air Mineral</option>
                            <option value="teh manis">Teh Manis</option>
                            <option value="jus">Jus</option>
                            <option value="lemon tea">Lemon Tea</option>
                            <option value="thai tea">Thai Tea</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Qty</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="jumlah2" id="">
                    </td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="bayar" id="" value="cash">Cash
                        <input type="radio" name="bayar" id="" value="qris">Qris
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Proses" name="gas">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['gas'])){
    $nami = $_POST['nama'];
    $tanggal = $_POST['hari'];
    $mak = $_POST['makan'];
    $hasil1 = $_POST['jumlah1'];
    $min = $_POST['minum'];
    $hasil2 = $_POST['jumlah2'];
    $bay = $_POST['bayar'];


?>

<br><center>
        <table>
        <h2><b>Struk Seblak Ceu Iroh</b></h2>
        <tr>
        <td>Nama Lengkap </td>
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
        <td>
            <?php
            if ($mak == "seblak ceker") {
                $jumlah1 = 10000 * $hasil1;
                echo $jumlah1;
            } else if ($mak == "cimol goang") {
                $jumlah1 = 15000 * $hasil1;
                echo $jumlah1;
            }elseif ($mak == "cimol bojot") {
                $jumlah1 = 30000 * $hasil1;
                echo $jumlah1;
            } elseif ($mak == "makroni seuhah") {
                $jumlah1 = 40000 * $hasil1;
                echo $jumlah1;
            }else if ($mak == "pentol") {
                $jumlah1 = 45000 * $hasil1;
                echo $jumlah1;
            }
            ?>
        </td>
        </tr>
        <tr>
        <td>Qty</td>
        <td>:</td>
        <td><?php echo $hasil1 ?></td>
        </tr>
        <tr>
        <td>Minuman</td>
        <td>:</td>
        <td><?php echo $min ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>
                <?php
                if ($min == "air mineral") {
                    $jumlah2 = 5000 * $hasil2;
                    echo $jumlah2;
                } else if ($min == "teh manis") {
                    $jumlah2 = 10000 * $hasil2;
                    echo $jumlah2;
                }elseif ($min == "jus") {
                    $jumlah2 = 15000 * $hasil2;
                    echo $jumlah2;
                } elseif ($min == "lemon tea") {
                    $jumlah2 = 20000 * $hasil2;
                    echo $jumlah2;
                }else if ($min == "thai tea") {
                    $jumlah2 = 25000 * $hasil2;
                    echo $jumlah2;
                }
                ?>
            </td>
        </tr>
        <tr>
        <td>Qty</td>
        <td>:</td>
        <td><?php echo $hasil2 ?></td>
        </tr>
        <tr>
        <td>Pembayaran</td>
        <td>:</td>
        <td><?php echo $bay ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td>
                <?php
                    $total = $jumlah1 + $jumlah2;
                    echo $total;
                ?>
            </td>
        </tr>
        <tr>
        <td>Diskon 10%</td>
        <td>:</td>
        <td>
            <?php 
                $diskon = $jumlah1 + $jumlah2;
                $dis = $total * 0.1;
                $status = $total >= 50000 ? "$dis" : 0;
                echo $status;
            ?>
        </td>
        </tr>
        <tr>
        <td>Bonus Pembayaran</td>
        <td>:</td>
        <td>
        <?php 
            switch ($bay) {
                case 'qris':
                    echo $bonus = 20000;
                    break;
                
                default:
                    echo 0;
                    break;
            }
        ?>
        </td>
        </tr>
        <tr>
        <td>Total Pembayaran</td>
        <td>:</td>
        <td>
            <?php
            $pem = $dis + $bonus;
            $hasil = $total - $pem;
            echo $hasil;
            ?>
        </td>
        </tr>
        </table>
    </center>
<?php  
}

?>