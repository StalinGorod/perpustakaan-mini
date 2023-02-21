<?php
require_once("koneksi.php");
session_start();

//1. Mengambil data dari input form login
$username = $_POST['username'];
$password = md5($_POST['password']);

//2.Mencocokkan data daro form login dengan database
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");

//3.Cek data apakah cocok atau tidak
$data_user = mysqli_fetch_object($query);
$data = mysqli_num_rows($query);

if ($data > 0) {
    $_SESSION['login'] = 1;
    $_SESSION['name'] = $data_user->username;
    $_SESSION['level'] = $data_user->level;
    $_SESSION['nis'] = $data_user->nis;
    header('location:index.php');
} else {
    header('location:login.php?err=gagal');
}
