<?php
$umur = array(
    "Haekal" => "17",
    "Bima" => "19",
    "Akbar" => "16",
    "Emilia" => "14",
    "Ayunda" => "15"
);

echo "Array sebelum pengurutan:<br>";
foreach ($umur as $nama => $nilai) {
    echo "$nama => $nilai<br>";
}

asort($umur);
echo "<br>Array setelah pengurutan ascending berdasarkan nilai (asort):<br>";
foreach ($umur as $nama => $nilai) {
    echo "$nama => $nilai<br>";
}

ksort($umur);
echo "<br>Array setelah pengurutan ascending berdasarkan nama (ksort):<br>";
foreach ($umur as $nama => $nilai) {
    echo "$nama => $nilai<br>";
}

krsort($umur);
echo "<br>Array setelah pengurutan descending berdasarkan nilai (krsort):<br>";
foreach ($umur as $nama => $nilai) {
    echo "$nama => $nilai<br>";
}

arsort($umur);
echo "<br>Array setelah pengurutan descending berdasarkan nilai (arsort):<br>";
foreach ($umur as $nama => $nilai) {
    echo "$nama => $nilai<br>";
}

rsort($umur);
echo "<br>Array setelah pengurutan descending berdasarkan nama (rsort):<br>";
foreach ($umur as $nama => $nilai) {
    echo "$nama => $nilai<br>";
}
?>