<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $agama = $_POST["agama"];
        $alamat = $_POST["alamat"];

        echo "<h3>Data Biodata:</h3>";
        echo "Nama: $nama <br>";
        echo "Jenis Kelamin: $jenis_kelamin <br>";
        echo "Hobi Anda Adalah :<br>";
        if (isset($_POST['hobi1'])) {
        echo "- " . $_POST['hobi1'] . "<br>";
        }
        if (isset($_POST['hobi2'])) {
        echo "- " . $_POST['hobi2'] . "<br>";
        }
        if (isset($_POST['hobi3'])) {
        echo "- " . $_POST['hobi3'] . "<br>";
        }
        if (isset($_POST['hobi4'])) {
            echo "- " . $_POST['hobi4'] . "<br>";
            }
        if (isset($_POST['hobi5'])) {
        echo "- " . $_POST['hobi5'] . "<br>";
        }
        echo "Agama: $agama <br>";
        echo "Alamat: $alamat <br>";
        } else {
        echo "Akses langsung ke halaman ini tidak diizinkan.";
    }
    ?>
