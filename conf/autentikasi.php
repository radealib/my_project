<?php
session_start();
include('koneksi.php');
$usr = $_POST['username'];
$pwd = $_POST['password'];



$query = mysqli_query($koneksi, "SELECT * FROM tabel_user WHERE username='$usr' AND password='$pwd'");
if (mysqli_num_rows($query) == 1) {
    header('Location:../app_kinerja/index.php?page=data_capaian');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];
} else {
    header('Location:../index.php?error=1');
}
