<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Bidang Kegiatan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
              Tambah Bidang Kegiatan
            </button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg2">
              Tambah Sub Kegiatan
            </button>
            <br></br>
            <table id="example1" class="table table-sm small table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Jenis Kegiatan</th>
                  <th>Bidang Kegiatan</th>
                  <th>Bidang Kerja</th>
                  <th>Sub Bidang Kerja</th>
                  <th>Sub Kegiatan</th>
                  <th>Item Sub Kegiatan</th>
                  <th>Pelaksanaan</th>
                  <th>Tahun</th>
                  <th>Capaian</th>
                  <th>Keterangan</th>
                  <th>Bukti</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM data_bidang_kegiatan");
                while ($data = mysqli_fetch_array($query)) {
                  $no++;
                ?>
                  <tr>
                    <td align="center" width='2%'><?php echo $no; ?></td>
                    <td><?php echo $data['jenis_kegiatan_id']; ?></td>
                    <td><?php echo $data['bidang_kegiatan']; ?></td>
                    <td><?php echo $data['bidang_kerja_id']; ?></td>
                    <td><?php echo $data['sub_bidang_kerja_id']; ?></td>
                    <td><?php echo $data['sub_kegiatan']; ?></td>
                    <td><?php echo $data['item_sub_kegiatan']; ?></td>
                    <td><?php echo $data['pelaksanaan']; ?></td>
                    <td><?php echo $data['tahun']; ?></td>
                    <td><?php echo $data['capaian']; ?></td>
                    <td><?php echo $data['keterangan']; ?></td>
                    <td><?php echo $data['bukti']; ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $data['id']; ?>)" class="btn btn-sm btn-danger"> Hapus </a>
                      <a href="index.php?page=edit-data&& id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success"> Edit </a>
                      <a href="index.php?page=proses_capaian&& id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success"> Proses </a>
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
        <h4 class="modal-title">Tambah Bidang Kegiatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="tambah/tambah_bidang.php">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" name="nomor">Nomor</label>
            <input type="text" class="form-control" placeholder="Nomor" name="id" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="bidang_kegiatan">Jenis Kegiatan</label>
            <select class="form-control" name="jenis_kegiatan" rows="3" required>
              <option selected>Choose...</option>
              <?php
              $query = mysqli_query($koneksi, "SELECT * FROM t_jenis_kegiatan");
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <option value="<?php echo $data['id'] . ". " . $data['jenis_kegiatan']; ?>"><?php echo $data['id'] . ". " . $data['jenis_kegiatan']; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="bidang">Bidang Kegiatan</label>
            <textarea class="form-control" input type="text" placeholder="Bidang Kegiatan" name="bidang_kegiatan" rows="3" required></textarea>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" name="bidang">Bidang Kerja</label>

                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM data_bidang_kerja");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <div class="form-check small">
                    <input class="form-check-input" type="checkbox" name="bidang_kerja[]" value="<?php echo $data['bidang']; ?>" id="flexCheckDefault">
                    <p><?php echo $data['bidang']; ?></p>
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
                    <input class="form-check-input" type="checkbox" name="sub_bidang_kerja[]" value="<?php echo $data['sub_bidang_kerja']; ?>" id="flexCheckDefault">
                    <p><?php echo $data['sub_bidang_kerja']; ?></p>
                  </div>
                <?php  } ?>

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
<div class="modal fade" id="modal-lg2">
  <div class="modal-dialog modal-lg2">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Sub Kegiatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="tambah/tambah_sub_kegiatan.php">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" name="nomor">Nomor</label>
            <input type="text" class="form-control" placeholder="Nomor" name="id" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="bidang_kegiatan">Bidang Kegiatan</label>
            <select class="form-control" name="bidang_kegiatan" rows="3" required>
              <option selected>Choose...</option>
              <?php
              $query = mysqli_query($koneksi, "SELECT * FROM data_bidang_kegiatan");
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <option value="<?php echo $data['id'] . ". " . $data['bidang_kegiatan']; ?>">
                <?php echo $data['bidang_kegiatan']."->".$data['bidang_kerja_id']."->".$data['sub_bidang_kerja_id']; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="sub_kegiatan">Sub Kegiatan</label>
            <textarea class="form-control" input type="text" placeholder="Sub Kegiatan" name="sub_kegiatan" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="item_sub_kegiatan">Item Sub Kegiatan</label>
            <textarea class="form-control" input type="text" placeholder="Item Sub Kegiatan" name="item_sub_kegiatan" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="pelaksanaan">Pelaksanaan</label>
            <select class="form-control" input type="text" placeholder="pelaksanaan" name="pelaksanaan" rows="3" required>
              <option value="Triwulan 1">Triwulan 1</option>
              <option value="Triwulan 2">Triwulan 2</option>
              <option value="Triwulan 3">Triwulan 3</option>
              <option value="Triwulan 4">Triwulan 4</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="tahun">Tahun</label>
            <input class="form-control" input type="number" placeholder="tahun" name="tahun" rows="3" required>
      
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
        window.location = ("delete/hapus_sasaran.php?id=" + data_id);
      }
    });
  }
</script>