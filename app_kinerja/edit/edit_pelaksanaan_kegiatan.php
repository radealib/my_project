<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM pelaksanaan_kegiatan WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content" <div class="container-fluid">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Jenis Kegiatan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method='get' action='update/update_pelaksanaan_kegiatan.php'>
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
                            <label class="active">Jenis Kegiatan <?= $_SESSION['tahun']; ?></label>
                            <?php
                            if ($_SESSION['tahun'] == "") {
                                $query = mysqli_query($koneksi, "SELECT * FROM jenis_kegiatan");
                                $rowcount = mysqli_num_rows($query);
                            } else {
                                $query = mysqli_query($koneksi, "SELECT * FROM jenis_kegiatan WHERE tahun=" . $_SESSION['tahun']);
                                $rowcount = mysqli_num_rows($query);
                            }
                            ?>
                            <select class="form-control" name="jenis_kegiatan_id" required autofocus size="<?= $rowcount; ?>">
                                <?php
                                $no = 0;
                                while ($data = mysqli_fetch_array($query)) {
                                    $no++;
                                ?>
                                    <option value="<?= $data['id']; ?>"><?= $no . ". " . $data['jenis_kegiatan']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Item Kegiatan</label>
                            <textarea type="text" rows="3" class="form-control" name="item_kegiatan"><?php echo $view['item_kegiatan']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label" name="pelaksanaan">Pelaksanaan</label>
                            <select name="pelaksanaan" id="" class="form-control">
                                <option value="Triwulan 1">Triwulan 1</option>
                                <option value="Triwulan 2">Triwulan 2</option>
                                <option value="Triwulan 3">Triwulan 3</option>
                                <option value="Triwulan 4">Triwulan 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="number" class="form-control" name="tahun" value="<?php echo $view['tahun']; ?>" max="2024" min="2023">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label" name="bobot">Bobot</label>
                            <input class="form-control" input type="number" placeholder="Bobot" name="bobot" value="<?php echo $view['bobot']; ?>" max="100" min="0">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="Belum Dilaksanakan">Belum Dilaksanakan</option>
                                <option value="Sedang Dilaksanakan">Sedang Dilaksanakan</option>
                                <option value="Sudah Dilaksanakan">Sudah Dilaksanakan</option>
                                <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                            </select>
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