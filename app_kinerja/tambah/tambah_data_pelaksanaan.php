<?php
include('../../conf/koneksi.php');
$jenis_kegiatan_id = $_GET['jenis_kegiatan_id'];
$item_kegiatan = $_GET['item_kegiatan'];
$item_kegiatan = str_replace(",", "<br>", $item_kegiatan);
$pelaksanaan = $_GET['pelaksanaan'];
$bobot = $_GET['bobot'];
$tahun = $_GET['tahun'];
$query = mysqli_query($koneksi, "INSERT INTO pelaksanaan_kegiatan (jenis_kegiatan_id,item_kegiatan,pelaksanaan,bobot,status,tahun,created) VALUES ('$jenis_kegiatan_id','$item_kegiatan','$pelaksanaan','$bobot','Belum Terlaksana','$tahun',now())");
header('Location: ../index.php?page=data_pelaksanaan');
