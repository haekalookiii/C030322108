<?php
    $jumlah_kelipatan = 0;

    for ($angka = 3; $angka <= 127; $angka++) {
        if ($angka % 6 == 0) {
            $jumlah_kelipatan++;
        }
    }
    echo "Banyaknya bilangan bulat kelipatan 6 dari 3 sampai 127 adalah: " . $jumlah_kelipatan;
?>