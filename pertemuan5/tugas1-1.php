<?php

function hitung_jumlah_ganjil(){
    $jumlahGanjil = 0;
    
    for ($a = 10; $a <= 123456; $a++) {
        if ($a % 2 == 1) {
            $jumlahGanjil++;
        }
    }
    return $jumlahGanjil;
}

$hasil = hitung_jumlah_ganjil();
echo "Jumlah bilangan ganjil dari 10-123456 adalah: $hasil";
?>