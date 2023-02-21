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
    <h1 style="text-align:center;">DAFTAR LIST USERS</h1>
    <center><a href="tambah_user.php" id='gb3'>TAMBAH</a></center>
    <table border="1" cellpadding="3" cellspacing="0" width="550" align="center">
        <tr style="background-color: darkgrey;">
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i = 1;
        require_once('koneksi.php');

        $query = mysqli_query($koneksi, "select * from users");

        while ($data = mysqli_fetch_object($query)) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $data->username ?></td>
                <td><?= $data->password ?></td>
                <td><?= $data->level ?></td>
                <td>
                    <a href='ubah_user.php?id=<?= $data->user_id ?>' id='gb1'>Ubah</a>
                    <a onClick='return confirm("Anda yakin akan menghapus data ini")' href='hapus_user.php?id=<?= $data->user_id ?>' id='gb2'>Hapus</a>
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