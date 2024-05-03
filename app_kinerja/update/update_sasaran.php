<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
$sasaran = $_GET['sasaran'];
$ind_kinerja = $_GET['ind_kinerja'];
$target = $_GET['target'];
$kesesuaian = $_GET['kesesuaian'];
$tahun = $_GET['tahun'];
$edited = date("Y-m-d H:i:s");
$query = "UPDATE sasaran_kegiatan SET sasaran='$sasaran', ind_kinerja='$ind_kinerja', target='$target', kesesuaian='$kesesuaian', tahun='$tahun', edited=now() WHERE id='$id'";
//echo $query;
//exit;
$query = mysqli_query($koneksi, $query);
header('Location: ../index.php?page=sasaran_kegiatan');
