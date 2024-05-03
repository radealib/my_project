<?php
include('../../conf/koneksi.php');
$sasaran = $_GET['sasaran'];
$ind_kinerja = $_GET['ind_kinerja'];
$target = $_GET['target'];
$kesesuaian = $_GET['kesesuaian'];
$tahun = $_GET['tahun'];
$query = mysqli_query($koneksi, "INSERT INTO sasaran_kegiatan (sasaran, ind_kinerja, target, kesesuaian, tahun, created) VALUES ('$sasaran','$ind_kinerja','$target','$kesesuaian', '$tahun', now())");
header('Location: ../index.php?page=sasaran_kegiatan');
