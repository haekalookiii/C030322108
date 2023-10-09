<?php
session_start();

$error_message = "";
$show_navigation = false;

if (isset($_POST['Login'])) {
    $username = $_POST['nama'];
    $password = $_POST['pass'];

    $users = array(
        'Ali' => 'password1',
        'Bona' => 'password2',
        'Charlie' => 'password3',
        'Dede' => 'password4',
        'Emon' => 'password5'
    );

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['login'] = 1;
        $show_navigation = true;
        header('Location: tugas2_utama.php');
        exit();
    } else {
        $error_message = "Password yang dimasukkan salah.";
    }
}

if (isset($_POST['Login']) && !isset($users[$username])) {
    $error_message = "Username tidak terdaftar.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nugaslogin</title>
    <style>
        body {
            display:flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .error-message {
            color: red;
            font-weight: bold;
            margin: 10px 0;
        }
    </style>
    <?php include 'tugas2_header.php';?>
</head>

<body>
    <form name="session" method="POST" action="">
        <p>Silahkan Login</p>
        <p>Username <input type="text" name="nama" /></p>
        <p>Password <input type="password" name="pass" /></p>
        <input type="submit" name="Login" value="Login" />
        <?php if ($error_message !== "") { ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php } ?>
    </form>

</body>
    <?php include 'tugas2_footer.php';?>
</html>

