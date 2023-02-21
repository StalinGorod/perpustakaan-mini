<?php

$id = $_GET['id'];
require_once("koneksi.php");

$query = mysqli_query($koneksi, "select * from siswa where id_siswa='$id'");

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
        <form action="proses_ubah_siswa.php" method="POST">
            <table>
                <tr>
                    <td>Nis</td>
                    <td>:</td>
                    <td>
                        <input type="hidden" name="id" value="<?= $data->id_siswa; ?>">
                        <input type="text" name="nis" value="<?= $data->nis; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data->nama; ?>"></td>
                </tr>
                <tr>
                    <td>kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value="<?= $data->kelas; ?>"></td>
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