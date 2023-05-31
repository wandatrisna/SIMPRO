<div class="float">
    &emsp; <a href="<?= base_url('Eksternal')?>" class="btn btn-info">&larr; Back</a>
</div>
<br>

<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">TABEL APLIKASI EKSTERNAL</h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message') ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th>Num.</th>
                            <th>Number</th>
                            <th>Application Name</th>
                            <th>Version</th>
                            <th>External Type</th>
                            <th>Document Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($eksternal as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nomor_eks']; ?></td>
                            <td><?= $us['nama_eks']; ?></td>
                            <td><?= $us['versi_eks']; ?></td>
                            <td><?= $us['jenis_eks']; ?></td>
                            <td><?= $us['dokumen_eks']; ?></td>
                            <td>

                                <a href="<?= base_url('Eksternal/detaileksternal/'). $us['id_eks']; ?>"
                                    class="badge badge-warning">Detail</a>
                                <?php if ($user1['role'] == 'Planning') {   ?>
                                <a href="<?= base_url('Eksternal/hapuseksternal/'). $us['id_eks']; ?> "
                                    class="badge badge-danger"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"
                                    class="ik ik-trash-2 text-red">Delete</a>
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
<br>
<br>
</div>