<?php
require_once("koneksi.php");

$nis = $_POST['nis'];
$nama = $_POST['nama'];
header("location:peminjaman.php?nis=$nis");
