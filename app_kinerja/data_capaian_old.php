<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Capaian Kegiatan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">


            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Kegiatan</th>
                  <th>Item Kegiatan</th>
                  <th>Pelaksanaan</th>
                  <th>Tahun</th>
                  <th>Bobot</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>Bukti</th>
                  <!-- <th>Aksi</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;

                $query = mysqli_query($koneksi, "SELECT * FROM pelaksanaan_kegiatan");
                while ($data = mysqli_fetch_array($query)) {
                  $pel_id = $data['id'];
                  $no++;
                ?>
                  <tr>
                    <td width='2%'><?php echo $no; ?></td>
                    <td>
                      <?php
                      $id = $data['jen_kegiatan_id'];
                      $query1 = mysqli_query($koneksi, "SELECT * FROM jenis_kegiatan WHERE id='$id'");
                      while ($data_1 = mysqli_fetch_array($query1)) {
                        echo $data_1['jenis_kegiatan'];
                      }
                      ?>
                    </td>
                    <td><?php echo $data['item_kegiatan']; ?></td>
                    <td><?php echo $data['pelaksanaan']; ?></td>
                    <td><?php echo $data['tahun']; ?></td>
                    <td><?php echo $data['bobot'] . '%'; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['keterangan']; ?></td>
                    <?php
                    if (empty($data['bukti'])) {
                      echo "<td></td>";
                    } else {
                      echo "<td><a href=" . $data['bukti'] . ">File</a></td>";
                    }
                    ?>

                    <!-- <td>

                      <a href="index.php?page=update_capaian&& id=<?php //echo $data['id']; 
                                                                  ?>" class="btn btn-sm btn-success"> Update </a>
                      <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-lg">
                        Upload
                      </button>
                    </td> -->
                    <!-- href="delete/hapus_sasaran.php?id=<?php echo $data['id']; ?>" -->
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <!-- <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    
                  </tr> -->
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form method="POST" action="upload_file.php" enctype="multipart/form-data">
        <div class="modal-body">

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="bukti">Unggah File Bukti Capaian</label>
            <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" required>
            <input type="text" name="id" class="form-control" id="" value="<?php echo $pel_id; ?>" hidden>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" name="submit" class="btn-primary">Simpan</button>
        </div>
    </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.content -->
<script>
  function hapus_data(data_id) {
    //alert('ok');
    //window.location=("delete/hapus_sasaran.php?id="+data_id);
    Swal.fire({
      title: "Apakah Data akan Dihapus?",
      //showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: "Hapus Data",
      confirmButtonColor: 'red'
      //denyButtonText: `Don't save`
    }).then((result) => {
      /*  Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        window.location = ("delete/hapus_data_pelaksanaan.php?id=" + data_id);
      }
    });
  }
</script>