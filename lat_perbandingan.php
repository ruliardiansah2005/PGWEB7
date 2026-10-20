<?php
// Perbandingan
    $x = 29;
    $y = 1000;
    if ($x==20 || $y==10) {
        echo "Masuk sini <br>";
    } elseif ($x>20 && $y>10) {
        echo "Tidak masuk sini <br>";
    }elseif ($x<20 || $y<10) {
        echo "Data corrupt <br>";
    }else{
        echo "Data tidak ditemukan <br>";
    }
    echo "Program selesai <br>";

    ?>