<?php
require_once("koneksi.php");
$nis = $_GET['nis'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1" cellspacing='0' cellpadding='5' align="center">
        <tr style="background-color: darkgrey;">
            <td>NO</td>
            <td>Judul Buku</td>
            <td>Tgl Pinjam</td>
            <td>Tgl Kembali</td>
        </tr>
        <?php
        $no = 1;
        $query_data = mysqli_query($koneksi, "select * from peminjaman inner join buku on buku.buku_id = peminjaman.buku_id where nis='$nis'");
        while ($data = mysqli_fetch_array($query_data)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['judul_buku']; ?></td>
                <td><?= $data['tgl_peminjaman']; ?></td>
                <td><?= $data['tgl_kembali']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>