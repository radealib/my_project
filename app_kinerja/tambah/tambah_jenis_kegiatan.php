<?php
include('../../conf/koneksi.php');
$jenis_kegiatan = $_GET['jenis_kegiatan'];
$sub_bidang_kegiatan_id = $_GET['sub_bidang_kegiatan_id'];
$tahun = $_GET['tahun'];
$query = mysqli_query($koneksi, "INSERT INTO jenis_kegiatan (jenis_kegiatan, sub_bidang_kegiatan_id, tahun, keterangan, created) VALUES ('$jenis_kegiatan', '$sub_bidang_kegiatan_id', '$tahun', 'Belum Terlaksana', now())");
header('Location: ../index.php?page=data_jenis_kegiatan');
