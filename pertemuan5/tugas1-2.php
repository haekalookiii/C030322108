<?php
session_start();

$users = array(
    "Ali" => "password1",
    "Bona" => "password2",
    "Charlie" => "password3",
    "Dede" => "password4",
    "Emon" => "password5"
);

if (isset($_POST['Login'])) {
    $username = $_POST['nama'];
    $password = $_POST['pass'];

    // Periksa apakah username ada dalam array dan password cocok
    if (array_key_exists($username, $users) && $users[$username] == $password) {
        $_SESSION['login'] = 1;
        $_SESSION['username'] = $username;
        header("location: tugas1_submit.php");
        exit();
    } else {
        echo "Username atau Password salah";
        session_destroy();
    }
}

?>

<html>

<head>
    <title>Session</title>
</head>

<body>
    <form name="session" method="POST" action="">
        <p>Form Login</p>
        <p>User Name <input type="text" name="nama" /></p>
        <p>Password <input type="password" name="pass" /></p>
        <input type="submit" name="Login" value="Login" />
    </form>
</body>

</html>
