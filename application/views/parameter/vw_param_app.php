<div class="col-md-12">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Parameter Jenis Aplikasi</h6>

    </div>
    <div class="card-body">
    <?= $this->session->flashdata('message') ?>
        <form action="" method="POST">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Parameter Baru</label>
                <div class="col-sm-10">
                    <input type="namajenisaplikasi" name="namajenisaplikasi" style="padding: 5px 330px;"
                        value="<?= set_value('namajenisaplikasi'); ?>" id="namajenisaplikasi" placeholder="Masukkan Data">
                    <?= form_error('namajenisaplikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                    <button type="submit" name="tambah" style="padding: 5px 20px;" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </form>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="table-warning">
                        <th width="5px">No</th>
                        <th>Jenis Aplikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i =1; ?>
                    <?php foreach ($app as $us) : ?>
                    <tr>
                        <td><?= $i; ?>.</td>
                        <td><?= $us['namajenisaplikasi']; ?></td>
                        <td>
                            <a href="<?= base_url('Parameter/hapusapp/'). $us['id_jenisaplikasi']; ?> "
                                class="badge badge-danger"
                                onclick="return confirm('Apakah kamu yakin untuk menghapus data ini?');"
                                    class="ik ik-trash-2 text-red">Hapus</a>
                        </td>
                    </tr>

                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <div class="card-block">

            </div>
        </div>
    </div>
</div>
</div>
</div>