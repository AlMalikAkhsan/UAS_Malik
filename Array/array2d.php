 <?php
 $nilai = [
    ["Rani", "Bandung",  "Islam", 165],
    ["Roni", "Kuningan",  "Islam", 175],
    ["Rahmat", "Cimahi",  "Kristen", 160]
 ];

 // menampilkan nilai array secara individu berdasarkan (barisa & kolom)
echo $nilai[1][1];
echo "<hr>";

echo "For <hr>";
// menampilkan nilai array secara kolektif
for ($i=0; $i < count($nilai); $i++) { 
    for ($n=0; $n < count($nilai[$i]); $n++) { 
        echo $nilai[$i][$n]. "<br>";
   }
   echo "<hr>";
}

echo "Foreach <hr>";
// menggunakan foreach
    foreach ($nilai as $siswa) {
        foreach ($siswa as $biodata) {
            echo $biodata . "<br>";
        }
        echo "<hr>";
    }