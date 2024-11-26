<?php

$nilai = 200;

if ($nilai > 100){
    echo "Nilai Tidak Valid";
} else if ($nilai > 90) {
    echo "Grade A";
} elseif ($nilai > 80) {
    echo "Grade B";
} elseif ($nilai > 70) {
    echo "Grade C";
}elseif ($nilai > 60){
    echo "Grade D";
}elseif ($nilai > 50) {
    echo "Grade E";
}else {
    echo "Anda Harus Belajar Lagi!!";
}

?>