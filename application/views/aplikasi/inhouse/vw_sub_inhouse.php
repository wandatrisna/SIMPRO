<div class="float">
    &emsp; <a href="<?= base_url('Inhouse')?>" class="btn btn-secondary">Kembali</a>
</div>
<br>
<div class="col-md-12">
    <div class="card" style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Inhouse: <?= $inhouse[0]['nama_in']; ?></h6>
            </h6>
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

                                <a href="<?= base_url('Inhouse/detailinhouse/'). $us['id_in']; ?>"
                                    class="badge badge-secondary">Detail</a>
                                <?php if ($user1['role'] == 'Planning') {   ?>
                                <a href="<?= base_url('Inhouse/hapusinhouse/'). $us['id_in']; ?> "
                                    class="badge badge-danger"
                                    onclick="return confirm('Apakah yakin ingin menghapus data?');"
                                    class="ik ik-trash-2 text-red">Hapus</a>
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
    <br>
    <br>
</div>
</div>