<?php 
// Soal 1 //

$buku = "Novel";
$genre = "Thriller";

$rom = 15000;
$thri = 10000;
$com = 12000;

switch ($buku) {
    case 'Komik':
        echo "Anda membeli buku : $buku <br>";
        echo "Genrenya : $genre <br>";
        switch ($genre) {
            case 'Romance':
                echo "Harga : $rom <br>";
                echo "Cashback :";
                echo $rom * 0.05;
                break;
            case 'Thriller':
                echo "Harga : $thri <br>";
                echo "Cashback :";
                echo $thri * 0.1;
                break;
            case 'Comedy':
                echo "Harga : $com <br>";
                echo "Cashback :";
                echo $com * 0.15;
                break;
        }
        break;
        case 'Novel':
            echo "Anda membeli buku : $buku <br>";
            echo "Genrenya : $genre <br>";
            switch ($genre) {
                case 'Romance':
                    echo "Harga : $rom <br>";
                    echo "Cashback :";
                    echo $rom * 0.05;
                    break;
                case 'Thriller':
                    echo "Harga : $thri <br>";
                    echo "Cashback :";
                    echo $thri * 0.1;
                    break;
                case 'Comedy':
                    echo "Harga : $com <br>";
                    echo "Cashback :";
                    echo $com * 0.15;
                    break;
            }
            break;
            case 'Sejarah':
                echo "Anda membeli buku : $buku <br>";
                echo "Genrenya : $genre <br>";
                switch ($genre) {
                    case 'Romance':
                        echo "Harga : $rom <br>";
                        echo "Cashback :";
                        echo $rom * 0.05;
                        break;
                    case 'Thriller':
                        echo "Harga : $thri <br>";
                        echo "Cashback :";
                        echo $thri * 0.1;
                        break;
                    case 'Comedy':
                        echo "Harga : $com <br>";
                        echo "Cashback :";
                        echo $com * 0.15;
                        break;
                }
                break;
}
echo "<hr>";
?>
<?php

$ting = 167;
$ber = 69;

$status = $ting >= 165 ? "Lolos" : "Tidak Lolos";
$satus = $ber <= 75 ? "Lolos" : "Tidak Lolos";

echo "Tinggi Badan : $ting <br>";
echo "Berat Badan : $ber <br>";
echo "Seleksi Tinggi anda $status <br>";
echo "Seleksi Berat Badan anda $satus";

?>
