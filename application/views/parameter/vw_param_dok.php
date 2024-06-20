<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Parameter Jenis Dokumen</h6>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="jenisdokumen" class="col-sm-3 col-form-label">Parameter Baru</label>
                            <div class="col-sm-7">
                                <input type="text" name="jenisdokumen" class="form-control" value="<?= set_value('jenisdokumen'); ?>" id="jenisdokumen" placeholder="Masukkan Data">
                                <?= form_error('jenisdokumen', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                    <th>Document</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($dokumen as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['jenisdokumen']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Parameter/hapusdok/') . $us['id_jenisdokumen']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
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
