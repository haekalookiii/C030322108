<?php
$jumlah_fotocopy = 158;

    if ($jumlah_fotocopy > 0 && $jumlah_fotocopy < 100) {
        echo "Harga perlembar = Rp.150,-<br>";
        $harga_akhir = $jumlah_fotocopy*150;
    }elseif ($jumlah_fotocopy >=100 && $jumlah_fotocopy <= 200) {
        echo "Harga perlembar = Rp.100,-<br>";
        $harga_akhir = $jumlah_fotocopy*100;
    }elseif ($jumlah_fotocopy > 200) {
        echo "Harga perlembar = Rp.80,-<br>";
        $harga_akhir = $jumlah_fotocopy*80;
    }else {
        echo "Nilai Tidak Valid";
    }
    echo "Jumlah fotocopy = ".$jumlah_fotocopy."<br>";
    echo "Jadi, harga yang harus dibayarkan adalah = Rp.".number_format($harga_akhir).",-";
?>