<?php
$umur = array(
    "Haekal" => "17",
    "Bima" => "19",
    "Akbar" => "16",
    "Emilia" => "14",
    "Ayunda" => "15"
);

$keys = array_keys($umur);
echo "Array setelah menggunakan array_keys():<br>";
foreach ($keys as $key) {
    echo "$key<br>";
}

echo "<br>";

$values = array_values($umur);
echo "Array setelah menggunakan array_values():<br>";
foreach ($values as $value) {
    echo "$value<br>";
}

echo "<br>";

$umur = array_unique($umur);
echo "Array setelah menggunakan array_unique():<br>";
foreach ($umur as $nama => $nilai) {
    echo "$nama: $nilai<br>";
}

echo "<br>";

$reversed = array_reverse($umur);
echo "Array setelah menggunakan array_reverse():<br>";
foreach ($reversed as $nama => $nilai) {
    echo "$nama: $nilai<br>";
}

echo "<br>";

$search_value = "19";
$key = array_search($search_value, $umur);
echo "Array setelah menggunakan array_search():<br>";
if ($key !== false) {
    echo "Kunci dari nilai $search_value adalah $key";
} else {
    echo "Nilai $search_value tidak ditemukan dalam array";
}
?>