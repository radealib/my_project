<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM sub_bidang_kegiatan WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content" <div class="container-fluid">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Sub Bidang Kegiatan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method='get' action='update/update_sub_bidang_kegiatan.php'>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label" name="sub_bid_kegiatan">Sasaran Kegiatan <?= $_SESSION['tahun']; ?></label>
                                    <?php
                                    if ($_SESSION['tahun'] == "") {
                                        $query = mysqli_query($koneksi, "SELECT * FROM sasaran_kegiatan");
                                        $rowcount = mysqli_num_rows($query);
                                    } else {
                                        $query = mysqli_query($koneksi, "SELECT * FROM sasaran_kegiatan WHERE tahun=" . $_SESSION['tahun']);
                                        $rowcount = mysqli_num_rows($query);
                                    }
                                    ?>
                                    <select class="form-control" name="sasaran_kegiatan_id" required autofocus size="<?= $rowcount; ?>">
                                        <?php
                                        $no = 0;
                                        while ($data = mysqli_fetch_array($query)) {
                                            $no++;
                                        ?>
                                            <option value="<?= $data['id']; ?>"><?= $no . ". " . $data['sasaran']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="">Sub Bidang Kegiatan</label>
                                    <input type="text" class="form-control" name="sub_bidang_kegiatan" value="<?= $view['sub_bidang_kegiatan']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="number" class="form-control" name="tahun" value="<?= $view['tahun']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label" name="bidang_kerja">Bidang Kerja</label>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM data_bidang_kerja");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="form-check" required>
                                            <input class="form-check-input" type="checkbox" name="bidang_kerja_id[]" value="<?= $data['id']; ?>" id="flexCheckDefault">
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
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="sub_bidang_kerja_id[]" value="<?= $data['id']; ?>" id="flexCheckDefault">
                                            <p><?php echo $data['sub_bidang_kerja']; ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <input value="<?= $id; ?>" name="id" hidden>
                <a href="<?= $_SERVER['HTTP_REFERER']; ?>" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary"> Simpan </button>
                <!-- input states -->
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
</section>