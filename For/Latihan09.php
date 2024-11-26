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
                <h2>Form Bilangan</h2>
                <tr>
                    <td>Masukan Bilangan</td>
                    <td>:</td>
                    <td><input type="number" name="nomor" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Bilangan</td>
                    <td>:</td>
                    <td>
                        <select name="jenis" id="">
                            <option value="Kelipatan_3">Kelipatan 3</option>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                            <option value="Besar_ke_Kecil">Besar ke Kecil</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Simpan" name="gas">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['gas'])){
    $besar = $_POST['nomor'];
    $pilih = $_POST['jenis'];

    if ($pilih == "Besar_ke_Kecil") {
        for ($i= $besar; $i >= 1; $i--) { 
            echo $i;
        }
    } else if ($pilih == "Ganjil") {
        for ($i=1; $i <= $besar; $i+=2) { 
            echo $i;
        }
    }elseif ($pilih == "Genap") {
        for ($i= 2; $i <= $besar; $i+=2) { 
            echo $i;
        }
    } elseif ($pilih == "Kelipatan_3") {
        for ($i= 3; $i <= $besar; $i+=3) { 
            echo $i;
        }
    }
    
}
?>
