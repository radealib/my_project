<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Sasaran Kegiatan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
              <ion-icon name="add-circle"></ion-icon> Tambah Sasaran Kegiatan
            </button>
            <br></br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Sasaran Kegiatan</th>
                  <th>Indikator Kinerja</th>
                  <th>Target</th>
                  <th>Kesesuaian</th>
                  <th>Tahun</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM sasaran_kegiatan");
                while ($data = mysqli_fetch_array($query)) {
                  $no++;
                ?>
                  <tr>
                    <td width='2%'><?php echo $no; ?></td>
                    <td><?php echo $data['sasaran']; ?></td>
                    <td><?php echo $data['ind_kinerja']; ?></td>
                    <td><?php echo $data['target'] . '%'; ?></td>
                    <td><?php echo $data['kesesuaian']; ?></td>
                    <td><?php echo $data['tahun']; ?></td>
                    <td>
                      <!-- <a href="index.php?page=data_kegiatan" class="btn btn-sm btn-success"> Edit </a> -->
                      <a href="index.php?page=edit_sasaran&& id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success mb-1"><ion-icon name="create"></ion-icon>Edit</a>
                      <a onclick="hapus_data(<?php echo $data['id']; ?>)" class="btn btn-sm btn-danger"><ion-icon name="close-circle"></ion-icon> Hapus</a>
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
        <h4 class="modal-title">Tambah Sasaran Kegiatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="tambah/tambah_sasaran_kegiatan.php">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="sasaran">Sasaran Kegiatan</label>
            <textarea class="form-control" input type="text" placeholder="Sasaran Kegiatan" name="sasaran" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" name="ind_kinerja">Indikator Kinerja</label>
            <textarea class="form-control" input type="text" placeholder="Indikator Kinerja" name="ind_kinerja" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" name="target">Target</label>
            <input type="number" class="form-control" placeholder="Target" name="target" required max="100">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" name="target">Kesesuaian</label>
            <select class="form-control" name="kesesuaian" id="">
              <option value="Renstra">Renstra</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" name="tahun">Tahun</label>
            <select class="form-control" name="tahun" id="">
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