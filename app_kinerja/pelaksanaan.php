<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pelaksanaan Kegiatan <?= $_SESSION['tahun']; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Tambah Data Pelaksanaan Kegiatan
                        </button>
                        <br></br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Item Kegiatan</th>
                                    <th>Pelaksanaan</th>
                                    <th>Tahun</th>
                                    <th>Bobot</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $query = mysqli_query($koneksi, "SELECT * FROM pelaksanaan_kegiatan WHERE tahun=" . $_SESSION['tahun']);
                                while ($data = mysqli_fetch_array($query)) {
                                    $id_bukti = $data['id'];
                                    $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td>
                                            <?php
                                            $id = $data['jenis_kegiatan_id'];
                                            $query1 = mysqli_query($koneksi, "SELECT * FROM jenis_kegiatan WHERE id='$id'");
                                            while ($data_1 = mysqli_fetch_array($query1)) {
                                                echo $data_1['jenis_kegiatan'];
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if (!empty($data['item_kegiatan'])) {
                                                echo $data['item_kegiatan'];
                                            } else {
                                                echo "-";
                                            }
                                            ?>
                                        </td>
                                        <td><?= $data['pelaksanaan']; ?></td>
                                        <td><?= $data['tahun']; ?></td>
                                        <td><?= $data['bobot'] . '%'; ?></td>
                                        <td><?= $data['status']; ?></td>
                                        <td>
                                            <a href="index.php?page=edit_pelaksanaan_kegiatan&& id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success mb-1"> Edit </a>
                                            <a onclick="hapus_data(<?php echo $data['id']; ?>)" class="btn btn-sm btn-danger mb-1">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
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
                <h4 class="modal-title">Tambah Data Pelaksanaan Kegiatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="tambah/tambah_data_pelaksanaan.php">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" name="jenis_kegiatan">Jenis Kegiatan <?= $_SESSION['tahun']; ?></label>
                        <select class="form-control" name="jenis_kegiatan_id" rows="3" required>
                            <option selected>Choose...</option>
                            <?php
                            if ($_SESSION['tahun'] == "") {
                                $query = mysqli_query($koneksi, "SELECT * FROM jenis_kegiatan");
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <option value="<?= $data['id']; ?>"><?= $data['tahun'] . "->" . $data['jenis_kegiatan']; ?></option>
                                <?php
                                }
                            } else {
                                $query = mysqli_query($koneksi, "SELECT * FROM jenis_kegiatan WHERE tahun=" . $_SESSION['tahun']);
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?= $data['id']; ?>"><?= $data['jenis_kegiatan']; ?></option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" name="item_kegiatan">Item Kegiatan</label>
                        <textarea class="form-control" input type="text" placeholder="Setiap kegiatan dipisahkan dengan tanda baca koma (,)" name="item_kegiatan" rows="3"></textarea></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" name="pelaksanaan">Pelaksanaan</label>
                        <select name="pelaksanaan" id="" class="form-control">
                            <option value="Triwulan 1">Triwulan 1</option>
                            <option value="Triwulan 2">Triwulan 2</option>
                            <option value="Triwulan 3">Triwulan 3</option>
                            <option value="Triwulan 4">Triwulan 4</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" name="tahun">Tahun</label>
                        <select name="tahun" id="" class="form-control">
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" name="bobot">Bobot</label>
                        <input class="form-control" input type="number" placeholder="Bobot" name="bobot">
                    </div>

                    <div class="input-group mb-3">
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
                window.location = ("delete/hapus_data_pelaksanaan.php?id=" + data_id);
            }
        });
    }
</script>