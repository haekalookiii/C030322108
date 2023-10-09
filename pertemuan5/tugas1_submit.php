<?php
session_start();
if ((isset($_GET['aksi'])) and ($_GET['aksi'] == "logout")) {
    session_destroy();
    header("refresh;3;proses_radio.php");
}

if (isset($_SESSION['login'])) {

    $nama = $_SESSION['username'];
    echo "<center>";
    echo "<p>Anda Login Sebagai <b>" . $nama . "</b></p>";
    ?>
    <a href="?aksi=logout">Logout</a> </body>
    </center>
    <?php
} else {
    header("location:tugas1-2.php");
}
?>