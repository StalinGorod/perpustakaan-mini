<?php

session_start();

$nis = $_SESSION['name'];

if ($_SESSION['login'] == null) {
    header('location:login.php?err=ilegal');
} else {

?>
    <html lang="en">

    <head>
        <title>Perpustakaan Mini</title>
        <style>
            a {
                text-decoration: none;
            }

            #ta {
                background-color: goldenrod;
                padding: 10px;
                color: white;
            }

            #tb {
                background-color: lightseagreen;
                padding: 10px;
                color: white;
            }

            p {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h1 style='text-align: center;'>PERPUSTAKAAN MINI</h1>
        <p> Selamat Datang, <?= $_SESSION['name']; ?> | <a href="logout.php">Logout</a></p>
        <center>
            <?php
            if ($_SESSION['level'] == 'Petugas') {
            ?>
                <!-- PETUGAS -->
                <a href='listusers.php' id='ta'>USERS</a>
                <a href='listbuku.php' id='ta'>BUKU</a>
                <a href="peminjaman.php" id='tb'>PEMINJAMAN</a>
                <a href="listsiswa.php" id='tb'>SISWA</a>
            <?php
            }
            if ($_SESSION['level'] == 'Siswa') {
            ?>
                <!-- SISWA -->
                <a href="data_peminjaman.php?nis=<?= $nis; ?>" id='ta'>DATA PEMINJAMAN</a>
            <?php
            }
            ?>
        </center>

    </body>

    </html>
<?php
}

?>