<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
$bidang_kegiatan = $_GET['bidang_kegiatan'];
// echo $bidang_kegiatan;
$bidang_kegiatan = explode(".",$bidang_kegiatan);
// echo $bidang_kegiatan[0];
// echo $bidang_kegiatan[1]; 
// exit;
$sub_kegiatan = $_GET['sub_kegiatan'];
$item_sub_kegiatan = $_GET['item_sub_kegiatan'];
$pelaksanaan = $_GET['pelaksanaan'];
$tahun = $_GET['tahun'];
$query = mysqli_query($koneksi, "SELECT * FROM data_bidang_kegiatan WHERE id='$bidang_kegiatan[0]'");
$data = mysqli_fetch_array($query);
$query = "INSERT INTO data_bidang_kegiatan (id_bidang_kegiatan,bidang_kegiatan,
bidang_kerja_id,sub_bidang_kerja_id,jenis_kegiatan_id,sub_kegiatan,item_sub_kegiatan,pelaksanaan,tahun,capaian,keterangan,bukti) 
VALUES ('$data[id_bidang_kegiatan]','$data[bidang_kegiatan]','$data[bidang_kerja_id]',
'$data[sub_bidang_kerja_id]','$data[jenis_kegiatan_id]','$sub_kegiatan','$item_sub_kegiatan','$pelaksanaan','$tahun','$capaian','$keterangan','$bukti')";
//$query = mysqli_query ($koneksi, "UPDATE data_sasaran_kegiatan SET id='$id',sasaran='$sasaran' WHERE id='$id'");

// $query = "UPDATE data_bidang_kegiatan SET sub_kegiatan='$sub_kegiatan',
// item_sub_kegiatan='$item_sub_kegiatan',pelaksanaan='$pelaksanaan',tahun='$tahun'
// WHERE id='$bidang_kegiatan[0]'";
// echo $query;
//exit;
$query = mysqli_query ($koneksi, $query);
header('Location: ../index.php?page=data_bidang');
?>