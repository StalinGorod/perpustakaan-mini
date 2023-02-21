<?php
require_once("koneksi.php");

if (isset($_POST['simpan'])) {
    //mengambil data dari inputan Form
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    //mengambil gambar dari inputan Form
    $namafile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];

    //bila ukuran file lebih besar dari 0 dan tidak error
    if ($ukuran  > 0 || $error == 0) {
        //pindahkan file gambar dari temporary folder ke folder gambar
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $namafile);
        //pesan bila gambar berhasil terupload
        if ($move) {
            echo "<br>File '$namafile' dengan ukuran $ukuran sudah terupload.";
        } else {
            echo "Terjadi kesalahn saat mengupload file.";
        }
    } else {
        echo "File gagal diupload karena : " . $error;
    }

    $query = mysqli_query($koneksi, "insert into buku values(null,'$judul','$deskripsi','$penulis','$penerbit','$namafile')");
    if ($query) {
        header('location:listbuku.php');
    } else {
        echo "Gagal menyimpan ke database";
    }
}
