<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Parameter Jenis Eksternal</h6>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="jenis_eks" class="col-sm-3 col-form-label">Parameter Baru</label>
                            <div class="col-sm-7">
                                <input type="text" name="jenis_eks" class="form-control" value="<?= set_value('jenis_eks'); ?>" id="jenis_eks" placeholder="Masukkan Data">
                                <?= form_error('jenis_eks', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" name="tambah" class="btn btn-success btn-block">Tambah</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="table-warning text-center">
                                    <th width="10%">No</th>
                                    <th>Jenis Eksternal</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($eks as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['jenis_eks']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Parameter/hapuseksternal/') . $us['id_jeniseks']; ?>" class="badge badge-danger" onclick="return confirm('Apakah kamu yakin untuk menghapus data ini?');">Hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
