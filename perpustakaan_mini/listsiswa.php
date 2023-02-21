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
            padding: 2px;
            color: white;
        }

        #gb2 {
            background-color: red;
            padding: 2px;
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
    <h1 style="text-align:center;">DAFTAR LIST SISWA</h1>
    <center><a href="tambah_siswa.php" id='gb3'>TAMBAH</a></center>
    <table border="1" cellpadding="3" cellspacing="0" width="550" align="center">
        <tr style="background-color: darkgrey;">
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i = 1;
        require_once('koneksi.php');

        $query = mysqli_query($koneksi, "select * from siswa");

        while ($data = mysqli_fetch_object($query)) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $data->nis ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->kelas ?></td>
                <td>
                    <a href='ubah_siswa.php?id=<?= $data->id_siswa ?>' id='gb1'>Ubah</a>
                    <a onClick='return confirm("Anda yakin akan menghapus data ini")' href='hapus_siswa.php?id=<?= $data->id_siswa ?>' id='gb2'>Hapus</a>
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