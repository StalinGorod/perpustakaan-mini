<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h3>Tambah Data Siswa</h3>
    <hr>
    <form action="proses_simpan_siswa.php" method="POST">
        <table>
            <tr>
                <td>Nis</td>
                <td>:</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas"></td>
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