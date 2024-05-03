<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
$sasaran_kegiatan_id = $_GET['sasaran_kegiatan_id'];
$sub_bidang_kegiatan = $_GET['sub_bidang_kegiatan'];
$tahun = $_GET['tahun'];
$bidang_kerja_id = implode(',', $_GET['bidang_kerja_id']);
if (isset($_GET['sub_bidang_kerja_id'])) {
    $sub_bidang_kerja_id = implode(',', $_GET['sub_bidang_kerja_id']);
} else {
    $sub_bidang_kerja = '-';
}
$query = "UPDATE sub_bidang_kegiatan SET sasaran_kegiatan_id='$sasaran_kegiatan_id', sub_bidang_kegiatan='$sub_bidang_kegiatan', tahun='$tahun', bidang_kerja_id='$bidang_kerja_id', sub_bidang_kerja_id='$sub_bidang_kerja_id', edited=now() WHERE id='$id'";
echo $query;
//exit;
$query = mysqli_query($koneksi, $query);
header('Location: ../index.php?page=sub_bidang_kegiatan');
