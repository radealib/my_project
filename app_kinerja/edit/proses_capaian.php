<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM data_bidang_kegiatan WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content"
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Proses Capaian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_data.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Capaian</label>
                        <input type="text" class="form-control" rows="3" placeholder="Capaian" name='capaian' value="<?php echo $view['capaian'];?>">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" rows="3" placeholder="Keterangan" name='keterangan' value="<?php echo $view['keterangan'];?>">
                    </div>
                    <div class="form-group">
                        <label>Bukti</label>
                        <input type="text" class="form-control" rows="3" placeholder="Bukti" name='bukti' value="<?php echo $view['bukti'];?>">
                    </div>
                    

                    </div>
                    
                  </div>
                <button type = "submit" class="btn btn-sm btn-info"> Simpan </button>
                  <!-- input states -->
                
                </form>
              </div>
              <!-- /.card-body -->
            </div>
</div>
</section>