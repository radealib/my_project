
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Indikator Kinerja Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
              </button> -->
                <!-- <br></br> -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Indikator Kinerja Kegiatan</th>
                    <th>Satuan</th>
                    <th>Kesesuaian</th>
                    <!-- <th>Action</th> -->
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM data_indikator_kinerja");
                    while($data = mysqli_fetch_array($query)){
                      $no++;
                    ?>
                  <tr>
                    <td width='2%'><?php echo $no;?></td>
                    <td><?php echo $data['indikator'];?></td>
                    <td><?php echo $data['satuan_id'];?></td>
                    <td><?php echo $data['kesuaian'];?></td>
                    <!-- <td>
                      <a onclick="hapus_data(<?php echo $data['id']; ?>)" class="btn btn-sm btn-danger"> Hapus </a>
                      <a href="index.php?page=edit-data&& id=<?php echo $data['id'];?>" class="btn btn-sm btn-success"> Edit </a>
                  
                    </td> -->
                    <!-- href="delete/hapus_sasaran.php?id=<?php echo $data['id']; ?>" -->
                  </tr>
                  <?php }?>                  
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
              <h4 class="modal-title">Tambah Data Kegiatan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="tambah/tambah_indikator.php"> 
            <div class="modal-body">
            <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label" name="nomor">Nomor</label>
                  <input type="text" class="form-control" placeholder = "Nomor" name="id" required>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label" name="sasaran">Indikator Kinerja Kegiatan</label>
                  <textarea class="form-control" input type="text" placeholder="Indikator Kinerja" name="indikator" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label" name="sasaran">Satuan</label>
                  <textarea class="form-control" input type="text" placeholder="Satuan" name="satuan_id" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label" name="sasaran">Kesesuaian</label>
                  <textarea class="form-control" input type="text" placeholder="Kesesuaian" name="kesesuaian" rows="3" required></textarea>
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
      function hapus_data(data_id){
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
            window.location=("delete/hapus_sasaran.php?id="+data_id);
          } 
        });
    }
    </script>