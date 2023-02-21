<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login to Perpustakaan Mini</h1>
    <hr>
    <?php

    if (isset($_GET['err'])) {
        $pesan = $_GET['err'];
        if ($pesan == 'logout') {
            echo 'Anda berhasil logout';
        }
        if ($pesan == 'gagal') {
            echo 'Anda gagal login, periksa username dan password';
        }
        if ($pesan == 'ilegal') {
            echo ' Anda mau nyusup, login dulu';
        }
    }

    ?>
    <form action="proses_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Login" name="login"></td>
            </tr>
        </table>
    </form>
</body>

</html>