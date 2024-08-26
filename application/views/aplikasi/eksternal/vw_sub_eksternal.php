<div class="float">
    &emsp; <a href="<?= base_url('Eksternal')?>" class="btn btn-secondary">Kembali</a>
</div>
<br>
<div class="col-md-12">
    <div class="card" style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Eksternal: Aplikasi <?= $eksternal[0]['nama_eks']; ?></h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message') ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th>No</th>
                            <th>Nomor Dokumen</th>
                            <th>Nama Aplikasi</th>
                            <th>Versi</th>
                            <th>Jenis Aplikasi Eksternal</th>
                            <th>Jenis Dokumen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($eksternal as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nomor_eks']; ?></td>
                            <td><?= $us['nama_eks']; ?></td>
                            <td><?= $us['versi_eks']; ?></td>
                            <td><?= $us['jenis_eks']; ?></td>
                            <td><?= $us['dokumen_eks']; ?></td>
                            <td>
                                <a href="<?= base_url('Eksternal/detaileksternal/'). $us['id_eks']; ?>" class="badge badge-secondary">Detail</a>
                                <?php if ($user1['role'] == 'Pinbag') { ?>
                                    <a href="#" class="badge badge-danger delete-btn" data-toggle="modal"
                                       data-target="#deleteModal<?= $us['id_eks']; ?>">Hapus</a>

                                    <!-- Modal Konfirmasi Hapus -->
                                    <div class="modal fade" id="deleteModal<?= $us['id_eks']; ?>" tabindex="-1"
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
                                                    Apakah kamu yakin ingin menghapus data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Batal</button>
                                                    <a href="<?= base_url('Eksternal/hapuseksternal/') . $us['id_eks']; ?>"
                                                        class="btn btn-danger">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal -->
                                <?php } ?>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>
</div>
