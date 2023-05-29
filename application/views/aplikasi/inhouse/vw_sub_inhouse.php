<div class="float">
    &emsp; <a href="<?= base_url('Inhouse')?>" class="btn btn-info">&larr; Back</a>
</div>
<br>
<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Inhouse Application</h6>
        </div>

        <div class="card-body">
        <?= $this->session->flashdata('message') ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                        <tr class="table-warning">
                            <th>Num.</th>
                            <th>Number</th>
                            <th>Document Type</th>
                            <th>Application Name</th>
                            <th>Version</th>
                            <th>Owner</th>
                            <th>Action</th>
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
                                class="badge badge-warning">Detail</a>
                                <?php if ($user1['role'] == 'Planning') {   ?>
                                <a href="<?= base_url('Inhouse/hapusinhouse/'). $us['id_in']; ?> "
                                class="badge badge-danger"
                                onclick="return confirm('Are you sure you want to delete this data?');"
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
<br>
    <br>
</div>