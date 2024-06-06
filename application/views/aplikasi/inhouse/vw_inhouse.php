<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php if ($user1['role'] == 'Planning') {   ?>
            <div class="float-right">
                <a href="<?= base_url() ?>Inhouse/tambahinhouse" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Tambah Data Baru</span> </a>
            </div>
            <?php } ?>
            <h6 class="m-0 font-weight-bold text-primary">Aplikasi Inhouse</h6>
        </div>

        <div class="card-body">
            <?= $this->session->flashdata('message') ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th>No</th>
                            <th>Nomor Dokumen</th>
                            <th>Jenis Dokumen</th>
                            <th>Nama Aplikasi</th>
                            <th>Versi</th>
                            <th>Owner</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($inhouse as $us) : 
                        $nama = $us['nama_in']?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nomor_in']; ?></td>
                            <td><?= $us['jenis_dokumen']; ?></td>
                            <td><?= $us['nama_in']; ?></td>
                            <td><?= $us['versi_in']; ?></td>
                            <td><?= $us['owner_in']; ?></td>
                            <td>

                                <a href="<?= base_url('Inhouse/subinhouse/'). $nama ?>"
                                    class="badge badge-warning">Versi</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>
</div>