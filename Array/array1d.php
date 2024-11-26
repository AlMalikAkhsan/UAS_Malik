 <?php
// Array 1 dimensi
$arrBuah = ["Mangga", "Jeruk", "Apel", "Pisang"];

// Bisa ditampilkan satuan berdasarkan index(key) nya
echo $arrBuah[2];
echo "<br>";

// Bisa ditampilkan semua (Collective)
for ($i= 0; $i < count($arrBuah); $i++) { 
    echo "$arrBuah[$i]<hr>";
}

echo "<hr> Foreach <br>";
foreach ($arrBuah as $buah) {
    echo "$buah <br>";
}

 ?>