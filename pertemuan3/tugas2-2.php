<?php
    $bilangan = 2;
    $jumlah = 0;

    echo "Penjumlahan bilangan 2 s/d 50 adalah ";
    while ($bilangan <= 50) {
        echo $bilangan . " + ";
        $jumlah += $bilangan;
        $bilangan++;
    }
    echo " = ".$jumlah;
?>
