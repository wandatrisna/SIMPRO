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
                                        <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#deleteModal<?= $us['id_jeniseks']; ?>">Hapus</a>
                                    </td>
                                </tr>

                                <!-- Modal Konfirmasi Hapus -->
                                <div class="modal fade" id="deleteModal<?= $us['id_jeniseks']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $us['id_jeniseks']; ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel<?= $us['id_jeniseks']; ?>">Konfirmasi Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah kamu yakin untuk menghapus data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <a href="<?= base_url('Parameter/hapuseksternal/') . $us['id_jeniseks']; ?>" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->

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

<script>
$(document).ready(function() {
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var url = button.data('url');
        var modal = $(this);
        modal.find('#deleteButton').attr('href', url);
    });
});
</script>
