<?php
include('../../conf/koneksi.php');
$sub_bidang_kegiatan = $_GET['sub_bidang_kegiatan'];
$tahun = $_GET['tahun'];
$sasaran_kegiatan_id = $_GET['sasaran_kegiatan_id'];
$bidang_kerja_id = implode(',', $_GET['bidang_kerja_id']);
if (isset($_GET['sub_bidang_kerja_id'])) {
    $sub_bidang_kerja_id = implode(',', $_GET['sub_bidang_kerja_id']);
} else {
    $sub_bidang_kerja = '-';
}
$query = mysqli_query($koneksi, "INSERT INTO sub_bidang_kegiatan (sub_bidang_kegiatan, tahun, sasaran_kegiatan_id, bidang_kerja_id, sub_bidang_kerja_id, created) VALUES ('$sub_bidang_kegiatan', '$tahun', '$sasaran_kegiatan_id', '$bidang_kerja_id', '$sub_bidang_kerja_id', now())");
header('Location: ../index.php?page=sub_bidang_kegiatan');
