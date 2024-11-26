<?php

$years = date("Y");

$kabisat = $years % 4 == 0 ? 'Kabisat' : "Bukan Kabisat";

echo "$years itu tahun $kabisat <br>";

$umur = 16;

$status = $umur >= 18 ? "Dewasa" : "Remaja";

echo $status;

?>
