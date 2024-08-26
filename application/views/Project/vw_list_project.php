<div class="col-md-12">
    <div class="card" style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Proyek - Sedang Berlangsung</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th width="5px">No</th>
                            <th>Nama Aplikasi</th>
                            <th>Persentase</th>
                            <th>Status</th>
                            <th>Tahun</th>
                            <th>Catatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($project as $pro) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $pro['namaaplikasi']; ?></td>
                                <td>
                                    <?php if ($pro['progresbrd'] != null || $pro['bobotbrd'] != null ||
                                        $pro['bobotfsd']  != null || $pro['bobotsit']  != null ||
                                        $pro['bobotuat']  != null || $pro['bobotmigrasi']  != null) {
                                        $hasil = $pro['progresbrd'];

                                        if ($pro['progresbrd'] == 0) {
                                            $brd = 0;
                                        } else {
                                            $brd = $pro['progresbrd'] / $pro['bobotbrd'] * 100;
                                        }

                                        if ($pro['progresdev'] == 0) {
                                            $dev = 0;
                                        } else {
                                            $dev = $pro['progresdev'] / $pro['bobotdev'] * 100;
                                        }

                                        if ($pro['progresfsd'] == 0) {
                                            $fsd = 0;
                                        } else {
                                            $fsd = $pro['progresfsd'] / $pro['bobotfsd'] * 100;
                                        }

                                        if ($pro['progressit'] == 0) {
                                            $sit = 0;
                                        } else {
                                            $sit = $pro['progressit'] / $pro['bobotsit'] * 100;
                                        }

                                        if ($pro['progresuat'] == 0) {
                                            $uat = 0;
                                        } else {
                                            $uat = $pro['progresuat'] / $pro['bobotuat'] * 100;
                                        }

                                        if ($pro['progresmigrasi'] == 0) {
                                            $migrasi = 0;
                                        } else {
                                            $migrasi = $pro['progresmigrasi'] / $pro['bobotmigrasi'] * 100;
                                        }

                                        $total = $brd + $fsd + $sit + $uat + $dev + $migrasi;
                                        $persen = ($total / 6);
                                    ?>
                                        <?php if ($persen == 100) { ?>
                                            <a class="badge badge-success" style="pointer-events: none"><?php echo floor($persen); ?>%</a>
                                        <?php } else if ($persen > 0 && $persen <= 99) { ?>
                                            <a class="badge badge-warning" style="pointer-events: none"><?php echo floor($persen); ?>%</a>
                                        <?php } else { ?>
                                            <a class="badge badge-danger" style="pointer-events: none"><?php echo floor($persen); ?>%</a>
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                                <td><?= $pro['status']; ?></td>
                                <td><?= $pro['tahun']; ?></td>
                                <td><?= $pro['keterangan']; ?></td>
                                <td>
                                    <a href="<?= base_url('Project/detail/') . $pro['id_project']; ?>" class="badge badge-secondary">Detail</a>
                                    <?php if ($user1['role'] == 'Pinbag') { ?>
                                        <a href="#" class="badge badge-danger delete-btn" data-toggle="modal" data-target="#deleteModal<?= $pro['id_project']; ?>">Hapus</a>
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
</div>

<!-- Modal Konfirmasi Hapus -->
<?php foreach ($project as $pro) : ?>
    <div class="modal fade" id="deleteModal<?= $pro['id_project']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $pro['id_project']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel<?= $pro['id_project']; ?>">Konfirmasi Penghapusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah kamu yakin untuk menghapus proyek ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('Project/hapusproject/') . $pro['id_project']; ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Modal -->

<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
