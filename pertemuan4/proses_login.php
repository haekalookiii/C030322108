    <?php
    $username_db = "c030322108";
    $password_db = "c030322108@Mhs";

    $username_input = $_POST["username"];
    $password_input = $_POST["password"];

    if ($username_input == $username_db && $password_input == $password_db) {
        echo "<p>Login berhasil! Selamat datang, $username_input.</p>";
    } else {
        echo "<p>Login gagal. Silakan coba lagi.</p>";
    }
    ?>
    