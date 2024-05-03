<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!$_SESSION['nama']) {
  header('Location: ../index.php?session=expired');
}
include('header.php'); ?>
<?php include('../conf/koneksi.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <?php include('preloader.php'); ?>

    <!-- Navbar -->
    <?php include('navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include('logo.php'); ?>

      <!-- Sidebar -->
      <?php include('sidebar.php'); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php include('content_header.php'); ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dashboard') {
          include('dashboard.php');
        } elseif ($_GET['page'] == 'sasaran_kegiatan') {                  //sasaran_kegiatan = sasaran_kegiatan_tes.php
          include('sasaran_kegiatan_tes.php');
        } elseif ($_GET['page'] == 'edit_sasaran') {                      //edit_sasaran = edit/edit_sasaran.php
          include('edit/edit_sasaran.php');
        } elseif ($_GET['page'] == 'sub_bidang_kegiatan') {               //sub_bidang_kegiatan = sub_bidang_kegiatan.php
          include('sub_bidang_kegiatan.php');
        } elseif ($_GET['page'] == 'data_jenis_kegiatan') {               //data_jenis_kegiatan = jenis_kegiatan.php
          include('jenis_kegiatan.php');
        } elseif ($_GET['page'] == 'edit_jenis_kegiatan') {               //edit_jenis_kegiatan = edit/edit_jenis_kegiatan.php
          include('edit/edit_jenis_kegiatan.php');
        } elseif ($_GET['page'] == 'data_bidang') {                       //data_bidang = bidang_kegiatan.php
          include('bidang_kegiatan.php');
        } elseif ($_GET['page'] == 'data_capaian') {                      //data_capaian = data_capaian.php
          include('data_capaian.php');
        } elseif ($_GET['page'] == 'proses_capaian') {                    //proses_capaian = edit/proses_capaian.php
          include('edit/proses_capaian.php');
        } elseif ($_GET['page'] == 'data_kegiatan') {                     //data_kegiatan = edit/edit_sasaran.php
          include('edit/edit_sasaran.php');
        } elseif ($_GET['page'] == 'data_pelaksanaan') {                  //data_pelaksanaan = pelaksanaan.php
          include('pelaksanaan.php');
        } elseif ($_GET['page'] == 'edit_pelaksanaan_kegiatan') {         //edit_pelaksanaan_kegiatan = edit/edit_pelaksanaan_kegiatan.php
          include('edit/edit_pelaksanaan_kegiatan.php');
        } elseif ($_GET['page'] == 'update_capaian') {                    //update_capaian = edit/edit_capaian.php
          include('edit/edit_capaian.php');
        } elseif ($_GET['page'] == 'edit_sub_bidang_kegiatan') {          //edit_sub_bidang_kegiatan = edit/edit_sub_bidang_kegiatan.php
          include('edit/edit_sub_bidang_kegiatan.php');
        }
      } ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


</body>

</html>