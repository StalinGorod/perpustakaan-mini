<?php
require_once("koneksi.php");

//mengambil id dari URL
$buku_id = $_GET['id'];

$query = mysqli_query($koneksi, "delete from buku where buku_id='$buku_id'");

if ($query) {
    //mengalihkan ke halaman list_buku.php ketika berhasil terhapus
    header('location:listbuku.php');
} else {
    echo 'data gagal terhapus';
}
