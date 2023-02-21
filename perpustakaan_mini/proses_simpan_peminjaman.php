<?php
require_once("koneksi.php");

//pengambilan data
$no_peminjaman = $_POST['idd'] . "-" . date('Y-m-d');
$siswa = $_POST['idd'];
$buku = $_POST['buku'];
$tgl_pinjam = date('Y-m-d');
$tgl_kembali = $_POST['tgl_kembali'];

$query = mysqli_query($koneksi, "insert into peminjaman values ('$no_peminjaman','$buku','$siswa','$tgl_pinjam','$tgl_kembali')");

if ($query) {
    header("location:peminjaman.php");
}
