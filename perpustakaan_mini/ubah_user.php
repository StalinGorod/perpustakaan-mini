<?php

$id = $_GET['id'];
require_once("koneksi.php");

$query = mysqli_query($koneksi, "select * from users where user_id='$id'");

while ($data = mysqli_fetch_object($query)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Document</title>
    </head>

    <body>
        <h3>Ubah Data User</h3>
        <hr>
        <form action="proses_ubah_user.php" method="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>
                        <input type="hidden" name="id" value="<?= $data->user_id ?>">
                        <input type="text" name="username" value="<?= $data->username; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password" value="<?= $data->password; ?>"></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>:</td>
                    <td><input type="text" name="level" value="<?= $data->level; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </tr>
            </table>
        </form>
    </body>

    </html>
<?php
}
?>