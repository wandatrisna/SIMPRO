<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">TABEL APLIKASI EKSTERNAL</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th>No</th>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>PMF</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($eksternal as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nomor_eks']; ?></td>
                            <td><?= $us['nama_eks']; ?></td>
                            <td><?= $us['pmf_eks']; ?></td>
                            <td><?= $us['jenisaplikasi']; ?></td>
                            <td>

                                <a href="<?= base_url('Aplikasi/subeksternal/'). $us['nama_eks']; ?>"
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