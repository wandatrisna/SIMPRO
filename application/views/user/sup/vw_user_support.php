<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pengguna Sub Divisi IT Support</h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message') ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th width="5px">No</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Sub Divisi</th>
                            <th>NIK</th>
                            <?php if ($user1['role'] == 'Superuser') { ?>
                            <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($support as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>"
                                    style="width: 50px;" class="img-thumbnail"></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['role']; ?></td>
                            <td><?= $us['NIK']; ?></td>
                            <?php if ($user1['role'] == 'Superuser') { ?>
                            <td>
                                <a href="<?= base_url('User/editsup/') . $us['id_user']; ?>"
                                    class="badge badge-primary">Perbarui</a>
                                <a href="#" class="badge badge-danger delete-btn" data-toggle="modal"
                                    data-target="#deleteModal<?= $us['id_user']; ?>"
                                    data-id="<?= $us['id_user']; ?>">Hapus</a>

                                <!-- Modal Konfirmasi Hapus -->
                                <div class="modal fade" id="deleteModal<?= $us['id_user']; ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah kamu yakin untuk menghapus data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Batal</button>
                                                <a href="<?= base_url('User/hapussup/') . $us['id_user']; ?>"
                                                    class="btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </td>
                            <?php } ?>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
