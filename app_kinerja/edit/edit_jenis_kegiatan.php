<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM jenis_kegiatan WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content" <div class="container-fluid">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Jenis Kegiatan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method='get' action='update/update_jenis_kegiatan.php'>
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
                            <label class="active">Sub Bidang Kegiatan <?= $_SESSION['tahun']; ?></label>
                            <?php
                            if ($_SESSION['tahun'] == "") {
                                $query = mysqli_query($koneksi, "SELECT * FROM sub_bidang_kegiatan");
                                $rowcount = mysqli_num_rows($query);
                            } else {
                                $query = mysqli_query($koneksi, "SELECT * FROM sub_bidang_kegiatan WHERE tahun=" . $_SESSION['tahun']);
                                $rowcount = mysqli_num_rows($query);
                            }
                            ?>
                            <select class="form-control" name="sub_bidang_kegiatan_id" required autofocus size="<?= $rowcount; ?>">
                                <?php
                                $no = 0;
                                while ($data = mysqli_fetch_array($query)) {
                                    $no++;
                                ?>
                                    <option value="<?= $data['id']; ?>"><?= $no . ". " . $data['sub_bidang_kegiatan']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kegiatan</label>
                            <textarea type="text" rows="3" class="form-control" name="jenis_kegiatan"><?php echo $view['jenis_kegiatan']; ?></textarea>
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