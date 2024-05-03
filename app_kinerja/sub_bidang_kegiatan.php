<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Sub Bidang Kegiatan <?= $_SESSION['tahun']; ?></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
              Tambah Sub Bidang Kegiatan
            </button>
            <br></br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Sasaran Kegiatan</th>
                  <th>Bidang Kegiatan</th>
                  <th>Sub Bidang Kegiatan</th>
                  <th>Tahun Kinerja</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                if ($_SESSION['tahun'] == "") {
                  $query = mysqli_query($koneksi, "SELECT * FROM sub_bidang_kegiatan");
                } else {
                  $query = mysqli_query($koneksi, "SELECT * FROM sub_bidang_kegiatan WHERE tahun=" . $_SESSION['tahun']);
                }
                while ($data = mysqli_fetch_array($query)) {
                  $no++;
                ?>
                  <tr>
                    <td width='2%'><?php echo $no; ?></td>
                    <td>
                      <?php
                      $id = $data['sasaran_kegiatan_id'];
                      $query1 = mysqli_query($koneksi, "SELECT * FROM sasaran_kegiatan WHERE id='$id'");
                      while ($data_1 = mysqli_fetch_array($query1)) {
                        echo $data_1['sasaran'];
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      $bidang_kerja_id = $data['bidang_kerja_id'];
                      $bidang_kerja_id = explode(',', $bidang_kerja_id);
                      foreach ($bidang_kerja_id as $key => $value) {
                        $query_1 = mysqli_query($koneksi, "SELECT * FROM data_bidang_kerja WHERE id='$value'");
                        $data_1 = mysqli_fetch_array($query_1);
                        if ($data_1) {
                          echo '<div class="">' . $data_1['bidang_kerja'] . '</div>';
                        } else {
                          echo "";
                        }
                      }
                      if (!empty($data['sub_bidang_kerja_id'])) {
                        echo "<hr>";
                      } else {
                      }
                      $sub_bidang_kerja_id = $data['sub_bidang_kerja_id'];
                      $sub_bidang_kerja_id = explode(',', $sub_bidang_kerja_id);
                      foreach ($sub_bidang_kerja_id as $key => $value) {
                        $query_2 = mysqli_query($koneksi, "SELECT * FROM data_sub_bidang_kerja WHERE id='$value'");
                        $data_2 = mysqli_fetch_array($query_2);
                        //$sub_bidang_kerja_id = mysqli_query($koneksi, "SELECT * FROM data_sub_bidang_kerja WHERE id='$id_2'");
                        //$data_2 = mysqli_fetch_array($query_2);
                        if ($data_2) {
                          echo "<div class='small font-italic'>Sub Bidang " . $data_2['sub_bidang_kerja'] . "</div>";
                        } else {
                          echo "";
                        }
                      }
                      ?>
                    </td>
                    <td><?php echo $data['sub_bidang_kegiatan']; ?></td>
                    <td><?php echo $data['tahun']; ?></td>
                    <td>
                      <a href="index.php?page=edit_sub_bidang_kegiatan&& id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success mb-1"><ion-icon name="create"></ion-icon> Edit</a>
                      <a onclick="hapus_data(<?php echo $data['id']; ?>)" class="btn btn-sm btn-danger"><ion-icon name="close-circle"></ion-icon> Hapus </a>
                    </td>
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
      <div class="modal-header">
        <h4 class="modal-title">Tambah Sub Bidang Kegiatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="tambah/tambah_sub_bid_kegiatan.php">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="sasaran">Sasaran Kegiatan</label>
            <select class="form-control" name="sasaran_kegiatan_id" required>
              <option selected>Pilih Sasaran Kegiatan...</option>
              <?php
              if ($_SESSION['tahun'] == "") {
                $query = mysqli_query($koneksi, "SELECT * FROM sasaran_kegiatan");
                while ($data = mysqli_fetch_array($query)) {
              ?>
                  <option value="<?= $data['id']; ?>"><?= $data['tahun'] . "->" . $data['sasaran']; ?></option>
                <?php
                }
              } else {
                $query = mysqli_query($koneksi, "SELECT * FROM sasaran_kegiatan WHERE tahun=" . $_SESSION['tahun']);
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <option value="<?= $data['id']; ?>"><?= $data['sasaran']; ?></option>
              <?php
                }
              } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="sub_bid_kegiatan">Sub Bidang Kegiatan</label>
            <textarea class="form-control" input type="text" placeholder="" name="sub_bidang_kegiatan" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="tahun">Tahun</label>
            <select name="tahun" id="" class="form-control">
              <option selected>----</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
            </select>
          </div>
          <!-- checkbox bidang dan sub bidang kerja -->
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" name="bidang_kerja">Bidang Kerja</label>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM data_bidang_kerja");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <div class="form-check small">
                    <input class="form-check-input" type="checkbox" name="bidang_kerja_id[]" value="<?php echo $data['id']; ?>" id="flexCheckDefault">
                    <p><?php echo $data['bidang_kerja']; ?></p>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" name="bidang">Sub Bidang Kerja</label>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM data_sub_bidang_kerja");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <div class="form-check small">
                    <input class="form-check-input" type="checkbox" name="sub_bidang_kerja_id[]" value="<?php echo $data['id']; ?>" id="flexCheckDefault">
                    <p><?php echo $data['sub_bidang_kerja']; ?></p>
                  </div>
                <?php } ?>
              </div>
            </div>
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
        window.location = ("delete/hapus_sub_bidang_kegiatan.php?id=" + data_id);
      }
    });
  }
</script>