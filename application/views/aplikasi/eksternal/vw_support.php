<div class="col-md-12">
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <?php if ($user1['role'] == 'Planning') {   ?>
        <div class="float-right">
            <a href="<?= base_url() ?>Eksternal/tambaheksternal" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-flag"></i>
                </span>
                <span class="text">Add New Application</span> </a>
        </div>
        <?php } ?>
        <h6 class="m-0 font-weight-bold text-primary">External Application</h6>
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

                        <a href="<?= base_url('Eksternal/subeksternal/'). $us['nama_eks'];?>"
                                    class="badge badge-info">Version</a>
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