<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
$bidang_kegiatan = $_GET['bidang_kegiatan'];
$bidang_kerja = implode('<br>', $_GET['bidang_kerja']);

//$bidang_kerja = $_GET['bidang_kerja'];
if (isset ($_GET['sub_bidang_kerja'])){
	$sub_bidang_kerja = implode('<br>', $_GET['sub_bidang_kerja']);
	//$sub_bidang_kerja = $_GET['sub_bidang_kerja'];
} else{
	$sub_bidang_kerja = '-';
}
$jenis_kegiatan = $_GET['jenis_kegiatan'];
$query = "INSERT INTO data_bidang_kegiatan (id_bidang_kegiatan,bidang_kegiatan,bidang_kerja_id,sub_bidang_kerja_id,jenis_kegiatan_id) VALUES ('$id','$bidang_kegiatan','" . $bidang_kerja . "','$sub_bidang_kerja','$jenis_kegiatan')";
echo $query;
//exit;
$query = mysqli_query ($koneksi, $query);
header('Location: ../index.php?page=data_bidang');
?>