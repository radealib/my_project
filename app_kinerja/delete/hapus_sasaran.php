<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
//$sasaran = $_GET['sasaran'];
$query = mysqli_query($koneksi, "DELETE FROM sasaran_kegiatan WHERE id='$id'");
header('Location: ../index.php?page=sasaran_kegiatan');
