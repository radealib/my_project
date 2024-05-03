<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
$keterangan = $_GET['keterangan'];
$query = mysqli_query($koneksi, "UPDATE jenis_kegiatan SET keterangan='$keterangan', edited=now() WHERE id='$id'");
header('Location: ../index.php?page=data_jenis_kegiatan');
