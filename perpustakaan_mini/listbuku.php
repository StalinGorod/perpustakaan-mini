<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style>
        a {
            text-decoration: none;
        }

        #gb1 {
            background-color: dodgerblue;
            padding: 7px;
            color: white;
        }

        #gb2 {
            background-color: red;
            padding: 7px;
            color: white;
        }

        #gb3 {
            background-color: forestgreen;
            padding: 14px;
            color: white;
        }

        table {
            margin-top: 20px;
        }

        h1 {
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <h1 style="text-align:center;">DAFTAR LIST BUKU</h1>
    <center><a href="tambah_buku.php" id='gb3'>TAMBAH</a></center>
    <table border="1" cellpadding="3" cellspacing="0" width="550" align="center">
        <tr style="background-color: darkgrey;">
            <th>No</th>
            <th>Judul buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Cover</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i = 1;
        //koneksi ke database
        require_once('koneksi.php');

        //Query ke database (mengambil data)
        $query = mysqli_query($koneksi, "select * from buku");

        //perulangan menggunakan while
        while ($data = mysqli_fetch_object($query)) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $data->judul_buku ?></td>
                <td><?= $data->penulis ?></td>
                <td><?= $data->penerbit ?></td>
                <td><img src='images/<?= $data->gambar ?>' width='50'></td>
                <td>
                    <a href='ubah_buku.php?id=<?= $data->buku_id ?>' id='gb1'>Ubah</a>
                    <a onClick='return confirm("Anda yakin akan menghapus data ini")' href='hapus_buku.php?id=<?= $data->buku_id ?>' id='gb2'>Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <center><a href="index.php" id='gb3'>KEMBALI</a></center>
</body>

</html>