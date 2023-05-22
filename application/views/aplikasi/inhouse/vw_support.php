<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">TABEL APLIKASI INHOUSE</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th>No</th>
                            <th>Nomor</th>
                            <th>Jenis</th>
                            <th>Nama</th>

                            <th>Owner</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($inhouse as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nomor_in']; ?></td>
                            <td><?= $us['jenisaplikasi']; ?></td>
                            <td><?= $us['nama_in']; ?></td>

                            <td><?= $us['owner_in']; ?></td>
                            <td>

                                <a href="<?= base_url('Aplikasi/subinhouse/'). $us['nama_in'] ?>"
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
</div>
</div>