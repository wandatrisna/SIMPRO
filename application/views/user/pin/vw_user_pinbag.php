<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">PINBAG TABLE</h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message') ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th width="5px">Number</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>NIK</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($pinbag as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>"
                                    style="width : 50px;" class="img-thumbnail">
                            </td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['role']; ?></td>
                            <td><?= $us['NIK']; ?></td>
                            <td>
                                <?php if ($user1['role'] == 'Superuser') {   ?>
                                <a href="<?= base_url('User/hapuspin/'). $us['id_user']; ?> " class="badge badge-danger"
                                    onclick="return confirm('Are you sure you want to delete this data?');"
                                    class="ik ik-trash-2 text-red">Delete</a>
                                <?php } ?>
                                <a href="<?= base_url('User/editpin/'). $us['id_user']; ?>"
                                    class="badge badge-warning">Edit</a>
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