<?php
require_once("koneksi.php");

if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $query = mysqli_query($koneksi, "insert into siswa values(null,'$nis','$nama','$kelas')");
    if ($query) {
        //query menambahkan data user
        $query2 = mysqli_query($koneksi, "insert into users values(null,'$nis',md5('$nis'),'Siswa','$nis')");
        header('location:listsiswa.php');
    } else {
        echo "Gagal menyimpan ke database";
    }
}
