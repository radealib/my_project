<?php
include('../../conf/koneksi.php');
$id = $_GET['id'];
//$sasaran = $_GET['sasaran'];
$query = mysqli_query ($koneksi, "DELETE FROM pelaksanaan_kegiatan WHERE id='$id'");
header('Location: ../index.php?page=data_pelaksanaan');
?>