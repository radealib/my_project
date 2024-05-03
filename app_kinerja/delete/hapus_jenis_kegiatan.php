<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM jenis_kegiatan WHERE id='$id'");
header('Location: ../index.php?page=data_jenis_kegiatan');
