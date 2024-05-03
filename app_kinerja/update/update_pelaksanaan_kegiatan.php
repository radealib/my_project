<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
$jenis_kegiatan_id = $_GET['jenis_kegiatan_id'];
$item_kegiatan = $_GET['item_kegiatan'];
$item_kegiatan = str_replace(",", "<br>", $item_kegiatan);
$pelaksanaan = $_GET['pelaksanaan'];
$tahun = $_GET['tahun'];
$bobot = $_GET['bobot'];
$status = $_GET['status'];
$edited = date("Y-m-d H:i:s");
$query = "UPDATE pelaksanaan_kegiatan SET jenis_kegiatan_id='$jenis_kegiatan_id', item_kegiatan='$item_kegiatan', pelaksanaan='$pelaksanaan',tahun='$tahun', bobot='$bobot', status='$status', edited=now() WHERE id='$id'";
//echo $query;
//exit;
$query = mysqli_query($koneksi, $query);
header('Location: ../index.php?page=data_pelaksanaan');
