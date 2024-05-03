<?php
$id = $_GET['id'];
$query_1 = mysqli_query($koneksi, "SELECT * FROM jenis_kegiatan WHERE id='$id'");
$view = mysqli_fetch_array($query_1);
$query_2 = mysqli_query($koneksi, "SELECT * FROM pelaksanaan_kegiatan WHERE jenis_kegiatan_id='$id'");
?>
<section class="content" <div class="container-fluid">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Data Capaian</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <label class="card-title mb-3"><?= $view['jenis_kegiatan']; ?></label>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th> No.</th>
                            <th> Item Kegiatan</th>
                            <th> Pelaksanaan</th>
                            <th> Tahun</th>
                            <th> Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        while ($data = mysqli_fetch_array($query_2)) {
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['item_kegiatan']; ?></td>
                                <td><?= $data['pelaksanaan']; ?></td>
                                <td><?= $data['tahun']; ?></td>
                                <td><?= $data['status']; ?></td>
                            </tr>
                        <?php
                        };
                        ?>
                    </tbody>
                </table>
            </div>
            <form method='get' action='update/update_data_capaian.php'>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea type="text" class="form-control" rows="3" placeholder="" name='keterangan'><?php echo $view['keterangan']; ?></textarea>
                        </div>
                    </div>
                </div>
                <a href="<?= $_SERVER['HTTP_REFERER']; ?>" class="btn btn-secondary">Batal</a>
                <input name="id" hidden value="<?php echo $id ?>">
                <button type="submit" class="btn btn btn-info"> Simpan </button>
                <!-- input states -->
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
</section>