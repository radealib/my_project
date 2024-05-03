<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM sasaran_kegiatan WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content" <div class="container-fluid">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">Edit Data</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form method='get' action='update/update_sasaran.php'>
        <div class="row" hidden>
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Id</label>
              <input type="text" class="form-control" name="id" value="<?php echo $view['id']; ?>" hidden>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
              <label class="active">Sasaran Kegiatan</label>
              <input type="text" class="form-control" name="sasaran" value="<?php echo $view['sasaran']; ?>" autofocus>
            </div>
            <div class="form-group">
              <label>Indikator Kinerja</label>
              <textarea type="text" rows="3" class="form-control" name="ind_kinerja"><?php echo $view['ind_kinerja']; ?></textarea>
            </div>
            <div class="form-group">
              <label>Target</label>
              <input type="number" class="form-control" name="target" value="<?php echo $view['target']; ?>" max="100" min="0">
            </div>
            <div class="form-group">
              <label>Kesesuaian</label>
              <input type="text" class="form-control" name="kesesuaian" value="<?php echo $view['kesesuaian']; ?>">
            </div>
            <div class="form-group">
              <label>Tahun</label>
              <input type="number" class="form-control" name="tahun" value="<?php echo $view['tahun']; ?>" max="2024" min="2023">
            </div>
          </div>
        </div>
        <a href="<?= $_SERVER['HTTP_REFERER']; ?>" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-info"> Simpan </button>
        <!-- input states -->
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  </div>
</section>