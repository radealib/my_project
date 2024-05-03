<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Jenis Kegiatan <?= $_SESSION['tahun']; ?></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
              Tambah Jenis Kegiatan
            </button>
            <br></br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Sub Bidang Kegiatan</th>
                  <th>Jenis Kegiatan</th>
                  <th>Tahun</th>
                  <th>Keterangan</th>
                  <th>Bukti</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM jenis_kegiatan WHERE tahun=" . $_SESSION['tahun']);
                while ($data = mysqli_fetch_array($query)) {
                  $no++;
                ?>
                  <tr>
                    <td width='2%'><?= $no; ?></td>
                    <td>
                      <?php
                      $id = $data['sub_bidang_kegiatan_id'];
                      $query1 = mysqli_query($koneksi, "SELECT * FROM sub_bidang_kegiatan WHERE id='$id'");
                      while ($data_1 = mysqli_fetch_array($query1)) {
                        echo $data_1['sub_bidang_kegiatan'];
                      }
                      ?>
                    </td>
                    <td><?= $data['jenis_kegiatan']; ?></td>
                    <td><?= $data['tahun']; ?></td>
                    <td><?= $data['keterangan']; ?></td>
                    <?php
                    if (empty($data['bukti'])) {
                      echo "<td>-</td>";
                    } else {
                      echo "<td><a href=" . $data['path_file'] . " target='_blank'>" . $data['bukti'] . "</a></td>";
                    }
                    ?> <td>
                      <a href="index.php?page=edit_jenis_kegiatan&& id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success mb-1"> Edit </a>
                      <a href="index.php?page=update_capaian&& id=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning mb-1"> Update Capaian</a>
                      <button type="button" class="btn btn-sm btn-info mb-1" data-toggle="modal" data-target="#modal-lg2" data-id="<?php echo $data['id']; ?>">
                        Upload Bukti
                      </button>
                      <a onclick="hapus_data(<?php echo $data['id']; ?>)" class="btn btn-sm btn-danger mb-1"> Hapus </a>

                    </td>

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
      <div class="modal-header">
        <h4 class="modal-title">Tambah Jenis Kegiatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="tambah/tambah_jenis_kegiatan.php">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="sub_bid_kegiatan">Sub Bidang Kegiatan <?= $_SESSION['tahun']; ?></label>
            <select class="form-control" name="sub_bidang_kegiatan_id" required>
              <option selected>Pilih Sub Bidang Kegiatan...</option>
              <?php
              if ($_SESSION['tahun'] == "") {
                $query = mysqli_query($koneksi, "SELECT * FROM sub_bidang_kegiatan");
                while ($data = mysqli_fetch_array($query)) {
              ?>
                  <option value="<?= $data['id']; ?>"><?= $data['tahun'] . "->" . $data['sub_bidang_kegiatan']; ?></option>
                <?php
                }
              } else {
                $query = mysqli_query($koneksi, "SELECT * FROM sub_bidang_kegiatan WHERE tahun=" . $_SESSION['tahun']);
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <option value="<?= $data['id']; ?>"><?= $data['sub_bidang_kegiatan']; ?></option>
              <?php
                }
              } ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="jenis_kegiatan">Jenis Kegiatan</label>
            <textarea class="form-control" input type="text" placeholder="Jenis Kegiatan" name="jenis_kegiatan" rows="3" required></textarea>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="tahun">Tahun</label>
            <select name="tahun" id="" class="form-control">
              <option value="2023">2023</option>
              <option value="2024">2024</option>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-lg2">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" action="upload_file.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="bukti">Unggah File Bukti Capaian</label>
            <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="">Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
            <input type="text" name="id_bukti" class="modal-id" hidden>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
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
        window.location = ("delete/hapus_jenis_kegiatan.php?id=" + data_id);
      }
    });
  }
</script>