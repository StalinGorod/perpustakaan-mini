<?php
require_once("koneksi.php");
@$nis = $_GET['nis'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Peminjaman</title>
</head>

<body>
    <h1>Form Peminjaman</h1>
    <hr>
    <table>
        <tr>
            <form action="proses_pencarian.php" method="post">
                <td>NIS</td>
                <td>:</td>
                <td>
                    <input type="text" name="nis">
                    <input type="submit" value="Cari">
                </td>
            </form>
        </tr>
        <tr>
            <form action="proses_simpan_peminjaman.php" method="post">
                <td>Siswa</td>
                <td>:</td>
                <?php

                $query_nama = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis' ");
                $nama = mysqli_fetch_array($query_nama);
                ?>
                <td>
                    <input type="hidden" name="idd" value="<?= $nama['nis']; ?>">
                    <input type="text" name="siswa" value="<?= $nama['nama']; ?>" disabled>
                </td>
                <?php
                ?>
        </tr>
        <tr>
            <td>Buku</td>
            <td>:</td>
            <td>
                <select name="buku">
                    <?php
                    $query_buku = mysqli_query($koneksi, "select * from buku");
                    while ($data_buku = mysqli_fetch_object($query_buku)) {
                    ?>
                        <option value="<?= $data_buku->buku_id; ?>"><?= $data_buku->judul_buku; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tgl Kembali</td>
            <td>:</td>
            <td><input type="date" name="tgl_kembali"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="simpan" name="simpan"></td>
        </tr>
    </table>
    </form>

    <table border="1" cellspacing='0' cellpadding='5'>
        <tr style="background-color: darkgrey;">
            <td>No</td>
            <td>No Peminjaman</td>
            <td>Nis</td>
            <td>Nama Siswa</td>
            <td>Judul Buku</td>
            <td>Tgl Pinjam</td>
            <td>Tgl Kembali</td>
        </tr>
        <?php
        $no = 1;
        $query_peminjaman = mysqli_query($koneksi, 'select * from peminjaman inner join buku on buku.buku_id = peminjaman.buku_id inner join siswa on siswa.nis = peminjaman.nis');
        while ($data_peminjaman = mysqli_fetch_object($query_peminjaman)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data_peminjaman->no_peminjaman; ?></td>
                <td><?= $data_peminjaman->nis; ?></td>
                <td><?= $data_peminjaman->nama; ?></td>
                <td><?= $data_peminjaman->judul_buku; ?></td>
                <td><?= $data_peminjaman->tgl_peminjaman; ?></td>
                <td><?= $data_peminjaman->tgl_kembali; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>