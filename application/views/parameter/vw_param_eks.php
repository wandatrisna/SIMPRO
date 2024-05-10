<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Parameter Jenis Eksternal</h6>

        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message') ?>
            <form action="" method="POST">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Parameter Baru</label>
                    <div class="col-sm-10">
                        <input type="text" name="jenis_eks" style="padding: 5px 330px;"
                            value="<?= set_value('jenis_eks'); ?>" id="jenis_eks" placeholder="Masukkan Data">
                        <?= form_error('jenis_eks', '<small class="text-danger pl-3">', '</small>'); ?>
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
                            <th>Jenis Eksternal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($eks as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['jenis_eks']; ?></td>
                            <td>
                                <a href="<?= base_url('Parameter/hapuseksternal/'). $us['id_jeniseks']; ?> "
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