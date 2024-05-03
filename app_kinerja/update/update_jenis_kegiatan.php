<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
$sub_bidang_kegiatan_id = $_GET['sub_bidang_kegiatan_id'];
$jenis_kegiatan = $_GET['jenis_kegiatan'];
$tahun = $_GET['tahun'];
$edited = date("Y-m-d H:i:s");
$query = "UPDATE jenis_kegiatan SET sub_bidang_kegiatan_id='$sub_bidang_kegiatan_id', jenis_kegiatan='$jenis_kegiatan', tahun='$tahun', edited=now() WHERE id='$id'";
//echo $query;
//exit;
$query = mysqli_query($koneksi, $query);
header('Location: ../index.php?page=data_jenis_kegiatan');
