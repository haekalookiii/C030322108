<!doctype html>
<html>
<head>
    <title>Tugas 2</title>
</head>
<body>
    <h1>Menghitung Bangun Ruang Kerucut</h1>
    <form method="post" action="">
        <label for="jariAlas">Panjang Jari-Jari Alas:</label>
        <input type="text" name="jariAlas" id="jariAlas" required autocomplete="off"><br><br>

        <label for="sisimiring">Panjang sisi miring:</label>
        <input type="text" name="sisimiring" id="sisimiring" required autocomplete="off"><br><br>

        <input type="submit" value="Enter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jariAlas = floatval($_POST["jariAlas"]);
        $sisimiring = floatval($_POST["sisimiring"]);

        $luasAlas = M_PI * $jariAlas * $jariAlas;

        $luasPermukaan = M_PI * $jariAlas * ($jariAlas + $sisimiring);

        echo "Luas Alas Kerucut: ".number_format($luasAlas,2)." satuan persegi<br>";
        echo "Luas Permukaan Kerucut: ".number_format($luasPermukaan,2)." satuan persegi<br>";
    }
    ?>
</body>
</html>
