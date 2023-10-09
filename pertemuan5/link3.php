<?php
session_start();
if ((isset($_GET['aksi'])) and ($_GET['aksi'] == "logout")) {
    session_destroy();
    header("refresh;3;proses_radio.php");
}

if (isset($_SESSION['login'])) {
    $nama = $_SESSION['username'];
    ?>
    <?php include 'tugas2_header.php'; ?>
    <style>
        body {
            text-align: center;
            padding: 70px;
    }
</style>
    <body>
        <p>Username: <b><?php echo $nama; ?></b></p>
        <p><a href='link1.php'>Link 1</a> | <a href='link2.php'>Link 2</a> | <a href='link3.php'>Link 3</a> | <a href="?aksi=logout">Logout</a></p>
        <p>Ini adalah isi dari halaman Link 3</p>
    </body>

    <?php include 'tugas2_footer.php'; ?>
    
    <?php
} else {
    header("location:tugas2-2.php");
}
?>
